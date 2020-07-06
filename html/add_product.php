<?php

session_start();
error_reporting(0);
if(!isset($_SESSION['userlogin'])){
    header('location:login.php');
}

include("DBcon.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
     <link rel="manifest" href="../manifest.json">
      <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    
    <!-- css link -->
    <link rel="stylesheet" href="../css/add_product.css">
    <link rel="stylesheet" href="../fontawesome-free-5.12.1-web/css/all.css">
    <script src="../js/add_product.js"></script>
    <title>Add Product</title>

    <style>
        html,
        body {
            height: 100%;
            background-color: white;
        }

        body {
            display: table;
            width: 100%;
        }



        .page-row {
            display: table-row;
            height: 1px;
        }

        .page-row-expanded {
            height: 100%;
        }

        /* general styles for the template
 * Note that these are applied to div's inside the sticky footer div's
 */




        /* footer styling */
        .footer-content {

            background-color: #F7F7F9;
            position: relative;
            top: 100px;

        }

        .top {
            position: relative;
            top: 120px;

        }

        .container {
            background-color: white;
        }

        .added {
            color: green;
            display: none;
        }
    </style>

</head>

<body>
    <div class="page-row page-row-expanded">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top ">

                <a href="../FarmerDashboard/Farmer_dashboard.php" class="navbar-brand">
                    <img src="../image/LogoSample_ByTailorBrands (1).jpg" width="100px" height="100px" alt="Logo image" class="rounded-circle ">
                </a>

                <button type="button" class="navbar-toggler text-success" data-toggle="collapse" data-target="#nav">
                    <span class="navbar-toggler-icon "></span></button>

                <div class="collapse navbar-collapse justify-conten-between" id="nav">

                    <ul class="navbar-nav">
                        <li class="nav-item side"><a class="nav-link text-success text-uppercase  px-3" href="#feedback">FEEDBACK</a></li>


                        <!--  <li class="nav-item"><a class="nav-link text-success text-uppercase  px-3" href="html/add_product.php">add product</a> 
                </li>-->



                       
                        <li class="nav-item side"><a class="nav-link text-success text-uppercase side  px-3" href="html/about.php">About US</a></li>





                    </ul>







                </div>
            </nav>







            <div class="container">
                <form action="add_product.php" method="post" onsubmit="return validate()" class="form-group bg-light p-3 m-5 rounded" enctype="multipart/form-data">
                    <div class="row top">


                        <div class="col-lg-12">
                           <h3>Add your product</h3>
                           <hr>
                            <div class="row">
                               
                                <div class="col-lg-4 offset-lg-2">
                                    <div class="table-responsive-sm">

                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <label for="p_name">Product Name*</label><br>
                                                        <input type="text" placeholder="Enter Product Name" class="form-control mb-4" name="p_name" id="p_name"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <label for="p_location">Product location*</label><br>
                                                        <input type="text" placeholder=" Enter Product Location" class="form-control mb-4" name="p_location" id="p_location">
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <label for="desc">Description*</label><br>
                                                        <textarea name="Desc" placeholder="Description:" rows="5" id="desc" cols="40"></textarea>
                                                    </td>
                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="table-responsive-sm">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <label for="p_expiry">Bidding Expiry Date*</label><br>
                                                        <input type="date" placeholder="Bidding Expiry Date?" class="form-control mb-4" name="p_date" id="p_expiry"></td>
                                                    <td></td>
                                                </tr>

                                                <tr>

                                                    <td>
                                                        <label for="p_price">Starting Price*</label><br>
                                                        <input type="number" placeholder="Enter Product Intial price" class="form-control mb-4" name="p_price" id="p_price" style="width:270px">

                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <label for="p_weight">Product Weight*</label><br>
                                                        <input type="number" placeholder="Enter your Product weight in KG" class="form-control mb-4" name="p_weight" id="p_weight">
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>


                                                        <input type="file" name="file" id="file" required />
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td><label class="added" id="added">Product added!</label>
                                                        <input type="submit" class="btn btn-block btn-success mt-3" name="submit" value="submit">


                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>

                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 


      

    
    if(isset($_POST['submit'])){
        
        
        $p_name = $_POST['p_name'];
        $p_location = $_POST['p_location'];
        $description = $_POST['Desc'];
        $p_date = $_POST['p_date'];
        $p_price = $_POST['p_price'];
        $p_weight = $_POST['p_weight'];
        $email = $_SESSION['email'];
        
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "image/".$filename;
        
        move_uploaded_file($tempname, $folder);
       
        
        
        $query = "INSERT INTO product(name, location, description, date, price, weight, image, u_email) VALUES ('$p_name','$p_location','$description','$p_date','$p_price','$p_weight','$folder','$email')";
          $data = mysqli_query($con, $query);
        
        
        $quer = "select name, CURDATE() from usert where email = '$email'";
          $dat = mysqli_query($con, $quer);
        $row = mysqli_fetch_array($dat);
        
        $name = $row['name'];
        $date = $row['CURDATE()'];
        $type = 'new';
        $note = "$name, added a new product. on $date";
        $que = "INSERT INTO notification(note, type) VALUES ('$note', '$type')";
        mysqli_query($con, $que);
        
      
        ?>
                        <script>
                            document.getElementById("added").style.display = 'flex';
                        </script>
                        <?php
        
       
        
        
    }
        
        
        
        
        
        
        
        
        
    
    
    
    
    ?>







                    </div>
                </form>
            </div>







        </div>
    </div>



    <footer class="page-row">
        <!-- note how spacing is applied via the 'template' class INSIDE the page-row -->
        <div class="container-fluid footer-content template">

            <!-- 3 columns using bootstrap grid -->
            <div class="row">



                <div class="col-lg-6 offset-lg-3">

                    <h2 class="text-black text-center  font-weight-light text-capitalize">Farmer and trader 's Virtual Market</h2>
                    <p class="text-black text-center font-weight-light font-italic">Social media Links</p>
                    <div class="my-4 text-center ">
                        <a href="#"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-2x text-warning mx-3"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-2x text-danger mx-3"></i></a>
                    </div>

                    <p class=" text-center text-black py-2 m-0">&copy;Copy right 2020</p>
                </div>


            </div> <!-- end row -->

        </div> <!-- end container -->
    </footer>
<script src="../js/app.js"></script>


</body>




</html>
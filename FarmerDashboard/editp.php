<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['userlogin'])){
    header('location:../html/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FTVM Logo -->
    <link rel="icon" href="../image/LogoSample_ByTailorBrands (1).jpg" type="image/png" />
    <!-- bootstrap link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    
    
    <link rel="manifest" href="../manifest.json">
      <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    
    
    <!-- font awesome -->
    <script src="../fontawesome-free-5.12.1-web/js/all.js"></script>
    <!-- font awesome -->
    <script src="../fontawesome-free-5.12.1-web/js/all.js"></script>

    <title>editpro</title>


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
            top: 150px;

        }


        .container {


            position: relative;
            top: 120px;
            
            height: 100%;



        }

        .detail {

            position: absolute;
            top: 60px;

        }

        .content {

            top: 140px;
            width: 100%;
            overflow-x: hidden;
        }

   
    </style>

</head>

<body>

    <div class="page-row page-row-expanded">
     <div class="container-fluid">

    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top ">

        <a href="Farmer_dashboard.php" class="navbar-brand">
            <img src="../image/LogoSample_ByTailorBrands (1).jpg" width="100px" height="100px" alt="Logo image" class="rounded-circle ">
        </a>

        <button type="button" class="navbar-toggler text-success" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon "></span></button>

        <div class="collapse navbar-collapse justify-conten-between" id="nav">

            <ul class="navbar-nav">
                <li class="nav-item side"><a class="nav-link text-success text-uppercase  px-3" href="#feedback">FEEDBACK</a></li>


                <!--  <li class="nav-item"><a class="nav-link text-success text-uppercase  px-3" href="html/add_product.php">add product</a> 
                </li>-->



                <li class="nav-item side"><a class="nav-link text-success text-uppercase  px-3" href="html/contact.php">Contact</a></li>
                <li class="nav-item side"><a class="nav-link text-success text-uppercase side  px-3" href="html/about.php">About US</a></li>





            </ul>







        </div>
    </nav>







    <div class="container content">
        <div class="row">
            <div class="col-lg-4 offset-lg-2 col-md-4 col-sm-4">


                <?php
error_reporting(0);
session_start();

    include("../html/DBcon.php");
   
    $pid = $_SESSION['ppid'];
    
    $get_pro = " select * from product where p_id = '$pid' ";
                    
    $run_pro = mysqli_query($con, $get_pro);
                            
 
                    
    
    
    while($row_pro = mysqli_fetch_array($run_pro)){
                      ?>


                <div class="card">
                    <img src="../html/<?php echo $row_pro["image"]; ?>" height="220px" class="card-img-top" alt="">
                    <div class="card-body">
                        <div class="card-title mb-5">
                            <h4 class=" text-center text-muted"><?php echo $row_pro["name"]; ?></h4>
                        </div>
                        <div class="card-sub-title">

                            <div class="mb-3">
                                <p class="d-inline mr-5 text-muted"><i class="fas fa-money-bill-alt mr-2 text-info"></i><?php echo $row_pro["price"]; ?> Af</p>
                                <p class="d-inline mb-3 ml-4 text-muted"><i class="fas fa-weight mr-2 text-primary"></i><?php echo $row_pro["weight"]; ?>
                                    Kg</p>

                            </div>

                            <div class="mb-4">
                                <p class="d-inline text-muted"> <i class="fa fa-map-marker-alt mr-2 text-warning"></i><?php echo $row_pro["location"]; ?></p>
                                <p class="d-inline float-right text-muted"> <i class="far fa-calendar-alt text-danger"></i><?php echo $row_pro["date"]; ?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-sm-4">
                <p>Insert the current values for remaining parts</p>
                <div class="card detail">
                    <form action="editp.php" method="get" enctype="multipart/form-data">

                        <input type="number" placeholder="Change Price" class="form-control" id="pr" name="price"><br>
                        <input type="number" placeholder="Change Weight" class="form-control" id="we" name="weight"><br>
                        <input type="text" placeholder="Change Location" class="form-control" id="lo" name="location"><br>
                        <input type="date" placeholder="Change Date" class="form-control" id="dt" name="Date"><br>

                        <input type="submit" value="Update" class="form-control btn btn-success" id="pr" name="submit" style="width:320px">
                    </form>
                </div>
            </div>

        </div>

    </div>




    <?php
                                }

?>



    <?php
    
    if(isset($_GET['submit'])) {
        
        include("../html/DBcon.php");
   
        $pid = $_SESSION['ppid'];
        $price = $_GET['price'];
        $weight = $_GET['weight'];
        $location = $_GET['location'];
        $date = $_GET['Date'];
        
        $filename = $_FILES["p_image"]["name"];
        $tempname = $_FILES["p_image"]["tmp_name"];
        $folder = "../html/image/".$filename;
        
        move_uploaded_file($tempname, $folder);
        
        $query = " UPDATE product SET price = '$price', weight = '$weight', location = '$location', date = '$date'  where p_id = '$pid' ; ";
        $data = mysqli_query($con, $query);
        
        
        
        
        
    }
    
    
    ?>





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
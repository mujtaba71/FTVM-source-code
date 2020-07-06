<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['userlogin'])){
    header('location:../../html/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FTVM Logo -->
    <link rel="icon" href="../../image/LogoSample_ByTailorBrands (1).jpg" type="image/png">
    
    
    <link rel="manifest" href="../../manifest.json">
      <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">

    <!-- bootstrap link -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <!-- font awesome -->
    <script src="../../fontawesome-free-5.12.1-web/js/all.js"></script>
    <title>User Profile</title>

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
        .content {

            position: relative;
            top: 140px;
        }



        .card {

            height: 400px;

            border: none;

        }

        .top {
            position: relative;
            top: 170px;
            background-color: #efefef;
            height: 550px;

        }

        .top1 {
            position: relative;
            top: 170px;
            background-color: #efefef;
            height: 250px;
            margin-left: 10px;

        }

        font {
            position: relative;
            left: 140px;
            top: 100px;
        }
        
     
    </style>
</head>

<body>
  <div class="page-row page-row-expanded">
     <div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top ">

        <a href="../Farmer_dashboard.php" class="navbar-brand">
            <img src="../../image/LogoSample_ByTailorBrands (1).jpg" width="100px" height="100px" alt="Logo image" class="rounded-circle ">
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


    <div class="container-fluid content">

        <div class="row">
            <div class="col-lg-2">

                <div class="table-responsive-sm">
                    <table class="table table-borderless">
                        <thead>

                        </thead>
                        <tbody>
                            <tr>
                                <th scope="col"><img src="<?php echo$_SESSION['profileimg']; ?>" class="rounded-circle" style="width:150px; height:150px;"></th>
                            </tr>
                            <tr class="h">
                                <td>
                                    Hello,<small>
                                        <?php
                                     $name = $_SESSION['uname'];
                                     $lname = $_SESSION['l_uname'];
                    
                                     echo $name.' '.$lname;
                                    
                                    ?>
                                    </small>



                                </td>
                            </tr>
                            <tr class="h">
                                <th scope="col"><a href="userprofile.php" style="color:black;">Manage Profile</a></th>

                            </tr>
                            <tr class="h">
                                <td><a href="myprofile.php">My Profile</a></td>
                            </tr>
                            <tr class="h">
                                <td><a href="addressbook.php">Address Book</a></td>
                            </tr>
                            <tr class="h">
                                <th scope="col">Selling</th>
                            </tr>
                            <tr class="h">
                                <td><a href="../SellProduct.php">Ready to Sell</a></td>
                            </tr>
                            <tr class="h">
                                <td><a href="soldp.php">Sold</a></td>
                            </tr>
                            <tr class="h">
                                <th scope="col">Buying</th>
                            </tr>
                            <tr class="h">
                                <td><a href="../biddingList.php">Bids</a></td>
                            </tr>
                            <tr class="h">
                                <td><a href="owe
                                ">Owned Bid</a></td>
                            </tr>



                        </tbody>
                    </table>



                </div>
            </div>
            <font size="5">Address Book</font>

            <div class="col-lg-8 top">
                       <?php
            
               include('../../html/DBcon.php');
        $email = $_SESSION['email'];
    
      $res = mysqli_query($con,"select * from usert where email = '$email'");
                                
                
                  
                while($row = mysqli_fetch_array($res)){
            
            ?>
                <div class="container-fluid">
                   <form method="get">
                        <div class="row">
                        <div class="col-lg-6">
                           
                            <div class="table-responsive-sm">
                                <table class="table table-borderless">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="usr">Full Name:</label>
                                                    <input type="text" class="form-control" value="<?php
                                     $name = $_SESSION['uname'];
                                     $lname = $_SESSION['l_uname'];
                    
                                     echo $name.' '.$lname;
                                    
                                    ?>" style="width:250px;">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="usr">Phone Number:</label>
                                                    <input type="tel" name="phone" class="form-control" value="<?php echo $row['phone_no'] ?>" style="width:250px;" required>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                

                            </div>
                            
                

                        </div>
                        <div class="col-lg-6">
                            <div class="table-responsive-sm">
                                <table class="table table-borderless">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="usr">Province:</label>
                                                    <input type="text" name="pro" class="form-control" value="<?php echo $row['province'] ?>" style="width:250px;" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="usr">City:</label>
                                                    <input type="text" name="city" class="form-control" value="<?php echo $row['city'] ?>"  style="width:250px;" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="usr">Area:</label>
                                                    <input type="text" name="area" class="form-control" value="<?php echo $row['area'] ?>"  style="width:250px;" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="usr">Address:</label>
                                                    <input type="text" name="add" class="form-control" value="<?php echo $row['address'] ?>"  style="width:250px;" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><button name="sb" class="btn btn-info">Save Changes</button></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            

                        </div>
                                    <?php
                }
                ?>
                    </div>
                    </form>
                </div>



            </div>


        </div>
    </div>
    <?php
    include('../../html/DBcon.php');
    
    if(isset($_GET['sb'])) {
        $condition = $_SESSION['email'];
        $phone = $_GET['phone'];
        $prov = $_GET['pro'];
        $city = $_GET['city'];
        $area = $_GET['area'];
        $address = $_GET['add'];
        
        
        $query = " UPDATE usert SET phone_no = '$phone', province = '$prov', city = '$city', area = '$area', address = '$address'
        where email = '$condition'  ";
        mysqli_query($con, $query);
        
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
<script src="../../js/app.js"></script>

</body>




</html>
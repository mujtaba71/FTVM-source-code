<?php

session_start();
error_reporting(0);
include("DBcon.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- css link -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fontawesome-free-5.12.1-web/css/all.css">
    <script src="../js/login.js"></script>
    <title>Log in</title>

    <style>
        html,
        body {
            height: 100%;
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

        .top {
            position: relative;
            top: 130px;
        }
    </style>

</head>

<body>


    <div class="page-row page-row-expanded">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top ">

                <a href="../index.php" class="navbar-brand">
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


            <div class="container">
                <div class="row top">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 offset-lg-4">
                                <div class="table-responsive-sm">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>


                                            </tr>
                                        </thead>
                                        
                                            <tbody>
                                                <form action="login.php" method="get" enctype="multipart/form-data">

                                                <tr>

                                                    <td>
                                                        <label for="u_mail">Email Address*</label><br>
                                                        <input type="email" name="email" id="u_mail" placeholder=" Enter Email" class="form-control"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <label for="u_pass">Password*</label><br>
                                                        <input type="password" name="password" id="u_pass" placeholder="Enter Password" class="form-control">
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <p class="mt-3 text-center"><small>By signing up you accept our <a href="">terms of use</a></small></p><br>
                                                        
                                                        <button type="submit" name="submit" class="btn btn-block btn-primary" value="Sign in">Sign In</button>
                                                    </td>
                                                </tr>
                                                  <tr>
                                                    <td><p class="text-center">Forgot <a href="forgotpass.php">password</a> ?</p></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="text-center">Don't have an account? <a href="signup.php">Signup-here</a> </p>
                                                        
                                                    </td>
                                                    
                                                </tr>
                                              
                                                
                                                </form>


                                            </tbody>
                                        


                                        <?php
include("DBcon.php");
if(isset($_GET['submit'])) {
$email = $_GET['email'];
$pass = $_GET['password'];

$s = "select * from usert where email = '$email' && password = '$pass'";

$result = mysqli_query($con, $s);
$row = mysqli_fetch_array($result);

$num = mysqli_num_rows($result);
   

if($num == 1){
    
    
    $_SESSION['uname'] = $row['name']; 
    $_SESSION['l_uname'] = $row['l_name']; 
    $_SESSION['email'] = $row['email'];
    $_SESSION['userlogin'] = $row['email'];
    echo "<script type='text/javascript'> document.location = '../FarmerDashboard/Farmer_dashboard.php'; </script>";

}else{
    echo '<span style="color:red;text-align:center;">Incorrect UserName or Password!</span>';
    
    
    
    
    
    
}



}


?>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
<script src="/js/app.js"></script>

</body>

</html>
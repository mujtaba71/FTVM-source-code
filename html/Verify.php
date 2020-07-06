<?php

session_start();
include("DBcon.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- css link -->
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="../fontawesome-free-5.12.1-web/css/all.css">
    
    
     <link rel="manifest" href="../manifest.json">
      <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    
    
    <script src="../js/signup.js"></script>
    <title>Verify Account</title>

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
            top: 100px;

        }

        .top {
            position: relative;
            top: 180px;
            align-content: center;
            align-items: center;
            text-align: center;
        }
        
        .r{
            position: relative;
            left: 110px;
        }

        #errorMsg {
            color: red;
            font-style: italic;
            display: none;

        }
        
        .err {
            position: relative;
            color: red;
            
            display: none;
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
            
            <div class="row top">
                <div class="col-lg-4 offset-lg-4">
                   <h4>Email Verification</h4>
                    <hr>
                    <p>We have sent a verification code to <span style="color:blue"><?php echo $_SESSION['vemail']; ?></span></p>
                    <br>
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="text" id="vkey" placeholder="Insert code here" name="vkey"  class="form-control r" style="width:200px;" required>
                       
                        <br>
                        
                        
                        <button type="submit" name="submit" class="btn btn-success">Verify</button>
                    </form>
                             <?php
            include('DBcon.php');
            
            if(isset($_POST['submit'])) {
                
                $vkey = $_POST['vkey'];
                $data = " select vkey from usert where vkey = '$vkey'";
                $result = mysqli_query($con, $data);
               
                
                $num = mysqli_num_rows($result);
                
               
                if($num == 1) {
                    $em = $_SESSION['vemail'];
                    $ud = "update usert set status = 'Active' where email = '$em' ";
                    mysqli_query($con, $ud);
                    echo "<script type='text/javascript'> document.location = 'login.php'; </script>"; 
                }
                else {
                   echo '<span style="color:red;text-align:center;">Incorrect verification code!</span>';
                }
                
               
            }
            
            
            
            ?>
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



<script src="../js/app.js"></script>

</body>

</html>
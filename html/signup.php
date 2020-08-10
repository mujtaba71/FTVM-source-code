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
    
    
     <link rel="manifest" href="../manifest.json">
      <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    
    
    <link rel="stylesheet" href="../fontawesome-free-5.12.1-web/css/all.css">
    <script src="../js/signup.js"></script>
    <title>Sign Up</title>

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
            top: 130px;
        }

        #errorMsg {
            color: red;
            font-style: italic;
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

            <form action="" method="post" onsubmit="return validate()" class="form-group">
                <div class="container">
                    <div class="row top">
                        <div class="col-lg-12">
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
                                                        <label for="s_name">First Name*</label><br>
                                                        <input type="text" name="name" id="s_name" placeholder="Name" class="form-control mt-3"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <label for="s_lastname">Last Name*</label><br>
                                                        <input type="text" name="l_name" id="s_lastname" placeholder="LastName" class="form-control mt-3">
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <label for="s_email">Email Address*</label><br>
                                                        <input type="Email" name="email" id="s_email" placeholder="Email Address" class="form-control mt-3">
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
                                                        <label for="s_pass">Create Password*</label><br>
                                                        <input type="password" name="password" id="s_pass" placeholder="Create Password" class="form-control mt-3"></td>
                                                    <td></td>
                                                </tr>
                                                <tr> 

                                                    <td>
                                                        <label for="s_lastname">Confirm Password*</label><br>
                                                        <input type="password" id="s_c_pass" placeholder="Confirm Password" class="form-control mt-3">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="submit" name="submit" class="btn btn-block btn-warning mt-3" value="Create Account">
                                                        <br>
                                                        <label id="errorMsg" class="errorMsg">User Exist</label>
                                                        <br>
                                                        <p class="mt-3">Have an Account? <a href="login.php">Log In</a></p>
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
                    </div>
                </div>
            </form>
            <?php
            
            

$name = $_POST['name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from usert where email = '$email'";
if($_POST['submit']){
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
            


if($num >= 1){
         ?>
            <script>
                document.getElementById("errorMsg").style.display = 'flex';
            </script>
            <?php
             }
    else{
        
        $vkey = rand();
    
    
    $reg = " insert into usert(name, l_name, email,password, vkey) values ('$name', '$l_name', '$email', '$password', '$vkey')";
    $data = mysqli_query($con, $reg);
    $_SESSION['vemail'] = $email;
    
    
       /* echo "<script type='text/javascript'> document.location = 'login.php'; </script>"; */
        
        
        if($data)
                                        {
                                           
                                            require 'phpmailer/PHPMailerAutoload.php';
                                            $mail = new PHPMailer;
                                            $mail->isSMTP();

                                            $mail->Host='smtp.gmail.com';
                                            $mail->Port=587;
                                            $mail->SMTPAuth=true;
                                            $mail->SMTPSecure='tls';

                                            $mail->Username='ftvm.market@gmail.com';
                                            $mail->Password='ftvm@2232';

                                            $mail->setFrom('ftvm.market@gmail.com', 'Farmer & Trader virtual market');
                                            $mail->addAddress($email);
                                           

                                            $mail->isHTML(true);
                                            $mail->Subject='Verification Code';
                                            $mail->Body='<h2>Thank You For Registration in FTVM</h2><br><h5>Please activate your account!</h5><p>Here is your verification code!<p>'.  $vkey .'<br><br><h3>Best Regards,</h3>';

                                            if(!$mail->send()){
                                                echo "error";
                                            }
                                            else{
                                                echo "<script type='text/javascript'> document.location = 'verify.php'; </script>"; 
                                            }
                                           
                                          
                                        }
 
                                    }
    
    
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
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
            top: 100px;

        }

        .top {
            position: relative;
            top: 110px;
        }
    </style>

</head>

<body>



        

            <div class="container">
                <div class="row top">
                    <div class="col-lg-12">
                       <h2>Admin Login</h2>
                       <hr>
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
                                                       <br>
                                                        
                                                        <button type="submit" name="submit" class="btn btn-block btn-warning" value="Sign in">Sign In</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="text-center">Don't have an account? <a href="signup.php">Signup-here</a> </p>
                                                    </td>
                                                </tr>
                                                
                                                </form>


                                            </tbody>
                                        


                                        <?php
include("../html/DBcon.php");
if(isset($_GET['submit'])) {
$email = $_GET['email'];
$pass = $_GET['password'];

$s = "select * from admin where email = '$email' && password = '$pass'";

$result = mysqli_query($con, $s);
    
$row = mysqli_fetch_array($result);

$num = mysqli_num_rows($result);
   

if($num == 1){
    
    
    $_SESSION['login'] = $row['email'];
   
    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

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




</body>

</html>
<?php

session_start();
error_reporting(0);
include("../html/DBcon.php");

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






        .top {
            position: relative;
            top: 100px;
        }

        #errorMsg {
            color: red;
            font-style: italic;
            display: none;

        }
    </style>

</head>

<body>






    <form action="" method="post" onsubmit="return validate()" class="form-group">
        <div class="container">

            <div class="row top">
                <div class="col-lg-12">
                    <h2>Admin Signup</h2>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
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
                                                <label for="s_name">Name*</label><br>
                                                <input type="text" name="name" id="s_name" placeholder="Name" class="form-control mt-3"></td>
                                            <td>
                                                <label for="s_pass">Create Password*</label><br>
                                                <input type="password" name="password" id="s_pass" placeholder="Create Password" class="form-control mt-3">
                                            </td>
                                        </tr>

                                        <tr>

                                            <td>
                                                <label for="s_email">Email Address*</label><br>
                                                <input type="Email" name="email" id="s_email" placeholder="Email Address" class="form-control mt-3">
                                            </td>
                                            <td>
                                                 <label for="s_lastname">Confirm Password*</label><br>
                                                <input type="password" id="s_c_pass" placeholder="Confirm Password" class="form-control mt-3">
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                </td>
                                            <td></td>
                                        </tr>
                                        <tr>

                                            <td>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" name="submit" class="btn btn-block btn-warning mt-3" value="Create Account">
                                                <br>
                                                <label id="errorMsg" class="errorMsg">User Exist</label>
                                                <br>
                                                
                                            </td>
                                            <td>
                                                <p class="mt-3">Have an Account? <a href="login.php">Log In</a></p>
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

$email = $_POST['email'];
$password = $_POST['password'];
    


$s = "select * from admin where email = '$email'";
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
    
    $reg = " insert into admin(name, email, password) values ('$name', '$email', '$password')";
    mysqli_query($con, $reg);
    
    
        echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
    
    
}


            }


?>






</body>

</html>
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

        font {
            position: relative;
            left: 150px;
            top: 20px;
        }

        .cont {
            background-color: #ededed;
            position: relative;

            top: 100px;
            height: 500px;
            left: 10px;
        }

        .tab {
            position: relative;
            top: 10px;
            left: 10px;
        }

        .st {
            width: 250px;
            position: relative;
            top: 200px;
        }
        
        .cperr {
            color: red;
            display: none;
        }
          .rtp {
            color: red;
            display: none;
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
                                <th scope="col"><a href="userprofile.php" style="color:black;">Manage Profile</a> </th>

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
                                <td><a href="#">Ready to Sell</a></td>
                            </tr>
                            <tr class="h">
                                <td><a href="soldp.php">Sold</a></td>
                            </tr>
                            <tr class="h">
                                <th scope="col">Buying</th>
                            </tr>
                            <tr class="h">
                                <td><a href="#">Bids</a></td>
                            </tr>
                            <tr class="h">
                                <td><a href="ownedbid.php">Owned Bid</a></td>
                            </tr>



                        </tbody>
                    </table>


                </div>
            </div>

            <font size="5">Change Password</font>


            <div class="col-lg-8 cont">
                <div class="table-responsive-sm tab">
                    <table class="table">
                        <thead>

                        </thead>
                        <tbody>
                        </tbody>
                        <form action="" method="get" onsubmit="return validate();" enctype="multipart/form-data">
                            <tr>
                                <td>
                                    <div class="form-group">
                                <label for="usr">Current Password:</label>
                                <input type="password" class="form-control" name="curpass" id="curpass" style="width:250px;">
                                <label class="cperr" id="cperr">Incorrect Current Password!</label>
                            </div>
                              
                                </td>
                            </tr>
                              <tr>
                                <td>
                                    <div class="form-group">
                                <label for="usr">New Password:</label>
                                <input type="password" class="form-control" name="newpass" id="newpass" style="width:250px;">
                            </div>
                                </td>
                            </tr>
                               <tr>
                                <td>
                                    <div class="form-group">
                                <label for="usr">Retry Password:</label>
                                <input type="password" class="form-control" id="retrypass" style="width:250px;">
                                <label class="rtp" id="rtp">Password not match!</label>
                            </div>
                                </td>
                            </tr>
                             <tr>
                            <td><button class="btn btn-info" name="savech">Save Changes</button></td>
                        </tr>
                        </form>
                    </table>

                </div>



            </div>
        </div> 
    </div>
    
    <?php 
       include('../../html/DBcon.php');
    
    if(isset($_GET['savech'])) {  
      $email = $_SESSION['email'];
      $oldpass = $_GET['curpass'];
      
    
      $res = mysqli_query($con,"select * from usert where email = '$email' and password = '$oldpass'");
      $num = mysqli_num_rows($res); 
      
      if($num !== 1) {
          
          ?>
          <script>
      document.getElementById("cperr").style.display = 'flex';
    </script>
          <?php
      }
    else {
    $password = $_GET['newpass']; 
    $reg = " update usert set password = '$password' where email = '$email'";
    mysqli_query($con, $reg);
        
        
        
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
    
    
        <script>
    function validate() {
        var pass = document.getElementById("newpass");
        var repass = document.getElementById("retrypass");
        
        if (newpass.value !== retrypass.value) {

        document.getElementById("rtp").style.display = 'flex';
        return false;
    }

    else {
        return true;
    }
        
    }
    
    </script>

<script src="../../js/app.js"></script>

</body>




</html>
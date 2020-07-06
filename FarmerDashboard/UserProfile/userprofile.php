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
            height: 300px;

        }

        .top1 {
            position: relative;
            top: 170px;
            background-color: #efefef;
            height: 300px;
            

        }

        font {
            position: relative;
            left: 110px;
            top: 20px;
        }

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
    </style>

    <style>
        /*for notification dropdown */

        /* Dropdown Button */
        .dropbtn {
            background-color: white;
            color: blue;


            border: none;
            cursor: pointer;
            width: 70px;




        }

        /* Dropdown button on hover & focus */
      
        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #c3a8a8;
            min-width: 160px;
            height: 150px;
            overflow-y: scroll;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }


        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }



        .show {
            display: block;
        }
    </style>
    <style>
        .sidebar-footer {
            position: relative;
            width: 100%;
            top: 0;
            display: flex;
        }

        .sidebar-footer>a {
            flex-grow: 1;
            text-align: center;
            height: 30px;
            line-height: 30px;
            position: relative;
        }

        .sidebar-footer>a .notification {
            position: absolute;
            top: 0;
        }

        .badge-pill {

            height: 18x;
            width: 18px;
            position: relative;
            right: 8px;
            bottom: 7px;


        }

        .fa-cog {
            position: absolute;
            left: 10px;
            width: 20px;
                
        }
        .clear {
            height: 35px;
            text-align: right;
        }
    </style>
</head>

<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

<body>
    <div class="page-row page-row-expanded">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top ">

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



                        
                        <li class="nav-item side"><a class="nav-link text-success text-uppercase side  px-3" href="html/about.php">About US</a></li>





                    </ul>







                </div>
            </nav>



            <div class="container-fluid content">

                <div class="row">
                    <div class="col-lg-12">
                       <div class="row">
                        <div class="col-lg-2 col-md-1 col-sm-2">

                            <?php 
                                            include('../../html/DBcon.php');
                                             $email = $_SESSION['email'];
    
                                              $r = mysqli_query($con,"select image from usert where email = '$email'");
                                               while($ro = mysqli_fetch_array($r)){
                                                  $_SESSION['profileimg'] = $ro['image'];
                                              ?>
                            <div class="table-responsive-sm">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>

                                        </tr>

                                    </thead>

                                    <tbody>
                                        <?php
    include('../html/DBcon.php');
                 $ema = $_SESSION['email'];                                   
                
                $d = "select count(note),email from notification where email = '$ema' and type in (SELECT type FROM notification WHERE type = 'bid' or type = 'invnot' or type = 'sold' or type = 'win')";
                    $re = mysqli_query($con,$d);
                   while($rw = mysqli_fetch_array($re)) {
                    $_SESSION['cout'] = $rw['count(note)'];
                   }
    
    ?>

                                        <tr>





                                            <td>




                                                <img src="<?php echo $ro['image']?>" class="rounded-circle" style="width:150px; height:150px;">
                                                <hr>

                                                <div class="sidebar-footer">
                                                    <div class="row">
                                                        <div class="dropdown">

                                                            <button onclick="myFunction()" class="dropbtn">
                                                                <i class="fa fa-bell"></i>
                                                                <span class="badge badge-pill badge-warning notification"><?php echo $_SESSION['cout']; ?></span>
                                                            </button>

                                                            <div id="myDropdown" class="dropdown-content">
                                                                <?php
                
                include('../../html/DBcon.php');
                                                   
                $ema = $_SESSION['email'];
                
                $ndata = "select id, note, CURDATE(), type, email from notification where email = '$ema' 
                          and type in (SELECT type FROM notification WHERE type = 'bid' or type = 'invnot' or type = 'sold' or type = 'win')      ";
                    $nresult = mysqli_query($con,$ndata);
                while($nrow = mysqli_fetch_array($nresult)) {
                    ?>
                                                                <a href="#"><?php echo $nrow['note'];  ?></a><br>
                                                                 <a href="userprofile.php?ncid=<?php echo $nrow['id']; ?>" class="clear"><small>Clear</small></a>
                                                                  
                                                                <?php
                }
                                                   include('../../html/DBcon.php');
                                                   if(isset($_GET['ncid'])) {
                                                       
                                                       $ncd = "delete from notification where id = '$_GET[ncid]'";
                                                       mysqli_query($con, $ncd);
                                                       echo "<script type='text/javascript'> document.location = 'userprofile.php'; </script>";
                                                       
                                                   }
                                                   ?>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    <a href="editprofile.php">
                                                        <i class="fa fa-cog"></i>

                                                    </a>
                                                </div>



                                            </td>


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
                                            <td><a href="ownedbid.php">Owned Bid</a></td>
                                        </tr>



                                    </tbody>
                                </table>

                            </div>
                            <?php
                                               }
                        ?>
                        </div>

                        <div class="col-lg-3 top">
                            <div class="table-responsive-sm">
                                <table class="table table-borderless ">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Personal Profile <small>|</small><a href="editprofile.php"> EDIT</a> </td>

                                        </tr>
                                        <tr>
                                            <td><?php
                                     $name = $_SESSION['uname'];
                                     $lname = $_SESSION['l_uname'];
                    
                                     echo $name.' '.$lname;
                                    
                                    ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $_SESSION['email']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                         
                        <div class="col-lg-6 top1">

                            <?php 
    include('../../html/DBcon.php');
        $email = $_SESSION['email'];
    
      $res = mysqli_query($con,"select * from usert where email = '$email'");
                                
                
                  
                while($row = mysqli_fetch_array($res)){
                
                
                
    
    ?>


              <div class="container-fluid">
                  
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="table-responsive-sm">
                                        <table class="table table-borderless border-right">
                                            <thead>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Address Book <small>|</small> <a href="address.php">EDIT</a> </td>

                                                </tr>
                                                <tr>
                                                    <td><small>Default Shipping Address</small></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <?php
                                echo $_SESSION['uname']. " " . $_SESSION['l_uname'];
                                
                                ?>
                                                        </strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $row['address']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $row['province']. "-" .$row['city']. "-" .$row['area'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $row['phone_no']?></td>
                                                </tr>
                                            </tbody>
                                        </table>



                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="table-responsive-sm">
                                        <table class="table table-borderless">
                                            <thead>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><small>Default Billing Address</small></td>
                                                </tr>
                                                <tr>
                                                    <td><strong> <?php
                                echo $_SESSION['uname']. " " . $_SESSION['l_uname'];
                                
                                ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $row['address']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $row['province']. "-" .$row['city']. "-" .$row['area'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $row['phone_no']?></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <?php
                }
            ?>
                  
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

<script src="../../js/app.js"></script>
</body>




</html>
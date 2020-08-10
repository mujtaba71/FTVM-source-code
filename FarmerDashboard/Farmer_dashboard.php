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
    <link rel="icon" href="../image/LogoSample_ByTailorBrands (1).jpg" type="image/png">

    <!-- bootstrap link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link href="../chatbot/style.css" rel="stylesheet">

    <link rel="manifest" href="../manifest.json">
    <!-- IOS Support -->
    <link rel="apple-touch-icon" href="image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">

    <!-- font awesome -->
    <script src="../fontawesome-free-5.12.1-web/js/all.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title>Farmer 's Dashboard</title>
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
            height: 0px;

        }
        

        .bg-model {

            width: 100%;
            height: 100%;

            background-color: black;
            opacity: 0.9;
            position: absolute;
            top: 60px;
            right: 5px;
            left: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            display: none;

        }


        .model-content {


            background-color: white;
            padding-top: 30px;
            border-radius: 25px;
            position: relative;
        }

        .pd {
            text-align: center;
            align-content: center;
            padding-left: 10px;
        }

        .close {
            position: absolute;
            top: 7px;
            right: 7px;
            font-size: 35px;
            color: red;


        }



        .dropdown:hover>.dropdown-menu {
            display: block;
            top: 30px;

        }

        .dropdown>.dropdown-toggle:active {
            /*Without this, clicking will make it sticky*/
            pointer-events: none;


        }

        .rtbtns {
            position: absolute;
            right: 30px;
        }

        .sbtn {

            position: absolute;
            left: 550px;


        }






        .chatbot {

            width: 100%;
            height: 100%;


            position: absolute;
            top: 130px;
            right: 0;


            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            display: none;


        }

        .chatbot-content {

            width: 300px;
            height: 400px;
            background-color: blanchedalmond;
            padding-top: 30px;

            border-radius: 25px;
            position: relative;


        }

        .chatbot-icon {
            width: 10px;
            height: 10px;
            border-radius: 50px;


            position: absolute;
            bottom: 60px;
            right: 60px;



            justify-content: center;
            align-items: center;
            position: fixed;
            display: flex;



        }

        .ccloose {
            position: absolute;
            top: 7px;
            right: 7px;
            font-size: 35px;
            color: red;


        }
        
            @media only screen and (max-width: 1023px) {
            .simplepic {
                position: relative;
                top: 100px;
            }
                 .tit {
                position: relative;
                top: 90px;

            }
                   .contall {
                position: relative;
                top: 55px; 

            }
            
               .footer-content {
                position: relative;
                height: 50px;

            }
        
                 .sbtn {
                position: relative;
                left: 0px;
                
                

            }
                .rtbtns {
                     position: relative;
                left: 0px;
                }
            nav {
                position: relative;
              
            }
        }
    </style>
</head>

<body>
    <!-- navbar-->

    <div class="page-row page-row-expanded">
        <div class="container-fluid">

            <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top ">

                <a href="Farmer_dashboard.php" class="navbar-brand">
                    <img src="../image/LogoSample_ByTailorBrands (1).jpg" width="100px" height="100px" alt="Logo image" class="rounded-circle ">
                </a>

                <button type="button" class="navbar-toggler text-warning" data-toggle="collapse" data-target="#nav">
                    <span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse justify-conten-between" id="nav">

                    <ul class="navbar-nav">







                    </ul>




                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle" style="color:green; background-color: #f8f8f8;" data-toggle="dropdown">
                            AS A SELLER
                        </button>
                        <div class="dropdown-menu">

                            <li class="nav-item"><a class="nav-link text-success  px-3 mr-md-2" href="../html/add_product.php">Add product</a></li>
                            <li class="nav-item"> <a href="manageProduct.php" class="nav-link text-success">Manage product</a></li>
                            <li class="nav-item"> <a href="SellProduct.php" class="nav-link text-success">Sell Product</a></li>
                        </div>
                    </div>
                    <?php include('../html/DBcon.php'); $res = mysqli_query($con," SELECT COUNT(ID) from shopping_cart ");?>
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle" style="color:green; background-color: #f8f8f8;" data-toggle="dropdown">
                            AS A BUYER
                        </button>
                        <div class="dropdown-menu">

                            <li class="nav-item"> <a href="biddingList.php" class="nav-link text-success">Your Biddings</a></li>
                            <a href="../html/shopping_cart.php" class="nav-link text-success"><i class="fa fa-shopping-cart" style="color:red"></i> Cart </a>


                        </div>
                    </div>





                    <!-- Creating a form for search -->

                    <form action="Farmer_dashboard.php" method="get" class="form-inline ml-3 mr-3">

                        <div class="input-group text-success sbtn">
                            <input type=" text" name="search"  placeholder="Search" class="form-control  border-success">



                            <button type="submit" name="btn" class="btn btn-outline-success btn-sm"><i class="fas fa-search "></i>
                            </button>


                        </div>


                    </form>



                    <!-- list itmes -->
                    <div class="rtbtns">
                        <ul class="navbar-nav float-left">


                            <li class="nav-item"><a class="nav-link text-success  px-3 mr-md-2 " href="feedback.php">FEEDBACK</a>
                            </li>


                            <li class="nav-item"><a class="nav-link text-success   px-3 mr-md-2" href="about.php">ABOUT</a>
                            </li>




                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle" style="color:green; background-color: #f8f8f8;" data-toggle="dropdown">
                                    WELCOME <small><?php
                    
                    $name = $_SESSION['uname'];
                    
                    echo $name;
                    
                    ?></small>
                                </button>
                                <div class="dropdown-menu">

                                    <li class="nav-item"> <a href="UserProfile/userprofile.php" class="nav-link text-success">PROFILE</a></li>
                                    <li class="nav-item"> <a href="Farmer_dashboard.php?lgout=" class="nav-link text-success">LOG OUT</a></li>
                                    <?php
                                    if(isset($_GET['lgout'])) {
                                      
                           
                                unset ($_SESSION["userlogin"]);
                                echo "<script type='text/javascript'> document.location = '../html/login.php'; </script>";
                            
                         
                                    }
                                    
                                    ?>
                                </div>

                            </div>



                        </ul>
                    </div>
                </div>



                <!--End of list items -->


            </nav>


            <!-- End of navbar -->



            <!--Section products -->
            <div class="simplepic">
                <img src="../image/bg-image.png" class="image-fluid" style="width: 100%;" alt="just pic">
            </div>

            <section class="p-sm-5  bg-light   pro-margin">

                <!-- Title -->

                <div class="container-fluid ourp">
                    <!-- title -->
                    <div class="row">
                        <div class="col tit text-center mb-3">
                            <h3 class="display-4 text-warning">Our Products</h3>
                            <p class="lead text-dark">Your satisfaction is our goal.</p>

                        </div>
                    </div>
                    <!-- End of title -->


                    <div class="row contall">
                        <!-- First card -->


                        <?php


include("../html/DBcon.php");
                
                
                if(isset($_GET['btn'])){
                    $em = $_SESSION['email'];
                    
                    $search_query = $_GET['search'];
                    $status = "approved";
                    
                    $get_pro = " select * from product where name like '%$search_query%'
                    and status = '$status'
                    and date > now()";
                    
                    $run_pro = mysqli_query($con, $get_pro);
                    
                
                    
                    while($row_pro = mysqli_fetch_array($run_pro)){
                      ?>

                        <div class="col-lg-3 mb-3">
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



                                        <form action="index.php" method="get" onsubmit="return validate()">

                                            <div>
                                                <a href="popup_func.php?pid=<?php echo $row_pro['p_id']; ?>" class="btn btn-sm btn-outline-success">Insert Bid</a>





                                                <a href="popup_func.php?pid=<?php echo $row_pro['p_id']; ?>" class="btn btn-sm btn-outline-success float-right">More</a>






                                            </div>

                                        </form>




                                    </div>
                                </div>

                            </div>

                        </div>

                        <?php  
                        
                    }
                    
                    
                } else{
                
                
                ?>



                        <?php
                $em = $_SESSION['email'];
                $status = "approved";
                
                $res = mysqli_query($con,"select * from product where status = '$status' and date > NOW()
                ");
                $pp_id= 1;    
                while($row = mysqli_fetch_array($res))
                {
                    ?>


                        <div class="col-lg-3 mb-3">
                            <div class="card">
                                <img src="../html/<?php echo $row["image"]; ?>" height="220px" class="card-img-top" alt="">
                                <div class="card-body">
                                    <div class="card-title mb-5">




                                        <h4 class=" text-center text-muted">
                                            <?php echo $row["name"] ?>
                                        </h4>
                                    </div>
                                    <div class="card-sub-title">

                                        <div class="mb-3">
                                            <p class="d-inline mr-5 text-muted"><i class="fas fa-money-bill-alt mr-2 text-info"></i><?php echo $row["price"]; ?> Af</p>
                                            <p class="d-inline mb-3 ml-4 text-muted"><i class="fas fa-weight mr-2 text-primary"></i><?php echo $row["weight"]; ?>
                                                Kg</p>

                                        </div>

                                        <div class="mb-4">
                                            <p class="d-inline text-muted"> <i class="fa fa-map-marker-alt mr-2 text-warning"></i><?php echo $row["location"]; ?></p>
                                            <p class="d-inline float-right text-muted"> <i class="far fa-calendar-alt text-danger"></i><?php echo $row["date"]; ?>
                                            </p>

                                        </div>




                                        <form action="Farmer_dashboard.php" method="get" enctype="multipart/form-data" onsubmit="return validate()">

                                            <div>
                                                <!--   <button type="submit" class="btn btn-sm btn-outline-success" id="dett" name="bttnn" value="" >Insert Bid</button> -->

                                                <a href="popup_func.php?pid=<?php echo $row['p_id']; ?>" class="btn btn-sm btn-outline-success">Insert Bid</a>

                                                <a href="popup_func.php?pid=<?php echo $row['p_id']; ?>" class="btn btn-sm btn-outline-success float-right">More...</a>










                                            </div>

                                        </form>








                                    </div>
                                </div>

                            </div>

                        </div>



                        <?php
                 $pp_id++;   
                    
                }
                    
          

               
                
               
                   include('../html/DBcon.php');
                        $status = "approved";
                   $get_pro = " select * from product where status = '$status' and date < NOW()
                    ";
                    
                    $run_pro = mysqli_query($con, $get_pro);
                    
                
                    
                    while($row_pro = mysqli_fetch_array($run_pro)){
                    
                
                ?>

                        <div class="col-lg-3 mb-3">
                            <div class="card close_bid">
                                <img src="../html/<?php echo $row_pro["image"]; ?>" height="220px" class="card-img-top" alt="">
                                <div class="card-body">
                                    <div class="card-title mb-5">




                                        <h4 class=" text-center text-muted">
                                            <?php echo $row_pro["name"]; ?>
                                        </h4>
                                    </div>
                                    <div class="card-sub-title">

                                        <div class="mb-3">
                                            <p class="d-inline mr-5 text-muted"><i class="fas fa-money-bill-alt mr-2 text-info"></i><?php echo $row_pro["price"]; ?> Af</p>
                                            <p class="d-inline mb-3 ml-4 text-muted"><i class="fas fa-weight mr-2 text-primary"></i><?php echo $row_pro["weight"]; ?>
                                                Kg</p>

                                        </div>

                                        <div class="mb-4">
                                            <p class="d-inline text-muted"> <i class="fa fa-map-marker-alt mr-2 text-warning"></i><?php echo $row_pro["location"]; ?></p>
                                            <p class="d-inline float-right text-muted"> <i class='fas fa-stopwatch' style="color:red"></i> Bidding Closed
                                            </p>

                                        </div>




                                        <input type="button" class="btn" value="Bidding Closed">








                                    </div>
                                </div>

                            </div>


                        </div>

                        <style>
                            .close_bid {
                                pointer-events: none;
                                cursor: default;
                                text-decoration: none;

                                opacity: 0.6;
                            }
                        </style>

                        <?php
                    }
                    
                                    }

                ?>





                        <div class="container-fluid">


                            <div class="bg-model">
                                <div class="model-content col-lg-8 col-md-8 col-sm-8">


                                    <div class="table-responsive-sm">

                                        <table class="table table-borderless">

                                            <?php
                include('../html/DBcon.php');
                
                $res = mysqli_query($con,"select * from product where p_id = '$_GET[pid]'");
                                
                
                  
                while($row = mysqli_fetch_array($res)) 
                {
                 
                    
                                
                                ?>

                                            <tr>


                                                <td style="width:400px"><img src="../html/<?php echo $row["image"]; ?>" style="width:400px"> </td>



                                                <td>

                                                    <p><strong>Description:</strong> <?php echo $row["description"]; ?> </p>
                                                    <p><strong>Weight:</strong> <?php echo $row["weight"]; ?> KG</p>
                                                    <p><strong>Starting Bid:</strong> <?php echo $row["price"]; ?> Af</p>
                                                    <a href="UserProfile/messages.php?pid=<?php echo $row['p_id']; ?>">Contact supplier</a>

                                                    <form action="placebid.php" method="post" enctype="multipart/form-data">
                                                        <input type="number" class="form-control" style="width: 297px;" name="bid_value" placeholder="Insert Bid" required>
                                                        <button type="submit" class="btn btn-success" name="pb">Place Bid</button>


                                                        <button type="submit" class="btn btn-dark" name="adc"><i class="fa fa-shopping-cart" style="color:red"></i>Add to Cart</button>

                                                        <button type="submit" class="btn" style="background-color:maroon; color:white" onclick="report()" name="adc">Report </button>



                                                        <img src="../image/cash-on-delivery.jpg" style="width: 297px; height:90px">
                                                        <?php
                                            function abc() {
                                                ?>
                                                        <script>
                                                            alert("added!");
                                                        </script>
                                                        <?php
                                            }
                                            
                                            $_SESSION["pid"] = $row['p_id'];
                                            
                    
                                            ?>
                                                    </form>

                                                </td>

                                            </tr>


                                            <?php               
                                
                             }
                             
                                                   
                                ?>


                                            <div class="close">







                                                <button type="submit" class="close" aria-label="Close" id="closebtn" name="cloosee">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>










                                        </table>


                                    </div>




                                </div>
                            </div>
                        </div>




                        <?php 
                
               
                
                
        
                function writeMsg() {
                    
                    ?>
                        <script>
                            document.querySelector('.bg-model').style.display = 'flex';
                        </script>


                        <?php 
                }    ?>




                        <script>
                            document.getElementById('closebtn').onclick = function() {



                                document.querySelector('.bg-model').style.display = 'none';

                            }
                        </script>




                        <?php
                
                function deletealert() {
                    ?>
                        <script>
                            alert("Product Deleted!");
                        </script>
                        <?php
                    
                }
                
                ?>
                        <?php
                
                function updatealert() {
                    ?>
                        <script>
                            alert("Product Updated!");
                        </script>
                        <?php
                    
                }
                
                ?>






                        <!--End card #8-->




            </section>
            <!-- End of product Section -->
            <style>
                .bg-model2 {

                    width: 100%;
                    height: 100%;
                    background-color: black;
                    opacity: 0.9;

                    position: absolute;
                    top: 60px;
                    right: 5px;
                    left: 5px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    position: fixed;
                    display: none;

                }


                .model-content2 {


                    background-color: #ffffff;
                    padding-top: 30px;
                    border-radius: 25px;
                    height: 70%;
                    position: relative;
                }

                .cancel {
                    position: relative;
                    bottom: 0px;
                    right: 0px;
                    top: 35px;

                }

                .canok {
                    width: 80px;
                    height: 40px;
                }

                .reason {
                    display: none;
                }

                .here {
                    background-color: dimgrey;
                    height: 70px;
                }

                .pa {
                    top: 5px;
                    bottom: 5px;
                }
            </style>

            <!-- report section -->
            <div class="bg-model2">
                <div class="model-content2 col-lg-6 col-md-6 col-sm-6">



                    <div class="here">
                        <h3>Report Product</h3>
                    </div>

                    <p class="pa">Reason to Report this Product</p>

                    <form action="" method="post" enctype="multipart/form-data">
                        <ul style="display: block; list-style: none;">
                            <li style="">
                                <input type="radio" name="repo" value="Invalid Details"> <label>Invalid Details</label>
                            </li>
                            <li style="">
                                <input type="radio" name="repo" value="Invalid Email"> <label>Invalid Email</label>
                            </li>
                            <li style="">
                                <input type="radio" name="repo" value="Fake Image"> <label>Fake Image</label>
                            </li>
                            <li style="">
                                <input type="radio" name="repo" value="Spam"> <label>Spam</label>
                            </li>
                            <li style="">
                                <input type="radio" name="repo" onclick="document.querySelector('.reason').style.display = 'flex'; " value="Other"> <label>Other</label>
                            </li>
                            <li style="">
                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <textarea style=" width:100%;" name="reason" class="reason" id="reason"></textarea>
                                </div>
                            </li>

                            <li>
                                <div class="col-lg-4 offset-lg-8  cancel">
                                    <button type="submit" class="btn canok" onclick="cancel()">Cancel</button>
                                    <button type="submit" class="btn btn-primary canok" name="rok">Ok</button>
                                </div>
                            </li>
                        </ul>
                    </form>
                    <?php 
                    
                    include('../html/DBcon.php');
                    if(isset($_POST['rok'])) {
                       $reason = $_POST['repo'];
                        $reppid = $_GET['pid'];
                        echo $reason;
                         $reasonm = $_POST['reason'];
                        if($reason != "Other"){
                            
                           
                            
                            $repque = "insert into report(pid,reason,reported) values('$reppid', '$reason','product')";
                            mysqli_query($con, $repque);
                            
                               ?>
                    <script>
                        alert("Reported!");
                    </script>

                    <?php 
                        }
                        else {
                             $repque = "insert into report(pid,reason,reported) values('$reppid', '$reasonm','product')";
                            mysqli_query($con, $repque);
                            
                            ?>
                    <script>
                        alert("Reported!");
                    </script>

                    <?php 
                        }
                      
                    }
                    
                    
                    
                    
                    
                    ?>




                </div>
            </div>

            <script>
                function report() {

                    document.querySelector('.bg-model2').style.display = 'flex';
                    document.querySelector('.bg-model').style.display = 'none';


                }

                function cancel() {
                    document.querySelector('.bg-model2').style.display = 'none';
                }

                function reason() {


                }
            </script>



            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 chatbot">
                        <!--start code-->
                        <div class="card chatbot-content">
                            <div class="card-body messages-box">
                                <ul class="list-unstyled messages-list">
                                    <?php
							$res=mysqli_query($con,"select * from ");
							if(mysqli_num_rows($res)>0){
								$html='';
								while($row=mysqli_fetch_assoc($res)){
									$message=$row['message'];
									$added_on=$row['added_on'];
									$strtotime=strtotime($added_on);
									$time=date('h:i A',$strtotime);
									$type=$row['type'];
									if($type=='user'){
										$class="messages-me";
										$imgAvatar="user_avatar.png";
										$name="Me";
									}else{
										$class="messages-you";
										$imgAvatar="bot_avatar.jpg";
										$name="Chatbot";
									}
									$html.='<li class="'.$class.' clearfix"><span class="message-img"><img src="../image/'.$imgAvatar.'" class="avatar-sm style="width:40px;" rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">'.$name.'</strong> <small class="time-messages text-muted"> <span class="minutes">'.$time.'</span></small> </div><p class="messages-p">'.$message.'</p></div></li>';
								}
								echo $html;
							}else{
                                echo $html;
								?>
                                    <li class="messages-me clearfix start_chat">
                                        <img src="../image/bot_avatar.gif" style="width:70px;" class="avatar-sm rounded-circle"> Hello, How can i Help You?
                                    </li>
                                    <?php
							}
							?>

                                </ul>
                            </div>
                            <div class="card-header">
                                <div class="input-group">
                                    <input id="input-me" type="text" name="messages" class="form-control input-sm" placeholder="Type your message here..." />
                                    <span class="input-group-append">
                                        <input type="button" id="snd-btn" class="btn btn-info" value="Send" onclick="send_msg()">
                                    </span>
                                </div>
                            </div>
                            <div class="ccloose">


                                <button type="submit" id="close-chb" class="close" aria-label="Close" name="cloosee">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                        </div>
                        <!--end code-->
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- script for chatbot -->
    <script type="text/javascript">
        function getCurrentTime() {
            var now = new Date();
            var hh = now.getHours();
            var min = now.getMinutes();
            var ampm = (hh >= 12) ? 'PM' : 'AM';
            hh = hh % 12;
            hh = hh ? hh : 12;
            hh = hh < 10 ? '0' + hh : hh;
            min = min < 10 ? '0' + min : min;
            var time = hh + ":" + min + " " + ampm;
            return time;
        }

        function send_msg() {
            jQuery('.start_chat').hide();
            var txt = jQuery('#input-me').val();
            var html = '<li class="messages-me clearfix"><span class="message-img"><img src="../image/user_avatar.gif"  class="avatar-sm rounded-circle" style="width:60px; style=" margin:0px; padding:0px;"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Me</strong> <small class="time-messages text-muted"> <span class="minutes">' + getCurrentTime() + '</span></small> </div><p class="messages-p">' + txt + '</p></div></li>';
            jQuery('.messages-list').append(html);
            jQuery('#input-me').val('');
            if (txt) {
                jQuery.ajax({
                    url: 'get_bot_message.php',
                    type: 'post',
                    data: 'txt=' + txt,
                    success: function(result) {
                        var html = '<li class="messages-you clearfix"><span class="message-img"><img src="../image/bot_avatar.gif"  class="avatar-sm rounded-circle" style="width:60px;></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Chatbot</strong> <small class="time-messages text-muted"> <span class="minutes">' + getCurrentTime() + '</span></small> </div><p class="messages-p">' + result + '</p></div></li>';
                        jQuery('.messages-list').append(html);
                        jQuery('.messages-box').scrollTop(jQuery('.messages-box')[0].scrollHeight);
                    }
                });
            }
        }
        $(document).ready(function() {
            $('#input-me').keypress(function(e) {
                if (e.keyCode == 13)
                    $('#snd-btn').click();
            });
        });
    </script>


    <div class="chatbot-icon">
        <div class="ci">

            <button type="submit" id="chb-icon" name="chatbot_icon" class="btn rounded-circle" style=" margin:0px; padding:0px;"><img src="../image/chb%20gif.gif" style="width:50px; height:50px;" class="avatar-sm rounded-circle"> </button>



        </div>
    </div>


    <script>
        document.getElementById('chb-icon').onclick = function() {


            document.querySelector('.chatbot').style.display = 'flex';
            document.querySelector('.chatbot-icon').style.display = 'none';

        }
        document.getElementById('close-chb').onclick = function() {


            document.querySelector('.chatbot').style.display = 'none';
            document.querySelector('.chatbot-icon').style.display = 'flex';

        }
    </script>


    </div>
    </div>


    <!-- Footer -->
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

    <!-- End of Footer -->

    <script src="/js/app.js"></script>
</body>

</html>
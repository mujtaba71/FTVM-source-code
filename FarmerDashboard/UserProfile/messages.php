<?php
error_reporting(0);
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="stylecht.css">
    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="image/LogoSample_ByTailorBrands (1).jpg" type="image/png">
    <!-- style css -->


    <link rel="stylesheet" href="../../fontawesome-free-5.12.1-web/css/all.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="chatbot/style.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- font awesome -->
    <script src="js.js"></script>
    <script src="../../js/all.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title></title>

    <style>
        .sidebar-footer {
            position: absolute;
            width: 100%;
            bottom: 0;
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

        .badge-sonar {
            display: inline-block;
            background: #980303;
            border-radius: 50%;
            height: 8px;
            width: 8px;
            position: absolute;
            top: 25px;
            left: 60px;

        }

        .icons {
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }



        .dropdown:hover .dropdown-menu,
        .btn-group:hover .dropdown-menu {
            display: block;
            background-color: #2f2a2a;

        }

        .dropdown-menu {
            margin-top: 0;
        }

        .dropdown-toggle {
            margin-bottom: 2px;
        }

        .navbar .dropdown-toggle,
        .nav-tabs .dropdown-toggle {
            margin-bottom: 0;
        }
    </style>

    <!-- dropup styles -->

    <style>
        .dropbtn {
            background-color: black;


            border: none;
        }

        .dropup {
            position: relative;
            display: inline-block;
            padding-right: 50px;
        }

        .dropup-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;

            z-index: 1;
            bottom: 30px;

        }

        .dropup-content a {
            color: black;
            padding: 3px 3px;
            text-decoration: none;
            display: block;
            border-bottom: 1px dashed black;
        }

        .dropup-content a:hover {
            background-color: #ccc
        }

        .dropup:hover .dropup-content {
            display: block;
        }

        .dropup:hover .dropbtn {
            background-color: black;
        }

        .image-upload>input {
            display: none;
        }

        .image-upload img {
            width: 80px;
            cursor: pointer;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            position: absolute;
            top: 140px;
            left: 130px;
        }

        .ppic {
            padding-top: 10px;
            padding-left: 20px;


        }
    </style>


</head>

<body>



    <div id="wrapper">


        <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <ul class="sidebar-nav">

                <!-- <li class="sidebar-brand">

                </li>
                -->

                <div class="ppic">
                    <li>
                        <form action="" id="form" name="form" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                            <div class="image-upload">
                                <label for="image">
                                    <img src="../../../../image/upload.png" />
                                </label>

                                <input id="image" type="file" name="file" onchange="func();" />
                                <input type="submit" name="sbt">

                            </div>


                            <?php
    include("../../html/DBcon.php");
                            $condition = $_SESSION['email'];
    
    
        if ( ! isset($_POST['file'])) {
            // not submitted yet
?>
                            <script>
                                function func() {



                                    this.form.submit();
                                }
                            </script>

                            <?php
         
        
        $file = $_FILES['file']['name'];
        $fname = $_FILES["file"]["tmp_name"];
        $folder = 'image/'.$file;
       
        move_uploaded_file($fname, $folder);
        $sql = "update usert set image = '$folder' where email = '$condition' ";
            if(!empty($file)){
        mysqli_query($con,$sql);
          
            }
        
        
    }
    $condition = $_SESSION['email'];
    $query = "select * from usert where email = '$condition' ";
    $resarr = mysqli_query($con,$query);
    while($arr1 = mysqli_fetch_array($resarr)) {
   
                            
        
    
    
 
    
    
    ?>



                        </form>
                        <img src="<?php echo $arr1['image']; ?>" class="rounded-circle" style="width:130px; height:130px;">
                        <?php
         
    }
        ?>
                    </li>
                </div>

                <div>
                    <li>
                        <a href=""> <strong>Manage profile</strong> </a>
                    </li>
                    <li>
                        <a href="myprofile.php" style="color: #afafff">My profile</a>
                    </li>
                    <li>
                        <a href="addressbook.php" style="color: #afafff">Address Book</a>
                    </li>
                </div>
                <div>
                    <li>
                        <a href=""> <strong>Sellings</strong> </a>
                    </li>
                    <li>
                        <a href="../SellProduct.php" style="color: #afafff">Ready to sell</a>
                    </li>
                    <li>
                        <a href="soldp.php" style="color: #afafff">Sold</a>
                    </li>
                    <li>
                </div>
                <div>
                    <li>
                        <a href=""> <strong>Purchaces</strong> </a>
                    </li>
                    <li>
                        <a href="../biddingList.php" style="color: #afafff">Bids</a>
                    </li>
                    <li>
                        <a href="ownedbids.php" style="color: #afafff">Owned Bids</a>
                    </li>
                    <li>
                </div>

                <!--
                <li class="dropdown">
                    <a href="" data-toggle="dropdown" class="dropdown-toggle"><img class="icons" src="../../image/icons/product.png"> Products <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="newproducts.php">New</a></li>
                        <li><a href="readytosell.php">Ready to Sell </a></li>

                    </ul>
                </li> -->




            </ul>
            <div class="sidebar-footer">







                <div class="dropup">
                    <button class="dropbtn"> <a href="#">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-pill badge-warning notification"></span>
                        </a></button>
                    <div class="dropup-content">


                        <a href=""></a>



                    </div>
                </div>

                <div class="dropup">
                    <button class="dropbtn"> <a href="#">
                            <i class="fa fa-envelope"></i>
                            <span class="badge badge-pill badge-success notification"></span>
                        </a></button>
                    <div class="dropup-content">

                        <a href=""></a>

                    </div>



                </div>








                <a href="../Farmer_dashboard.php">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>






            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <style>
            .d1 {

                width: 240px;
                margin-right: 21px
            }

            .imgicon {
                background-color: #dda6dd;
                border-radius: 10%;

            }

            .imgicon2 {
                background-color: #9b9b17;
                border-radius: 10%;

            }

            .imgicon3 {
                background-color: #585252;
                border-radius: 10%;

            }

            .imgicon4 {
                background-color: skyblue;
                border-radius: 10%;

            }

            .tn {
                align-content: center;
                align-items: center;
                text-align: center;
                top: 20px;

            }

            .avatar-sm {
                width: 60px;
                height: 60px;
                border-radius: 50%;
            }

            .input-sm {
                border-width: 0px;
                border: none;

            }
            .btn-snd {
                width: 80px;
                position: relative;
                bottom: 30px;
                left: 20px;
            }
        </style>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" id="menu-toggle"><img src="../../image/interface.png" style="width:30px; height: 30px;"> </a>
                        <h3>Messanger</h3>
                        <hr>
                        
                        <?php 
                        
                        include('../../html/DBcon.php');
                        
                        $receiver = "select * from product where p_id = '$_GET[pid]'";
                        $res = mysqli_query($con, $receiver);
                        $arr = mysqli_fetch_array($res);
                        echo $arr['u_email'];
                        
                        ?>


                        <div style="width: 100%; height: 100%">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <!--start code-->
                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="card" style="width: 100%; height: 100%">
                                        <div class="card-header">
                                            <div class="input-group">
                                                <input id="input-me" type="text" name="useremail" value="<?php echo $arr['u_email']; ?>" class="form-control input-sm" placeholder="Reciptent" />
                                                <span class="input-group-append">
                                                    

                                                    


                                                </span>
                                            </div>
                                            <hr>
                                            <div class="input-group">
                                                <input id="input-me" type="text" name="subject" class="form-control input-sm" placeholder="Subject" />
                                                <span class="input-group-append">



                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-body messages-box">
                                            <ul class="list-unstyled messages-list">

                                                <li class="messages-me clearfix start_chat">
                                                    <textarea rows="8" style="width:100%" name="emailcontent"></textarea>
                                                </li>


                                            </ul>
                                        </div>
                                        <input type="submit" name="snd_btn" id="snd-btn" class="btn btn-snd btn-info" value="Send" onclick="send_msg()">

                                    </div>
                                    </form>
                                    
                                    <?php 
                                    
                                    if(isset($_POST['snd_btn'])) {
                                        $email = $_POST['useremail'];
                                        $subject = $_POST['subject'];
                                        $emailcontent = $_POST['emailcontent'];
                                        $sentby = $_SESSION['email'];
                                        
                                                       
                                           
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
                                            $mail->Subject=$subject;
                                            $mail->Body='<p>' .$emailcontent. '<p><br><br><h3></h3><h4>sent by: '.$sentby.'</h4>';

                                            if(!$mail->send()){
                                                echo "error";
                                            }
                                            else{
                                                
                                            }
                                           
                                          
                                        
                                    }
                                    
                                    ?>
                                    <!--end code-->

                                    
                                </div>
                            </div>

                        </div>

                    </div>
                </div>






            </div>
        </div>



    </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->




    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown, .btn-group").hover(function() {
                var dropdownMenu = $(this).children(".dropdown-menu");
                if (dropdownMenu.is(":visible")) {
                    dropdownMenu.parent().toggleClass("open");
                }
            });
        });
    </script>
    <script src="../../js/all.js"></script>
</body>

</html>
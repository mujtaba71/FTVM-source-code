<?php
session_start();
error_reporting(0);

if(!isset($_SESSION['login'])) {
    header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="adminstyle.css">

    <link rel="icon" href="image/LogoSample_ByTailorBrands (1).jpg" type="image/png">
    <!-- style css -->


    <link rel="stylesheet" href="../fontawesome-free-5.12.1-web/css/all.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="chatbot/style.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- font awesome -->
    <script src="adminjs.js"></script>
    <script src="../js/all.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title>Admin Profile</title>

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
            padding-right: 20px;
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
    </style>


</head>

<body>

    <?php
    include('../html/DBcon.php');
                
                $d = "select count(note) from notification where type = 'deal' or type = 'new'";
                    $re = mysqli_query($con,$d);
                   while($rw = mysqli_fetch_array($re)) {
                    $_SESSION['cout'] = $rw['count(note)'];
                   }
    
    ?>

    <div id="wrapper">


        <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <ul class="sidebar-nav">

                <li class="sidebar-brand">

                </li>

                <li>
                    <a href="index.php"> <img class="icons" src="../image/icons/dash%20icon.png"> Dashboard</a>
                </li>
                <li>
                    <a href="users.php"><img class="icons" src="../image/icons/user%20icon.png"> Users</a>
                </li>
                <li>
                    <a href="#"></a>
                </li>
                <li class="dropdown">
                    <a href="" data-toggle="dropdown" class="dropdown-toggle"><img class="icons" src="../image/icons/product.png"> Products <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="newproducts.php">New</a></li>
                        <li><a href="readytosell.php">Ready to Sell </a></li>

                    </ul>
                </li>
                <?php
    include('../html/DBcon.php');
                
                $dd = "select count(note), note from notification where type = 'feedback'";
                    $rre = mysqli_query($con,$dd);
                   while($rrw = mysqli_fetch_array($rre)) {
                    $_SESSION['coutfdbck'] = $rrw['count(note)'];
                    $_SESSION['fdbcknote'] = $rrw['note'];
                   }
    
    ?>
                <li>
                    <a href="feedback.php"><img class="icons" src="../image/icons/feedback.png"> Feedback</a>
                </li>
              

            </ul>
            <div class="sidebar-footer">







                <div class="dropup">
                    <button class="dropbtn"> <a href="#">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-pill badge-warning notification"><?php echo $_SESSION['cout']; ?></span>
                        </a></button>
                    <div class="dropup-content">
                        <?php
                
                include('../html/DBcon.php');
                
                $data = "select id, note, CURDATE(), type from notification where type = 'deal' or type = 'new'";
                    $result = mysqli_query($con,$data);
                while($row = mysqli_fetch_array($result)) {
               
               
                
                ?>

                        <a href="index.php?noteid=<?php echo $row['id']?>"><small><?php echo $row['note']; ?></small></a>



                        <?php
                    
                    
                    
                    
                    
    
                
                $num = mysqli_num_rows($result);
                if($num >= 1) {
                  
                    
                    if(isset($_GET['noteid'])) {
                        
                $da = "select type from notification where id = '$_GET[noteid]'";
                    $rt = mysqli_query($con,$da);
                while($rrr = mysqli_fetch_array($rt)) {
                    $a = $rrr['type'];
                    $b = 'deal';
                }
                        if($a == $b) {
                            
                            $c = "delete from notification where id = '$_GET[noteid]' ";
                            mysqli_query($con,$c);
                            echo "<script type='text/javascript'> document.location = 'readytosell.php'; </script>";
                        }
                        
                       else {
                           
                            $e = "delete from notification where id = '$_GET[noteid]' ";
                            mysqli_query($con,$e);
                           
                            
                        echo "<script type='text/javascript'> document.location = 'newproducts.php'; </script>";
                       }
                    }
                }
                }

    ?> </div>
                </div>

                <div class="dropup">
                    <button class="dropbtn"> <a href="#">
                            <i class="fa fa-envelope"></i>
                            <span class="badge badge-pill badge-success notification"><?php echo $_SESSION['coutfdbck']; ?></span>
                        </a></button>
                    <div class="dropup-content">

                        <a href="index.php?fdbckid=<?php echo $_SESSION['fdbckid']; ?>"><small><?php echo $_SESSION['fdbcknote']; ?></small></a>

                    </div>
                     
                 
            
                </div>

                <?php
                
                      
                    if(isset($_GET['fdbckid'])) {
                        
           
                            
                            $t = "delete from notification where id = '$_GET[fdbckid]' ";
                            mysqli_query($con,$t);
                            echo "<script type='text/javascript'> document.location = 'feedback.php'; </script>";
                    }
                ?>




               <a href="profile.php">
                    <i class="fa fa-cog"></i>

                </a>


                <a href="profile.php?logout">
                    <i class="fa fa-power-off"></i>
                </a>

              <?php
                if(isset($_GET['logout'])) {
                    unset ($_SESSION["login"]);
                    header('location:login.php');
                }
                
                ?>






            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        
        <style>
            
            .pro {
                position: absolute;
                top: 100px;
                
            }
            .a1 {
                width: 300px;
                display: none;
                
            }
             .a2 {
                 width: 300px;
                display: none;
            }
             .a3 {
                 width: 300px;
                display: none;
            }
            .a4 {
                width: 80px;
              
                display: none;
                
            }
            .rtp {
                color: red;
                display: none;
            }
            .cp {
                color: green;
                display: none;
            }
        </style>
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" id="menu-toggle"><img src="../image/interface.png" style="width:30px; height: 30px;"> </a>
                        <h3>Profile</h3>
                        <hr>
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-4 offset-lg-4 pro">
                                     
                                     <?php
                                        
                                        include('../html/DBcon.php');
                                        $adem = $_SESSION['login'];
                                        $pd = "select * from admin where email = '$adem'";
                                        $pdres = mysqli_query($con,$pd);
                                        $ar = mysqli_fetch_array($pdres);
                                        ?>
                                      
                                     <i class="fa fa-user" aria-hidden="true"></i> <strong><?php echo $ar['name']; ?></strong> <br>
                                     <i class="fas fa-envelope"></i> <?php echo $ar['email']; ?><br>
                                     <i class="fas fa-key"></i> <a href="?pass" ><small>Change Password</small></a><br><br>
                                     <label class="cp" id="cp">Password changed!</label>
                                     
                                         
                                     <form method="post" action="" onsubmit="return validate();" enctype="multipart/form-data">
                                         
                                     <input type="password" placeholder="Enter new password" class="form-control mb-4 a2" name="newpass" id="a2">
                                     <label class="rtp" id="rtp">Password not match!</label>
                                     <input type="password" placeholder="Retry new password" class="form-control mb-4 a3" name="rnewpass" id="a3">
                                     <button type="submit" class="btn btn-primary a4 text-center" name="save" id="a4">Save</button>
                                     </form>
                                         
                                     
                                     
                                     
                                      
                                       
                                        
                                    </div>
                                    
                                </div>


                            </div>
                        </div>


                    </div>
                </div>
                
                <?php
                if(isset($_GET['pass'])) {
                ?>
                <script>
                
                    
                        
                       
                        document.getElementById("a2").style.display = 'flex';
                        document.getElementById("a3").style.display = 'flex';
                        document.getElementById("a4").style.display = 'flex';
                       
                  
             
                </script>
                
                <?php } ?>
            </div>
        </div>
        
        <?php 
        
        if(isset($_POST['save'])) {
             include('../html/DBcon.php');
            
            $newpass = $_POST['newpass'];
            $rnewpass = $_POST['rnewpass'];
                $as = $_SESSION['login'];
               
            
                $ins = " update admin set password = '$rnewpass' where email = '$as' ";
                mysqli_query($con,$ins);
               ?>
        <script>
        document.getElementById("cp").style.display = 'flex';
        </script>
               <?php
            }
                    
            
            
        
        
        
        ?>
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
        
        <script>
    function validate() {
        var pass = document.getElementById("a2");
        var repass = document.getElementById("a3");
        
        if (a2.value !== a3.value) {

        document.getElementById("rtp").style.display = 'flex';
        return false;
    }

    else {
        return true;
    }
        
    }
    
    </script>
    <script src="../js/all.js"></script>
</body>

</html>
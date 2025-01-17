<?php
session_start();
error_reporting(0);

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
    <title>Feedback</title>

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
                
                $dd = "select count(note), note, id from notification where type = 'feedback'";
                    $rre = mysqli_query($con,$dd);
                   while($rrw = mysqli_fetch_array($rre)) {
                    $_SESSION['coutfdbck'] = $rrw['count(note)'];
                    $_SESSION['fdbcknote'] = $rrw['note'];
                    $_SESSION['fdbckid'] = $rrw['id'];
                   }
    
    ?>
               
                 <li class="dropdown">
                    <a href="" data-toggle="dropdown" class="dropdown-toggle"><img class="icons" src="../image/icons/report-glyph.jpg"> Reports <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="reporteduser.php"> Reported User</a></li>
                        <li><a href="reportedproduct.php"> Reported Product</a> </li>

                    </ul>
                </li>
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
                       
                       <a href="feedback.php?fdbckid=<?php echo $_SESSION['fdbckid']; ?>"><small><?php echo $_SESSION['fdbcknote']; ?></small></a>
                        
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

                    <a href="feedback.php?logout">
                    <i class="fa fa-power-off"></i>
                 <?php
                if(isset($_GET['logout'])) {
                    unset ($_SESSION["login"]);
                    header('location:login.php');
                }
                
                ?>
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
            .table {
               
                
                
                border: none;
            }
            .tp {
                position: absolute;
                left: 270px;
                border: 1px solid black;
                width: 480px;
                height: 540px;
                overflow-x: hidden;
                
            }
            .w {
               
                position: relative;
                right: 10px;
                
            }
            .clear {
                text-align: right;
                
            }
            .conttab {
                height: 10px;
            }
            .dltbtn {
                position: relative;
                left: 380px;
            }
        </style>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" id="menu-toggle"><img src="../image/interface.png" style="width:30px; height: 30px;"> </a>
                        <h3>Feedback</h3>
                        <hr>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                   <div class="table-responsive table-borderless tp ">
                            <table class="table   table-sm">
                                <thead>
                                </thead>
                                      <tbody>
                                         <?php
                                          include('../html/DBcon.php');
                                          $fd = "select * from feedback";
                                          $fr = mysqli_query($con,$fd);
                                          while($fl= mysqli_fetch_array($fr)){
                                          
                                          ?>
                                         
                                        
                                         
                                              <tr>
                                              <td style=""><textarea cols="60" rows="5" disabled><?php echo $fl['subject'] ?> </textarea> </td>
                                              
                                          </tr>
                                         
                                           <tr style="height:30px;">
                                              <td>Sent by: <small><?php echo $fl['name'] ?></small></td>
                                              
                                              
                                          </tr>
                                          <tr style="height:30px;">
                                              <td><small><?php echo $fl['email'] ?></small></td>
                                              
                                              
                                          </tr>
                                          
                                           <tr>
                                              <td class="dltbtn"><a href="feedback.php?dltid=<?php echo $fl['id']; ?>" style="background-color:maroon; color:white;" class="btn">Delete</a> </td>
                                              
                                              
                                          </tr>
                                          
                                          
                                           <tr>
                                             
                                              <td>
                                                
                                                  <hr>
                                              </td>
                                          </tr>
                                         
                                          
                                          
                                          <?php
                                          }
                                          
                                          if(isset($_GET['dltid'])) {
                                              
                                              include('../html/DBcon.php');
                                              
                                              $dltque = "delete from feedback where id = '$_GET[dltid]'";
                                              mysqli_query($con, $dltque);
                                              echo "<script type='text/javascript'> document.location = 'feedback.php'; </script>";
                                              
                                          }
                                          
                                          
                                          ?>
                                      </tbody>
                                       </table>
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
    <script src="../js/all.js"></script>
</body>

</html>
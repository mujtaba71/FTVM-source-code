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
    <title>Ready to Sell</title>

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
    
    <!-- dropups -->
    
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
        
        .card {
            align-content: center;
            text-align: center;
            align-items: center;
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
                    <a href="index.php"> <img class="icons" src="../image/icons/dash%20icon.png">   Dashboard</a>
                </li>
                <li>
                    <a href="users.php"><img class="icons" src="../image/icons/user%20icon.png"> Users</a>
                </li>
                <li>
                    <a href="#"></a>
                </li>
                <li class="dropdown">
                    <a href="" data-toggle="dropdown" class="dropdown-toggle"><img class="icons" src="../image/icons/product.png">  Products <b class="caret"></b></a>
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
                 <li class="dropdown">
                    <a href="" data-toggle="dropdown" class="dropdown-toggle"><img class="icons" src="../image/icons/report-glyph.jpg"> Reports <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="reporteduser.php"> Reported User</a></li>
                        <li><a href="reportedproduct.php"> Reported Product</a> </li>

                    </ul>
                </li>
                <li>
                    <a href="feedback.php"><img class="icons" src="../image/icons/feedback.png">   Feedback</a>
                </li>
                
             
            </ul>
            <div class="sidebar-footer">
           
               
                  <div class="dropup">
                    <button class="dropbtn"> <a href="#">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-pill badge-warning notification"><?php echo $_SESSION['cout']  ?></span>
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

    ?>
                        
                    </div>
                </div>

               <div class="dropup">
                    <button class="dropbtn"> <a href="#">
                            <i class="fa fa-envelope"></i>
                            <span class="badge badge-pill badge-success notification"><?php echo $_SESSION['coutfdbck']; ?></span>
                        </a></button>
                    <div class="dropup-content">
                       
                       <a href="readytosell.php?fdbckid=<?php echo $_SESSION['fdbckid']; ?>"><small><?php echo $_SESSION['fdbcknote']; ?></small></a>
                        
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

                   <a href="readytosell.php?logout">
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


        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <a href="#menu-toggle" id="menu-toggle"><img src="../image/interface.png" style="width:30px; height: 30px;"> </a>
                        <h3>Ready to sell</h3>
                        <p> </p>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        
                                        <th>Image</th>
                                        
                                        <th>Seller</th>
                                        <th>Buyer</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Sold Price</th>
                                        

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                
                        
     
     include("../html/DBcon.php");

     
     $status = "pending";
     $get_pro = " select * from sold_product as sp join product as p
                  on sp.p_id = p.p_id
                  where sp.status = '$status' ";

     $run_pro = mysqli_query($con, $get_pro);

     $number = 1;

     while($row_pro = mysqli_fetch_array($run_pro)){
             $em = $row_pro['b_email'];
             $ema = $row_pro['u_email'];
         
         
          $g = " select * from usert where email = '$ema';  ";

     $r = mysqli_query($con, $g);

     

     while($rppoo = mysqli_fetch_array($r)){
         
          
     $gp = " select * from usert where email = '$em';  ";

     $rp = mysqli_query($con, $gp);

     

     while($ro = mysqli_fetch_array($rp)){
         
         
    


     ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $number ?></td>
                                        
                                        <td><img src="../<?php echo $row_pro['image'] ?>" style="width:150px;height:150px;"> </td>
                                        
                                        <td><div class="card" style="width:200px; height:150px;">
                                                
                                                <div class="card-body">
                                                    <h7 class="card-title"><?php echo $rppoo['name']. " " .$rppoo['l_name'] ?></h7>
                                                    <p class="card-text"><small><?php echo $rppoo['email']; ?></small></p>
                                                    <p class="card-text"><small>(+92)<?php echo $rppoo['phone_no']; ?></small></p>
                                                    
                                                </div>
                                            </div></td>
                                        <td><div class="card" style="width:200px; height:150px;">
                                                
                                                <div class="card-body">
                                                    <h7 class="card-title"><?php echo $ro['name']. " " .$ro['l_name'] ?></h7>
                                                    <p class="card-text"><small><?php echo $ro['email']; ?></small></p>
                                                    <p class="card-text"><small>(+92)<?php echo $ro['phone_no']; ?></small></p>
                                                    
                                                </div>
                                            </div></td>
                                            <td><?php echo $row_pro['name'] ?></td>
                                            <td><?php echo $row_pro['price'] ?></td>
                                        <td><?php echo $row_pro['selected_bid'] ?></td>
                                            
                                            <?php
     } }
         ?>
                                        
                                        
                                        <td><a href="readytosell.php?add=<?php echo $row_pro['p_id']?>"><img src="../image/tick%20green.png" style="width:25px; border-radius:50%"> </a>
                                            <a href="readytosell.php?reject=<?php echo $row_pro['p_id']?>"><img src="../image/cross%20red.jpg" style="width:25px; border-radius:50%"> </a>
                                        </td>

                                    </tr>

                                </tbody>

                                <?php 
         $number++;
     }
            ?>
                            </table>
                        </div>
                        
                        <?php
                        include("../html/DBcon.php");
                        
                        if(isset($_GET['add'])) {
                            $status = "approved";
                            
                             $reg = " update sold_product set status = '$status' where p_id = '$_GET[add]' ";
                             mysqli_query($con, $reg);
                             $invnotdata = " select p.name, p.u_email as pemail, b.u_email, sp.b_email from bids as b join sold_product as sp
                                           on b.p_id = sp.p_id join product as p on b.p_id = p.p_id
                                           where b.p_id = '$_GET[add]' ";
                             $invnotres = mysqli_query($con,$invnotdata);
                             while($invnotarr = mysqli_fetch_array($invnotres)) {
                                 $name = $invnotarr['name'];
                                 $note = "$name, you bided on has been sold!";
                                 $invemail = $invnotarr['u_email'];
                                 $type = "invnot";
                            
                             $invnot = " insert into notification(note, type, email) values('$note', '$type', '$invemail') ";
                                 mysqli_query($con, $invnot);
                                 
                             $wtype = "win";   
                             $wpname = $invnotarr['name'];
                             $wnote = "you win the bid on $wpname!";
                             $wem = $invnotarr['b_email'];
                             $wolnot = " insert into notification(note, type, email) values('$wnote', '$wtype', '$wem') ";
                                 mysqli_query($con, $wolnot);
                                 
                            $stype = "sold";   
                             $spname = $invnotarr['name'];
                             $snote = "you successfully sold $spname!";
                             $sem = $invnotarr['pemail'];
                             $solnot = " insert into notification(note, type, email) values('$snote', '$stype', '$sem') ";
                                 mysqli_query($con, $solnot);
                                 
                            
                             }
                            $da = " delete from bids 
                                   where p_id = '$_GET[add]'";
                                   mysqli_query($con, $da);
                                 
                             echo "<script type='text/javascript'> document.location = 'readytosell.php'; </script>";
                            
    
                        }
                        
                        
                          if(isset($_GET['reject'])) {
                            $status = "approved";
                            
                             $regg = " delete from sold_product where p_id = '$_GET[reject]' and status != '$status'  ";
                             mysqli_query($con, $regg);
                             $regg = " delete from product where p_id = '$_GET[reject]' and date < NOW()  ";
                             mysqli_query($con, $regg);
                             echo "<script type='text/javascript'> document.location = 'readytosell.php'; </script>";
    
                        }
                        
                        ?>

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
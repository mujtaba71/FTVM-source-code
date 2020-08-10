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
    <link rel="stylesheet" href="Style.css">

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
        </style>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" id="menu-toggle"><img src="../../image/interface.png" style="width:30px; height: 30px;"> </a>
                        <h3>Owned Bids</h3>
                        <hr>
                        <div class="container-fluid">
                            <div class="row">
                            
                            
                            
                             <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        
                                        <th>Image</th>
                                        

                                        <th>Seller</th>
                                        <th>Product Name</th>
                                        <th>Actual Price</th>
                                        <th>Purchased Price</th>


                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                
                        
     
     include("../../html/DBcon.php");

     $email = $_SESSION['email'];
     $status = "approved";
     $get_pro = " select * from sold_product as sp join product as p
                  on sp.p_id = p.p_id
                  where sp.b_email = '$email' 
                  and sp.status = '$status' ";

     $run_pro = mysqli_query($con, $get_pro);

     $number = 1;

     while($row_pro = mysqli_fetch_array($run_pro)){
         $em = $row_pro['u_email'];
         
          
     $gp = " select * from usert where email = '$em';  ";

     $rp = mysqli_query($con, $gp);

     

     while($ro = mysqli_fetch_array($rp)){
         
    $_SESSION['uid'] = $ro['id'];


     ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            
                                            <?php echo $number ?></td>
                                        
                                        <td><img src="../../../../<?php echo $row_pro['image'] ?>" style="width:200px; height:200px"> </td>
                                        

                                        <td>
                                            <div class="card" style="width:200px; height:200px;">
                                                <img class="card-img-top" src="<?php echo $ro['image'] ?>" alt="Card image" style=" height:120px; width:200px; border-radius:50%">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $ro['name']. " " .$ro['l_name'] ?></h5>
                                                    <a href="profile.php?seller=<?php echo $ro['id']; ?>">See Profile</a>
                                                    
                                                </div>
                                            </div>

                                        </td>
                                       
     

                                        <td><?php echo $row_pro['name'] ?></td>
                                        <td><?php echo $row_pro['price'] ?></td>
                                        <td><?php echo $row_pro['selected_bid'] ?></td>
                                        <?php $buyer = $row_pro['buyer']; 
          if($buyer == "done") {
              
                 ?>

                                                <td><a href="rateuser.php?seller=<?php echo $_SESSION['uid'] ?>">Rate this user</a></td>

                                                <?php
             }  
         else {
             
            
                                        
         ?>
                                                <td>



                                                    <a href="?done=<?php echo $row_pro['sold_id'] ?>" style="background-color:#4e834e; color:white" class="btn">Done?</a>
                                                    <button style="background-color:maroon; color:white" onclick="report()" class="btn">Report</button>



                                                    <?php 
                                            
         }
             
                                            ?> </td>

                                    </tr>

                                </tbody>

                                <?php 
         $number++;
     } }
                               
                                if(isset($_GET['done'])) {
                                            
                                            include('../../html/DBcon.php');
                                            $done = "done";
                                            $id = $_GET['done'];
                                            $querydone = "update sold_product set buyer = '$done' where sold_id = '$id'; ";
                                            mysqli_query($con, $querydone);
                                        }
                                
                                
            ?>
                            </table>
                        </div>
                         
                         
                               <style>
                                    .bg-model2 {

                                        width: 100%;
                                        height: 100%;
                                        background-color: black;
                                        opacity: 0.9;

                                        position: absolute;
                                        top: 10px;
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


                                <div class="bg-model2">
                                    <div class="model-content2 col-lg-6 col-md-6 col-sm-6">



                                        <div class="here">
                                            <h3>Report User</h3>
                                        </div>

                                        <p class="pa">Reason to Report this User</p>

                                        <form action="" method="post" enctype="multipart/form-data">
                                            <ul style="display: block; list-style: none;">
                                                <li style="">
                                                    <input type="radio" name="repo" value="Invalid Details"> <label>Invalid Details</label>
                                                </li>
                                                <li style="">
                                                    <input type="radio" name="repo" value="Invalid Email"> <label>Invalid Email</label>
                                                </li>
                                                <li style="">
                                                    <input type="radio" name="repo" value="Invalid Phone#"> <label>Invalid Phone#</label>
                                                </li>
                                                <li style="">
                                                    <input type="radio" name="repo" value="Fake Person"> <label>Fake Person</label>
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
                        $reppid = $_SESSION['uid'];
                     
                         $reasonm = $_POST['reason'];
                        
                        if($reason != "Other"){
                            
                           
                            
                            $repque = "insert into report(pid,reason, reported) values('$reppid', '$reason', 'user')";
                            mysqli_query($con, $repque);
                            
                               ?>
                                        <script>
                                            alert("Reported!");
                                        </script>

                                        <?php 
                        }
                        else {
                             $repque = "insert into report(pid,reason, reported) values('$reppid', '$reasonm', 'user')";
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
                                        


                                    }

                                    function cancel() {
                                        document.querySelector('.bg-model2').style.display = 'none';
                                    }

                                    function reason() {


                                    }
                                </script>


                            </div>
                            <hr>
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
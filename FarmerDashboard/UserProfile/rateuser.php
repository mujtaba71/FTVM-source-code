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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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


        .content {

            position: relative;

        }


        .profile {
            align-content: center;
            align-items: center;
            text-align: center;



        }

        .image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }



        .t {
            background-color: antiquewhite;
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
            .rating {
                position: absolute;
                top: 120%;
                left: 50%;
                transform: translate(-50%, -50%) rotateY(180deg);
                display: flex;
            }

            .rating input {
                display: none;
            }

            .rating label {
                display: block;

                width: 50px;

            }

            .rating label:before {
                content: '\f005';
                font-family: fontAwesome;
                position: relative;
                display: block;
                font-size: 50px;
                color: #101010;

            }

            .rating label:after {
                content: '\f005';
                font-family: fontAwesome;
                position: absolute;
                display: block;
                font-size: 50px;
                color: #1f9cff;
                top: 0;
                opacity: 0;
                transition: .5s;
                text-shadow: 0 2px 5px rgba(0, 0, 0, .5);

            }

            .rating label:hover:after,
            .rating label:hover~label:after,
            .rating input:checked~label:after {
                opacity: 1;
            }



            .sbtn {


                display: none;

            }



            .ras {
                position: relative;
                top: 70px;
                left: 125px;
            }

            .ras1 {
                position: relative;
                top: 70px;
                left: 100px;
            }
        </style>

        <!-- Page Content -->
        <div id="page-content-wrapper">


            <div class="container-fluid content">
                <div class="row">
                    <div class="col-lg-12 col-sm-4">

                        <a href="#menu-toggle" id="menu-toggle"><img src="../../image/interface.png" style="width:30px; height: 30px;"> </a>
                        <h3></h3>
                        <hr>

                        <?php
                                
                        
     
     include("../../html/DBcon.php");

      $em = $_GET['seller'];
                        
    
         
          
     $gp = " select * from usert where id = '$em' or id = '$_SESSION[ratedto]';  ";

     $rp = mysqli_query($con, $gp);

     

     while($ro = mysqli_fetch_array($rp)){
         
     


     ?>

                        <div class="row">

                            <div class="col-lg-4 offset-lg-4 profile">




                                <div class="">
                                    <img src="<?php echo $ro['image']; ?>" class="image">
                                    <h2><small><?php echo $ro['name']. " " .$ro['l_name']; ?></small></h2>
                                </div>






                                <form action="rateuser.php" method="get" id="myform" enctype="multipart/form-data">
                                    <div class="rating">
                                        <input type="radio" name="star" class="star5" onclick="func5()" value="5" id="star1"><label for="star1"></label>
                                        <input type="radio" name="star" class="4" onclick="func4()" value="4" id="star2"><label for="star2"></label>
                                        <input type="radio" name="star" class="3" onclick="func3()" value="3" id="star3"><label for="star3"></label>
                                        <input type="radio" name="star" class="2" onclick="func2()" value="2" id="star4"><label for="star4"></label>
                                        <input type="radio" name="star" class="1" onclick="func1()" value="1" id="star5"><label for="star5"></label>

                                    </div>


                                </form>

                            </div>




                        </div>
                        <?php
$_SESSION['ratedto'] = $ro['id'];
     }
   
                                
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        if(isset($_GET['sbt'])) {
        $star = $_GET['star'];
        
                            
                            
$ratedby = $_SESSION['email'];
$uid = $_SESSION['ratedto'];


 
                            $check = "select * from userrating where ratedto = '$uid' and ratedby = '$ratedby' ";
                            $chkd = mysqli_query($con, $check);
                            
                            $chknum = mysqli_num_rows($chkd);
                            if($chknum >= 1){
                                $ud = "update userrating set stars = '$star' where ratedto = '$uid' and ratedby = '$ratedby'";
                                mysqli_query($con, $ud);
                                
                                
                            $check = "select * from userrating where ratedto = '$uid' and ratedby = '$ratedby' ";
                            $chkd = mysqli_query($con, $check);
                            $chkarr = mysqli_fetch_array($chkd);
                        
                                
                        
                        ?>
                                 
                        

                        <div class="row ras1">
                            <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 ">
                                <h5 style="color:green">Rated:<?php echo $chkarr['stars'] ?> out of 5 </h5>
                            </div>
                        </div>


                        <?php
                            }
                            else {
                            

$reg = " insert into userrating(ratedto, ratedby, stars) values ('$uid', '$ratedby', '$star')";
    $data = mysqli_query($con, $reg);

    }
                        }
                        
    $ratedby = $_SESSION['email'];
$uid = $_SESSION['ratedto'];
                        
         $check = "select * from userrating where ratedto = '$uid' and ratedby = '$ratedby' ";
                            $chkd = mysqli_query($con, $check);
                            $chkarr = mysqli_fetch_array($chkd);
                        
                         if($chkarr['stars'] == 1){
                             ?>
                                   <script>
                            

                            var hangoutButton = document.getElementById("star5");
                            
                                    hangoutButton.click(); 
                        </script>
                                   <?php
                                    
                                }
                                else if($chkarr['stars'] == 2) {
                                    ?>
                                   <script>
                            

                            var hangoutButton = document.getElementById("star4");
                            
                                    hangoutButton.click(); 
                        </script>
                                   <?php
                                }
                                else if($chkarr['stars'] == 3) {
                                    ?>
                                   <script>
                            

                            var hangoutButton = document.getElementById("star3");
                            
                                    hangoutButton.click(); 
                        </script>
                                   <?php
                                }
                                else if($chkarr['stars'] == 4) {
                                    ?>
                                   <script>
                            

                            var hangoutButton = document.getElementById("star2");
                            
                                    hangoutButton.click(); 
                        </script>
                                   <?php
                                }
                                else if($chkarr['stars'] == 5) {
                                    ?>
                                   <script>
                            

                            var hangoutButton = document.getElementById("star1");
                            
                                    hangoutButton.click(); 
                        </script>
                                   <?php
                                }
                                
    
                               ?>



                        <div class="row ras">
                            <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 ">

                                <div class="sbtn" id="sbtn">


                                    <input type="submit" class="btn btn-dark" name="sbt" form="myform" id="but" value="submit">

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

    <script>
        var timesClicked = 0;
        var timesClicked2 = 0;
        var timesClicked3 = 0;
        var timesClicked4 = 0;
        var timesClicked5 = 0;


        function func1() {



            timesClicked++;

            if (timesClicked % 2 == 0) {
                window.location.reload();
            } else {

                document.getElementById("sbtn").style.display = 'flex';



            }


        }

        function func2() {
            timesClicked2++;

            if (timesClicked2 % 2 == 0) {
                window.location.reload();
            } else {
                document.getElementById("sbtn").style.display = 'flex';

            }
        }

        function func3() {
            timesClicked3++;

            if (timesClicked3 % 2 == 0) {
                window.location.reload();
            } else {
                document.getElementById("sbtn").style.display = 'flex';

            }
        }

        function func4() {
            timesClicked4++;

            if (timesClicked4 % 2 == 0) {
                window.location.reload();
            } else {
                document.getElementById("sbtn").style.display = 'flex';

            }
        }

        function func5() {
            timesClicked5++;

            if (timesClicked5 % 2 == 0) {
                window.location.reload();
            } else {
                document.getElementById("sbtn").style.display = 'flex';

            }
        }
    </script>






    <script src="../../js/all.js"></script>
</body>

</html>
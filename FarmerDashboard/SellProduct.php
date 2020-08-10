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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="icon" href="../image/LogoSample_ByTailorBrands%20(1).jpg" type="image/png">


    <link rel="manifest" href="../manifest.json">
    <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">


    <!-- style css -->
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="../fontawesome-free-5.12.1-web/css/all.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

    <!-- font awesome -->
    <script src="../js/all.js"></script>
    <title>Shopping Cart</title>

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

        }

        .sum {


            height: 260px;
            width: 400px;
            top: 30px;
            border: 1px solid #e0dbdb;
        }

        .sum:hover {

            background-color: #e8e3e3;


        }

        .btn {

            width: 373px;


        }

        .nums {
            height: 50px;
            overflow-y: scroll;
        }

        .content {
            position: relative;
            top: 140px;

        }
    </style>


</head>

<body>

    <div class="page-row page-row-expanded">
        <div class="container-fluid">


            <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top ">

                <a href="Farmer_dashboard.php" class="navbar-brand">
                    <img src="../image/LogoSample_ByTailorBrands (1).jpg" width="100px" height="100px" alt="Logo image" class="rounded-circle ">
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






            <div class="container content">

                <div class="row">

                    <div class="col-lg-12">
                        <h3>Sell Product</h3>
                        <hr>

                        <div class="table-responsive-sm">
                            <table class="table table-hover">
                                <thead>
                                    <tr>


                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
     
     include("../html/DBcon.php");
     $uemail = $_SESSION['email'];
                            
     

     $get_pro = " SELECT b_id, b.p_id,image,weight,price,p.u_email from product as p join bids as b 
     on p.p_id = b.p_id
     
     where  p.date < now()
     and p.u_email = '$uemail'
     GROUP BY b.p_id
     
     
     
     
     ";

     $run_pro = mysqli_query($con, $get_pro);

     
     $col = 1;
     while($row_pro = mysqli_fetch_array($run_pro)){
    


     ?>
                                    <form action="sellproduct.php" method="get" enctype="multipart/form-data">

                                        <tr class="display">
                                            <td> <img src="../html/<?php echo $row_pro['image']; ?>" style="width:120px;"> </td>
                                            <td style="padding-top:50px;">
                                                <?php echo $row_pro['weight']; ?> kg
                                            </td>
                                            <td style="padding-top:50px;">
                                                <?php echo $row_pro['price']; ?> Af
                                            </td>
                                            <td style="padding-top:50px;">



                                            </td>


                                            <td style="padding-top:50px;">
                                                <select name="dis" hidden>
                                                    <option value="<?php echo $col ?>"><?php echo $col ?></option>
                                                </select>
                                                <?php $ddis = $col; ?>
                                                <select name="bid" hidden>
                                                    <option value="<?php echo $row_pro['b_id']?>"><?php echo $row_pro['b_id']?></option>
                                                </select>
                                                <select class="browser-default custom-select nums" name="select_bid" style="width:200px">
                                                    <option value="option" selected>Received Bids</option>

                                                    <?php
         
         
         $s_id = $row_pro['p_id'];
         $get_p = " SELECT inserted_bid, address, area, city, province from bids join usert
         on bids.u_email = usert.email 
         where p_id = $s_id
         ORDER BY inserted_bid DESC";

         $run_p = mysqli_query($con, $get_p);

         while($row_p = mysqli_fetch_array($run_p)){
         ?>




                                                    <option value="<?php echo $row_p['inserted_bid']?>"><?php echo $row_p['inserted_bid']?>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <p>Address:</p>
                                                    <a href=""><?php echo $row_p['address']. ' ' .$row_p['area']. ' ' .$row_p['city']. ' ' .$row_p['province']; ?></a>

                                                    </option>
                                                    




                                                    <?php   
         }
     
     ?>
                                                </select>










                                            </td>
                                            <td class="bttn" style="padding-top:50px">



                                                <input type="submit" class="btn btn-success" name="sell" style="width:100px" id="dis" value="Sell">



                                            </td>
                                        </tr>
                                    </form>

                                    <?php

   
                               
         
         if(isset($_GET['sell'])) {
         
         
         $select_bid = $_GET['select_bid'];
         
         $bid = $row_pro['p_id'];
         $dis = $_GET['dis'];
             
             
           
         $s = "select * from bids where p_id = '$bid' and inserted_bid = '$select_bid'
               limit 1
               ";

         $run = mysqli_query($con, $s);
             
             

         while($row = mysqli_fetch_array($run)){
             
             $pid = $row['p_id'];
             $b_id = $row['b_id'];
             
             
             $user_email = $row['u_email'];
             $status = "pending";
             
             $reg = " insert into sold_product(p_id, b_id, selected_bid, b_email, status) values ('$pid', '$b_id', '$select_bid', '$user_email', '$status')";
             mysqli_query($con, $reg);
             
             
             
             $note = "a new deal is in pending";
             $type = "deal";
             $que = "INSERT INTO notification(note, type) VALUES ('$note', '$type')";
             mysqli_query($con, $que);
             
             
             
             
             
             ?>

                                    <style>
                                        .display:nth-of-type(<?php echo $col; ?>) {
                                            pointer-events: none;
                                            cursor: default;
                                            text-decoration: none;

                                            opacity: 0.6;


                                        }
                                    </style>
                                    <script>
                                        document.getElementById("dis").value = "Sold";
                                        document.getElementById("dis").style.backgroundColor = "#cccc23";
                                    </script>


                                    <?php
             
             
             
           
         
         
         }

         
         
         }
      $col++;   
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


    <script src="../js/app.js"></script>


</body>

</html>
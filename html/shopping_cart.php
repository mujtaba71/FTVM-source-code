<?php

session_start();
error_reporting(0);
if(!isset($_SESSION['userlogin'])){
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
   
    
     <link rel="manifest" href="../manifest.json">
      <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    
    

    <link rel="icon" href="../image/LogoSample_ByTailorBrands%20(1).jpg" type="image/png">
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

        .content {
            position: relative;
            top: 140px;
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
    </style>

</head>

<body>


    <!-- navbar-->
    <div class="page-row page-row-expanded">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top ">

                <a href="../FarmerDashboard/Farmer_dashboard.php" class="navbar-brand">
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
                <form action="shopping_cart.php" method="post" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-lg-12">
                        <h3>Shopping Cart</h3>
                        <hr>


                            <div class="table-responsive-sm">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
     
     include("DBcon.php");
     $email = $_SESSION['email'];
     

     $get_pro = " SELECT * from shopping_cart AS sc JOIN product as p
on sc.p_id = p.p_id
where sc.u_email = '$email'
GROUP BY sc.p_id ";

     $run_pro = mysqli_query($con, $get_pro);



     while($row_pro = mysqli_fetch_array($run_pro)){
    


     ?>




                                        <tr>
                                            <td> <img src="<?php echo $row_pro['image']; ?>" style="width:120px;"> </td>
                                            <td style="padding-top:80px;">
                                                <?php echo $row_pro['weight']; ?> kg
                                            </td>
                                            <td style="padding-top:80px;">
                                                <?php echo $row_pro['price']; ?> Af
                                            </td>


                                            <td style="padding-top:70px;">
                                                <p>Inserted Bid:</p>
                                                <?php echo $row_pro['inserted_bid']; ?>

                                            </td>
                                            <td style="padding-top:80px">



                                                <a href="shopping_cart.php?dltp=<?php echo $row_pro['id']?>"><i class="fas fa-trash-alt" style="color:red"></i></a>

                                                <a href="shopping_cart.php?addp=<?php echo $row_pro['id']?>" class="btn btn-success" style="width:40px; height:30px;"><i class="fas fa-check"></i></a>



                                            </td>
                                        </tr>



                                        <?php

     }
                               
     
     if(isset($_GET['dltp'])) {
                  include("DBcon.php");
                  $dltdata = " delete from shopping_cart where id = '$_GET[dltp]' ";
                  mysqli_query($con,$dltdata);
        
         
     }
                             
                             if(isset($_GET['addp'])) {
                                 
                                 ?>
                                 <script type='text/javascript'>
                                                  var a = document.getElementById("p_val").value;
                                                     </script>
                                 <?php
                                 
                                 $data = "select * from shopping_cart where id = '$_GET[addp]'";
                                
                                 $res = mysqli_query($con,$data);
                                 $array = mysqli_fetch_array($res);
                                 $pid = $array['p_id'];
                                 $uemail = $array['u_email'];
                                  $value = $array['inserted_bid'];
                                 
                                 $insert = " insert into bids(p_id, inserted_bid, u_email) values('$pid', '$value', '$uemail') ";
                                 mysqli_query($con,$insert);
                                 $dltdata = " delete from shopping_cart where id = '$_GET[addp]' ";
                                  mysqli_query($con,$dltdata);
                                 echo "<script type='text/javascript'> document.location = 'shopping_cart.php'; </script>";
                                 
                                 
                             }
     
     
     ?>


                                    </tbody>


                                </table>
                            </div>

                        </div>






                    </div>
                </form>
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
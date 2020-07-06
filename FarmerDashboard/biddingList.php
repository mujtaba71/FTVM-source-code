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
    <link rel="icon" href="../image/LogoSample_ByTailorBrands (1).jpg" type="image/png" />
    <!-- bootstrap link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    
    
    <link rel="manifest" href="../../../manifest.json">
      <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    
    
    <!-- font awesome -->
    <script src="../fontawesome-free-5.12.1-web/js/all.js"></script>
    <title>Bidding List</title>
    
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
 

    <!-- Table -->

     <div class="container-fluid content">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
            
            <h3>Bidding List</h3>
            <hr>
            


                <div class="table-responsive-sm">
                    <table class="table table-hover">
                    <thead>
                        <tr class="text-success">
                            <th>ID</th>
                            <th>Name</th>
                            <th>weight in KG/ton</th>
                            <th>your Bid</th>
                            <th>Expiry Date</th>
                            <th>Location</th>
                            <th>Picture</th>
                            <th><a href="#" class="text-success">Remove Bid</a> </th>
                        </tr>
                    </thead>

                    <?php
     
     include("../html/DBcon.php");
     $email = $_SESSION['email'];

     $get_pro = " SELECT * from bids AS b JOIN product as p on b.p_id = p.p_id and b.u_email = '$email' ";

     $run_pro = mysqli_query($con, $get_pro);

     $id = 1;

     while($row_pro = mysqli_fetch_array($run_pro)){
    


     ?>



                    <tbody>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $row_pro['name']; ?></td>
                            <td><?php echo $row_pro['weight']; ?>KG</td>
                            <td><?php echo $row_pro['inserted_bid']; ?></td>
                            <td><?php echo $row_pro['date']; ?></td>
                            <td><?php echo $row_pro['location']; ?></td>
                            <td><img src="../<?php echo $row_pro['image']; ?>" height="50px" width="50px" alt=""></td>
                            <td><a href="removebid.php?bidid=<?php echo $row_pro['b_id']?>" class="text-dark">Remove</a>

                            </td>
                        </tr> <?php 
         $id++;
     }
        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    


   
    <!-- end of table -->


    <?php

   function removebid() {
       
       
     include("../html/DBcon.php"); 
     $res = mysqli_query($con,"delete from bids where b_id = '$_GET[bidid]'");
     header('location:biddingList.php');
   }


?>
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


<script src="/js/app.js"></script>

</body>

</html>
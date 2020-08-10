<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['userlogin'])){
    header('location:../../html/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FTVM Logo -->
    <link rel="icon" href="../../image/LogoSample_ByTailorBrands (1).jpg" type="image/png">

    <!-- bootstrap link -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    
    
    <link rel="manifest" href="../../manifest.json">
      <!-- IOS Support --> 
    <link rel="apple-touch-icon" href="../../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    
    
    <!-- font awesome -->
    <script src="../../fontawesome-free-5.12.1-web/js/all.js"></script>
    <title>User Profile</title>

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
            top: 150px;

        }

        .content {

            position: relative;
            top: 140px;
        }



        .card {

            height: 400px;

            border: none;

        }

        .top {
            position: relative;
            top: 170px;
            background-color: #efefef;
            height: 550px;

        }

        .top1 {
            position: relative;
            top: 170px;
            background-color: #efefef;
            height: 250px;
            margin-left: 10px;

        }

        font {
            position: relative;
            left: 140px;
            top: 100px;
        }
    </style>
</head>

<body>
    <div class="page-row page-row-expanded">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top ">

                <a href="../Farmer_dashboard.php" class="navbar-brand">
                    <img src="../../image/LogoSample_ByTailorBrands (1).jpg" width="100px" height="100px" alt="Logo image" class="rounded-circle ">
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
                       <h3>
                           Owned Bids
                           <hr>
                       </h3>
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
         
    


     ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            
                                            <?php echo $number ?></td>
                                        
                                        <td><img src="../../<?php echo $row_pro['image'] ?>" style="width:200px; height:250px"> </td>
                                        

                                        <td>
                                            <div class="card" style="width:200px; height:250px;">
                                                <img class="card-img-top" src="<?php echo $ro['image'] ?>" alt="Card image" style=" height:150px;">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $ro['name']. " " .$ro['l_name'] ?></h5>
                                                    <a href="profile.php?seller=<?php echo $ro['id']; ?>">See Profile</a>
                                                    
                                                </div>
                                            </div>

                                        </td>
                                       
     

                                        <td><?php echo $row_pro['name'] ?></td>
                                        <td><?php echo $row_pro['price'] ?></td>
                                        <td><?php echo $row_pro['selected_bid'] ?></td>
                                        <td><a href="profile.php?seller=<?php echo $ro['id']; ?>" class="btn btn-warning">Contact Seller</a>
                                        </td>

                                    </tr>

                                </tbody>

                                <?php 
         $number++;
     } }
            ?>
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

<script src="../../js/app.js"></script>
</body>




</html>
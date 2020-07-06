<?php
error_reporting(0);
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FTVM Logo -->
    <link rel="icon" href="../image/LogoSample_ByTailorBrands (1).jpg" type="image/png" />
    <link rel="manifest" href="../manifest.json">
      <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    
    <!-- bootstrap link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- font awesome -->
    <script src="../fontawesome-free-5.12.1-web/js/all.js"></script>
    <title>About Us</title>
    
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
            top: 120px;

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
    <div class="container-fluid  content">
      <div class="row ">
        <div class="col-lg-12 ">
          
          <h3 class="pt-3 text-center text-warning">About us</h3>
          <h5 class="text-warning">FTVM</h5>
          <p>
            FTVM is a platform for farmers to sell their produces in online
            form. This platform gives farmers opportunity to find multiple
            dealers for a single product from different coutries.
          </p>
          <p>
            FTVM introduces a bidding system for farmer 's produces that gives a
            farmer to have multiple bid prices for his/her product. Then farmer
            can select a good bid(buyer price) to sell the product.
          </p>
        </div>
      </div>

      <div class="row pt-5 text-justify ">
        <div class="col-4">
          <h5 class="text-warning ">I want to sell</h5>
          <p>
            First you need to have an account to sign in. And provid all
            properties of your product such as product name, product intial
            price, expiry date, product image, product weight. Then go to
            <a href="add_product.html">add_product</a> section there is a form
            fill it and then press submit. This is all of the procedure for
            selling a product and wait for buyers offeres then select the best
            one out of all the list.
          </p>
        </div>
        <div class="col-4">
          <h5 class="text-warning">I want to buy</h5>
          <p>
            First you need to sign in whit your FTVM account if you do not have
            FTVM account you need to sign up then come to sign in page.Then go
            to search bar and type your favorite fruite or vegitable. Then place
            your bid and with till last that of bidding. then you will receive a
            notification either you won the product or lose it.
          </p>
        </div>

        <div class="col-4">
          <h5 class="text-warning">Bidding system</h5>
          <p>
            Bidding system help farmers to find more buyers for their product.
            whenever a farmer upload his/her product he/she place initial bid
            for that product and waits for customers offer till end of bidding
            expiry date of product. And finally selects the best bid price out
            of all.Then bidding system sends notification to all involved users
            in the bidding list.
          </p>
        </div>
      </div>
    </div>
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
    
   <script src="../js/app.js"></script>
   
    <!-- End of Footer -->
  </body>
</html>

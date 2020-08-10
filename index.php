<?php
session_start();
error_reporting(0);




include("html/DBcon.php");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#FFE1C4">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- PWA file --> 
    
    <link rel="manifest" href="/manifest.json">
    <!-- IOS Support -->
    <link rel="apple-touch-icon" href="image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    
    
    <link rel="icon" href="image/LogoSample_ByTailorBrands (1).jpg" type="image/png">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="chatbot/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- font awesome -->
    <script src="js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title>Farmer Traders Virtual Market</title>
    <style>
        .bg-model {

            width: 100%;
            height: 100%;

            background-color: black;
            opacity: 0.9;
            position: absolute;
            top: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            display: none;

        }


        .model-content {

            width: 800px;
            height: 500px;
            background-color: white;
            padding-top: 30px;
            border-radius: 25px;
            position: relative;
        }

        .pd {
            text-align: center;
            align-content: center;
            padding-left: 10px;
        }

        .close {
            position: absolute;
            top: 7px;
            right: 7px;
            font-size: 35px;
            color: red;


        }

       
        .ccloose {
            position: absolute;
            top: 7px;
            right: 7px;
            font-size: 35px;
            color: red;


        }

        footer {
            width: 100%;

            position: relative;
            left: 0;
            bottom: 0;
            top: 150px;


            text-align: center;


        }

        html,
        body {
            height: 100%;
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
        }
        
               @media only screen and (max-width: 1023px) {
            .simplepic {
                position: relative;
                top: 100px;
            }

            .tit {
                position: relative;
                top: 90px;

            }

            .contall {
                position: relative;
                top: 55px;

            }
        }
    </style>


</head>

<body>

    <div class="ex1">
        <!-- navbar-->
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top ">

            <a href="index.php" class="navbar-brand">
                <img src="image/LogoSample_ByTailorBrands (1).jpg" width="100px" height="100px" alt="Logo image" class="rounded-circle ">
            </a>

            <button type="button" class="navbar-toggler text-success" data-toggle="collapse" data-target="#nav">
                <span class="navbar-toggler-icon "></span></button>

            <div class="collapse navbar-collapse justify-conten-between" id="nav">

                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-success text-uppercase  px-3" href="#feedback">FEEDBACK</a></li>


                    <!--  <li class="nav-item"><a class="nav-link text-success text-uppercase  px-3" href="html/add_product.php">add product</a> 
                </li>-->



                    <li class="nav-item"><a class="nav-link text-success text-uppercase  px-3" href="FarmerDashboard/about.php">About US</a></li>

                    <!-- Location Dropdown -->
                    <!--  <li class="nav-item dropdown"><a class="nav-link text-success dropdown-toggle text-uppercase px-3" href="#" data-toggle="dropdown">Country</a>

                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Afghanistan</a></li>
                        <li class="dropdown-item"><a href="#">Tajikistan</a></li>
                        <li class="dropdown-item"><a href="#">Uzbikistan</a></li>
                        <li class="dropdown-item"><a href="#">Turkmanistan</a></li>
                        <li class="dropdown-item"><a href="#">Oman</a></li>
                        <li class="dropdown-item"><a href="#">Qatar</a></li>
                        <li class="dropdown-item"><a href="#">Pakistan</a></li>
                        <li class="dropdown-item"><a href="#">Iran</a></li>
                        <li class="dropdown-item"><a href="#">India</a></li>
                        <li class="dropdown-item"><a href="#">China</a></li>

                    </ul>
                </li> -->
                    <!-- End Location Dropdown -->



                </ul>




                <!-- Creating a form for search -->

                <form action="index.php" method="get" class="form-inline ml-3 mr-3">

                    <div class="input-group text-success">
                        <input type=" text" name="search" placeholder="Search" class="form-control  border-success">



                        <button type="submit" name="btn" class="btn btn-outline-success btn-sm"><i class="fas fa-search "></i>
                        </button>


                    </div>


                </form>



                <!-- My account dropdown -->

                <div class="dropdown ml-auto">
                    <a href="#" class="dropdown-toggle nav-link text-success " data-toggle="dropdown">MY ACCOUNT</a>

                    <ul class="dropdown-menu">
                        <li class="dropdown-item"> <a href="html/login.php"> LOG IN</a> </li>
                        <li class="dropdown-item"> <a href="html/signup.php">Sign Up</a></li>
                    </ul>
                </div>


                <!--End of My account dropdown -->



            </div>
        </nav>
        <!-- End of navbar -->





        <div class="page-row page-row-expanded">
            <div class="container-fluid">
                <!-- this is a simple picture -->

                <div>
                    <img src="image/bg-image.png" class="image-fluid simplepic" style="width: 100%;" alt="just pic">
                </div>
                <!-- end simple picture -->


 


                <!--Section products -->


                <section class="p-sm-5  bg-light   pro-margin">

                    <!-- Title -->

                    <div class="container-fluid">
                        <!-- title -->
                        <div class="row">
                            <div class="col tit text-center mb-3">
                                <h2 class="display-4 text-warning">Our Products</h2>
                                <p class="lead text-dark">Your satisfaction is our goal.</p>

                            </div>
                        </div>
                        <!-- End of title -->


                        <div class="row contall">
                            <!-- First card -->

                            <!-- for fetching data from database and search functionality -->



                            <?php


                include("html/DBcon.php");
                
                if(isset($_GET['btn'])){
                    
                    $search_query = $_GET['search'];
                    
                    $get_pro = " select * from product where name like '%$search_query%' AND date > now() ";
                    
                    $run_pro = mysqli_query($con, $get_pro);
                    
                
                    
                    while($row_pro = mysqli_fetch_array($run_pro)){
                      ?>

                            <div class="col-lg-3 mb-3">
                                <div class="card">
                                    <img src="html/<?php echo $row_pro["image"]; ?>" height="220px" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <div class="card-title mb-5">
                                            <h4 class=" text-center text-muted"><?php echo $row_pro["name"]; ?></h4>
                                        </div>
                                        <div class="card-sub-title">

                                            <div class="mb-3">
                                                <p class="d-inline mr-5 text-muted"><i class="fas fa-money-bill-alt mr-2 text-info"></i><?php echo $row_pro["price"]; ?> Af</p>
                                                <p class="d-inline mb-3 ml-4 text-muted"><i class="fas fa-weight mr-2 text-primary"></i><?php echo $row_pro["weight"]; ?>
                                                    Kg</p>

                                            </div>

                                            <div class="mb-4">
                                                <p class="d-inline text-muted"> <i class="fa fa-map-marker-alt mr-2 text-warning"></i><?php echo $row_pro["location"]; ?></p>
                                                <p class="d-inline float-right text-muted"> <i class="far fa-calendar-alt text-danger"></i><?php echo $row_pro["date"]; ?>
                                                </p>

                                            </div>



                                            <form action="index.php" method="get" onsubmit="return validate()">

                                                <div>
                                                    <a href="popup_func.php?pid=<?php echo $row_pro['ID']; ?>" class="btn btn-sm btn-outline-success">Insert Bid</a>





                                                    <a href="popup_func.php?pid=<?php echo $row_pro['ID']; ?>" class="btn btn-sm btn-outline-success float-right">More</a>






                                                </div>

                                            </form>




                                        </div>
                                    </div>

                                </div>

                            </div>

                            <?php  
                        
                    }
                    
                    
                } else{
                
                
                ?>



                            <?php
                
                
                $res = mysqli_query($con,"select * from product where date > now()");
                $pp_id= 1;    
                while($row = mysqli_fetch_array($res))
                {
                    ?>


                            <div class="col-lg-3 mb-3">
                                <div class="card">
                                    <img src="html/<?php echo $row["image"]; ?>" height="220px" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <div class="card-title mb-5">

                                            <script>
                                                var name = <?php echo $row["name"]; ?>;
                                            </script>



                                            <h4 class=" text-center text-muted">
                                                <script>
                                                    console.log(name);
                                                </script>
                                            </h4>
                                        </div>
                                        <div class="card-sub-title">

                                            <div class="mb-3">
                                                <p class="d-inline mr-5 text-muted"><i class="fas fa-money-bill-alt mr-2 text-info"></i><?php echo $row["price"]; ?> Af</p>
                                                <p class="d-inline mb-3 ml-4 text-muted"><i class="fas fa-weight mr-2 text-primary"></i><?php echo $row["weight"]; ?>
                                                    Kg</p>

                                            </div>

                                            <div class="mb-4">
                                                <p class="d-inline text-muted"> <i class="fa fa-map-marker-alt mr-2 text-warning"></i><?php echo $row["location"]; ?></p>
                                                <p class="d-inline float-right text-muted"> <i class="far fa-calendar-alt text-danger"></i><?php echo $row["date"]; ?>
                                                </p>

                                            </div>




                                            <form action="index.php" method="get" onsubmit="return validate()">

                                                <div>
                                                    <!--   <button type="submit" class="btn btn-sm btn-outline-success" id="dett" name="bttnn" value="" >Insert Bid</button> -->







                                                   







                                                </div>

                                            </form>








                                        </div>
                                    </div>

                                </div>

                            </div>



                            <?php
                   
                    
                }
               
                    
                }
                ?>







                            <!-- End of first card -->


                            <!-- for showing details of product -->








                        </div>

                    </div>


                </section>
                <!-- End of product Section -->










                <div class="bg-model">
                    <div class="model-content">


                        <div class="pd">
                            <div class="container">

                                <div class="row">




                                    <?php
                
                
                $res = mysqli_query($con,"select * from product where p_id = '$_GET[pid]'");
                  
                while($row = mysqli_fetch_array($res))
                { ?>


                                    <div class="col-md-6">

                                        <img src="html/<?php echo $row["image"]; ?>" style="width: 400px;">



                                    </div>
                                    <div class="col-md-4">

                                        <h1><?php echo $row["name"]; ?></h1>
                                        <p><strong>Description:</strong><br> <?php echo $row["description"]; ?></p>
                                        <label for="prce"><strong>Starting Price:</strong> <?php echo $row["price"]; ?> AF</label><br>

                                        <!--   <input type="number" class="form-control" id="place bid" aria-describedby="emailHelp" placeholder="Inser your Bid Here!" style="width: 218px;">
                                    <button type="submit" class="btn btn-success">Place Bid</button>
                                    
                                    <a href="html/cart.php?pid=<?php echo $row['P_ID']; ?>" class="btn btn-dark" ><i class="fa fa-shopping-cart" style="color:red"></i>Add to Cart</a> -->










                                    </div>

                                    <form action="index.php" method="get" onsubmit="return validate()">


                                        <div class="close">

                                            <button type="submit" class="close" aria-label="Close" name="cloosee">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </form>


                                    <?php
                
                }
                        
                        ?>






                                </div>



                            </div>
                        </div>
                    </div>
                </div>

                <!-- this is for more and place bid buttons -->



                <?php 
        
                function writeMsg() {
                    
                    ?>
                <script>
                    document.querySelector('.bg-model').style.display = 'flex';
                </script>

                <?php
    
}
        
        ?>


                <?php 
        
        if(isset($_GET['add_to_cart']))
        
        ?>









                <!-- Section skills -->
                

                <section class="p-5 bg-light">
                    <div class="container-fluid">
                        <!-- Title -->

                        <div class="container-fluid">
                            <!-- title -->
                            <div class="row">
                                <div class="col text-center mb-3">
                                    <h5 class="display-4 text-warning">Our best farmers</h5>
                                    
                                  
                                    
                                   

                                </div>
                            </div>
                            <!-- End of title -->

                            <div class="row">
                                <div class="col-lg-3 col-sm-6 ">
                                    <img src="image/f2.jpg" class="img-thumbnail" height="500">
                                    <h6 class=" my-3 text-warning">Robbina</h6>
                                    <p class="text-muted">She is one of our best farmers. She sold more than five product and customers
                                        are vary satisfied from his products.
                                    </p>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <img src="image/farmer1.jpg" class="img-thumbnail">
                                    <h6 class=" my-3 text-warning">Hamza kaif</h6>
                                    <p class="text-muted">He is one of our best farmers. He sold more than ten product and customers
                                        are vary satisfied from his products.
                                    </p>
                                </div>

                                <div class="col-lg-3 col-sm-6 ">
                                    <img src="image/f4.jpg" class="img-thumbnail">
                                    <h6 class=" my-3 text-warning">shazia sharif</h6>
                                    <p class="text-muted">She is one of our best farmers. She sold more than six product and customers
                                        are vary satisfied from his products.
                                    </p>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <img src="image/young-indian-farmer-field_75648-63.jpg" class="img-thumbnail">
                                    <h6 class=" my-3 text-warning">Nabil kaya</h6>
                                    <p class="text-muted">He is one of our best farmers. He sold more than six product and customers
                                        are vary satisfied from his products.
                                    </p>
                                </div>



                            </div>


                </section>
                <!-- End of Projects -->

                <!-- Team -->


                <section class="p-sm-5 p-2 bg-secondary">

                    <!-- Title -->

                    <div class="container-fluid">
                        <!-- title -->
                        <div class="row">
                            <div class="col text-center mb-3">
                                <h1 class="display-3 text-warning">Our Team</h1>
                              
                            </div>
                        </div>
                        <!-- End of title -->

                        <div class="row">

                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="image/Mujtaba.jpg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-secondary">Mujtaba Ahmadi</h3>
                                        </div>
                                        <div class="card-sub-title">
                                            <p class="text-muted lead">Backend developer.</p>
                                            <div class="text-right">
                                                <a href="https://www.facebook.com/profile.php?id=100005829769140"><i class="fab fa-facebook fa-2x mx-2 text-primary "></i></a>
                                                <a href="#"><i class="fab fa-twitter fa-2x mx-2 text-info"></i></a>
                                                <a href="https://www.youtube.com/watch?v=ZmF14fSHo6k&list=RDZmF14fSHo6k&start_radio=1"><i class="fab fa-youtube fa-2x mx-2 text-danger"></i></a>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>



                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="image/Mahboob.jpg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-secondary">Mahboob Ullah</h3>
                                        </div>
                                        <div class="card-sub-title">
                                            <p class="text-muted lead">Frontend developer.</p>
                                            <div class="text-right">
                                                <a href="https://www.facebook.com/mahboob.Hazraty"><i class="fab fa-facebook fa-2x mx-2 text-primary "></i></a>
                                                <a href="#"><i class="fab fa-twitter fa-2x mx-2 text-info"></i></a>
                                                <a href="https://www.youtube.com/watch?v=q_0uF80IZXM"><i class="fab fa-youtube fa-2x mx-2 text-danger"></i></a>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>




                            <div class="col-lg-3">
                                <div class="card">
                                    <img src="image/shabir.jpg" height="150px" width="150px" class="card-img-top rounded-circle" alt="">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-secondary">Shabir Ahmad</h3>
                                        </div>
                                        <div class="card-sub-title">
                                            <p class="text-muted lead">Testing and data collection of project.</p>
                                            <div class="text-right">
                                                <a href="https://www.facebook.com/profile.php?id=100005340497509"><i class="fab fa-facebook fa-2x mx-2 text-primary "></i></a>
                                                <a href="#"><i class="fab fa-twitter fa-2x mx-2 text-info"></i></a>
                                                <a href="https://www.youtube.com/watch?v=7YD8-Xp6lNA"><i class="fab fa-youtube fa-2x mx-2 text-danger"></i></a>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                </section>

                <!--End of team-->



                <!-- Progress section -->

              
                <!-- End of progress -->

                <!-- contact us -->

            <!-- End of contact us -->




            <!-- Chatbot -->



    
                        
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

                    <h2 class="text-black font-weight-light text-capitalize">Farmer and trader 's Virtual Market</h2>
                    <p class="text-black font-weight-light font-italic">Social media Links</p>
                    <div class="my-4">
                        <a href="#"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-2x text-warning mx-3"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-2x text-danger mx-3"></i></a>
                    </div>

                    <p class="text-black py-2 m-0">&copy;Copy right 2020</p>
                </div>


            </div> <!-- end row -->

        </div> <!-- end container -->
    </footer>
    <!-- End of Footer -->

    </div>



    <!-- jquery -->
    
    <script src="/js/app.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- script js -->
    


</body>

</html>
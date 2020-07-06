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

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FTVM Logo -->
    <link rel="icon" href="../image/LogoSample_ByTailorBrands (1).jpg" type="image/png">
    
    
     <link rel="manifest" href="../manifest.json">
      <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    

    <!-- bootstrap link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- font awesome -->
    <script src="../fontawesome-free-5.12.1-web/js/all.js"></script>

    <title>editpro</title>
    
    
        <style>
        .container {


            position: absolute;
            top: 120px;
            left: 300px;



        }

        .detail {

            position: absolute;
            top: 40px;

        }
    </style>

</head>

<body>







    <?php
error_reporting(0);
session_start();

    include("../html/DBcon.php");
   
    $pid = $_SESSION['ppid'];
    
    $get_pro = " select * from product where p_id = '$pid' ";
                    
    $run_pro = mysqli_query($con, $get_pro);
                            
 
                    
    
    
    while($row_pro = mysqli_fetch_array($run_pro)){
                      ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">


                <div class="card">
                    <img src="../html/<?php echo $row_pro["image"]; ?>" height="220px" class="card-img-top" alt="">
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
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-sm-4">
                <div class="card detail">
                    <form action="editp.php" method="get" enctype="multipart/form-data">

                        <input type="number" placeholder="Change Price" class="form-control" id="pr" name="price"><br>
                        <input type="number" placeholder="Change Weight" class="form-control" id="we" name="weight"><br>
                        <input type="text" placeholder="Change Location" class="form-control" id="lo" name="location"><br>
                        <input type="date" placeholder="Change Date" class="form-control" id="dt" name="Date"><br>
                        <input type="file" placeholder="Change image" class="form-control" id="img" name="p_image">
                        <input type="submit" value="Update" class="form-control btn btn-success" id="pr" name="submit">
                    </form>
                </div>
            </div>

        </div>

    </div>




    <?php
                                }

?>



<?php
    
    if(isset($_GET['submit'])) {
        
        include("../html/DBcon.php");
   
        $pid = $_SESSION['ppid'];
        $price = $_GET['price'];
        $weight = $_GET['weight'];
        $location = $_GET['location'];
        $date = $_GET['Date'];
        
        $filename = $_FILES["p_image"]["name"];
        $tempname = $_FILES["p_image"]["tmp_name"];
        $folder = "../html/image/".$filename;
        
        move_uploaded_file($tempname, $folder);
        
        $query = " UPDATE product SET price = '$price', weight = '$weight', location = '$location', date = '$date' image = '$folder'  where p_id = '$pid' ; ";
        $data = mysqli_query($con, $query);
        
        
        
        
        
        
    }
    
    header('location:../FarmerDashboard/manageProduct.php');
    ?>















<script src="../js/app.js"></script>

</body>

</html>
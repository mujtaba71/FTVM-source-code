<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['userlogin'])){
    header('location:../html/login.php');
}


include("../html/DBcon.php");




if(isset($_POST['pb'])){
    
    $bid_value = $_POST['bid_value'];
    $pid = $_SESSION["pid"];
    $email = $_SESSION['email'];
    $reg = " insert into bids(p_id, inserted_bid, u_email) values ('$pid', '$bid_value', '$email')";
    mysqli_query($con, $reg);
    $a = "select name,u_email from product where p_id = '$pid'";
    $b = mysqli_query($con, $a);
    $e = mysqli_fetch_array($b);
    $f = $e['name'];
    $k = $e['u_email'];
    
    $c = "$bid_value is a new bid for $f";
    $d = "bid";
    $areg = " insert into notification(note, type, email) values ('$c', '$d', '$k')";
    mysqli_query($con, $areg);
    
    header('location:Farmer_dashboard.php');
    
    ?>
<script>
    alert "good!";
</script>




<?php
    
    
    
    
    
}


elseif(isset($_POST['adc'])){
    
    $_SESSION['inserted_bid'] = $_POST['bid_value'];
    header('location:../html/cart.php');
    
}


?>
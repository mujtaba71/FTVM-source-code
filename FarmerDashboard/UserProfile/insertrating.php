



<?php
error_reporting(0);
session_start();






include("../../html/DBcon.php");

if(isset($_SESSION['star1'])) {
    echo "yess";
    session_destroy();
    exit;
}
else {
$stars = $_SESSION['star1'];
$ratedby = $_SESSION['email'];
$uid = $_SESSION['ratedto'];

echo $stars;
echo $ratedby;
echo $uid;

$reg = " insert into userrating(uid, ratedby, stars) values ('$uid', '$ratedby', '$stars')";
    $data = mysqli_query($con, $reg);



}





?>
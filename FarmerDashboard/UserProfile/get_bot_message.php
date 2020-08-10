<?php

date_default_timezone_set('Asia/Kolkata');

error_reporting(0);
session_start();




include('../../html/DBcon.php');
$txt=mysqli_real_escape_string($con,$_POST['txt']);


$added_on=date('Y-m-d h:i:s');
$receiver = $_SESSION['receiver'];
$sender = $_SESSION['sender'];
mysqli_query($con,"insert into message(message,added_on,sender,receiver) values('$txt','$added_on','$sender','$receiver')");

echo $html;
?>





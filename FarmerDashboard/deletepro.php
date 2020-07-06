<?php

error_reporting(0);
session_start();
include('../html/DBcon.php');


$_SESSION['ppid'] = $_GET[pid];

$pid = $_SESSION['ppid'];

$s = " delete from product where p_id = '$pid' ";

$result = mysqli_query($con, $s);

include("Farmer_dashboard.php");
deletealert();



?>

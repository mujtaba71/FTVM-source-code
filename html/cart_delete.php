<?php

error_reporting(0);
session_start();
include('DBcon.php');


$_SESSION['id'] = $_GET[id];

$id = $_SESSION['id'];

$s = " delete from shopping_cart where id = '$id' ";

$result = mysqli_query($con, $s);

header('location:shopping_cart.php');



?>

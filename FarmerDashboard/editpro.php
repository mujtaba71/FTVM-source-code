<?php

error_reporting(0);
session_start();



$_SESSION['ppid'] = $_GET[pid];

header('location:editp.php');

?>



 
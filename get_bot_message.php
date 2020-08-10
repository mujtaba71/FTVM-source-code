<?php
date_default_timezone_set('Asia/Kolkata');
include('html/DBcon.php');
$txt=mysqli_real_escape_string($con,$_POST['txt']);
$sql="select reply from chatbot_hints where question like '%$txt%'";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	$html=$row['reply'];
}else{
	$html="Sorry not be able to understand you";
}

echo $html;
?>
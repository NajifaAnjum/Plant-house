<?php
require_once("connect.php");

$userInputName=$_REQUEST["usrname"];
$userInputpswd=$_REQUEST["pswd"];

$matchQuery="SELECT * FROM admin WHERE email_addr='$userInputName' AND user_pswd='$userInputpswd'";
$runMatchQuery=mysqli_query($connect,$matchQuery);
$checkCount=mysqli_num_rows($runMatchQuery);

if($runMatchQuery==true){
	
if($checkCount===1){	
	header("location: 1.ad_dashboard.html");
}
else{
	header("location: 4.admin_login.php");
}
}
?>
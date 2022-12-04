<?php

$connect=mysqli_connect('localhost','root','','plant');

$getID = $_REQUEST["c_id"];
$dltquery = "DELETE FROM category WHERE c_id=$getID";

$runDltquery = mysqli_query($connect,$dltquery);
if($runDltquery==true){
	header("location: 2.admin_category.php?deleted");
}

$o_id = $_REQUEST["o_id"];
$dltquery = "DELETE FROM order WHERE o_id=$o_id";

$runDltquery = mysqli_query($connect,$dltquery);
if($runDltquery==true){
	header("location: 12.order.php?deleted");
}

?>
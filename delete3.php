<?php

$connect=mysqli_connect('localhost','root','','plant');


$order_id = $_REQUEST["order_id"];
$dltquery = "DELETE FROM order WHERE o_id=$order_id";

$runDltquery = mysqli_query($connect,$dltquery);
if($runDltquery==true){
	header("location: 12.order.php?deleted");
}
?>
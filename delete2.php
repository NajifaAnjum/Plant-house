<?php

$connect=mysqli_connect('localhost','root','','plant');

$getID = $_REQUEST["plants_id"];
$dltquery = "DELETE FROM plants WHERE plants_id=$getID";

$runDltquery = mysqli_query($connect,$dltquery);
if($runDltquery==true){
	header("location: 3.admin_plants.php?deleted");
}

?>
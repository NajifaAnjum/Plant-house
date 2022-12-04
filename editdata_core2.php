<?php

$connect=mysqli_connect('localhost','root','','plant');
 
 if(isset($_REQUEST["editButton"])){
	 
	
	
	$c_name = $_REQUEST["c_name"];
	$c_id = $_REQUEST["c_id"];
	
	$name = $_REQUEST["name"];
	$plants_price = $_REQUEST["plants_price"];
	$plants_details = $_REQUEST["plants_details"];
	$editingID = $_REQUEST["editingID"];
	$image = $_REQUEST["image"];
	
	
	$imagename=$_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$uploc = 'images/'.$imagename;
	
	$upquery = "UPDATE plants SET c_name='$c_name',c_id=$c_id, plants_image='$imagename', plants_name=$name,plants_price=$plants_price,plants_details=$plants_details WHERE plants_id=$editingID";
	
	$runquery = mysqli_query($connect,$upquery);
	if($runquery==true){
		header("location:3.admin_plants.php?edited");
	}
 }


?>
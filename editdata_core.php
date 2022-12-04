<?php

$connect=mysqli_connect('localhost','root','','plant');
 
 if(isset($_REQUEST["editButton"])){
	 
	$name = $_REQUEST["name"];
	$image = $_REQUEST["image"];
	$editingID = $_REQUEST["editingID"];
	
	$imagename=$_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$uploc = 'images/'.$imagename;
	
	$upquery = "UPDATE category SET c_name='$name',c_pic='$imagename' WHERE c_id=$editingID";
	
	$runquery = mysqli_query($connect,$upquery);
	if($runquery==true){
		header("location:2.admin_category.php?edited");
	}
 }


?>
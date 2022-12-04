<!--connection and insert into database-->
<?php

$connect=mysqli_connect('localhost','root','','plant');

//form theke data niche and datagulak variable e rakha
if(isset($_POST['submit'])){  

$c_name=$_POST['c_name'];
$c_id=$_POST['c_id'];		
$plants_name=$_POST['plants_name'];	
$plants_price=$_POST['plants_price'];	
$plants_details=$_POST['plants_details'];
	

$imagename=$_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$uploc = 'images/'.$imagename;
							
}

//variable er valuegulake insert kora
$insertQuery="INSERT INTO plants(c_name,c_id,plants_image,plants_name,plants_price,plants_details)
VALUES('$c_name','$c_id','$imagename','$plants_name','$plants_price','$plants_details')";

$runQuery=mysqli_query($connect,$insertQuery);
if($runQuery==true)
{
	move_uploaded_file($tmpname,$uploc);
	header("location:3.admin_plants.php");
	
}
else
{
	echo "not uploaded";
}



?>


<!--connection and insert into database-->
<?php

$connect=mysqli_connect('localhost','root','','plant');

//form theke data niche and datagulak variable e rakha
if(isset($_POST['submit'])){  

$name=$_POST['name'];	

$imagename=$_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$uploc = 'images12/'.$imagename;
							
}

//variable er valuegulake insert kora
$insertQuery="INSERT INTO category(c_name,c_pic)
VALUES('$name','$imagename')";

$runQuery=mysqli_query($connect,$insertQuery);
if($runQuery==true)
{
	move_uploaded_file($tmpname,$uploc);
	header("location:2.admin_category.php");
	
}
else
{
	echo "not uploaded";
}



?>


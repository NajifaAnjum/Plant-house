<!--form-->
<html>
<head>
		<link href="css/admin.css" rel="stylesheet" type="text/css">
	</head>
	<?php
	$connect=mysqli_connect('localhost','root','','plant');
	if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `plants` WHERE plants_id = '$remove_id'");
   header('location:3.admin_plants.php');
};
	?>
<body>
<div class="container">
        <div class= "sidebar">
		   
			<a href="1.ad_dashboard.html"><h1>#Admin</h1></a>
			<div class="admin_profile">
				<img src="images1/badhon.jpg"/>
				<h3>Afrina Rashid</h3>
				
			</div>
			<ul>
			<li><a href="7.user_page1.php">Home</a></li>
	    	<li><a href="1.ad_dashboard.html">Dashboard</a></li>
			<li><a href="2.admin_category.php">Category</a></li>
			<li><a href="3.admin_plants.php">Plants</a></li>
			<li><a href="12.order.php">Order</a></li>
			<li><a href="">Plant's Care</a></li>
			
			<li><a href="">About Us</a></li>
			</ul>
    	</div>

		<div class="category">
		<table>
			<form action="plants_process.php" method="POST" enctype="multipart/form-data" >
			
			<tr>
				<td style="color:black; font-size:20px;"> Category Name </td>
				<td><input class="l" type="text" name="c_name" placeholder="Enter Your Category name" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Category Id </td>
				<td><input class="l" type="text" name="c_id" placeholder="Enter Your Category id" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Plant Name </td>
				<td><input class="l" type="text" name="plants_name" placeholder="Enter Your Plant name" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Price </td>
				<td><input class="l" type="text" name="plants_price" placeholder="Enter price" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Picture </td>
				<td><input class="l" type="file" name="image" size="50" placeholder="Enter Your Picture" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Plants Details </td>
				<td><input class="l" type="text" name="plants_details" size="50" placeholder="Enter Your Plants Details" ></td>
			</tr>
			<tr>
			<td><input type="submit" name="submit" value="submit"/></td>
			</tr>
			</form>
		</table>	
        
		


	<div class="content-table">
	<!--data show-->
	<?php
	$connect=mysqli_connect('localhost','root','','plant');
	$query="SELECT * FROM plants ORDER BY plants_id DESC";
	$result=mysqli_query($connect,$query);
	?>

		<table align="center"  style="width:1100px; line-height:60px;">
		<tr>
		<th colspan="6"><h1 style="font-family:tahoma; color:black;"><u>Plants</u></h1></th>
		</tr>
		
		<tr>
		<th style="color:black;">Category Name</th>
		<th style="color:black;">Plant Name</th>
		<th style="color:black;">Price</th>
		<th style="color:black;">Plant Image</th>
		<th colspan="2" style="color:black;">Action</th>
		</tr>
		<?php
		
			while($rows=mysqli_fetch_array($result))
			{
			$image= $rows['plants_image']; 
		?>
	<tr>
	    

		<td align="center" style="color:black;"><?php echo $rows['c_name'];?></td>
		<td align="center" style="color:black;"><?php echo $rows['plants_name'];?></td>
		<td align="center" style="color:black;"><?php echo $rows['plants_price'];?></td>
		<td align="center" style="color:black;"><?php echo "<img src='images/$image' class='img'>";?></td>
		<td align="center" style="color:black;"> <a href="editdata2.php?edit_id=<?php echo $rows["plants_id"];?>">Edit</a></td>
		<td align="center" style="color:black;"> <a href="delete2.php?plants_id=<?php echo $rows['plants_id'];?>">Delete</a></td>
		
	</tr>
	<?php
		}
	?>
			</table>
	</div>
</div>	
</body>
</html>

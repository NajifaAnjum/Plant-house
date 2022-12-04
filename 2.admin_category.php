<!--form-->
<html>
<head>
		<link href="css/admin.css" rel="stylesheet" type="text/css">
		
	</head>
	
<body>
<div class="container">
        <div class= "sidebar">
		   
			<a href="1.admin_dashboard.php"><h1>#Admin</h1></a>
			<div class="admin_profile">
				<img src="images1/badhon.jpg"/>
				<h3>Afrina Rashid</h3>
				
			</div>
			<ul>
			<li><a href="7.user_page1.html">Home</a></li>
	    	<li><a href="1.ad_dashboard.html">Dashboard</a></li>
			<li><a href="2.admin_category.php">Category</a></li>
			<li><a href="3.admin_plants.php">Plants</a></li>
			<li><a href="12.order.php">Order</a></li>
			<li><a href="">Plant's Care</a></li>
			
			</ul>
    	</div>

		<div class="category">
		<table>
			<form action="process.php" method="POST" enctype="multipart/form-data" >
			
			
			<tr>
				<td style="color:black; font-size:20px; font-family:tahoma; ">Category </td>
				<td><input class="l" type="text" name="name" placeholder="Enter Your Category name" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px; font-family:tahoma; ">Picture </td>
				<td><input class="l" type="file" name="image" size="50" placeholder="Enter Your Picture" ></td>
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
	$query="SELECT * FROM category ORDER BY c_id DESC";
	$result=mysqli_query($connect,$query);
	?>

	<table align="center"  style="width:1100px; line-height:60px; border-radius:10px solid blue;">
		
		<tr>
			<th colspan="6"><h1 style="font-family:tahoma; color:black;"><u>Category</u></h1></th>
		</tr>
		
		<tr>
			<th style="color:black;">ID</th>
			<th style="color:black;">Name</th>
			<th style="color:black;">Image</th>
			<th colspan="2" style="color:black;">Action</th>
		</tr>
		<?php
		
			while($rows=mysqli_fetch_array($result))
			{
			$image= $rows['c_pic']; 
		?>
		<tr>
	    
			<td align="center" style="color:black;"><?php echo $rows['c_id'];?></td>
			<td align="center" style="color:black;"> <a href="plants.php?c_id=<?php echo $rows['c_id'];?>"><?php echo $rows['c_name'];?></a></td>
			<td align="center" style="color:black;"><?php echo "<img src='images/$image' class='img'>";?></td>
			<td align="center" style="color:black;"> <a href="editdata.php?edit_id=<?php echo $rows["c_id"];?>">Edit</a></td>
			<td align="center" style="color:black;"> <a href="delete.php?c_id=<?php echo $rows['c_id'];?>">Delete</a></td>
		
		</tr>
	<?php
		}
	?>
	</table>
	</div>
</div>	
</body>
</html>

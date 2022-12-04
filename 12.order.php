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
			
			<li><a href="">About Us</a></li>
			</ul>
    	</div>

		
        
		


	<div class="content-table">
	<!--data show-->
	<?php
	$connect=mysqli_connect('localhost','root','','plant');
	$query="SELECT * FROM `order`";
	$results=mysqli_query($connect,$query);
	?>

	<table align="center"  style="width:1100px; line-height:60px; border-radius:10px solid blue;">
		
		<tr>
			<th colspan="6"><h1 style="font-family:tahoma; color:black;"><u>Order</u></h1></th>
		</tr>
		
		<tr>
			<th style="color:black;">Name</th>
			<th style="color:black;">Number</th>
			<th style="color:black;">Email</th>
			<th style="color:black;">Method</th>
			<th style="color:black;">City</th>
			<th style="color:black;">Address</th>
			<th style="color:black;">Total products</th>
			<th style="color:black;">Total price</th>
			<th colspan="2" style="color:black;">Action</th>
		</tr>
		<?php
		
			while($rows=mysqli_fetch_assoc($results)){
			
			
		?>
		<tr>
	    
			<td align="center" style="color:black;"><?php echo $rows['name'];?></td>
			<td align="center" style="color:black;"><?php echo $rows['number'];?></a></td>
			<td align="center" style="color:black;"><?php echo $rows['email'];?></a></td>
			<td align="center" style="color:black;"><?php echo $rows['method'];?></a></td>
			<td align="center" style="color:black;"><?php echo $rows['city'];?></a></td>
			<td align="center" style="color:black;"><?php echo $rows['address'];?></a></td>
			<td align="center" style="color:black;"><?php echo $rows['total_products'];?></a></td>
			<td align="center" style="color:black;"><?php echo $rows['total_price'];?></a></td>
			
			
			<td align="center" style="color:black;"> <a href="delete3.php?order_id=<?php echo $rows['o_id'];?>">Delete</a></td>
		
		<?php
			}
		?>
		</tr>
	
	</table>
	</div>
</div>	
</body>
</html>

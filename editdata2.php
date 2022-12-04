<!--form-->
<html>
<head>
		<link href="admin_category.css" rel="stylesheet" type="text/css">
	</head>
	
<body>

<?php

$connect=mysqli_connect('localhost','root','','plant');

if(isset($_REQUEST["edit_id"])){
	
	$editID = $_REQUEST["edit_id"];


$query="SELECT * FROM plants WHERE plants_id=$editID";
$result=mysqli_query($connect,$query);

		
			while($rows=mysqli_fetch_array($result))
			{
				 $image= $rows['plants_image'];
			
		?>
	   
	
			
	

<h1>Edit</h1>
		
		<table>
			<form action="editdata_core2.php" method="POST" enctype="multipart/form-data" >
			
			
			<tr>
				<td style="color:black; font-size:20px;"> Plant Name </td>
				<td><input class="l" type="text" name="name" value="<?php echo $rows["plants_name"];?>" placeholder="Enter Your Plant name" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Category Name </td>
				<td><input class="l" type="text" name="c_name" value="<?php echo $rows["c_name"];?>" placeholder="Enter Your Category name" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Category ID </td>
				<td><input class="l" type="number" name="c_id" value="<?php echo $rows["c_id"];?>" placeholder="Enter Category ID" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Price</td>
				<td><input class="l" type="text" name="plants_price" value="<?php echo $rows["plants_price"];?>" placeholder="Enter Plants Price" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Plant Details</td>
				<td><input class="l" type="text" name="plants_details" value="<?php echo $rows["plants_details"];?>" placeholder="Plant Details" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Picture </td>
				<td><input class="l" type="file" name="image" value="<?php echo "<img src='images/$image' class='image'>";?>" size="50"></td>
			    <td><?php echo "<img src='images/$image' class='image'>";?></td>
			</tr>
			<input type="hidden" name="editingID" value="<?php echo $editID; ?>" />
			<tr>
			<td><input type="submit" name="editButton" value="Update"/></td>
			</tr>
			</form>
		</table>
<?php
}}
	?>		
	
</div>		
</body>
</html>	




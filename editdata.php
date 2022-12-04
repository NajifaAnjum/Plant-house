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


$query="SELECT * FROM category WHERE c_id=$editID";
$result=mysqli_query($connect,$query);

		
			while($rows=mysqli_fetch_array($result))
			{
				 $image= $rows['c_pic'];
			
		?>
	   
	
			
	

<h1>Edit</h1>
		
		<table>
			<form action="editdata_core.php" method="POST" enctype="multipart/form-data" >
			
			
			<tr>
				<td style="color:black; font-size:20px;"> Category </td>
				<td><input class="l" type="text" name="name" value="<?php echo $rows["c_name"];?>" placeholder="Enter Your Category name" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Picture </td>
				<td><input class="l" type="file" name="image" value="<?php echo "<img src='images/$image' class='img'>";?>" size="50"></td>
			    <td><?php echo "<img src='images/$image' class='img'>";?></td>
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




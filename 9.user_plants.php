<!--form-->
<html>
<head>
		<link rel="stylesheet" href="css/category.css">
		<link href="css/page1.css" rel="stylesheet"/>
	
	</head>
	
<body>

<div class="header2">
   <div class="header2_left"><h1 style="font-family:tahoma; float:left; width:40%; padding-top:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLANT HOUSE</h1></div>
   <div class="header2_right">
   <ul>
		<li><a href="7.user_page1.php">HOME</a></li>
		<li><a href="8.user_category.php">CATEGORIES</a></li>
		<li><a href="">ABOUT US</a></li>
		
		<li><a href="5.rating.php">RATE US</a></li>
		<li><a href="11.cart.php">CART</a></li>
		
		
	 </ul>
   </div>
</div>
<div class="middle1">

<?php

$connect=mysqli_connect('localhost','root','','plant');
 

if(isset($_REQUEST["c_id"])){
	
	$c_id = $_REQUEST["c_id"];


$query="SELECT * FROM plants WHERE c_id=$c_id";
$result=mysqli_query($connect,$query);
?>
		  
		<?php	
			while($rows=mysqli_fetch_array($result))
			{
				 $image= $rows['plants_image'];
			
		?>
	        
		
			<div class="box2">
				<div class="box2-img"><a href="10.user_plants_details.php?p_id=<?php echo $rows['plants_id'];?>"><?php echo "<img src='images/$image' class='img'>";?></div>  <!--plants_id nam e c_id take pass kortsi-->
				<div class="box2-name"><a href="10.user_plants_details.php?p_id=<?php echo $rows['plants_id'];?>"><?php echo $rows['plants_name'];?></div>
				<div class="box2-price"><a href="10.user_plants_details.php?p_id=<?php echo $rows['plants_id'];?>">BDT <?php echo $rows['plants_price'];?></div>
			</div>
			
			
		
		
<?php
}}
	?>		
	</div>
 <div class="footer">
            <div class="left">
                <h1>About us</h1>
                <p> We are a supplier, importer, and exporter of plants. Fruit plants, flower plants, spice plants, herbal plants, seeds, and bonsai of the highest quality are delivered throughout Bangladesh by Plant House. We always offer the greatest customer service.</p>
                
            </div>
            <div class="right">
                <img src="images/care1.jpg"/>
                <h1>Plant House</h1>
            </div>
        </div>
</body>
</html>	




<?php

$connect=mysqli_connect('localhost','root','','plant');

if(isset($_POST['add_to_cart'])){

   $plants_name = $_POST['plants_name'];
   $plants_price = $_POST['plants_price'];
   $plants_image = $_POST['plants_image'];
   $plants_quantity = 1;

   $select_cart = mysqli_query($connect, "SELECT * FROM `cart` WHERE name = '$plants_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($connect, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$plants_name', '$plants_price', '$plants_image', '$plants_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
<!--form-->
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="css/user_plants_details.css" rel="stylesheet"/>
	<link href="css/page1.css" rel="stylesheet"/>
	</head>
	
<body>
<div class="container">
<div class="header">
   <div class="main_menu">
     <ul>
		<li><a href="4.admin_login.php"><i class="fas fa-user"></i>&nbsp;&nbsp;Login</a></li>
		<!--<li><a href=""><i class="fas fa-user"></i>&nbsp;&nbsp;Customer login</a></li>
		<li><a href=""><i class="far fa-address-book"></i>&nbsp;&nbsp;Not a member?Register</a></li>-->
		<li><a href="">Call us now +880-01700-540523</a></li>
	 </ul>
	</div> 
	
</div>
<div class="header2">
   <div class="header2_left"><h1 style="font-family:tahoma; float:left; width:40%; padding-top:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLANT HOUSE</h1></div>
   <div class="header2_right">
   <ul>
		<li><a href="7.user_page1.html">HOME</a></li>
		<li><a href="8.user_category.php">CATEGORIES</a></li>
		<li><a href="">ABOUT US</a></li>
		<li><a href="rating.php">RATE US</a></li>
		<!--<li><a href="">BLOG</a></li>-->
		<li><a href="11.cart.php"><i class=""></i>CART</a></li>
	 </ul>
   </div>
</div>
<div class="details">

<?php
$connect=mysqli_connect('localhost','root','','plant');

if(isset($_REQUEST["p_id"])){
	
	$p_id = $_REQUEST["p_id"];


$query="SELECT * FROM plants WHERE plants_id=$p_id";
$result=mysqli_query($connect,$query);

		
			while($rows=mysqli_fetch_array($result))
			{
				 $image= $rows['plants_image'];
			
		?>
	   <form action="" method="post">
	   <table>
			<div class="box1">
			   <div class="box1_left"> 
					<div class="box1-img"><?php echo "<img src='images/$image' class='img'>";?></div>
			   </div>
			   <div class="box1-right">
					<div class="box1-name"><?php echo $rows['plants_name'];?></div>
					<div class="box1-price">Price: BDT <?php echo $rows['plants_price'];?></div>
				<div class="box1-details"><?php echo $rows['plants_details'];?></div>
				<input type="hidden" name="plants_name" value="<?php echo $rows['plants_name']; ?>">
				<input type="hidden" name="plants_price" value="<?php echo $rows['plants_price']; ?>">
				<input type="hidden" name="plants_image" value="<?php echo $rows['plants_image']; ?>">
				<input type="submit" class="btn" value="Add to cart" name="add_to_cart">
				</div>
			</div>
			
			
		</table>
		</form>
<?php
}}
	?>		
	</div>
</div>		
</body>
</html>	




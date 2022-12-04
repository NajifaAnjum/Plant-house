<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/category.css" class="text/css">
	<link href="css/page1.css" rel="stylesheet"/>
	 
	
</head>


<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `category` WHERE CONCAT(`c_id`, `c_name`, `c_pic`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `category`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "plant");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    
    <body>
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
	<div class="main_menu2">
	<!-- <ul>
		<li><a href=""><i class="fab fa-facebook"></i></a></li>
		<li><a href=""><i class="fab fa-twitter"></i></a></li>
		<li><a href=""><i class="fab fa-tumblr"></i></i></a></li>
		<li><a href=""><i class="fab fa-pinterest"></i></a></li>
	 </ul>-->
	</div> 
</div>
<div class="header2">
   <div class="header2_left"><h1 style="font-family:tahoma; float:left; width:40%; padding-top:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLANT HOUSE</h1></div>
   <div class="header2_right">
   <ul>
		<li><a href="7.user_page1.php">HOME</a></li>
		<li><a href="8.user_category.php">CATEGORIES</a></li>
		<li><a href="">ABOUT US</a></li>
		
		<li><a href="5.rating.php">RATE US</a></li>
		<li><a href="11.cart.php">CART</a></li>
		<!--<li><a href="">BLOG</a></li>-->
		
	 </ul>
   </div>
</div>
         <div class="search_box">
        <form action="8.user_category.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
           </div> 
            
            <div class="middle1">
      <!-- populate table from mysql database -->
	  
                <?php while($rows = mysqli_fetch_array($search_result)){
				$image= $rows['c_pic']; 
				?>
                
	              <div class="box1">
		          <div class="box1-img"><a href="9.user_plants.php?c_id=<?php echo $rows['c_id'];?>"><?php echo "<img src='images/$image' class='img'>";?></a></div>
		         <div class="box1-name"><a href="9.user_plants.php?c_id=<?php echo $rows['c_id'];?>"><?php echo $rows['c_name'];?></a></div>
	             </div>
	             
                
                <?php }?>
            </table>
        </form>
        </div>
		<!--footer-->
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
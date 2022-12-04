<html>
<head>
<link href="css/page1.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
html,body {
	margin: 0;
	padding: 0;
}
main {
	max-width: 1400px;
	min-width: 320px;
	margin: 0 auto;
}
</style>

<link type="text/css" rel="stylesheet" href="css/jquery.jblslider.css" />
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
   <div class="header2_left"><h1 style="font-family:tahoma; float:left; width:40%; padding-top:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLANT HOUSE</h1></div>
   <div class="header2_right">
   <ul>
		<li><a href="7.user_page1.php">HOME</a></li>
		<li><a href="8.user_category.php">CATEGORIES</a></li>
		<li><a href="#about_us">ABOUT US</a></li>
		<li><a href="5.rating.php">RATE US</a></li>
		
		
	 </ul>
   </div>
</div>
   
   <main>

<div class="slider" id="jblslider">
<div class="slide" style="background-image: url('images1/slider6.jpg');">
<span class="caption">Find your plants here!<a href="8.user_category.php"><button class="bn">CATEGORIES</button></span>
<a href="#"></a>
</div>
<div class="slide" style="background-image: url('images1/slider9.jpg');">
<span class="caption"><a href="#">Find your plants here!</a><a href="8.user_category.php"><button class="bn">CATEGORIES</button></span>
<a href="#"></a>
</div>
<div class="slide" style="background-image: url('images1/slider8.jpg');">
<span class="caption"><a href="#">Find your plants here!</a><a href="8.user_category.php"><button class="bn">CATEGORIES</button></span>
<a href="#"></a>
</div>
<div class="slide" style="background-image: url('images1/slider10.jpg');">
<span class="caption"><a href="#">Find your plants here!</a><a href="8.user_category.php"><button class="bn">CATEGORIES</button></span>
<a href="#"></a>
</div>
<div class="slide" style="background-image: url('images1/slider12.jpg');">
<span class="caption"><a href="#">Find your plants here!</a><a href="8.user_category.php"><button class="bn">CATEGORIES</button></span>
<a href="#"></a>
</div>
</div><!--#slider -->

</main>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery.jblslider.js"></script>
<script>
$("#jblslider").jblSlider({
	safe_area: 640,
	duration: 800,
	delay: 2000,
	resume: 20000
});
</script>        


<div class="frm">
 <!--<div class="frm_left">
   <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Find your holidays!</h1>
   </div>-->
   
   <div class="frm_right">
    
	
	<p style="text-align:center">Welcome to our huge range of planters, houseplants and accessories all delivered to your door. It's time to get lost in botanical beauty...</p>
        <!--<table>
		    <tr>
				<td>Where:&nbsp;</td>
				<td><input type="text" name="name"/></td><br><br>
				<td>&nbsp;&nbsp;&nbsp;When:&nbsp;</td>
				<td><input type="text" name="name"/></td>
				<td>&nbsp;&nbsp;<button class="btn">Search</button>
			</tr>
	    </table>-->

	</div>
</div>
<div class="main">
   <center>
        <br>
       <h1 style="font-family:arial; ">TOP CATEGORIES</h1><br>
	   <h3 style="font-family:arial;">Best Categories that people love to buy more</h3>
   </center>
</div>

<div class="main3">
   <div class="pics"><a href="http://localhost/plant/9.user_plants.php?c_id=2"><img src="images1/rose.jpg" width="220px" height="150px"/><p>Flower Plants</p></a></div>
   <div class="pics"><a href="http://localhost/plant/9.user_plants.php?c_id=3"><img src="images1/walnut.jpg" width="220px" height="150px"/><p>Fruit Plants</p></a></div>
   <div class="pics"><a href="http://localhost/plant/9.user_plants.php?c_id=1"><img src="images1/pic9.jpg" width="225px" height="150px"/><p>Indoor Plants</p></a></div>
   <div class="pics"><a href="http://localhost/plant/9.user_plants.php?c_id=4"><img src="images1/pic20.jpg" width="224px" height="150px"/><p>Vegetable Plants</p></a></div>
   <div class="pics"><a href="http://localhost/plant/9.user_plants.php?c_id=12"><img src="images1/pic12.jpg" width="220px" height="150px"/><p>Bonsai Plants</p></a></div>
   <div class="pics"><a href="http://localhost/plant/9.user_plants.php?c_id=7"><img src="images1/pic30.jpg" width="220px" height="150px"/><p>Spice Plants</p></a></div>
</div>

<div class="middle">
            <div class="box">
              
                <a href="http://localhost/plant/9.user_plants.php?c_id=1"><img src="images1/rose1.jpg"/>
                <h1>Rose Plants</h1></a>
              </div>  
			<div class="box">
                <a href="http://localhost/plant/9.user_plants.php?c_id=9">
                <img src="images1/mango1.jpg"/>
                <h1>Mango Plants</h1></a>
                
              </div>
            <div class="box">
                <a href="">
                <img src="images1/care1.jpg"/>
                <h1>Plants Care Guide</h1></a>
                </div>
</div>



<a id="about_us">
<div class="footer">
			
			<div class="footer_top">
				
				<div class="footer_left">
				<ul>
						<li style="color:white; font-size:20px; font-weight:bold;"><a href="" class="active">&nbsp;&nbsp;About Us</a></li>
						<li>&nbsp;&nbsp;&nbsp;We are a supplier, importer, and exporter of plants. </li>
						<li>&nbsp;&nbsp;&nbsp;Fruit plants, flower plants, spice plants, herbal plants, seeds,</li>
						<li>&nbsp;&nbsp;&nbsp;and bonsai of the highest quality are delivered throughout Bangladesh</li>
						<li>&nbsp;&nbsp;&nbsp;by Plant House. We always offer the greatest customer service.</li>
						
					</ul>
				</div>
				
				<div class="footer_middle">
					<ul>
						<li style="color:white; font-size:20px; font-weight:bold;"><a href="" class="active">&nbsp;&nbsp;Contact Us</a></li>
						<li>&nbsp;&nbsp;&nbsp;For any queries: 01700540523</li>
						<li>&nbsp;&nbsp;&nbsp;Any Information: 01700540523</li>
						<li>&nbsp;&nbsp;&nbsp;Email: afrinarashidbadhon@gmail.com</li>
						<li>&nbsp;&nbsp;&nbsp;WhatsApp: 01700540523</li>
						<li><a href="https://www.facebook.com/afrina.niloy?mibextid=ZbWKwL">&nbsp;&nbsp;&nbsp;Facebook: Afrina Rashid  </a></li>
					</ul>
				</div>
				<div class="footer_right">
					<img src="images/care1.jpg"/>
				</div>
				
			</div>
			<div class="footer_bottom">
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright &copy; 2022 | PLANT HOUSE.
			</div>
		</div>
</a>
</div>
</body>
</html>
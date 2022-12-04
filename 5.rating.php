<html>
<head>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
	<link rel="stylesheet" href="css/page1.css" class="text/css">
	<style>
	.container{
		width:80%;
	}
	.content-table table td {
    padding: 9px 64px;
}
	</style>
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
		<li><a href="">ABOUT US</a></li>
		<li><a href="5.rating.php">RATE US</a></li>
		<!--<li><a href="">BLOG</a></li>-->
		
	 </ul>
   </div>
</div>
    <div class="row">

<form action="5.rating.php" method="post">

    <div>
        <h3>Rating System</h3>
    </div>

    <div>
         <label>Name</label>
        <input type="text" name="name">
    </div>

         <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>

    <span class='result'>0</span>
    <input type="hidden" name="rating">
	<div>
         <label>Comment</label>
        <input type="text" name="comment" style="width:200px;height:50px">
    </div>
    </div>
     
    <div><input type="submit" name="add"> </div>

</form>

<div class="content-table">
	<!--data show-->
	<?php
	$connect=mysqli_connect('localhost','root','','plant');
	$query="SELECT * FROM ratee";
	$result=mysqli_query($connect,$query);
	?>

	<table align="center"  style="width:1100px; line-height:60px; border-radius:10px solid blue;">
		
		<tr>
			<th colspan="6"><h1 style="font-family:tahoma; color:black;"><u>Customer Ratings</u></h1></th>
		</tr>
		
		<tr>
			
			<th style="color:black;">Name</th>
			<th style="color:black;">Rate</th>
			<th style="color:black;">Comment</th>
			
		</tr>
		<?php
		
			while($rows=mysqli_fetch_array($result))
			{
			 
		?>
		<tr>
	    
			<td align="center" style="color:black;"><?php echo $rows['name'];?></td>
			<td align="center" style="color:black;"><?php echo $rows['rate'];?></td>
			<td align="center" style="color:black;"><?php echo $rows['comment'];?></td>
			
		</tr>
	<?php
		}
	?>
	</table>
	</div>
<a id="about_us">
<div class="footer">
			
			<div class="footer_top">
				
				<div class="footer_left">
				<ul>
						<li style=" font-size:20px; font-weight:bold;"><a href="" class="active">&nbsp;&nbsp;&nbsp;About Us</a></li>
						<li>&nbsp;&nbsp;&nbsp;We are a supplier, importer, and exporter of plants.   </a></li>
						<li>&nbsp;&nbsp;&nbsp;Fruit plants, flower plants, spice plants, herbal plants, seeds,</a></li>
						<li>&nbsp;&nbsp;&nbsp;and bonsai of the highest quality are delivered throughout Bangladesh</a></li>
						<li>&nbsp;&nbsp;&nbsp;by Plant House. We always offer the greatest customer service.</a></li>
						
					</ul>
				</div>
				
				<div class="footer_middle">
					<ul>
						<li style=" font-size:20px; font-weight:bold;"><a href="" class="active">&nbsp;&nbsp;&nbsp;Contact Us</a></li>
						<li>&nbsp;&nbsp;&nbsp;For any queries: 01700540523</a></li>
						<li>&nbsp;&nbsp;&nbsp;Any Information: 01700540523</a></li>
						<li>&nbsp;&nbsp;&nbsp;Email: afrinarashidbadhon@gmail.com</a></li>
						<li>&nbsp;&nbsp;&nbsp;WhatsApp: 01700540523</a></li>
						<li><a href="https://www.facebook.com/afrina.niloy?mibextid=ZbWKwL">&nbsp;&nbsp;&nbsp;Facebook: Afrina Rashid  </a></li>
					</ul>
				</div>
				
			</div>
			<div class="footer_bottom">
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright &copy; 2022 | Your content items | CSS templates.
			</div>
		</div>
		</a>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>

<?php
$connect=mysqli_connect('localhost','root','','plant');
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $rating = $_POST["rating"];
	$comment=$_POST["comment"];

    $sql = "INSERT INTO ratee (name,rate,comment) VALUES ('$name','$rating','$comment')";
    if (mysqli_query($connect, $sql))
    {
        echo "New Rate addedddd successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
}
?>

	</div>
	</body>

</html>
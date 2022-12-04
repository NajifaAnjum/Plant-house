<html>
<head>
  <link href="css/login.css" type="text/css" rel="stylesheet"/>
</head>
<body>
 <div class="login_box">
    <img src="images/logo3.jpg" class="avatar"/>
	<h1>Login here</h1>
		
		<form action="login_core.php">
			<p>Username</p>
			<input type="text" name="usrname" placeholder="Enter username"/>
			<p>Password</p>
			<input type="password" name="pswd" placeholder="Enter password"/>
			<input type="submit" name="" value="Login"/>
			<!--<a href="">Lost your password?</a><br>
			<a href="2-signup.php">Don't have an account</a>-->
			<br>
			<br>
			<?php
			if(isset($_REQUEST["wrong_info"])){
				echo '<b style="color:red">
				Username or Password is wrong!
				</br>';
			}
			?>
			
			
		</form>
 </div>
</body>
</html>
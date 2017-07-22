<?php
session_start();

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login </title>
 
<style type="text/css">
#content{
	padding:2.5px;
	margin-top: 10px;
	margin-bottom: 10px;
	color: white;
	border-width: 20px;
	background-color:#02021a;
	-webkit-box-shadow: 0 1px 0 #fff inset;
	-moz-box-shadow: 0 1px 0 #fff inset;
	-ms-box-shadow: 0 1px 0 #fff inset;
	-o-box-shadow: 0 1px 0 #fff inset;
	box-shadow: 0 1px 0 #fff inset;
	border: 1px solid #c4c6ca;
	margin: 0 auto;
	padding: 25px 0 0;
	position: relative;
	text-align: center;
	text-shadow: 0 1px 0 #fff; 
}
.container {
	background-color: #0099cc;
}
p{
	color:#ffffff;
	font-size: 25px;
	font-family: arial;
}
h1{
	font-size: 35px;
}
input[placeholder]{
	width: 300px;
	height:35px;
}
input[class]{
	width: 200px;
	height:35px;
}
body{
	background-color: #0099cc;
}


</style>
</head>

<body>
<div class="container">
	<section id="content">

		<form  method="POST" action=" loginpage.php ">
			<center>
			<h1>Welcome</h1>
			<h1>Login to your account</h1>
			<div>
				<p>Enter your Aadhar Number<br>
				<input type="number" name="aadhar" placeholder="Aadhar Number" required=" " />
			
			
				<p>Enter your Password<br>
				<input type="password" name="password" placeholder="Password" required name="password" />
			<br>
			<br>
				<input class="button" type="submit" value="Log in" /><br>
				<br>
				<input type="checkbox" name="remember" value="remember"> Remember me </input>
				</div>
		</center>
		</form>	
	</section>
</div>
</body>
  
 </html>

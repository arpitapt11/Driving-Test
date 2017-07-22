<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome</title>
		<meta charset="utf-8" />
		<style type="text/css">
			#header{
				background-color: #ffffff;
				color:#000000;

			}
			#footer{
				background-color: #ffffff;
				height:200px;
			}
			#banner{
				background-color: #ffffff;
				color: #000000;
				background-image: url(bg.jpg);
				padding: 2px;

			}
			.right{
				width:200px;
				height:50px;
				color:#000000;		

			}
			input[class]{
				width:150px;
				height:35px;
			}
			input[prelim]{
				width:150px;
				height:35px;
			}
			h1{
				color:#ffffff;
				font-size: 35px;
				font-family: arial;
				padding: 5px;
			}
			body{
				background-image: url(bg.jpg);
			}
			p{
				font-size: 25px;
				font-family: arial;
				
			}

		</style>
	</head>
<body>

				<header id="header">	
				<nav class="right">
					<a href="index.php" type="button" > Home </a>
										
				</nav>
				<nav class="left">
					<a href="login.php" type="button"> Log In </a>
				</nav>
				</header>		

			<section id="banner">
				<div>
					<center>
						<h1> Thank you for registering</h1>
						<img src="thanks.jpg" alt="thank you" width="200px">

					</center>
				</div>
			</section>
				<br>
				<br>
				<br>
				<br>
				<br>
			<footer id="footer">
				<div class="inner">
					
					<ul class="actions">
						<center><li><span class="icon fa-circle"></span>Copyrights reserved by Indian Government</li></center>
	
					</ul>
				</div>
				
			</footer>

</body>
</html>
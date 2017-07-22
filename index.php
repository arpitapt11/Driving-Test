<?php
session_start();

?>
<html>
<head>
	<title></title>
	<style type="text/css">
		#head {
			top: 0;
			margin-top: 0;
			padding: 0;
			color:white;
			background-color: #0099cc;
			position: fixed;
			width: 100%;
		}
		#head p {
			top: 0;
			margin: 0;
			background-color: #0099cc;
			width: 100%;
			height: 20px;
		}
		#head ul {
			list-style-type: none;
			margin: 0;
    		padding: 0;
    		background-color: #333;
    		position: fixed;
    		width: 100%;

		}
		#head li {
			float: left;
		}
		#head li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		#head li a:hover { 
				background-color: #02021a;
		}
		#head2 {
			margin-top: 75px;
		}
		#banner {
		padding: 12em 0 12em 0;
		background-image: url(new.jpg);
		background-size: cover;
		background-position: center top;
		background-repeat: no-repeat;
		text-align: center;
		margin-top: 75px;
		width: 100%;


	}
		#content {
			
			padding:14px 16px;
			font-family: arial;

		}

		}
		</style>
</head>
<body>
<div id="head">
<center><p><script type="text/javascript">
			document.write ('<p>Current date & time: <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
			if (document.getElementById) onload = function () {
				setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
			}
		</script><br>
		<img src="homelogo.png" alt="National Embelem" style="width:50px; height: 75px;"><br>
		<font face="Bebas"><strong><Font size="12px">National Driving License Issuing Authority of India</Font></strong></font>
		</p></center>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="signuppage.php">Sign Up</a></li>
  <li><a href="login.php">Log In</a></li>
  <li><a href="shortcodes-typography.php">Procedures</a></li>
  <li><a href="testground.php">Test Ground</a></li>
  <li><a href="get-in-touch-2.php">Contact Us</a></li>
  <li><a href="accordion-style.php">About Us</a></li>
</ul>
</div>
<section id="banner">
				<div id="head2">
				</div>
			</section>

<div id="content">
<center>
	<div style="width:100%;border:0px solid #000;">
    <div style="float:left; width:70%; background:#ffffb3;"><p width="74%" height="100px" align="justify" margin-left="1 px">
    	<b>In India, the driving licence is the official document which authorises its holder to operate various types of motor vehicle on highways and some other roads to which the public have access. In various Indian states, they are administered by the Regional Transport Authorities/Offices (RTA/RTO). A driving licence is required in India by any person driving a vehicle on any highway or other road defined in the Motor Vehicles Act, 1988.A modern photo driving licence can also serve many of the purposes of an identity card in non-driving contexts (proof of identity (e.g. when opening a bank account) or age.The Ministry of Road Transport and Highways has been facilitating computerization of more than 1000 Road Transport Offices (RTOs) across the country. RTOs issue Registration Certificate (RC) and Driving License (DL) that are valid across the country. It was necessary to define same standards for these documents on a pan-India level to ensure interoperability and correctness and timely availability of information. SCOSTA committee setup for this purpose had recommended a uniform standardized software across the country. Ministry entrusted National Informatics Centre the task to standardize and deploy the software VAHAN for Vehicle Registration and SARATHI for Driving Licenses and compilation of data with respect to Vehicle Registration and Driving Licenses of all the states in State Register and National Register.The VAHAN and SARATHI are conceptualized to capture the functionalities as mandated by Central Motor Vehicle Act, 1988 as well as State motor vehicle Rules with customization in the core product to suit the requirements of 36 States.<b></p></div>
    <div style="float:left; width:2%; background:#fff;"><p width="2%" height="100px"></p></div>
    <div style="float:left; width:28%; background:#fff;;"><img src="chakra.png" width="280px" height="280px" alt="chakra"></div>
    <div style="clear:both;"></div>
</div>
</center>
</div><br>
<div id="types">
<center><font face="" size="6.5 px"><b>Types of Driving Licenses Provided In India</b></font></center><br><br>
<center><div style="width:100%;border:0px solid #000;">
    <div style="float:left; width:30%; background:#d0d6fc;"><p style="margin: 10px;" width="30%" height="100px"><b>MCWG</b><br><img src="2wheeler.png" width="150px" height="75"></div>
    <div style="float:left; width:5%; background:#fff;"><p width="2%" height="100px"></p></div>
    <div style="float:left; width:30%; background:#d0d6fc;"><p style="margin: 10px;" width="30%" height="100px"><b>LMV</b><br><img src="car.png" width="150px" height="75"></div>
    <div style="float:left; width:5%; background:#fff;"><p width="2%" height="100px"></p></div>
    <div style="float:left; width:30%; background:#d0d6fc;"><p style="margin: 10px;" width="30%" height="100px"><b>HMV</b><br><img src="truck.png" width="150px" height="75"></div>
    <div style="clear:both;"></div>
</div></center>
</div>
<br><br><br><br><br>
<footer id="footer">
				<div class="inner">
					
					<ul class="actions">
						<center><li><span class="icon fa-circle"></span>Copyrights reserved by Indian Government</li></center>
	
					</ul>
				</div>
				
			</footer>



</body>
</html>
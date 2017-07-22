<?php
session_start();
include 'connsetup.php';
$aadhar=$_POST["aadhar"];
$password=$_POST["password"];
$application=$_POST["application"];
$sql="SELECT aadhar,application,password from test where aadhar='$aadhar'";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc())
	{
		if($row["password"]===$password)
		{
			setcookie("application",$application,time()+86400*30,"/");
			header("LOCATION:postlogin.php");
		}
		else
		{
			echo "Incorrect details";
		}
	}
}
<?php 
session_start();
include 'connsetup.php';

$name=$_POST["name"];
$aadhar=$_POST["aadhar"];
$email=$_POST["email"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$BirthMonth=$_POST["BirthMonth"];
$BirthDay=$_POST["BirthDay"];
$BirthYear=$_POST["BirthYear"];
$birthday=$BirthMonth.$BirthDay.$BirthYear;
$gender=$_POST["gender"];
$twolicense=$_POST["twolicense"];
$fourlicense=$_POST["fourlicense"];
$application=mt_rand(100000,999999);

if($password==$repassword)
{
	$sql="INSERT INTO test VALUES ('$name','$aadhar','$email','$password','$birthday','$gender','$twolicense','$fourlicense','$application')";
	$conn->query($sql) or die ("Error occured");
	header("LOCATION:aftersignup.php");

}
?>


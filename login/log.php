<?php
	
$username="root";
$password="";
$database="eweb";
$servername="localhost";

$conn=mysqli_connect($servername,$username,$password,$database);
 if(!$conn){
 	die("connection fails:".mysqpli_error);
 }
 echo("connected!!");

?>

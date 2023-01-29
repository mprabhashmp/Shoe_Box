<?php

//session_start();
include'/shoe box/login/log.php'; 



$getuser = $_POST['getuser'];
$getpass = $_POST['getpass'];
$getmail = $_POST['getmail'];
	
	$newenc=md($getpass);
	
    $sql = "INSERT INTO `logs` (`ID`, `username`, `password`, `email`, `District Key`) VALUES ('0', '$getuser', '$newenc', '$getmail')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	header("Location:web.php?error=Succsessfully!");
					exit();
}else{
		header("Location:getindex.php");
		exit();
	}



?>
<?php

session_start();
include'log.php'; 

if(isset($_POST['user'])&&isset($_POST['pass'])){
	function validate($data){
	$data = stripslashes($data);
	$data= trim($data);
	$data=htmlspecialchars($data);
	return $data;
	}

	$uname=validate($_POST['user']);
	$pass=validate($_POST['pass']);

	if(empty($uname)){
		header("Location:web.php?error=User name is required!");
		exit();
	}else if(empty($pass)){
		header("Location:web.php?error=Password is required!");
		exit();
	}
	else{
		$sql="SELECT * FROM users WHERE username='$uname'AND password='$pass'";

		$result=mysqli_query($conn,$sql);

			if(mysqli_num_rows($result)===1){
				$row=mysqli_fetch_assoc($result);

				if($row['username']===$uname&&$row['password']===$pass){
					echo"Logged in";

					$_SESSION['username']=$row['username'];
					$_SESSION['email']=$row['email'];
					$_SESSION['ID']=$row['ID'];

					header("Location:home.php");
					exit();
				}else{
					header("Location:web.php?error=Incorrect User name or Password");
					exit();
				}
			}else{
				header("Location:web.php?error=Incorrect User name or Password");
				exit();
			}
	}
}else{
		header("Location:web.php");
		exit();
	}



?>
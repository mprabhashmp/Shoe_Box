<?php
	$name=$_GET["yourname"];
	$age=$_GET["yourage"];
	if(isset($_GET['submitdata'])){
		echo "Welcome ".$name.", You are ".$age."Years old!";
	}


?>
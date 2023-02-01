<?php
	$name=$_GET['yourname'];
	$Add=$_GET["area1"];
	$Title=["Title[]"];
	$provin=$_GET["province"];
	$chek1=$_GET["chek[]"];

	if(isset($_GET['sub'])){
		if(empty($_GET['$name'])||empty(_GET['$Add'])||empty(_GET['$chek1'])){
			echo"Sorry, Your form is not complete";
		}
		echo "<h2> Dear, ".$Title." ".$name."(".$Add.",".$provin.")<br> We are happy to welcome you to the following areas:<br>";
		echo" <ul><li>".$chek1."</li><li>";
		echo" ".$chek1."</li></ul></h2>";
	}

?>
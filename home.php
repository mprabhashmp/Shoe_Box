<?php 

session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['username'])) {
 ?>

<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h1>MagicBuy.lk</h1></center>

     <h2>Hello, <?php echo $_SESSION['username']; ?></h2>

     <a href="logout.php">Logout</a>
</body>
</html>
<?php 
}else{

     header("Location: web.php");

     exit();

}

 ?>
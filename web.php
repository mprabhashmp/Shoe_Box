
<html>
<title></title>
<head>
<style>
	
form {
  border: 3px solid #f1f1f1;
  background-color:#d6f4f7;
}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color: #04AA;
  color: white;
  padding: 14px 20px;
  margin: 7px 0;
  border: none;
  cursor: pointer;
  width: 25%;
}

button:hover {
  opacity: 0.9;
}


/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;

}

img.avatar {
  width: 15%;
  border-radius:100%;
}

.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
    background-color:#e7dbf3;

}


@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;

  }
} 

h2{
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: gray;
color:red;


}
	</style>
</head>

<body>
	<center><h2>MagicBuy.lk Login Form </h2></center>
<form action="index.php"method="post">
	<div class="imagecontainer">
		<center><img src="img1.png"class="avatar"alt="avater"></center>
			</div>
<center>
	<div class="container">
		<lable for="username">Username</lable>
		<input type="text" placeholder="Enter username" name="user" required>
		<br>
		<lable for="pass">Password</lable>
		<input type="password" placeholder="Enter password" name="pass" required>
			<br>

		<button type="submit">Login</button>
		<lable><br></lable>

		

		<?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

			<input type="checkbox" checked="checked" name="remember">
		Remember me</lable>
	</div>

	<div class="container" style="background-color:#f2f2f2">
		<span class="pwd"><a href="#">Forgot password ?</a>
		</span>
	</div>
</center>
</form>
</body>
</html>

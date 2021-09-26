<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login -GMS</title>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="login.css">

</head>



<body>
<!--navigation-->
<div class="navbar">
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="admin.php">Admin Login</a></li>
</ul>	
</div>
<!--navigation-->


<div class="head">
	<h1>Admin Login</h1>
	
</div>

<!--form-->
<form action="include/admin.inc.php" method="POST" >
	<div class="container">

		<label class="email_lbl">Email</label><br>

		<input  name="email" placeholder="Enter Email"><br>


		<label class="password_lbl">Password</label><br>
		<input type="password" name="pwd" placeholder="Enter Password"><br>

		<div class="forgot"><a href="password.php">Forgot Password?</a></div>

		<button class="button" name="submit" type="submit"><b>LOGIN</b></button>

		<div class="register">Not a member? <a href="register.php"> Register Here</a></div>

	</div>

</form>
<!-- end of form-->
</body>

</html>





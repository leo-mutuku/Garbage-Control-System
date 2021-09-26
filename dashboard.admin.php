<?php
include_once "include/session.php";
include_once "include/connection.inc.php";
$email=$_SESSION['user'];
$sql="select * from customerdetails where email ='$email'";
$qry = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Customer Profile</title>
    <link rel="stylesheet"  href="dashboard.custprofile.css">
    <link rel="stylesheet"  href="dashboard.admin.css">

</head>

<body>
<div class="banner">
	<!--navigation-->
	<div class="navbar"> 
		<ul >
		<li><a href="dashboard.admin.php">  Home </a></li>
        <li><a href="dashboard.admin.payment.php"> Payment</a></li>
        <li><a href="dashboard.admin.payment.php">Reports </a></li>
		<li><a href="dashboard.admin.users.php">Users </a></li>
		<li><a href="dashboard.admin.staff.php">Staff </a></li>
		<li><a href="include/logout.inc.php">Logout </a></li>

		</ul>
	</div>

<!--content-->
<div class="content">
<h1>North Garbage Collectors</h1>	
<p>Welcome to North Garbage Collectors</p>
</div>
</div>
<!--content-->

</body>
</html>
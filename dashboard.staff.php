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
    <link rel="stylesheet" href="dashboard.cust.css">
	

</head>

<body>
<div class="banner">
	<?php include('menu.staff.php');?>

<!--content-->
<div class="content">
<h1>North Garbage Collectors</h1>	
<p>Welcome to North Garbage Collectors</p>
</div>
</div>
<!--content-->


</body>
</html>
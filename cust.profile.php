<?php

include_once "include/session.php";

// creating db connection
include_once "include/connection.inc.php";


$email=$_SESSION['user'];
$sql="SELECT * FROM customerdetails WHERE email ='$email'";
$qry = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Customer Profile</title>
    <link rel="stylesheet"  href="dashboard.cust.css">
    <link rel="stylesheet"  href="cust.profile.css">
	

</head>

<body>

	<!--navigation-->
	<?php include_once 'menu.customer.php';?>;	
	<!--navigation-->
    <div class="profile">
    <h1>Customer Profile</h1>
</div>


<?php
      $count=mysqli_num_rows($qry);
      while ($row = mysqli_fetch_assoc($qry)) {
           
       ?>

    <div class="dis1">
       <ul>
            <li>  <b> First Name:  </b> <?php echo$row['first_name'];?></li>
            <li>  <b> Last Name:  </b> <?php echo$row['last_name'];?></li>
            <li>  <b> Email:  </b> <?php echo$row['email'];?></li>
            <li>  <b> Contacts:  </b> <?php echo$row['mobile_number'];?></li>
            <li>  <b> County:  </b> <?php echo$row['county'];?></li>
            <li>  <b> Road Name:  </b> <?php echo$row['roadname'];?></li>
            <li>  <b> Estate/Apartments/Court: </b> <?php echo$row['apartments'];?></li>
            <li>  <b> House Number:  </b> <?php echo$row['house_number'];?></li>
        </ul>
      </div>
     
<?php
      }
      ?>

      


</body>
</html
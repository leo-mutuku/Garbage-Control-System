<?php
 include_once('include/session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Panel</title>
    <link rel="stylesheet"  href="register.css">
	<link rel="stylesheet" href="dashboard.staff.css">

       <style>
      
            </style>
</head>



<body>
<?php include_once'menu.customer.php';?>

<div class="container">
	
<div style="margin-top:100px">
    <?php 
    //logedin user
    $email = $_SESSION['user'];
    include_once('include/connection.inc.php');
    
    $query = "SELECT * FROM customerdetails WHERE email ='$email'";

    $add_customer_serv_sub= mysqli_query($conn,$query) or die(mysql_error());
    $num=mysqli_num_rows($add_customer_serv_sub);
    while($get=mysqli_fetch_assoc($add_customer_serv_sub)){
        $id=$get['id'];
        $firstname =$get['first_name'];
        $lastname =$get['last_name'];
        $email=$get['email'];
    }
       ?>
  
    
     <center><h3 class="h3_profile">My Subscriptions</h3></center>

     

<center>
 <form action="include/customer.subscription.inc.php" method="POST">
    <span class="profile_span">&nbsp;
            <label class="lbl_profile" name="firstname">  </label>
            <div class="dis1">
       <ul>
            <li>  <b> First Name:  </b> <?php echo $firstname;?></li>
            <li>  <b> Last Name:  </b> <?php echo $lastname;?></li>
        </ul>
      </div>
   
     </span><br><br><br><br>
            
            
            
            <span class="profile_span">&nbsp;
            <label class="lbl_profile" for="html" name="status">Service Name</label>
            <select class="profile_update_form" name="service_code" > 
            	<option value="1001">Residential Collections| Kshs. 1000</option>
                <option value="1002">Commercial Collections | Kshs. 1500</option>
                <option value="1003">Construction & Demolition Services | Kshs. 10,000 per day</option>
            </select>
            </span>
            <span class="profile_span">
            <label class="lbl_profile"  name="invice_date"> Start Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="profile_update_form" type="date" name ="sub_start_date" value="">
            </span><br/><br/>
            <span class="profile_span">
            <label class="lbl_profile"  name="invice_date"> End Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="profile_update_form" type="date" name ="sub_end_date" value="">
            </span>
            
            
           
            
            <center><button class="" name="create_subscription"> Create Subscription<button><center>
        </form>
          </center>

          
    
</div>

	</div>


</div>

</body>
</html>


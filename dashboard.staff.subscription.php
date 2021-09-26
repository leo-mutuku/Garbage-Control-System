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
<?php include_once'menu.staff.php';?>

<div class="container">
	
<div style="margin-top:100px">
    <?php 
    //logedin user
    $email = $_SESSION['user'];
    include_once('include/connection.inc.php');
    
    $query = "SELECT * FROM customerdetails";

    $add_customer_serv_sub= mysqli_query($conn,$query) or die(mysql_error());
    $num=mysqli_num_rows($add_customer_serv_sub);
    ?>
     <center><h3 class="h3_profile">Client Subscription</h3></center>

<center>
 <form action="include/staff.subscription.inc.php" method="POST">
    <span class="profile_span">&nbsp;
            <label class="lbl_profile" name="firstname"> Select client to add </label>
            <select class="profile_update_form" name="customeremail">
    <?php 
    if($num==0){
        echo "No record found!";
    }else{
        while($get=mysqli_fetch_assoc($add_customer_serv_sub)){
             $id=$get['id'];
             $email=$get['email'];
             $firstname =$get['first_name'];
             $lastname =$get['last_name'];
            
            ?>
            <option value="<?php echo $email;?>">
            <?php echo $firstname;?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $lastname;?> 
            </option>
           
           
             <?php
        }
    }
    ?>
    </select>
   
     </span><br><br><br><br>
            
            
            
            <span class="profile_span">&nbsp;
            <label class="lbl_profile" for="html" name="status">Service code</label>
            <select class="profile_update_form" name="service_code" > 
            	<option value="1001">1001 - Residential</option>
                <option value="1002">1002 - Commercial</option>
                <option value="1003">1003 - Construction</option>
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
            <span class="profile_span">&nbsp;
            <label class="lbl_profile" for="html" name="status">Status</label>
            <select class="profile_update_form" name="status" > 
            	<option value="active">active</option>
                <option value="terminated">terminate</option>
               >
            </select>
            </span>
            
           
            
            <center><button class="" name="create_subscription"> Create Subscription<button><center>
        </form>
          </center>

          
    
</div>

	</div>


</div>

</body>
</html>


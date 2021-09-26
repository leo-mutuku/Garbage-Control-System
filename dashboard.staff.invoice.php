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
    
    $query = "SELECT * FROM serviceorder";

    $customer_serv_sub= mysqli_query($conn,$query) or die(mysql_error());
    $num=mysqli_num_rows($customer_serv_sub);
    ?>
     <center><h3 class="h3_profile">Customer Invoice</h3></center>

<center>
 <form action="include/staff.create.invoice.inc.php" method="POST">
    <span class="profile_span">&nbsp;
            <label class="lbl_profile" name="firstname">Select Customer to invoice </label>
            <select class="profile_update_form" name="service_sub_code">
    <?php 
    if($num==0){
        echo "No record found!";
    }else{
        while($get=mysqli_fetch_assoc($customer_serv_sub)){
             $id=$get['id'];
             $email=$get['customeremail'];
             $service_subscription_code=$get['service_subscription_code'];
             $service_code=$get['service_code']; 
             $start_date =$get['startdate'];
            ?>
            <option value="<?php echo $service_subscription_code;?>">
            <?php echo $email;?>&nbsp;&nbsp;|&nbsp;&nbsp;Service Code<?php echo $service_code;?>
            &nbsp;&nbsp;|&nbsp;&nbsp;sub.Code<?php echo $service_subscription_code;?>&nbsp;&nbsp;|&nbsp;&nbsp; <?php echo $start_date ;?></option>
           
           
             <?php
        }
    }
    ?>
    </select>
   
     </span><br><br><br><br>
            <span class="profile_span">&nbsp;
            <label class="lbl_profile" for="html" name="firstname">Service Code</label>
            <select class="profile_update_form" name="service_code"> 
            	<option>1001</option>
            	<option>1002</option>
            	<option>1003</option>
            </select>
            </span>
            <span class="profile_span">
            <label class="lbl_profile" for="html" name="amount">Amount</label>
            <input class="profile_update_form" type="text" name ="invoice_amount" value="" placeholder="In KShs.">
            </span>
            <br><br>
            <span class="profile_span">&nbsp;
            <label class="lbl_profile" for="html" name="status">Service Status</label>
            <select class="profile_update_form" name="service_status" > 
            	<option>active</option>
            	<option>terminated</option>
            	
            </select>
            </span>
            <span class="profile_span">
            <label class="lbl_profile" for="html" name="invice_date">Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="profile_update_form" type="date" name ="invoice_date" value="">
            </span><br/>
            <span class="profile_span">
            <label class="lbl_profile" for="html" name="invoice_desc">Invoice Description</label>
            <input class="profile_update_form" type="text" name ="invoice_desc" value="" placeholder="Invoice description">
            </span>
            <br><br>
            
            <center><button class="" name="create_invoice"> Invoice customer<button><center>
        </form>
          </center>

          
    
</div>










	</div>


</div>

</body>
</html>


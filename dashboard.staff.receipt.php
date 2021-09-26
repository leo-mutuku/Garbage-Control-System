<?php
 include_once('include/session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Customer Receipt</title>
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
     <center><h3 class="h3_profile">Customer Receipt</h3></center>

<center>
 <form action="include/staff.create.payment.inc.php" method="POST">
    <span class="profile_span">&nbsp;
            <label class="lbl_profile" name="firstname">Generate Payment Receipt to: </label>
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
   
     </span><br>
            
            <span class="profile_span">
            <label class="lbl_profile" for="html" name="amount">Amount</label>
            <input class="profile_update_form" type="text" name ="payment_amount" placeholder="In KShs.">
            </span>
           
            
            <span class="profile_span">
            <label class="lbl_profile" for="html" name="invice_date">Payment Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="profile_update_form" type="date" name ="payment_date">
            </span><br/>
            <span class="profile_span">
            <label class="lbl_profile" for="html" name="invoice_desc">Payment Description</label>
            <input class="profile_update_form" type="text" name ="payment_desc"  placeholder="Payment Description">
            </span>
            <br/>
            <span class="profile_span">
            <label class="lbl_profile" for="html" name="invoice_desc">Payment Reference No#:</label>
            <input class="profile_update_form" type="text" name ="payment_reference"  placeholder="Payment Reference No#">
</span>
            <!-- name of button submit is used by isset() function in php to get the targeted form i.e staff.create.payment.inc.php -->
            <center><button class="" name="create_payment"> Create Receipt<button></center>
        </form>
          </center>

          
    
</div>










	</div>


</div>

</body>
</html>


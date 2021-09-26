<?php
  include_once('include/session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Customer Invoice</title>
	<link rel="stylesheet" href="dashboard.cust.css">

</head>

<body>

	<!--navigation-->
	<?php include_once 'menu.customer.php';?>;	
	<!--navigation-->

			<d<div class="container">
	<div class="header">
		<div class="nav">
			<div class="search">
				<input type="text" placeholder="Search..">
				<button type="submit">GO</button>
			</div>
			
			<div class="user">

				<a href="/garbage/include/logout.inc.php" class="btn"> <php echo $_SESSION[user];?> logout</a>
				
			</div>
		</div>
	</div>
<div style="margin-top:100px">
    <?php 
    $email = $_SESSION['user'];
    include_once 'include/connection.inc.php';
    
    $query = "SELECT * FROM invoicestatement WHERE customeremail = '$email'";

    $customer_invoice_statement= mysqli_query($conn,$query) or die(mysqli_error($conn));
    $num=mysqli_num_rows($customer_invoice_statement);
    
            ?>
           

<center><h3 class="cust_profile"> My Invoices </h3></center>
<table id="customers">
   <tr>
    <th>Invoice date</th>
    <th>Invoice Description</th>
     <th>Amount</th>
  
  </tr>
  <?php
  if($num==0){
        echo "No record found!";
    }else{
        while($get=mysqli_fetch_assoc($customer_invoice_statement)){
            $id=$get['id'];
            $invoice_date = $get['invoice_date'];
            $invoice_desc = $get['invoice_desc'];
            $amount = $get['amount'];
           
            
  ?>
  <center>
  <tr>
    <td><?php echo $invoice_date ;?></td>
    <td><?php echo $invoice_desc  ;?></td>
    <td><?php echo $amount; ?></td>
    
    
  </tr></center>
    <?php
        }
    }
    ?>
</table>
      
    
</div>

	</div>


</div>

</body>
</html>

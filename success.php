<?php require_once('inc_file/header.php');?>

<!DOCTYPE html>
<html>
<head>
<style>
.success {
	width: 650px;
	min-height: 150px;
	text-align: center;
	border: 1px solid #ddd;
	margin: 0 auto;
	padding: 50px;
	margin-top: 30px;
	margin-bottom: 20px;
}
.success h2 {
	border-bottom: 1px solid #ddd;
	margin-bottom: 40px;
	padding-bottom: 25px;
}
.success p{
	color: #fff;
	font-size: 20px;
	text-align: justify;
}


</style>
</head>
<body>

    <div class="wrapper">
		<div class="success">
			<h2>Success</h2>
			<?php 
			  require_once('admin/connect.php');

			
			$sid = session_id();
			//$userid = $_SESSION['user_id'];
			$sel_qry = "SELECT pro_price,pro_qty FROM orders";
			$run_qry = mysqli_query($links,$sel_qry);
			if ($run_qry) {
				$sum = 0;

				while ($result = mysqli_fetch_assoc($run_qry)) {

					$price = $result['pro_price'];
					$qty = $result['pro_qty'];
					$total = $price*$qty;
					$sum = $sum+$total;
                   // echo $sum;
}
			 ?>
			<p class="text-danger">Total Payable Amount : 
			<?php
					//$vat = $sum * 0.1;
					//$pro_price = $run['pro_price']*$pro_qty;

					
				    echo $sum;

			  ?> /-
			  </p>
			<p class="text-success">Thanks for Purchase.Recived Your Order Successfully.We Will Contact you ASAP with delivery details . Here is your order details<a href="order_list.php" class="btn btn-success mt-2">Visit Here</a> </p>
		 	
		  <?php 	
			}
			 ?>
		</div>
		
    </div>
</body>
</html>

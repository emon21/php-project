<?php 

require_once('admin/connect.php');

if (isset($_POST['customer_user'])) {

	$cus_name = $_POST['cus_name'];
	$cus_email = $_POST['cus_email'];
	$cus_pass = $_POST['cus_pass'];
	$cus_phone = $_POST['cus_phone'];
	$cus_addr = $_POST['cus_addr'];


 mysqli_query($links,"INSERT INTO customer_reg(customer_name,customer_email,customer_password,customer_phone,customer_address)
 VALUES ('$cus_name','$cus_email','$cus_pass','$cus_phone','$cus_addr')");

 echo '<script>alert("Create New User")</script>';
header('location:customer_reg.php');

}


 ?>
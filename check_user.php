<?php

include 'admin/connect.php';
session_start();

if(isset($_POST['login'])){
	
	$user_email = $_POST['cus_email'];
	$user_pass = $_POST['cus_pass'];

	  $sql ="select * From customer_reg where customer_email='$user_email' AND customer_password='$user_pass'"; 

        $result = mysqli_query($links, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count === 1){ 

        	$_SESSION['cus_email'] = $row['customer_email'];
            // $_SESSION['user_email'] = $row['user_name'];
        	$_SESSION['user_id'] = $row['id'];
           // echo "<h1><center> Login successful </center></h1>";
            header('location:home.php');  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  

    //         echo "<script>
    // window.alert('Succesfully Updated');
    // window.location.href='index.php';
    // </script>User Updated Has Been Succefully...!";
        }
}


 ?>

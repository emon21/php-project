<?php 


session_start();

require_once('admin/connect.php');

$sid = session_id();

if (isset($_GET['details_id'])) {
  
  $pro_id = $_GET['details_id'];

  
  
    if (isset($_POST['cart'])) {
       //  echo $_POST['cart'];
       
        //$pro_id = $_POST['id'];
     //   $quentity = 1;
        //$quentity = $_POST['quentity'];

       // $quentity = 1;

     $quentity = $_POST['qty'];
 

       $sql="SELECT * FROM products WHERE id='$pro_id'";
       $result = mysqli_query($links,$sql);
       $row = mysqli_fetch_assoc($result);


    $pro_name =  $row['product_name'];
      $pro_price =  $row['product_price'];
   
	 $total_price = $quentity * $pro_price;


	   $check_qry = "SELECT * FROM cart WHERE  pro_id='$pro_id' AND seesion_id='$sid'";

      $qrye = mysqli_query($links,$check_qry);
	  $totalrow= mysqli_num_rows($qrye);
	if($totalrow > 0)
      {
      	 echo "<script>
     
    window.alert('Data Alreday Insert !!');
    window.location.href='shopping_cart.php';
    </script>";
      }

       else{


	  $ins_qry ="INSERT INTO cart(seesion_id,pro_id,product_name,product_price,pro_qty)
	   VALUES ('$sid','$pro_id','$pro_name','$pro_price','$quentity')";

	  $run_qry = mysqli_query($links,$ins_qry);
		  if ($run_qry) {

		  	 echo "<script>
     
    window.alert('Data Added!!');
    window.location.href='shopping_cart.php';
    </script>";

		    // header("location: cart.php");
		  }
		  else
		  {
		  	echo "Something Wrong...!!";
		  }
		}
		
	 
    
      

 	}

}

 ?>

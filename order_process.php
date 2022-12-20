<?php

require_once('admin/connect.php');

session_start();

if (isset($_REQUEST['session_id'])) {

    $sid = $_REQUEST['session_id'];
	
    $qry = "SELECT * FROM cart WHERE seesion_id='$sid'";	
	$get = mysqli_query($links,$qry);
	while ($run = mysqli_fetch_array($get)) {
		
		// echo $run['pro_name']."  ".$run['pro_price']."  ".$run['pro_qty']."  ".$run['pro_img'];
		// echo "<br/>";
      
        $pro_id	    = $run['pro_id'];
        $seesion_id	    = $run['seesion_id'];
        $pro_name   = $run['product_name'];
        $pro_qty    = $run['pro_qty'];
        $pro_price  = $run['product_price'];
		//$pro_img = $run['pro_img'];
      // $total = $pro_price *  $pro_qty;
	
    //   $insqry = "INSERT INTO orders(pro_id,pro_name,session_id) VALUES ('$pro_id','$pro_name','$seesion_id')";
    //  mysqli_query($links,$insqry);
		$insqry = "INSERT INTO orders(pro_id,pro_name,pro_qty,pro_price,session_id) VALUES ('$pro_id','$pro_name','$pro_qty','$pro_price','$seesion_id')";
  	    $run_qry = mysqli_query($links,$insqry);
		  if ($run_qry) {
		    header("location: cart.php");
		  }

		   if ($pro_name =1 ) {
        
        $showqty = "DELETE FROM cart WHERE  seesion_id='$seesion_id'";
        $shdel = mysqli_query($links,$showqty);

      }

      header("location:success.php");
  		

	}
}
 
?>

<?php require_once('inc_file/header.php'); ?>

<body>

	  <!-- Header Section Begin -->
<?php require_once('inc_file/menu_bar.php'); ?>
    
    <!-- Header Section End -->

<div class="container mt-4 mb-4">
  <div class="col-sm-8 mx-auto">
  	<h2 class="text-center text-danger">Customer Information</h2>
  <form action="customer_reg_process.php" method="POST">

  	 <div class="form-group">
      <label for="email">Customer Name:</label>
      <input type="text" class="form-control " id="email" placeholder="Enter Customer Name..." name="cus_name">
    </div>

    <div class="row ">
    	 <div class="form-group col-sm-6 ml-0">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email..." name="cus_email">
    </div>

     <div class="form-group col-sm-6">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password..." name="cus_pass">
    </div>
    </div>

    <div class="form-group">
      <label for="email">Customer Phone:</label>
      <input type="number" class="form-control" id="email" placeholder="Enter Customer Phone..." name="cus_phone">
    </div>

     <div class="form-group">
  <label for="comment">Customer Address:</label>
  <textarea class="form-control" rows="5" id="comment" name="cus_addr"></textarea>
</div>

    <button type="submit" class="btn btn-primary" name="customer_user">Create User</button>
  </form>
  </div>
</div>

	<?php require_once('inc_file/footer.php'); ?>

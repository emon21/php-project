<?php require_once('inc_file/header.php'); ?>

<body>

	  <!-- Header Section Begin -->
<?php require_once('inc_file/menu_bar.php'); ?>
    
    <!-- Header Section End -->

<div class="container mt-4 mb-4">
    <h2 class="text-center text-danger">Customer Login</h2>
  <div class="col-sm-6 ">
  <form action="check_user.php" method="POST">

     <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email..." name="cus_email">
    </div>

     <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password..." name="cus_pass">
    </div>
    
    <button type="submit" class="btn btn-primary" name="login">Login</button>
  </form>
  </div>
</div>

	<?php require_once('inc_file/footer.php'); ?>

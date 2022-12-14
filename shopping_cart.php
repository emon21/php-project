<?php
 require_once('inc_file/header.php'); 

include 'admin/connect.php';

 session_start();

  $session_id = session_id();

// $sql = "SELECT * FROM cart WHERE seesion_id ='$session_id'";
// $run_qry = mysqli_query($links,$sql);
// $count = mysqli_num_rows($run_qry); 
// if($count === 1){ 
//     echo 'Yse Darta';
// }
// else{
//     echo 'No Data Found';
// }


//update Product Qty

if (isset($_POST['update_cart'])) {
  
    $cartID = $_POST['cartID'];
    $quentity = $_POST['quentity'];
  
    $up_qry =  "UPDATE cart SET pro_qty='$quentity' WHERE cart_id='$cartID'";
                //UPDATE cart SET pro_qty='10' WHERE cart_id='46' 
    $update = mysqli_query($links,$up_qry);
  
        if ($update) {
  
            echo "<script>
             window.alert('Data Update Successfully ...!!');
             window.location.href='shopping_cart.php';
             </script>";
          
        }
  
        if ($quentity <=0 ) {
          
          $showqty = "DELETE FROM cart WHERE  cart_id='$cartID'";
          $shdel = mysqli_query($db,$showqty);
  
        }
  
  }

//Delete Product

if (isset($_GET['del_ID'])) {

    $cartID = $_GET['del_ID'];
  
     $show = "DELETE FROM cart WHERE  cart_id='$cartID'";
     $shdel = mysqli_query($links,$show);
  
       if ($shdel) {
  
              echo "<script>
             
            window.alert('Data Delete Successfully ...!!');
            window.location.href='shopping_cart.php';
            </script>";
            
          }
    
    }

?>


<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
   <?php require_once('inc_file/menu_bar.php'); ?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
     <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

                           

                            <tbody>

                               <?php 


                                  require_once('admin/connect.php');

                                 
      $sid = session_id();

    //  $show = "SELECT * FROM cart WHERE  seesion_id='$session_id'";
     $show = "SELECT cart.cart_id,cart.product_name,cart.product_price,cart.pro_qty,products.product_img FROM products,cart WHERE cart.pro_id=products.id AND cart.seesion_id='$session_id'";
        
        $ser_result=mysqli_query($links,$show); 
       
        $sum = 0;
        while($row=mysqli_fetch_array($ser_result)){

            $product_price = $row['product_price'];
            $pro_qty = $row['pro_qty'];
            $total = $product_price *  $pro_qty;

           // $subtotal =  $total + ;
           $sum = $sum + $total;
            
           // $grand = (sum($total + $total));

            // $amount= ;

            // $a=array($total, $total);

            // $subtotal = array_sum($a);
             // echo $sum;


            echo '</br>';

           // echo 'Sub total :'.sum($subtotal + $total);

     ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="admin/products/<?php echo $row['product_img'] ?>" alt="" width="120" height="80">
                                        <h5><?php echo $row['product_name'] ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <?php echo $product_price ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                    <div class="row">
                                    <form action="" method="post" class="row ">
                                       <input type="hidden" name="cartID" value="<?php echo $row['cart_id'];?>" class="qty_input">
                  <input type="number" name="quentity" value="<?php echo $row['pro_qty'];?>" class="" style="width:50px;text-align: center; margin: right 20px;">
                 <input type="submit" value="Update" class="btn btn-danger ml-1" name="update_cart">
                                             </form>   
                                           
                                   </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <?php echo $total; ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                  
                                        <a href="shopping_cart.php?del_ID=<?php echo $row['cart_id']?>" onclick="return confirm('Are You Sure To Delete')"><span class="icon_close"></span></a>
                                    </td>
                                </tr>

                              <?php } ?>
                               

                            </tbody>

                              
                              
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>

                        <a href="" class="primary-btn cart-btn cart-btn-right"  name="update_cart"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div> -->
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                        <a href="product_list.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>
                                <?php echo $sum;?>
                            </span></li>
                            <li>Total <span><?php echo $sum;?></span></li>
                        </ul>
                        <a href="checkout.php" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

   <?php require_once('inc_file/footer.php'); ?>

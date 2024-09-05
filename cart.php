<!doctype html>
<html class="no-js" lang="zxx">
<?php
// Include config file
require_once "assets/php/config.php";
// Start the session
session_start();

// Check if the session variable is set
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $loggedIn = true;
    $userName = $_SESSION["username"];
    // Check if the user is an admin
    // Assuming you have a column in your users table indicating admin status
    $isAdmin = $_SESSION["admin"]; // Assuming you have a session variable for admin status
} else {
    $loggedIn = false;
}
if (!isset($_SESSION['id'])) {
    header("Location: auth/signin.php");
    exit;
}

$user_id = $_SESSION['id'];

// Fetch wishlist data
$sql = "SELECT cart.id, cart.quantity, product.id AS product_id, product.name, product.price, product.image 
        FROM cart 
        JOIN product ON cart.product_id = product.id 
        WHERE cart.user_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id]);
$cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Aina Store - Multipurpose eCommerce HTML Template

   </title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/furniture/Logo.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/meanmenu.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/swiper.min.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/fontawesome-pro.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/addtocart.js"></script>

</head>

<body>

   <!-- preloader start -->
   <div id="preloader">
      <div class="bd-loader-inner">
         <div class="bd-loader">
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
         </div>
      </div>
   </div>
   <!-- preloader start -->

   <!-- Back to top start -->
   <div class="backtotop-wrap cursor-pointer">
      <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- Back to top end -->

   <!-- search area start -->
   <div class="df-search-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="df-search-form">
                  <div class="df-search-close text-center mb-20">
                     <button class="df-search-close-btn df-search-close-btn"></button>
                  </div>
                  <form action="#">
                     <div class="df-search-input mb-10">
                        <input type="text" placeholder="Search for product...">
                        <button type="submit"><i class="flaticon-search-1"></i></button>
                     </div>
                     <div class="df-search-category">
                        <span>Search by : </span>
                        <a href="#">Healthline, </a>
                        <a href="#">COVID-19, </a>
                        <a href="#">Surgery, </a>
                        <a href="#">Surgeon, </a>
                        <a href="#">Medical research</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- search area end -->

 <!-- Offcanvas area start -->
 <div class="fix">
   <div class="offcanvas__info">
      <div class="offcanvas__wrapper">
         <div class="offcanvas__content">
            <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
               <div class="offcanvas__logo">
                  <a href="index.php">
                     <img src="assets/imgs/furniture/Logo.png" alt="logo not found">
                  </a>
               </div>
               <div class="offcanvas__close">
                  <button>
                     <i class="fal fa-times"></i>
                  </button>
               </div>
            </div>
            <div class="offcanvas__search mb-25">
               <form action="#">
                  <input type="text" placeholder="What are you searching for?">
                  <button type="submit"><i class="far fa-search"></i></button>
               </form>
            </div>
            <div class="mobile-menu fix mb-40"></div>
            <div class="offcanvas__contact mt-30 mb-20">
               <h4>Contact Info</h4>
               <ul>
                  <li class="d-flex align-items-center">
                     <div class="offcanvas__contact-icon mr-15">
                        <i class="fal fa-map-marker-alt"></i>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a target="_blank"
                           href="https://www.google.com/maps/place/Sahloul,+Sousse/@35.8375068,10.5953264,15z/data=!3m1!4b1!4m6!3m5!1s0x12fd8af5620fdf25:0x331e64ed11f24344!8m2!3d35.8403334!4d10.5943216!16s%2Fg%2F1tgv96yw?entry=ttu">Rue di Chypre Sahloul1, Sousse, Tunisia</a>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <div class="offcanvas__contact-icon mr-15">
                        <i class="far fa-phone"></i>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a href="tel:+088889797697">+21695575544</a>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <div class="offcanvas__contact-icon mr-15">
                        <i class="fal fa-envelope"></i>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a href="tel:+012-345-6789"><span class="mailto:AinaStore@gmail.com">AinaStore@gmail.com</span></a>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="offcanvas__social">
               <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area start -->

   <!-- Header area start -->
   <?php
   include 'assets/php/header.php';
   ?>
   <!-- Header area end -->

   <!-- Body main wrapper start -->
   <main>

      <!-- Breadcrumb area start  -->
      <div class="breadcrumb__area theme-bg-1 p-relative z-index-11 pt-95 pb-95">
         <div class="breadcrumb__thumb" data-background="assets/imgs/furniture/couverture.jpg"></div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="row mt-200">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__wrapper text-center">
<!--                     <h2 class="breadcrumb__title">Cart</h2>-->
                        <div class="breadcrumb__menu">
                           <nav>
                              <ul>
                                 <li><span><a href="index.php">Home</a></span></li>
                                 <li><span>Cart</span></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb area start  -->

      <!-- Cart area start  -->
      <div class="cart-area section-space">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="table-content table-responsive">
                      <table class="table">
                          <thead>
                          <tr>
                              <th class="product-thumbnail">Images</th>
                              <th class="cart-product-name">Product</th>
                              <th class="product-price">Unit Price</th>
                              <th class="product-quantity">Quantity</th>
                              <th class="product-subtotal">Total</th>
                              <th class="product-remove">Remove</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          $total_price = 0;
                          if (!empty($cart_items)): ?>
                              <?php foreach ($cart_items as $item): ?>
                                  <tr>
                                      <td class="product-thumbnail">
                                          <a href="product-details.php?id=<?php echo $item['product_id']; ?>">
                                              <img src="uploads/<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                                          </a>
                                      </td>
                                      <td class="product-name">
                                          <a href="product-details.php?id=<?php echo $item['product_id']; ?>">
                                              <?php echo htmlspecialchars($item['name']); ?>
                                          </a>
                                      </td>
                                      <td class="product-price">
                                          <span class="amount">$<?php echo number_format($item['price'], 2); ?></span>
                                      </td>
                                      <td class="product-quantity text-center">
                                          <div class="product-quantity mt-10 mb-10">
                                              <div class="product-quantity-form">
                                                  <form action="#">
                                                      <button onclick="updatecart(<?php echo $item['product_id']; ?>, <?php echo $item['quantity'] - 1; ?>)" class="cart-minus"><i class="far fa-minus"></i></button>
                                                      <input class="cart-input" type="text" value="<?php echo $item['quantity']; ?>">
                                                      <button onclick="updatecart(<?php echo $item['product_id']; ?>, <?php echo $item['quantity'] + 1; ?>)" class="cart-plus"><i class="far fa-plus"></i></button>
                                                  </form>

                                              </div>
                                          </div>
                                      </td>
                                      <td class="product-subtotal">
                                          <span class="amount">$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></span>
                                      </td>
                                      <td class="product-remove">
                                          <a href="assets/php/remove_from_cart.php?id=<?php echo $item['id']; ?>">
                                              <i class="fa fa-times"></i>
                                          </a>
                                      </td>
                                  </tr>
                                  <?php $total_price += $item['price'] * $item['quantity']; ?>
                              <?php endforeach; ?>
                              <tr>
                                  <td colspan="4" class="text-right"><strong>Total Price:</strong></td>
                                  <td class="product-subtotal"><strong>$<?php echo number_format($total_price, 2); ?></strong></td>
                                  <td></td>
                              </tr>
                          <?php else: ?>
                              <tr>
                                  <td colspan="6" class="text-center">Your cart is empty.</td>
                              </tr>
                          <?php endif; ?>
                          </tbody>
                      </table>
                  </div>

                   <div class="row">
                       <div class="col-lg-6 ml-auto">
                           <div class="cart-page-total">
                               <h2>Cart totals</h2>
                               <ul class="mb-20">
                                   <li>Subtotal <span>$<?php echo number_format($total_price, 2); ?></span></li>
                                   <li>Total <span>$<?php echo number_format($total_price, 2); ?></span></li>
                               </ul>
                               <form action="assets/php/confirm_order.php" method="post">
                                   <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">
                                   <button type="submit" class="fill-btn">
                    <span class="fill-btn-inner">
                        <span class="fill-btn-normal">Confirm Order</span>
                        <span class="fill-btn-hover">Confirm Order</span>
                    </span>
                                   </button>
                               </form>
                           </div>
                       </div>
                   </div>

               </div>
            </div>
         </div>
      </div>
      <!-- Cart area end  -->

   </main>
   <!-- Body main wrapper end -->

  <!-- Footer area start -->
  <footer class="footer-bg">
   <div class="footer-area pt-100 pb-20">
      <div class="footer-style-4">
         <div class="container">
            <div class="footer-grid-3">
               <div class="footer-widget-4">
                  <div class="footer-logo mb-35">
                     <a href="index.php"><img src="assets/imgs/furniture/Logo.png"
                                              alt="image bnot found"></a>
                  </div>
                  <p>Shine with our accessories
                  </p>
                  <div class="theme-social">
                     <a class="furniture-bg-hover" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                     <a class="furniture-bg-hover" href="#"><i class="fa-brands fa-tiktok"></i></a>
                     <a class="furniture-bg-hover" href="#"><i class="fa-brands fa-instagram"></i></a>
                  </div>
               </div>
               <div class="footer-widget-4">
                  <div class="footer-widget-title">
                     <h4>Services</h4>
                  </div>
                  <div class="footer-link">
                     <ul>
                        <li><a href="error.html">Log In</a></li>
                        <li><a href="wishlist.php">Wishlist</a></li>
                        <li><a href="error.html">Return Policy</a></li>
                        <li><a href="error.html">Privacy policy</a></li>
                        <li><a href="faq.html">Shopping FAQs</a></li>
                     </ul>
                  </div>
               </div>
               <div class="footer-widget-4">
                  <div class="footer-widget-title">
                     <h4>Company</h4>
                  </div>
                  <div class="footer-link">
                     <ul>
                        <li><a href="index.php">Home</a></li>
                        <!--                           <li><a href="about.html">About us </a></li>-->
                        <!--                           <li><a href="about.html">Pages</a></li>-->
                        <!--                           <li><a href="blog.html">Blog</a></li>-->

                        <li><a href="product.html">Bagues</a></li>
                        <li><a href="boucles.html">Boucles</a></li>
                        <li><a href="colliers.html">Colliers</a></li>
                        <li><a href="bracelets.html">Bracelets</a></li>
                        <li><a href="pack.html">Pack</a></li>

                        <li><a href="contact.php">Contact us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="footer-widget footer-col-4">
                  <div class="footer-widget-title">
                     <h4>Follow us on Instagram</h4>
                  </div>
                  <div class="footer-info mb-35">
                     <p class="w-75">@aina.tn</p>
                     <div class="footer-info-item d-flex align-items-start pb-15 pt-15">
                        <div class="footer-info-icon mr-20">
                           <span> <i class="fa-solid fa-location-dot furniture-icon"></i></span>
                        </div>
                        <div class="footer-info-text">    
                           <a class="furniture-clr-hover" target="_blank"
                              href="https://www.google.com/maps/place/Orville+St,+La+Presa,+CA+91977,+USA/@32.7092048,-117.0082772,17z/data=!3m1!4b1!4m5!3m4!1s0x80d9508a9aec8cd1:0x72d1ac1c9527b705!8m2!3d32.7092003!4d-117.0060885">711-2880
                              Sahloul Sousse</a>
                              
                        </div>
                     </div>
                     <div class="footer-info-item d-flex align-items-start">
                        <div class="footer-info-icon mr-20">
                           <span><i class="fa-solid fa-phone furniture-icon"></i></span>
                        </div>
                        <div class="footer-info-text">
                           <a class="furniture-clr-hover" href="tel:+21695575544">+21695575544</a>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="footer-copyright-area b-t">
         <div class="footer-copyright-wrapper">
            <div class="footer-copyright-text">
               <p class="mb-0">© Copyright 2024 Aina  <a target="_blank" class="furniture-clr-hover"
                     ></p>
            </div>
           
            <div class="footer-conditions">
               <ul>
                  <li><a class="furniture-clr-hover" href="#">Terms & Condition</a></li>
                  <li><a class="furniture-clr-hover" href="#">Privacy Policy</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- Footer area end -->

   <!-- JS here -->
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <script src="assets/js/waypoints.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/meanmenu.min.js"></script>
   <script src="assets/js/swiper.min.js"></script>
   <script src="assets/js/slick.min.js"></script>
   <script src="assets/js/magnific-popup.min.js"></script>
   <script src="assets/js/counterup.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/beforeafter.jquery-1.0.0.min.js"></script>
   <script src="assets/js/main.js"></script>
</body>

</html>
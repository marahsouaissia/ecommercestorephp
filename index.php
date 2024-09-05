<!doctype html>
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


?>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Aina Store - Multipurpose eCommerce HTML Template</title>
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
    <script src="assets/js/addToWishlist.js"></script>
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

   <!-- Add cart modal area start -->
   <div class="product-modal-sm modal fade" id="producQuickViewModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="product-modal">
               <div class="product-modal-wrapper p-relative">
                  <button type="button" class="close product-modal-close" data-bs-dismiss="modal" aria-label="Close">
                     <i class="fal fa-times"></i>
                  </button>
                  <div class="modal__inner">
                     <div class="bd__shop-details-inner">
                        <div class="row">
                           <div class="col-xxl-6 col-lg-6">
                              <div class="product__details-thumb-wrapper d-sm-flex align-items-start">
                                 <div class="product__details-thumb-tab mr-20">
                                    <nav>
                                       <div class="nav nav-tabs flex-nowrap flex-sm-column" id="nav-tab" role="tablist">
                                          <button class="nav-link active" id="img-1-tab" data-bs-toggle="tab"
                                             data-bs-target="#img-1" type="button" role="tab" aria-controls="img-1"
                                             aria-selected="true">
                                             <img src="assets/imgs/product/details/im1.png"
                                                alt="product-sm-thumb">
                                          </button>
                                          <button class="nav-link" id="img-2-tab" data-bs-toggle="tab"
                                             data-bs-target="#img-2" type="button" role="tab" aria-controls="img-3"
                                             aria-selected="false">
                                             <img src="assets/imgs/product/details/im1.png"
                                                alt="product-sm-thumb">
                                          </button>
                                          <button class="nav-link" id="img-3-tab" data-bs-toggle="tab"
                                             data-bs-target="#img-3" type="button" role="tab" aria-controls="img-3"
                                             aria-selected="false">
                                             <img src="assets/imgs/product/details/details-06.png"
                                                alt="product-sm-thumb">
                                          </button>
                                       </div>
                                    </nav>
                                 </div>
                                 <div class="product__details-thumb-tab-content">
                                    <div class="tab-content" id="productthumbcontent">
                                       <div class="tab-pane fade show active" id="img-1" role="tabpanel"
                                          aria-labelledby="img-1-tab">
                                          <div class="product__details-thumb-big w-img">
                                             <img src="assets/imgs/product/details/im1.png" alt="">
                                          </div>
                                       </div>
                                       <div class="tab-pane fade" id="img-2" role="tabpanel"
                                          aria-labelledby="img-2-tab">
                                          <div class="product__details-thumb-big w-img">
                                             <img src="assets/imgs/product/details/details-05.png" alt="">
                                          </div>
                                       </div>
                                       <div class="tab-pane fade" id="img-3" role="tabpanel"
                                          aria-labelledby="img-3-tab">
                                          <div class="product__details-thumb-big w-img">
                                             <img src="assets/imgs/product/details/details-06.png" alt="">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-lg-6">
                              <div class="product__details-content">
                                 <div class="product__details-top d-flex flex-wrap gap-3 align-items-center mb-15">
                                    <div class="product__details-tag">
                                       <a href="#">Construction</a>
                                    </div>
                                    <div class="product__details-rating">
                                       <a href="#"><i class="fa-solid fa-star"></i></a>
                                       <a href="#"><i class="fa-solid fa-star"></i></a>
                                       <a href="#"><i class="fa-regular fa-star"></i></a>
                                    </div>
                                    <div class="product__details-review-count">
                                       <a href="#">10 Reviews</a>
                                    </div>
                                 </div>
                                 <h3 class="product__details-title">Disposable Surgical Face Mask</h3>
                                 <div class="product__details-price">
                                    <span class="old-price">30dt</span>
                                    <span class="new-price">19dt</span>
                                 </div>
                                 <p>Accessoires de haute qualité</p>

                                 <div class="product__details-action mb-35">
                                    <div class="product__quantity">
                                       <div class="product-quantity-wrapper">
                                          <form action="#">
                                             <button class="cart-minus"><i class="fa-light fa-minus"></i></button>
                                             <input class="cart-input" type="text" value="1">
                                             <button class="cart-plus"><i class="fa-light fa-plus"></i></button>
                                          </form>
                                       </div>
                                    </div>
                                    <div class="product__add-cart">
                                       <a href="javascript:void(0)" class="fill-btn cart-btn">
                                          <span class="fill-btn-inner">
                                             <span class="fill-btn-normal">Add To Cart<i
                                                   class="fa-solid fa-basket-shopping"></i></span>
                                             <span class="fill-btn-hover">Add To Cart<i
                                                   class="fa-solid fa-basket-shopping"></i></span>
                                          </span>
                                       </a>
                                    </div>
                                    <div class="product__add-wish">
                                       <a href="#" class="product__add-wish-btn"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                 </div>
                                 <div class="product__details-meta">
                                    <div class="sku">
                                       <span>SKU:</span>
                                       <a href="#">52245655</a>
                                    </div>
                                    <div class="categories">
                                       <span>Categories:</span> <a href="#">Rings,</a> <a href="#">Cream,</a> <a
                                          href="#">Fermented.</a>
                                    </div>
                                    <div class="tag">
                                       <span>Tags:</span> <a href="#"> Cheese,</a> <a href="#">Custard,</a> <a
                                          href="#">Frozen</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Add cart modal area end -->

   <!-- Header area start -->
   <?php
   include 'assets/php/header.php';
   ?>
   <!-- Header area end -->

   <!-- Body main wrapper start -->
   <main>
       <div id="popup" class="popup">
           <span class="popup-message"></span>
           <button onclick="closePopup()">Close</button>
       </div>

      <!-- Banner area start -->
      <section class="banner-4 p-relative furniture-banner-area fix bg-image pb-100"
         data-background="assets/imgs/furniture/banner/bg.png" data-bg-color="#F5F1E6">
         <div class="swiper banner-active">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="banner-item-4 d-flex align-items-end">
                     <div class="container">
                        <div class="row g-5 align-self-end">
                           <div class="col-xxl-6 col-lg-6">
                              <div class="banner-content-4 furniture__content">
                                 <span>New Arrival...</span>
                                 <h2 class="banner-title-4">La finesse <br>  d un bijou fait main, intemporel et élégant…</h2>
                                 <p>Passionnés de création , nous façonnons dans nos ateliers des bijoux intemporels et élégants. Chacune de nos créations est minutieusement travaillée avec amour à la main. <strong> Aina </strong> est l’ univers ou le raffinement se côtoie à la simplicité pour rendre chaque bijou… <strong> exceptionnel ! </strong></p>
                                 <div class="banner-btn-wrapper furniture__btn-group">
                                    <a class="solid-btn" href="product-details.php">Buy Now<span><i
                                             class="fa-regular fa-angle-right"></i></span></a>
                                    <a class="border__btn-banner" href="product-details.php">view details<span><i
                                             class="fa-regular fa-angle-right"></i></span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-lg-6">
                              <div class="banner-thumb-wrapper-4 p-relative">
                                 <div class="banner-thumb-4 p-relative z-index-1">
                                    <img src="assets/imgs/product/Bagues.jpeg" alt="image">
                                 </div>
                                 <div class="furniture-circle d-none d-lg-block">
                                    <img src="assets/imgs/furniture/banner/circle.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="banner-item-4 d-flex align-items-end">
                     <div class="container">
                        <div class="row g-5 align-self-end">
                           <div class="col-xxl-6 col-lg-6">
                              <div class="banner-content-4 furniture__content">
                                 <span>New Arrival...</span>
                                 <h2 class="banner-title-4">La finesse <br>  d un bijou fait main, intemporel et élégant…</h2>
                                 <p> <p>Passionnés de création , nous façonnons dans nos ateliers des bijoux intemporels et élégants. Chacune de nos créations est minutieusement travaillée avec amour à la main. <strong> Aina </strong> est l’ univers ou le raffinement se côtoie à la simplicité pour rendre chaque bijou… <strong> exceptionnel ! </strong></p>
                                 <div class="banner-btn-wrapper furniture__btn-group">
                                    <a class="solid-btn" href="product-details.php">Buy Now<span><i
                                             class="fa-regular fa-angle-right"></i></span></a>
                                    <a class="border__btn-banner" href="product-details.php">view details<span><i
                                             class="fa-regular fa-angle-right"></i></span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-lg-6">
                              <div class="banner-thumb-wrapper-4 p-relative">
                                 <div class="banner-thumb-4 p-relative z-index-1">
                                    <img src="assets/imgs/product/Colliers.jpeg" alt="image">
                                 </div>
                                 <div class="furniture-circle d-none d-lg-block">
                                    <img src="assets/imgs/furniture/banner/circle.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="banner-item-4 d-flex align-items-end">
                     <div class="container">
                        <div class="row g-5 align-self-end">
                           <div class="col-xxl-6 col-lg-6">
                              <div class="banner-content-4 furniture__content">
                                 <span>New Arrival...</span>
                                 <h2 class="banner-title-4">La finesse <br>  d un bijou fait main, intemporel et élégant…</h2>
                                 <p>Passionnés de création , nous façonnons dans nos ateliers des bijoux intemporels et élégants. Chacune de nos créations est minutieusement travaillée avec amour à la main. <strong> Aina </strong> est l’ univers ou le raffinement se côtoie à la simplicité pour rendre chaque bijou… <strong> exceptionnel ! </strong></p>
                                 <div class="banner-btn-wrapper furniture__btn-group">
                                    <a class="solid-btn" href="product-details.php">Buy Now<span><i
                                             class="fa-regular fa-angle-right"></i></span></a>
                                    <a class="border__btn-banner" href="product-details.php">view details<span><i
                                             class="fa-regular fa-angle-right"></i></span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-lg-6">
                              <div class="banner-thumb-wrapper-4 p-relative">
                                 <div class="banner-thumb-4 p-relative z-index-1">
                                    <img src="assets/imgs/product/Bracelets.jpeg" alt="image">
                                 </div>
                                 <div class="furniture-circle d-none d-lg-block">
                                    <img src="assets/imgs/furniture/banner/circle.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- If we need pagination -->
            <div class="banner-dot-inner">
               <div class="banner-dot"></div>
            </div>
         </div>
      </section>
      <!-- Banner area end -->

      <!-- Service area start -->
      <section class="furniture-service pt-100 pb-100">
         <div class="container">
            <div class="row g-4">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="furniture-service__item">
                     <div class="fsr-icon">
                        <svg width="80" height="63" viewBox="0 0 80 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_210_55)">
                              <path
                                 d="M21.6673 48.2343H15.0007C14.5586 48.2343 14.1347 48.0615 13.8221 47.7538C13.5096 47.4461 13.334 47.0288 13.334 46.5937C13.334 46.1586 13.5096 45.7413 13.8221 45.4336C14.1347 45.1259 14.5586 44.9531 15.0007 44.9531H21.6673C22.1093 44.9531 22.5333 45.1259 22.8458 45.4336C23.1584 45.7413 23.334 46.1586 23.334 46.5937C23.334 47.0288 23.1584 47.4461 22.8458 47.7538C22.5333 48.0615 22.1093 48.2343 21.6673 48.2343ZM75.834 48.2343H71.6673C71.2253 48.2343 70.8014 48.0615 70.4888 47.7538C70.1762 47.4461 70.0007 47.0288 70.0007 46.5937C70.0007 46.1586 70.1762 45.7413 70.4888 45.4336C70.8014 45.1259 71.2253 44.9531 71.6673 44.9531H74.4506L76.6973 33.1669C76.6673 27.1359 71.434 21.9844 65.0007 21.9844H54.0573L48.754 44.9531H58.334C58.776 44.9531 59.1999 45.1259 59.5125 45.4336C59.8251 45.7413 60.0007 46.1586 60.0007 46.5937C60.0007 47.0288 59.8251 47.4461 59.5125 47.7538C59.1999 48.0615 58.776 48.2343 58.334 48.2343H46.6673C46.4172 48.2345 46.1703 48.1792 45.9449 48.0726C45.7194 47.966 45.5213 47.8108 45.365 47.6186C45.2088 47.4264 45.0985 47.202 45.0424 46.9621C44.9862 46.7222 44.9856 46.4729 45.0407 46.2328L51.1007 19.9828C51.1839 19.6194 51.3903 19.2947 51.686 19.0621C51.9816 18.8295 52.3489 18.7029 52.7273 18.7031H65.0007C73.2707 18.7031 80.0007 25.328 80.0007 33.4687L77.4706 46.8956C77.3998 47.2718 77.1972 47.6117 76.8983 47.8563C76.5993 48.1009 76.2227 48.2346 75.834 48.2343Z"
                                 fill="#B18B5E" />
                              <path
                                 d="M65 54.7968C60.4067 54.7968 56.6667 51.1185 56.6667 46.5937C56.6667 42.0689 60.4067 38.3906 65 38.3906C69.5933 38.3906 73.3333 42.0689 73.3333 46.5937C73.3333 51.1185 69.5933 54.7968 65 54.7968ZM65 41.6718C62.2433 41.6718 60 43.8801 60 46.5937C60 49.3073 62.2433 51.5156 65 51.5156C67.7567 51.5156 70 49.3073 70 46.5937C70 43.8801 67.7567 41.6718 65 41.6718ZM28.3333 54.7968C23.74 54.7968 20 51.1185 20 46.5937C20 42.0689 23.74 38.3906 28.3333 38.3906C32.9267 38.3906 36.6667 42.0689 36.6667 46.5937C36.6667 51.1185 32.9267 54.7968 28.3333 54.7968ZM28.3333 41.6718C25.5767 41.6718 23.3333 43.8801 23.3333 46.5937C23.3333 49.3073 25.5767 51.5156 28.3333 51.5156C31.09 51.5156 33.3333 49.3073 33.3333 46.5937C33.3333 43.8801 31.09 41.6718 28.3333 41.6718ZM21.6667 18.7031H8.33333C7.89131 18.7031 7.46738 18.5303 7.15482 18.2226C6.84226 17.9149 6.66667 17.4976 6.66667 17.0625C6.66667 16.6274 6.84226 16.2101 7.15482 15.9024C7.46738 15.5947 7.89131 15.4219 8.33333 15.4219H21.6667C22.1087 15.4219 22.5326 15.5947 22.8452 15.9024C23.1577 16.2101 23.3333 16.6274 23.3333 17.0625C23.3333 17.4976 23.1577 17.9149 22.8452 18.2226C22.5326 18.5303 22.1087 18.7031 21.6667 18.7031ZM21.6667 28.5469H5C4.55797 28.5469 4.13405 28.374 3.82149 28.0663C3.50893 27.7587 3.33333 27.3414 3.33333 26.9062C3.33333 26.4711 3.50893 26.0538 3.82149 25.7461C4.13405 25.4385 4.55797 25.2656 5 25.2656H21.6667C22.1087 25.2656 22.5326 25.4385 22.8452 25.7461C23.1577 26.0538 23.3333 26.4711 23.3333 26.9062C23.3333 27.3414 23.1577 27.7587 22.8452 28.0663C22.5326 28.374 22.1087 28.5469 21.6667 28.5469ZM21.6667 38.3906H1.66667C1.22464 38.3906 0.800716 38.2177 0.488155 37.9101C0.175595 37.6024 0 37.1851 0 36.75C0 36.3148 0.175595 35.8976 0.488155 35.5899C0.800716 35.2822 1.22464 35.1093 1.66667 35.1093H21.6667C22.1087 35.1093 22.5326 35.2822 22.8452 35.5899C23.1577 35.8976 23.3333 36.3148 23.3333 36.75C23.3333 37.1851 23.1577 37.6024 22.8452 37.9101C22.5326 38.2177 22.1087 38.3906 21.6667 38.3906Z"
                                 fill="#B18B5E" />
                              <path
                                 d="M46.6673 48.2343H35.0007C34.5586 48.2343 34.1347 48.0615 33.8221 47.7538C33.5096 47.4461 33.334 47.0288 33.334 46.5937C33.334 46.1586 33.5096 45.7413 33.8221 45.4336C34.1347 45.1259 34.5586 44.9531 35.0007 44.9531H45.3373L52.9107 12.1406H15.0007C14.5586 12.1406 14.1347 11.9678 13.8221 11.6601C13.5096 11.3524 13.334 10.9351 13.334 10.5C13.334 10.0649 13.5096 9.64758 13.8221 9.3399C14.1347 9.03223 14.5586 8.85938 15.0007 8.85938H55.0007C55.2507 8.85925 55.4977 8.91453 55.7231 9.02112C55.9485 9.12771 56.1467 9.28287 56.3029 9.47511C56.4592 9.66735 56.5694 9.89173 56.6256 10.1316C56.6818 10.3715 56.6823 10.6208 56.6273 10.8609L48.294 46.9546C48.2107 47.318 48.0043 47.6427 47.7087 47.8753C47.413 48.1079 47.0458 48.2345 46.6673 48.2343Z"
                                 fill="#B18B5E" />
                           </g>
                           <defs>
                              <clipPath id="clip0_210_55">
                                 <rect width="80" height="62.9999" fill="white" />
                              </clipPath>
                           </defs>
                        </svg>
                     </div>
                     <div class="frs-content">
                        <h6>Free Delivery</h6>
                        <p>Free shipping on all order</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="furniture-service__item">
                     <div class="fsr-icon">
                        <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_210_27)">
                              <path
                                 d="M58.9337 12.1402C58.1563 11.2355 57.0676 10.683 55.868 10.5844L13.6154 7.11145C12.4156 7.01282 11.2491 7.38 10.33 8.14515C9.41469 8.90731 8.85419 9.97354 8.75083 11.1487L7.90075 18.9993H4.50643C2.02159 18.9993 0 20.9893 0 23.4353V49.4714C0 51.9174 2.02159 53.9074 4.50643 53.9074H46.9062C49.3912 53.9074 51.4128 51.9174 51.4128 49.4714V45.2479L52.9173 45.3715C53.0443 45.3819 53.1705 45.3871 53.2956 45.3871C55.6122 45.3871 57.587 43.6326 57.7832 41.32L59.9841 15.3743C60.0841 14.1934 59.7111 13.0449 58.9337 12.1402ZM4.50643 21.3064H46.9062C48.0987 21.3064 49.069 22.2615 49.069 23.4353V25.8077H2.34374V23.4353C2.34374 22.2615 3.31393 21.3064 4.50643 21.3064ZM2.34374 28.1149H49.069V32.9009H2.34374V28.1149ZM46.9062 51.6003H4.50643C3.31393 51.6003 2.34374 50.6452 2.34374 49.4714V35.208H49.069V49.4714C49.069 50.6452 48.0987 51.6003 46.9062 51.6003ZM57.6484 15.1822L55.4475 41.1279C55.3483 42.2978 54.3005 43.1704 53.1123 43.0724L51.4128 42.9327V23.4353C51.4128 20.9893 49.3912 18.9993 46.9062 18.9993H10.2579L11.0827 11.3812C11.0837 11.3725 11.0845 11.3638 11.0852 11.3549C11.1845 10.1851 12.2316 9.31255 13.4204 9.4106L55.6731 12.8835C56.2489 12.9308 56.7714 13.196 57.1444 13.6302C57.5174 14.0644 57.6965 14.6155 57.6484 15.1822Z"
                                 fill="#B18B5E" />
                              <path
                                 d="M44.1651 38.6377H32.8867C32.2395 38.6377 31.7148 39.1541 31.7148 39.7913V47.0344C31.7148 47.6715 32.2395 48.1879 32.8867 48.1879H44.1651C44.8123 48.1879 45.337 47.6715 45.337 47.0344V39.7913C45.337 39.1541 44.8123 38.6377 44.1651 38.6377ZM42.9932 45.8808H34.0586V40.9448H42.9932V45.8808Z"
                                 fill="#B18B5E" />
                           </g>
                           <defs>
                              <clipPath id="clip0_210_27">
                                 <rect width="60" height="59.0624" fill="white" transform="translate(0 0.970459)" />
                              </clipPath>
                           </defs>
                        </svg>

                     </div>
                     <div class="frs-content">
                        <h6>Money Return</h6>
                        <p>Back guarantee under 7 day</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="furniture-service__item">
                     <div class="fsr-icon">
                        <svg width="64" height="63" viewBox="0 0 64 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M5.33406 31.5001C5.33334 26.5707 6.7429 21.7407 9.40132 17.5632C12.0598 13.3857 15.8596 10.0297 20.3657 7.87934C24.8718 5.72899 29.902 4.87128 34.8803 5.40444C39.8586 5.93759 44.5838 7.84006 48.5147 10.894H44.4583C44.1069 10.8973 43.7711 11.0371 43.5238 11.2828C43.2766 11.5286 43.1378 11.8605 43.1378 12.2064C43.1378 12.5524 43.2766 12.8843 43.5238 13.1301C43.7711 13.3758 44.1069 13.5156 44.4583 13.5189H52.0007C52.3543 13.5189 52.6935 13.3806 52.9435 13.1345C53.1936 12.8883 53.3341 12.5545 53.3341 12.2064V4.78163C53.3358 4.6082 53.3025 4.43616 53.2363 4.27545C53.1701 4.11474 53.0721 3.96855 52.9481 3.84532C52.8242 3.72209 52.6766 3.62427 52.514 3.55751C52.3514 3.49075 52.1769 3.45638 52.0007 3.45638C51.8246 3.45638 51.6501 3.49075 51.4875 3.55751C51.3249 3.62427 51.1773 3.72209 51.0533 3.84532C50.9294 3.96855 50.8314 4.11474 50.7652 4.27545C50.699 4.43616 50.6657 4.6082 50.6674 4.78163V9.22607C44.8535 4.50493 37.4165 2.16785 29.899 2.69954C22.3815 3.23124 15.3604 6.59091 10.2918 12.0817C5.22327 17.5726 2.49625 24.7732 2.67635 32.1902C2.85646 39.6072 5.92989 46.6713 11.2592 51.9175C11.3825 52.0417 11.5295 52.1405 11.6919 52.2084C11.8543 52.2762 12.0287 52.3116 12.2051 52.3126C12.3814 52.3136 12.5563 52.2802 12.7194 52.2142C12.8825 52.1482 13.0308 52.051 13.1555 51.9283C13.2802 51.8055 13.3789 51.6596 13.446 51.499C13.513 51.3384 13.547 51.1663 13.546 50.9927C13.5449 50.8191 13.5089 50.6474 13.44 50.4875C13.3711 50.3277 13.2707 50.1829 13.1446 50.0616C10.6606 47.6297 8.69126 44.737 7.35059 41.551C6.00992 38.3649 5.32452 34.9487 5.33406 31.5001ZM20.3471 55.1193C19.5867 54.7549 18.8442 54.3555 18.1221 53.9222C17.8202 53.7408 17.4576 53.6849 17.1139 53.7667C16.7702 53.8486 16.4736 54.0615 16.2894 54.3586C16.1051 54.6557 16.0483 55.0126 16.1315 55.351C16.2146 55.6893 16.4309 55.9812 16.7327 56.1626C17.5274 56.6398 18.3447 57.0795 19.1819 57.4802C19.3394 57.5555 19.5104 57.5996 19.6852 57.6098C19.86 57.6201 20.0351 57.5964 20.2006 57.54C20.366 57.4837 20.5186 57.3958 20.6495 57.2814C20.7805 57.167 20.8873 57.0283 20.9638 56.8733C21.0403 56.7183 21.0851 56.55 21.0955 56.3779C21.1059 56.2059 21.0818 56.0335 21.0246 55.8706C20.9674 55.7077 20.8781 55.5576 20.7619 55.4286C20.6457 55.2997 20.5048 55.1946 20.3473 55.1193H20.3471ZM56.0066 20.053C56.0829 20.2081 56.1895 20.3469 56.3203 20.4614C56.4512 20.576 56.6036 20.6641 56.769 20.7206C56.9344 20.7772 57.1095 20.8011 57.2843 20.7911C57.4591 20.781 57.6302 20.7372 57.7878 20.662C57.9454 20.5869 58.0864 20.4819 58.2028 20.3532C58.3192 20.2244 58.4086 20.0743 58.4661 19.9115C58.5235 19.7487 58.5479 19.5763 58.5376 19.4042C58.5274 19.2321 58.4829 19.0637 58.4066 18.9086C58.0008 18.0843 57.5554 17.2795 57.0719 16.4969C56.9809 16.3496 56.8613 16.2214 56.72 16.1197C56.5786 16.0179 56.4183 15.9445 56.2482 15.9037C55.9045 15.8213 55.5417 15.8767 55.2396 16.0576C54.9374 16.2386 54.7206 16.5303 54.6369 16.8685C54.5532 17.2068 54.6095 17.5639 54.7933 17.8614C55.2326 18.5726 55.6375 19.304 56.0066 20.053ZM35.1641 57.5662C34.3223 57.6646 33.4707 57.7232 32.6322 57.7431C32.285 57.7562 31.9567 57.9022 31.7172 58.15C31.4777 58.3978 31.346 58.7279 31.35 59.0699C31.354 59.4119 31.4936 59.7388 31.7388 59.9811C31.9841 60.2233 32.3158 60.3617 32.6632 60.3669C32.6736 60.3669 32.6847 60.3669 32.6951 60.3662C33.6169 60.3451 34.5524 60.2801 35.4769 60.1727C35.8278 60.1315 36.1478 59.955 36.3665 59.6817C36.5852 59.4085 36.6848 59.061 36.6434 58.7156C36.602 58.3701 36.4229 58.055 36.1456 57.8394C35.8683 57.6238 35.5154 57.5253 35.1644 57.5657L35.1641 57.5662ZM27.5757 57.388C26.7414 57.2508 25.9143 57.0742 25.0972 56.8589C24.7555 56.769 24.3915 56.8164 24.0853 56.9907C23.779 57.165 23.5557 57.4519 23.4644 57.7882C23.373 58.1246 23.4212 58.4829 23.5982 58.7844C23.7753 59.0858 24.0667 59.3056 24.4084 59.3955C25.308 59.6319 26.2186 59.8258 27.1369 59.9768C27.3096 60.0052 27.4863 59.9998 27.6569 59.9609C27.8275 59.922 27.9886 59.8505 28.1311 59.7503C28.2736 59.6502 28.3947 59.5234 28.4874 59.3772C28.5801 59.2309 28.6426 59.0682 28.6714 58.8982C28.7002 58.7282 28.6948 58.5542 28.6553 58.3863C28.6158 58.2184 28.5431 58.0598 28.4414 57.9195C28.3396 57.7793 28.2108 57.6601 28.0623 57.5688C27.9137 57.4776 27.7484 57.416 27.5757 57.3877V57.388ZM60.0248 30.8673C59.6713 30.8588 59.3289 30.9889 59.0728 31.2288C58.8167 31.4688 58.6678 31.799 58.6589 32.147C58.6374 32.9801 58.5763 33.8118 58.4759 34.6393C58.4342 34.985 58.5335 35.3328 58.7521 35.6064C58.9708 35.88 59.2908 36.057 59.6419 36.0985C59.6951 36.1043 59.7486 36.1073 59.8021 36.1075C60.1279 36.107 60.4424 35.9891 60.686 35.776C60.9296 35.5629 61.0855 35.2694 61.1243 34.9508C61.2342 34.0416 61.3009 33.1278 61.3243 32.2124C61.3288 32.0401 61.2987 31.8686 61.2358 31.7077C61.1729 31.5468 61.0784 31.3997 60.9577 31.2748C60.837 31.1499 60.6925 31.0496 60.5324 30.9797C60.3724 30.9097 60.1999 30.8716 60.0248 30.8673ZM55.9323 45.88C55.6397 45.6847 55.2803 45.6117 54.9331 45.6769C54.5858 45.7422 54.2791 45.9403 54.0801 46.2279C53.6043 46.917 53.0956 47.5836 52.5559 48.2255C52.4416 48.3579 52.3551 48.5113 52.3015 48.6768C52.2479 48.8424 52.2282 49.0168 52.2436 49.1898C52.259 49.3629 52.3092 49.5313 52.3912 49.6852C52.4733 49.839 52.5855 49.9753 52.7215 50.0861C52.8574 50.1969 53.0144 50.28 53.1833 50.3306C53.3521 50.3812 53.5295 50.3983 53.7051 50.3809C53.8808 50.3635 54.0511 50.3119 54.2063 50.2292C54.3615 50.1465 54.4985 50.0342 54.6093 49.8989C55.2031 49.1934 55.7625 48.4604 56.2857 47.7027C56.3841 47.5601 56.453 47.3999 56.4884 47.2312C56.5239 47.0625 56.5253 46.8885 56.4925 46.7193C56.4597 46.55 56.3933 46.3888 56.2972 46.2448C56.2011 46.1008 56.0771 45.9768 55.9323 45.88ZM57.7696 24.7287C57.9869 25.5334 58.1652 26.3478 58.3041 27.1691C58.3557 27.4755 58.5161 27.754 58.7566 27.955C58.9971 28.156 59.3023 28.2665 59.6178 28.2669C59.6913 28.2668 59.7647 28.2608 59.8372 28.249C60.0099 28.2208 60.1754 28.1593 60.324 28.0682C60.4727 27.977 60.6016 27.858 60.7035 27.7177C60.8053 27.5775 60.8781 27.4189 60.9177 27.251C60.9573 27.0831 60.9629 26.9091 60.9342 26.7391C60.7818 25.8351 60.5858 24.9388 60.3467 24.0532C60.2557 23.7168 60.0327 23.4298 59.7267 23.2553C59.4207 23.0808 59.0568 23.0331 58.7151 23.1227C58.3734 23.2122 58.0818 23.4318 57.9046 23.733C57.7273 24.0342 57.6788 24.3924 57.7698 24.7287H57.7696ZM48.9688 51.7522C48.3169 52.2831 47.6397 52.7831 46.9396 53.2506C46.7946 53.3473 46.6705 53.4711 46.5742 53.6151C46.4779 53.759 46.4114 53.9202 46.3784 54.0894C46.3454 54.2587 46.3465 54.4327 46.3818 54.6015C46.4171 54.7703 46.4859 54.9306 46.5841 55.0732C46.6824 55.2159 46.8082 55.3381 46.9544 55.4328C47.1006 55.5276 47.2644 55.5931 47.4363 55.6256C47.6082 55.6581 47.785 55.657 47.9564 55.6222C48.1279 55.5875 48.2908 55.5198 48.4357 55.4231C49.2058 54.9091 49.9507 54.3595 50.6681 53.7761C50.9407 53.5543 51.1127 53.235 51.1461 52.8883C51.1796 52.5417 51.0718 52.1962 50.8464 51.9278C50.6211 51.6594 50.2967 51.4902 49.9446 51.4572C49.5924 51.4243 49.2414 51.5304 48.9688 51.7522ZM59.0736 38.6632C58.7367 38.5578 58.3711 38.5884 58.0571 38.748C57.7431 38.9077 57.5063 39.1835 57.3986 39.5149C57.1412 40.3078 56.8455 41.0882 56.5124 41.8534C56.4397 42.0123 56.3999 42.1839 56.3953 42.3582C56.3907 42.5325 56.4214 42.7059 56.4856 42.8684C56.5499 43.0308 56.6464 43.179 56.7694 43.3044C56.8925 43.4297 57.0397 43.5296 57.2025 43.5984C57.3652 43.6671 57.5403 43.7032 57.7174 43.7046C57.8945 43.7059 58.07 43.6726 58.2339 43.6064C58.3977 43.5403 58.5465 43.4426 58.6716 43.3192C58.7967 43.1958 58.8956 43.0491 58.9624 42.8877C59.3299 42.0452 59.6555 41.1857 59.9383 40.3121C59.9916 40.1479 60.0115 39.975 59.9969 39.8033C59.9823 39.6316 59.9334 39.4644 59.8531 39.3112C59.7728 39.1581 59.6626 39.022 59.5288 38.9108C59.3951 38.7996 59.2404 38.7155 59.0736 38.6632ZM42.4928 55.6397C41.7153 55.967 40.9223 56.2577 40.1166 56.5106C39.9498 56.5629 39.7951 56.6471 39.6613 56.7583C39.5275 56.8695 39.4173 57.0055 39.337 57.1587C39.2567 57.3118 39.2077 57.479 39.193 57.6507C39.1783 57.8224 39.1981 57.9953 39.2513 58.1595C39.3045 58.3237 39.39 58.476 39.503 58.6077C39.6159 58.7393 39.7541 58.8478 39.9097 58.9269C40.0652 59.006 40.2351 59.0541 40.4095 59.0686C40.584 59.0831 40.7596 59.0636 40.9264 59.0113C41.8134 58.7331 42.6863 58.4134 43.5423 58.0532C43.8674 57.9162 44.124 57.6576 44.2554 57.3343C44.3869 57.0111 44.3825 56.6497 44.2432 56.3296C44.104 56.0096 43.8413 55.7571 43.5129 55.6277C43.1846 55.4983 42.8174 55.5026 42.4923 55.6397H42.4928Z"
                              fill="#B18B5E" />
                           <path
                              d="M20.7253 28.8186C20.7253 26.6675 19.2885 24.9439 17.0646 24.4271C15.8429 24.1422 14.5592 24.2734 13.423 24.7993C12.2868 25.3252 11.3652 26.2146 10.8087 27.3225C10.6529 27.6336 10.6285 27.9927 10.7408 28.3215C10.8532 28.6503 11.0932 28.9219 11.4084 29.077C11.7235 29.2322 12.0883 29.2582 12.4229 29.1494C12.7575 29.0407 13.0347 28.8059 13.1941 28.4966C13.4788 27.915 13.9576 27.4473 14.5506 27.1716C15.1436 26.8959 15.8147 26.8289 16.4518 26.9819C16.8288 27.0694 18.0586 27.4609 18.0586 28.8186C18.0586 30.1875 16.4525 31.2433 14.752 32.3614C12.8372 33.6194 10.668 35.0452 10.668 37.4063C10.668 37.7544 10.8084 38.0882 11.0585 38.3344C11.3086 38.5805 11.6477 38.7188 12.0013 38.7188H19.392C19.5681 38.7205 19.7429 38.6878 19.9062 38.6226C20.0694 38.5574 20.218 38.461 20.3431 38.3389C20.4683 38.2169 20.5677 38.0716 20.6355 37.9115C20.7033 37.7515 20.7383 37.5798 20.7383 37.4063C20.7383 37.2329 20.7033 37.0612 20.6355 36.9011C20.5677 36.741 20.4683 36.5958 20.3431 36.4737C20.218 36.3517 20.0694 36.2553 19.9062 36.1901C19.7429 36.1249 19.5681 36.0922 19.392 36.0939H14.1095C14.6681 35.5729 15.4577 35.0537 16.2325 34.5442C18.3388 33.1599 20.7253 31.5911 20.7253 28.8186ZM33.3347 33.1406C33.3347 32.7925 33.1942 32.4587 32.9441 32.2126C32.6941 31.9665 32.355 31.8282 32.0013 31.8282H30.918V24.8555C30.9179 24.5837 30.8321 24.3186 30.6725 24.0968C30.5128 23.875 30.2872 23.7075 30.0266 23.6173C29.7661 23.5272 29.4836 23.5189 29.2181 23.5936C28.9526 23.6683 28.7171 23.8223 28.5443 24.0343L21.7943 32.3198C21.6373 32.5128 21.5389 32.7455 21.5103 32.9912C21.4818 33.2369 21.5243 33.4856 21.633 33.7085C21.7418 33.9314 21.9122 34.1196 22.1248 34.2513C22.3374 34.3831 22.5835 34.453 22.8347 34.4531H28.2513V38.1445C28.2496 38.318 28.2829 38.49 28.3491 38.6507C28.4153 38.8114 28.5133 38.9576 28.6373 39.0809C28.7612 39.2041 28.9088 39.3019 29.0714 39.3687C29.234 39.4354 29.4085 39.4698 29.5847 39.4698C29.7608 39.4698 29.9353 39.4354 30.0979 39.3687C30.2605 39.3019 30.4081 39.2041 30.532 39.0809C30.656 38.9576 30.754 38.8114 30.8202 38.6507C30.8864 38.49 30.9197 38.318 30.918 38.1445V34.4531H32.0013C32.355 34.4531 32.6941 34.3149 32.9442 34.0687C33.1942 33.8226 33.3347 33.4887 33.3347 33.1406ZM28.2513 31.8282H25.6138L28.2513 28.5898V31.8282ZM40.1588 22.8304C39.9871 22.7962 39.8102 22.7958 39.6383 22.8291C39.4664 22.8624 39.3029 22.9288 39.1571 23.0244C39.0114 23.1201 38.8862 23.2431 38.7889 23.3865C38.6915 23.5299 38.6239 23.6908 38.5898 23.8599L35.5898 38.6255C35.5204 38.9668 35.5916 39.3213 35.7877 39.611C35.9838 39.9006 36.2887 40.1017 36.6355 40.17C36.7219 40.187 36.8098 40.1955 36.898 40.1956C37.2059 40.1953 37.5043 40.09 37.7423 39.8977C37.9804 39.7055 38.1435 39.438 38.204 39.1407L41.204 24.3751C41.2384 24.2061 41.2388 24.0321 41.2049 23.863C41.171 23.6939 41.1036 23.533 41.0066 23.3896C40.9095 23.2461 40.7847 23.1229 40.6392 23.027C40.4938 22.931 40.3305 22.8642 40.1588 22.8304ZM47.0007 38.7194C47.264 38.7193 47.5214 38.6425 47.7405 38.4987C47.9595 38.3548 48.1305 38.1505 48.2318 37.9113L53.2318 26.0988C53.3164 25.8993 53.3496 25.6824 53.3285 25.4673C53.3074 25.2522 53.2327 25.0456 53.1109 24.8657C52.9892 24.6859 52.8242 24.5384 52.6306 24.4365C52.437 24.3345 52.2209 24.2812 52.0013 24.2812H45.2513C44.9 24.2846 44.5641 24.4243 44.3169 24.6701C44.0696 24.9159 43.9309 25.2478 43.9309 25.5937C43.9309 25.9396 44.0696 26.2715 44.3169 26.5173C44.5641 26.7631 44.9 26.9028 45.2513 26.9062H50.0013L45.7708 36.9018C45.6867 37.1012 45.6538 37.318 45.675 37.5329C45.6963 37.7479 45.771 37.9544 45.8926 38.1341C46.0142 38.3139 46.1789 38.4614 46.3722 38.5635C46.5654 38.6657 46.7813 38.7194 47.0007 38.7199V38.7194Z"
                              fill="#B18B5E" />
                        </svg>

                     </div>
                     <div class="frs-content">
                        <h6>Online Support 24/7</h6>
                        <p>Support online 24 hours a day</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="furniture-service__item">
                     <div class="fsr-icon">
                        <svg width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_210_11)">
                              <path
                                 d="M27.0559 20.226C27.4206 20.5671 28.0273 20.4981 28.3046 20.0864L33.7644 11.9753C33.8239 11.8868 33.8652 11.7877 33.8858 11.6836C33.9064 11.5795 33.906 11.4724 33.8846 11.3684C33.8631 11.2644 33.8211 11.1656 33.7609 11.0777C33.7007 10.9897 33.6234 10.9142 33.5336 10.8556C33.1565 10.6096 32.6471 10.7114 32.3968 11.0828L27.4766 18.3923L24.7427 15.8369C24.5848 15.6895 24.374 15.6098 24.1564 15.6154C23.9389 15.621 23.7325 15.7114 23.5827 15.8667C23.5085 15.9436 23.4505 16.0342 23.4119 16.1332C23.3733 16.2322 23.3549 16.3377 23.3577 16.4437C23.3605 16.5497 23.3845 16.6541 23.4284 16.7509C23.4722 16.8478 23.5349 16.9352 23.6131 17.0082C23.6126 17.0082 27.0528 20.2234 27.0558 20.226H27.0559Z"
                                 fill="#B18B5E" />
                              <path
                                 d="M27.6148 32.5425C27.7726 32.6134 27.944 32.6503 28.1176 32.6506H28.1245C28.3005 32.6496 28.4742 32.6106 28.6333 32.5362C41.1072 26.6965 43.2212 14.0971 43.5715 10.3747C43.6519 9.52468 43.1657 8.73323 42.362 8.40517C39.8788 7.39032 38.1908 5.12093 37.9566 2.48269C37.8844 1.67057 37.1795 1.0376 36.3489 1.0376H36.3391L19.5338 1.13471C18.6866 1.13934 17.9982 1.77317 17.9333 2.60887C17.7266 5.24787 16.0632 7.53373 13.5925 8.57421C12.797 8.90905 12.3227 9.7047 12.4134 10.5542C12.8081 14.2725 15.0721 26.8472 27.6148 32.5425ZM14.2377 10.0589C17.2673 8.78373 19.3083 5.98398 19.5675 2.74949L36.3246 2.65259C36.6224 5.88009 38.6925 8.6541 41.7332 9.89645C41.8691 9.95244 41.9515 10.0844 41.9383 10.2258C41.6093 13.7144 39.641 25.4773 28.1147 30.9897C16.5223 25.6115 14.4155 13.8713 14.0447 10.3864C14.037 10.3187 14.0515 10.2502 14.0863 10.1913C14.1211 10.1323 14.1742 10.0858 14.2378 10.0588L14.2377 10.0589Z"
                                 fill="#B18B5E" />
                              <path
                                 d="M16.2861 14.5354C16.3853 14.8945 16.8479 15.2233 17.2931 15.1028C17.7298 14.9841 17.9883 14.5421 17.8695 14.1119C17.6613 13.3573 17.487 12.5941 17.347 11.8244C19.573 10.3981 21.2309 8.25944 22.0407 5.76941L33.8874 5.70094C34.7268 8.1814 36.41 10.3007 38.6528 11.7012C38.5224 12.473 38.357 13.2388 38.1574 13.9962C38.1028 14.2035 38.1341 14.4237 38.2445 14.6083C38.3549 14.7929 38.5352 14.9268 38.7459 14.9805C38.9565 15.0342 39.1802 15.0034 39.3677 14.8947C39.5552 14.7861 39.6912 14.6086 39.7458 14.4012C39.9799 13.5126 40.1695 12.6132 40.314 11.7062C40.3535 11.4632 40.3183 11.2142 40.2129 10.991C40.1076 10.7678 39.9369 10.5807 39.7227 10.4537C37.6334 9.21326 36.083 7.25699 35.3691 4.96031C35.208 4.4434 34.7128 4.08423 34.1634 4.08423H34.1558L21.7526 4.15572C21.1999 4.15906 20.7052 4.52544 20.5501 5.04612C19.8621 7.35286 18.339 9.32153 16.2622 10.5896C15.8269 10.855 15.6008 11.3491 15.6858 11.8488C15.8413 12.7534 16.0416 13.65 16.2861 14.5354ZM38.0877 16.9296C37.6689 16.759 37.1896 16.9558 37.0166 17.3678C35.1209 21.8908 32.1199 25.3293 28.0943 27.5924C24.0376 25.373 20.9931 21.9634 19.044 17.4549C18.9586 17.258 18.7972 17.1025 18.5955 17.0226C18.3937 16.9426 18.1679 16.9448 17.9677 17.0286C17.8686 17.0701 17.7788 17.1304 17.7034 17.2061C17.628 17.2817 17.5684 17.3713 17.5282 17.4696C17.4879 17.568 17.4677 17.6731 17.4687 17.7791C17.4698 17.8851 17.492 17.9899 17.5342 18.0875C19.6614 23.0074 23.0128 26.7164 27.4949 29.1106C27.6817 29.2111 27.8914 29.2632 28.1042 29.2621C28.3171 29.2609 28.5261 29.2065 28.7117 29.1039C33.1602 26.6608 36.4646 22.9194 38.5333 17.9837C38.5744 17.8857 38.5956 17.7807 38.5954 17.6746C38.5953 17.5686 38.5739 17.4636 38.5326 17.3657C38.4912 17.2678 38.4306 17.1789 38.3542 17.1041C38.2779 17.0292 38.1873 16.97 38.0877 16.9296ZM5.26359 42.3569C3.66355 42.3569 2.36133 43.6384 2.36133 45.2139C2.36133 46.7893 3.66355 48.0708 5.26359 48.0708C6.86408 48.0708 8.16641 46.7893 8.16641 45.2139C8.16641 43.6384 6.86452 42.3569 5.26359 42.3569ZM5.26359 46.4557C4.56797 46.4557 4.00195 45.899 4.00195 45.2139C4.00195 44.5291 4.56808 43.9719 5.26359 43.9719C5.95955 43.9719 6.52578 44.5291 6.52578 45.2139C6.52578 45.899 5.95955 46.4558 5.26359 46.4558V46.4557Z"
                                 fill="#B18B5E" />
                              <path
                                 d="M55.4117 34.4513C54.3602 32.9305 52.2432 32.5275 50.6928 33.5529L39.9689 40.6181L37.6797 40.4914L37.6212 39.9144C37.5126 38.819 37.0327 37.7914 36.2587 36.9972C35.4846 36.203 34.4616 35.6884 33.3542 35.5363C33.3399 35.5342 33.3256 35.5325 33.3111 35.5313L21.7558 34.5344C21.3649 34.4743 20.1135 34.1205 16.675 32.1792C14.8878 31.1703 12.8742 30.6008 10.8286 30.5234V28.411C10.8286 27.3506 9.95269 26.4885 8.87556 26.4885H1.95289C0.876312 26.4885 0 27.3511 0 28.411V49.217C0 50.2769 0.876312 51.1395 1.95289 51.1395H8.87556C9.95225 51.1395 10.8286 50.2769 10.8286 49.217V48.6438L20.9295 52.4092C20.9518 52.4176 21.7721 52.7195 23.2803 52.5795C23.2845 52.5791 40.0637 50.1978 40.0637 50.1978C40.068 50.1974 40.0718 50.1966 40.0761 50.1957C41.5113 49.9698 42.8605 49.3748 43.9871 48.4709C43.9974 48.4625 44.0073 48.4541 44.017 48.4457L54.8567 38.8487C56.1342 37.7322 56.373 35.8416 55.4117 34.4513ZM53.7634 37.6446L42.9353 47.2315C42.0373 47.9476 40.9643 48.4195 39.8232 48.6L23.0521 50.98C23.0472 50.9806 23.0424 50.9814 23.0375 50.9822L23.0295 50.9834C22.5279 51.0612 22.0053 51.0284 21.476 50.8858L10.8286 46.917V37.6953C10.8286 37.4811 10.7421 37.2757 10.5883 37.1243C10.4345 36.9728 10.2258 36.8878 10.0082 36.8878C9.90051 36.8877 9.79382 36.9086 9.69428 36.9491C9.59473 36.9897 9.50429 37.0492 9.42811 37.1242C9.35192 37.1992 9.2915 37.2882 9.25029 37.3862C9.20908 37.4842 9.18789 37.5892 9.18794 37.6953V49.2171C9.18782 49.2986 9.15487 49.3768 9.09632 49.4344C9.03776 49.4921 8.95837 49.5245 8.87556 49.5246H1.95289C1.87008 49.5245 1.7907 49.492 1.73217 49.4343C1.67363 49.3767 1.64071 49.2985 1.64062 49.217V28.411C1.64077 28.3295 1.67372 28.2514 1.73225 28.1938C1.79078 28.1362 1.87012 28.1038 1.95289 28.1036H8.87556C8.95835 28.1037 9.03773 28.1362 9.09628 28.1938C9.15483 28.2514 9.18779 28.3295 9.18794 28.411V34.0475C9.18794 34.2617 9.27436 34.4671 9.4282 34.6185C9.58204 34.77 9.79069 34.855 10.0082 34.855C10.2258 34.855 10.4345 34.77 10.5883 34.6185C10.7421 34.4671 10.8286 34.2617 10.8286 34.0475V32.1402C12.5884 32.2167 14.3196 32.7113 15.8585 33.5807C20.0058 35.922 21.1641 36.0835 21.5447 36.1365C21.5592 36.1386 21.5733 36.1398 21.5879 36.1415L33.1445 37.1383C33.8837 37.2444 34.5654 37.5913 35.0809 38.1235C35.5965 38.6556 35.916 39.3425 35.9886 40.0743L36.0323 40.5045L20.5603 41.4449C20.3085 41.4275 20.0628 41.36 19.8382 41.2466C19.6136 41.1332 19.4146 40.9762 19.2533 40.785C19.1843 40.7036 19.0998 40.6363 19.0044 40.587C18.909 40.5377 18.8047 40.5074 18.6974 40.4978C18.5901 40.4883 18.482 40.4996 18.3792 40.5312C18.2764 40.5628 18.1809 40.6141 18.0982 40.682C18.0154 40.7499 17.947 40.8331 17.8969 40.927C17.8469 41.0209 17.8161 41.1236 17.8064 41.2292C17.7966 41.3349 17.8082 41.4413 17.8403 41.5425C17.8724 41.6438 17.9244 41.7378 17.9935 41.8192C18.5955 42.53 19.4449 42.9552 20.3835 43.0511C20.8902 43.1032 36.9346 42.0678 36.9346 42.0678L40.1509 42.2456C40.3288 42.2555 40.505 42.208 40.6529 42.1102L51.6066 34.8941C52.4112 34.3621 53.5095 34.5707 54.0552 35.3597C54.5537 36.0813 54.4299 37.0622 53.7634 37.6446Z"
                                 fill="#B18B5E" />
                           </g>
                           <defs>
                              <clipPath id="clip0_210_11">
                                 <rect width="56" height="55.1249" fill="white" transform="translate(0 0.929932)" />
                              </clipPath>
                           </defs>
                        </svg>

                     </div>
                     <div class="frs-content">
                        <h6>Reliable</h6>
                        <p>Trusted by 1000+ brands</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Service area end -->

      <!-- Off area start -->
      <section class="furniture-off pb-100">
         <div class="container">
            <div class="row g-4">
               <div class="col-lg-6">
                  <a href="product-details.php" class="furniture-off__item bg-image d-block"
                     data-background="assets/imgs/product/Accessoires4.jpeg">
                     <span class="fo-discount">GET 30% OFF</span>
                     <h3 class="text-capitalize">wicker hanging <br> chairs</h3>
                     <div class="solid-btn mt-30">Buy Now<span><i class="fa-regular fa-angle-right"></i></span></div>
                  </a>
               </div>
               <div class="col-lg-6">
                  <a href="product-details.php" class="furniture-off__item bg-image d-block"
                     data-background="assets/imgs/product/Accessoires1.jpeg">
                     <span class="fo-discount">GET 15% OFF</span>
                     <h3 class="text-capitalize">Brasslegged <br>
                        Armchair</h3>
                     <div class="solid-btn mt-30">Buy Now<span><i class="fa-reguladiva-angle-right"></i></span></div>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- Off area end -->


      <!-- Top sale area start -->
      <section class="discount-area p-relative section-space pt-0">
          <?php
          $sql = "SELECT *  FROM product ";
          $stmt = $pdo->prepare($sql);
          $stmt->execute();
          $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
          ?>
         <div class="container">
            <div class="section-title-wrapper-4 mb-40 text-center">
               <span class="section-subtitle-4 mb-10">top sale</span>
               <h2 class="section-title-4">Our collection</h2>
            </div>
            <div class="discount-main p-relative">
               <div class="discount-slider-navigation furniture__navigation">
                  <button type="button" class="discount-slider-button-prev"><i class="fa-regular fa-angle-left"></i>
                  </button>
                  <button type="button" class="discount-slider-button-next"><i
                        class="fa-regular fa-angle-right"></i></button>
               </div>
               <div class="row align-items-center">
                  <div class="col-xxl-12">
                     <div class="swiper furuniture-active">
                        <div class="swiper-wrapper">
                            <?php foreach ($products as $item): ?>

                           <div class="swiper-slide">
                               <div class="product-item furniture__product">
                                   <div class="product-badge">
                                       <span class="product-trending">10% off</span>
                                   </div>
                                   <div class="product-thumb theme-bg-2">
                                       <a href="product-details.php"><img src="uploads/<?php echo $item['image']; ?>"
                                                                          alt=""></a>
                                       <div class="product-action-item">
                                           <button type="button" class="product-action-btn" onclick="addToCart(<?php echo $item['id']; ?>)">
                                               <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                   <path
                                                           d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                                           stroke="white" stroke-width="2" stroke-linecap="round"
                                                           stroke-linejoin="round" />
                                               </svg>
                                               <span class="product-tooltip add-to-cart-btn">Add to Cart</span>
                                           </button>
                                           <a href="product-details.php?id=<?php echo $item['id']; ?>" class="product-action-btn" >
                                               <svg width="26" height="18" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z" fill="white" />
                                               </svg>
                                               <span class="product-tooltip">Quick View</span>
                                           </a>

                                           <button type="button" class="product-action-btn" onclick="addToWishlist(<?php echo $item['id']; ?>)">

                                               <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                   <path
                                                           d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                                           fill="white" />
                                               </svg>
                                               <span class="product-tooltip">Add To Wishlist</span>
                                           </button>
                                       </div>
                                   </div>
                                   <div class="product-content">
                                       <h4 class="product-title"><a href="product-details.php"><?php echo $item['name']; ?></a></h4>
                                       <div class="user-rating">
                                           <i class="fal fa-star"></i>
                                           <i class="fal fa-star"></i>
                                           <i class="fal fa-star"></i>
                                           <i class="fal fa-star"></i>
                                           <i class="fal fa-star"></i>
                                       </div>
                                       <div class="product-price">
                                           <span class="product-new-price">TND <?php echo $item['price']; ?></span>
                                       </div>
                                   </div>
                               </div>

                           </div>
                            <?php endforeach; ?>


                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Top sale area end -->

       <!-- New Collection area start -->
       <section class="discount-area p-relative section-space pt-0">
           <?php
           $sql = "SELECT *  FROM product 
                   where category_id=5";
           $stmt = $pdo->prepare($sql);
           $stmt->execute();
           $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
           ?>
           <div class="container">
               <div class="section-title-wrapper-4 mb-40 text-center">
                   <span class="section-subtitle-4 mb-10">top sale</span>
                   <h2 class="section-title-4">New collection</h2>
               </div>
               <div class="discount-main p-relative">
                   <div class="discount-slider-navigation furniture__navigation">
                       <button type="button" class="discount-slider-button-prev"><i class="fa-regular fa-angle-left"></i>
                       </button>
                       <button type="button" class="discount-slider-button-next"><i
                                   class="fa-regular fa-angle-right"></i></button>
                   </div>
                   <div class="row align-items-center">
                       <div class="col-xxl-12">
                           <div class="swiper furuniture-active">
                               <div class="swiper-wrapper">
                                   <?php foreach ($products as $item): ?>

                                       <div class="swiper-slide">
                                           <div class="product-item furniture__product">
                                               <div class="product-badge">
                                                   <span class="product-trending">10% off</span>
                                               </div>
                                               <div class="product-thumb theme-bg-2">
                                                   <a href="product-details.php"><img src="uploads/<?php echo $item['image']; ?>"
                                                                                      alt=""></a>
                                                   <div class="product-action-item">
                                                       <button type="button" class="product-action-btn" onclick="addToCart(<?php echo $item['id']; ?>)">
                                                           <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                               <path
                                                                       d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                                                       stroke="white" stroke-width="2" stroke-linecap="round"
                                                                       stroke-linejoin="round" />
                                                           </svg>
                                                           <span class="product-tooltip add-to-cart-btn">Add to Cart</span>
                                                       </button>
                                                       <a href="product-details.php?id=<?php echo $item['id']; ?>" class="product-action-btn" >
                                                           <svg width="26" height="18" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z" fill="white" />
                                                           </svg>
                                                           <span class="product-tooltip">Quick View</span>
                                                       </a>

                                                       <button type="button" class="product-action-btn" onclick="addToWishlist(<?php echo $item['id']; ?>)">

                                                           <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                               <path
                                                                       d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                                                       fill="white" />
                                                           </svg>
                                                           <span class="product-tooltip">Add To Wishlist</span>
                                                       </button>
                                                   </div>
                                               </div>
                                               <div class="product-content">
                                                   <h4 class="product-title"><a href="product-details.php"><?php echo $item['name']; ?></a></h4>
                                                   <div class="user-rating">
                                                       <i class="fal fa-star"></i>
                                                       <i class="fal fa-star"></i>
                                                       <i class="fal fa-star"></i>
                                                       <i class="fal fa-star"></i>
                                                       <i class="fal fa-star"></i>
                                                   </div>
                                                   <div class="product-price">
                                                       <span class="product-new-price">TND <?php echo $item['price']; ?></span>
                                                   </div>
                                               </div>
                                           </div>

                                       </div>
                                   <?php endforeach; ?>


                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- New Collection area end -->

      <!-- Ratting area start -->
<!--      <section class="furniture-rating overflow-hidden theme-bg-2">-->
<!--         <div class="row g-0 align-items-center">-->
<!--            <div class="col-xl-6">-->
<!--               <div class="furniture-rating__left-item">-->
<!--                  <div class="furniture-ad__item frl-item bg-furniture">-->
<!--                     <div class="fad-content">-->
<!--                        <h6 class="text-white mb-20 text-uppercase">HOT DEAL furniture</h6>-->
<!--                        <h2 class="text-capitalize text-white">Live Furniture <br>-->
<!--                           Your Love</h2>-->
<!--                        <a class="border__btn-f mt-35 bg-white text-black" href="product-details.php">Buy Now<span><i-->
<!--                                 class="fa-regular fa-angle-right"></i></span></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="col-xl-6">-->
<!--               <div class="furniture-rating__right-item">-->
<!--                  <img class="w-100" src="assets/imgs/furniture/rating/bg-image.png" alt="image">-->
<!--                  <div class="rating-dot">-->
<!--                     <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                        <circle opacity="0.6" cx="32" cy="32" r="32" transform="rotate(-180 32 32)" fill="white" />-->
<!--                        <circle cx="33" cy="31" r="7" transform="rotate(-180 33 31)" fill="#B18B5E" />-->
<!--                     </svg>-->
<!--                     <ul>-->
<!--                        <li>-->
<!--                           <h6>Chair Pillow</h6>-->
<!--                        </li>-->
<!--                        <li class="py-1"><svg width="116" height="16" viewBox="0 0 116 16" fill="none"-->
<!--                              xmlns="http://www.w3.org/2000/svg">-->
<!--                              <g clip-path="url(#clip0_247_27)">-->
<!--                                 <path-->
<!--                                    d="M15.7004 5.93425C15.5829 5.5845 15.2802 5.3295 14.9157 5.27375L10.6734 4.6255L8.76794 0.56625C8.60544 0.22025 8.25819 0 7.87669 0C7.49494 0 7.14794 0.22025 6.98544 0.56625L5.07969 4.62575L0.837444 5.274C0.472944 5.32975 0.170194 5.5845 0.0529438 5.9345C-0.0643062 6.2845 0.0241938 6.67 0.281944 6.9345L3.37994 10.1112L2.64619 14.6055C2.58569 14.9775 2.74344 15.3515 3.05119 15.569C3.35869 15.7865 3.76469 15.8085 4.09544 15.626L7.87694 13.5347L11.6584 15.626C11.8077 15.7085 11.9719 15.749 12.1354 15.749C12.3344 15.749 12.5334 15.6885 12.7027 15.569C13.0104 15.3517 13.1679 14.9777 13.1074 14.6055L12.3737 10.1112L15.4719 6.9345C15.7292 6.67 15.8177 6.2845 15.7004 5.93425Z"-->
<!--                                    fill="#E8C54A" />-->
<!--                              </g>-->
<!--                              <g clip-path="url(#clip1_247_27)">-->
<!--                                 <path-->
<!--                                    d="M40.7004 5.93425C40.5829 5.5845 40.2802 5.3295 39.9157 5.27375L35.6734 4.6255L33.7679 0.56625C33.6054 0.22025 33.2582 0 32.8767 0C32.4949 0 32.1479 0.22025 31.9854 0.56625L30.0797 4.62575L25.8374 5.274C25.4729 5.32975 25.1702 5.5845 25.0529 5.9345C24.9357 6.2845 25.0242 6.67 25.2819 6.9345L28.3799 10.1112L27.6462 14.6055C27.5857 14.9775 27.7434 15.3515 28.0512 15.569C28.3587 15.7865 28.7647 15.8085 29.0954 15.626L32.8769 13.5347L36.6584 15.626C36.8077 15.7085 36.9719 15.749 37.1354 15.749C37.3344 15.749 37.5334 15.6885 37.7027 15.569C38.0104 15.3517 38.1679 14.9777 38.1074 14.6055L37.3737 10.1112L40.4719 6.9345C40.7292 6.67 40.8177 6.2845 40.7004 5.93425Z"-->
<!--                                    fill="#E8C54A" />-->
<!--                              </g>-->
<!--                              <g clip-path="url(#clip2_247_27)">-->
<!--                                 <path-->
<!--                                    d="M65.7004 5.93425C65.5829 5.5845 65.2802 5.3295 64.9157 5.27375L60.6734 4.6255L58.7679 0.56625C58.6054 0.22025 58.2582 0 57.8767 0C57.4949 0 57.1479 0.22025 56.9854 0.56625L55.0797 4.62575L50.8374 5.274C50.4729 5.32975 50.1702 5.5845 50.0529 5.9345C49.9357 6.2845 50.0242 6.67 50.2819 6.9345L53.3799 10.1112L52.6462 14.6055C52.5857 14.9775 52.7434 15.3515 53.0512 15.569C53.3587 15.7865 53.7647 15.8085 54.0954 15.626L57.8769 13.5347L61.6584 15.626C61.8077 15.7085 61.9719 15.749 62.1354 15.749C62.3344 15.749 62.5334 15.6885 62.7027 15.569C63.0104 15.3517 63.1679 14.9777 63.1074 14.6055L62.3737 10.1112L65.4719 6.9345C65.7292 6.67 65.8177 6.2845 65.7004 5.93425Z"-->
<!--                                    fill="#E8C54A" />-->
<!--                              </g>-->
<!--                              <g clip-path="url(#clip3_247_27)">-->
<!--                                 <path-->
<!--                                    d="M84.7682 5.05043L84.9949 5.53343L85.5224 5.61403L89.7351 6.25776L86.6578 9.41304L86.3054 9.77432L86.3868 10.2724L87.1155 14.736L83.3609 12.6597L82.8769 12.392L82.393 12.6597L78.6381 14.7362L79.3669 10.2724L79.4482 9.77435L79.0959 9.41307L76.0189 6.25788L80.2307 5.61427L80.7582 5.53368L80.9849 5.05071L82.8767 1.02095L84.7682 5.05043Z"-->
<!--                                    stroke="#E8C54A" stroke-width="2" />-->
<!--                              </g>-->
<!--                              <g clip-path="url(#clip4_247_27)">-->
<!--                                 <path-->
<!--                                    d="M109.768 5.05043L109.995 5.53343L110.522 5.61403L114.735 6.25776L111.658 9.41304L111.305 9.77432L111.387 10.2724L112.116 14.736L108.361 12.6597L107.877 12.392L107.393 12.6597L103.638 14.7362L104.367 10.2724L104.448 9.77435L104.096 9.41307L101.019 6.25788L105.231 5.61427L105.758 5.53368L105.985 5.05071L107.877 1.02095L109.768 5.05043Z"-->
<!--                                    stroke="#E8C54A" stroke-width="2" />-->
<!--                              </g>-->
<!--                              <defs>-->
<!--                                 <clipPath>-->
<!--                                    <rect width="16" height="16" fill="white" />-->
<!--                                 </clipPath>-->
<!--                                 <clipPath id="clip1_247_27">-->
<!--                                    <rect width="16" height="16" fill="white" transform="translate(25)" />-->
<!--                                 </clipPath>-->
<!--                                 <clipPath id="clip2_247_27">-->
<!--                                    <rect width="16" height="16" fill="white" transform="translate(50)" />-->
<!--                                 </clipPath>-->
<!--                                 <clipPath id="clip3_247_27">-->
<!--                                    <rect width="16" height="16" fill="white" transform="translate(75)" />-->
<!--                                 </clipPath>-->
<!--                                 <clipPath id="clip4_247_27">-->
<!--                                    <rect width="16" height="16" fill="white" transform="translate(100)" />-->
<!--                                 </clipPath>-->
<!--                              </defs>-->
<!--                           </svg>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                           <span>USD 190.00</span>-->
<!--                        </li>-->
<!--                     </ul>-->
<!--                  </div>-->
<!--                  <div class="rating-dot dot-two">-->
<!--                     <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                        <circle opacity="0.6" cx="32" cy="32" r="32" transform="rotate(-180 32 32)" fill="white" />-->
<!--                        <circle cx="33" cy="31" r="7" transform="rotate(-180 33 31)" fill="#B18B5E" />-->
<!--                     </svg>-->
<!--                     <ul>-->
<!--                        <li>-->
<!--                           <h6>Dining Table</h6>-->
<!--                        </li>-->
<!--                        <li class="py-1"><svg width="116" height="16" viewBox="0 0 116 16" fill="none"-->
<!--                              xmlns="http://www.w3.org/2000/svg">-->
<!--                              <g clip-path="url(#clip0_247_27)">-->
<!--                                 <path-->
<!--                                    d="M15.7004 5.93425C15.5829 5.5845 15.2802 5.3295 14.9157 5.27375L10.6734 4.6255L8.76794 0.56625C8.60544 0.22025 8.25819 0 7.87669 0C7.49494 0 7.14794 0.22025 6.98544 0.56625L5.07969 4.62575L0.837444 5.274C0.472944 5.32975 0.170194 5.5845 0.0529438 5.9345C-0.0643062 6.2845 0.0241938 6.67 0.281944 6.9345L3.37994 10.1112L2.64619 14.6055C2.58569 14.9775 2.74344 15.3515 3.05119 15.569C3.35869 15.7865 3.76469 15.8085 4.09544 15.626L7.87694 13.5347L11.6584 15.626C11.8077 15.7085 11.9719 15.749 12.1354 15.749C12.3344 15.749 12.5334 15.6885 12.7027 15.569C13.0104 15.3517 13.1679 14.9777 13.1074 14.6055L12.3737 10.1112L15.4719 6.9345C15.7292 6.67 15.8177 6.2845 15.7004 5.93425Z"-->
<!--                                    fill="#E8C54A" />-->
<!--                              </g>-->
<!--                              <g clip-path="url(#clip1_247_27)">-->
<!--                                 <path-->
<!--                                    d="M40.7004 5.93425C40.5829 5.5845 40.2802 5.3295 39.9157 5.27375L35.6734 4.6255L33.7679 0.56625C33.6054 0.22025 33.2582 0 32.8767 0C32.4949 0 32.1479 0.22025 31.9854 0.56625L30.0797 4.62575L25.8374 5.274C25.4729 5.32975 25.1702 5.5845 25.0529 5.9345C24.9357 6.2845 25.0242 6.67 25.2819 6.9345L28.3799 10.1112L27.6462 14.6055C27.5857 14.9775 27.7434 15.3515 28.0512 15.569C28.3587 15.7865 28.7647 15.8085 29.0954 15.626L32.8769 13.5347L36.6584 15.626C36.8077 15.7085 36.9719 15.749 37.1354 15.749C37.3344 15.749 37.5334 15.6885 37.7027 15.569C38.0104 15.3517 38.1679 14.9777 38.1074 14.6055L37.3737 10.1112L40.4719 6.9345C40.7292 6.67 40.8177 6.2845 40.7004 5.93425Z"-->
<!--                                    fill="#E8C54A" />-->
<!--                              </g>-->
<!--                              <g clip-path="url(#clip2_247_27)">-->
<!--                                 <path-->
<!--                                    d="M65.7004 5.93425C65.5829 5.5845 65.2802 5.3295 64.9157 5.27375L60.6734 4.6255L58.7679 0.56625C58.6054 0.22025 58.2582 0 57.8767 0C57.4949 0 57.1479 0.22025 56.9854 0.56625L55.0797 4.62575L50.8374 5.274C50.4729 5.32975 50.1702 5.5845 50.0529 5.9345C49.9357 6.2845 50.0242 6.67 50.2819 6.9345L53.3799 10.1112L52.6462 14.6055C52.5857 14.9775 52.7434 15.3515 53.0512 15.569C53.3587 15.7865 53.7647 15.8085 54.0954 15.626L57.8769 13.5347L61.6584 15.626C61.8077 15.7085 61.9719 15.749 62.1354 15.749C62.3344 15.749 62.5334 15.6885 62.7027 15.569C63.0104 15.3517 63.1679 14.9777 63.1074 14.6055L62.3737 10.1112L65.4719 6.9345C65.7292 6.67 65.8177 6.2845 65.7004 5.93425Z"-->
<!--                                    fill="#E8C54A" />-->
<!--                              </g>-->
<!--                              <g clip-path="url(#clip3_247_27)">-->
<!--                                 <path-->
<!--                                    d="M84.7682 5.05043L84.9949 5.53343L85.5224 5.61403L89.7351 6.25776L86.6578 9.41304L86.3054 9.77432L86.3868 10.2724L87.1155 14.736L83.3609 12.6597L82.8769 12.392L82.393 12.6597L78.6381 14.7362L79.3669 10.2724L79.4482 9.77435L79.0959 9.41307L76.0189 6.25788L80.2307 5.61427L80.7582 5.53368L80.9849 5.05071L82.8767 1.02095L84.7682 5.05043Z"-->
<!--                                    stroke="#E8C54A" stroke-width="2" />-->
<!--                              </g>-->
<!--                              <g clip-path="url(#clip4_247_27)">-->
<!--                                 <path-->
<!--                                    d="M109.768 5.05043L109.995 5.53343L110.522 5.61403L114.735 6.25776L111.658 9.41304L111.305 9.77432L111.387 10.2724L112.116 14.736L108.361 12.6597L107.877 12.392L107.393 12.6597L103.638 14.7362L104.367 10.2724L104.448 9.77435L104.096 9.41307L101.019 6.25788L105.231 5.61427L105.758 5.53368L105.985 5.05071L107.877 1.02095L109.768 5.05043Z"-->
<!--                                    stroke="#E8C54A" stroke-width="2" />-->
<!--                              </g>-->
<!--                              <defs>-->
<!--                                 <clipPath>-->
<!--                                    <rect width="16" height="16" fill="white" />-->
<!--                                 </clipPath>-->
<!--                                 <clipPath>-->
<!--                                    <rect width="16" height="16" fill="white" transform="translate(25)" />-->
<!--                                 </clipPath>-->
<!--                                 <clipPath>-->
<!--                                    <rect width="16" height="16" fill="white" transform="translate(50)" />-->
<!--                                 </clipPath>-->
<!--                                 <clipPath>-->
<!--                                    <rect width="16" height="16" fill="white" transform="translate(75)" />-->
<!--                                 </clipPath>-->
<!--                                 <clipPath>-->
<!--                                    <rect width="16" height="16" fill="white" transform="translate(100)" />-->
<!--                                 </clipPath>-->
<!--                              </defs>-->
<!--                           </svg>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                           <span>USD 190.00</span>-->
<!--                        </li>-->
<!--                     </ul>-->
<!--                  </div>-->
<!--                  <div class="rating-dot dot-three">-->
<!--                     <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                        <circle opacity="0.6" cx="32" cy="32" r="32" transform="rotate(-180 32 32)" fill="white" />-->
<!--                        <circle cx="33" cy="31" r="7" transform="rotate(-180 33 31)" fill="#B18B5E" />-->
<!--                     </svg>-->
<!--                     <ul>-->
<!--                        <li>-->
<!--                           <h6>Arm-->
<!--                              Sofa</h6>-->
<!--                        </li>-->
<!--                        <li class="py-1"><svg width="116" height="16" viewBox="0 0 116 16" fill="none"-->
<!--                              xmlns="http://www.w3.org/2000/svg">-->
<!--                              <g clip-path="url(#clip0_247_27)">-->
<!--                                 <path-->
<!--                                    d="M15.7004 5.93425C15.5829 5.5845 15.2802 5.3295 14.9157 5.27375L10.6734 4.6255L8.76794 0.56625C8.60544 0.22025 8.25819 0 7.87669 0C7.49494 0 7.14794 0.22025 6.98544 0.56625L5.07969 4.62575L0.837444 5.274C0.472944 5.32975 0.170194 5.5845 0.0529438 5.9345C-0.0643062 6.2845 0.0241938 6.67 0.281944 6.9345L3.37994 10.1112L2.64619 14.6055C2.58569 14.9775 2.74344 15.3515 3.05119 15.569C3.35869 15.7865 3.76469 15.8085 4.09544 15.626L7.87694 13.5347L11.6584 15.626C11.8077 15.7085 11.9719 15.749 12.1354 15.749C12.3344 15.749 12.5334 15.6885 12.7027 15.569C13.0104 15.3517 13.1679 14.9777 13.1074 14.6055L12.3737 10.1112L15.4719 6.9345C15.7292 6.67 15.8177 6.2845 15.7004 5.93425Z"-->
<!--                                    fill="#E8C54A" />-->
<!--                              </g>-->
<!--                              <g clip-path="url(#clip1_247_27)">-->
<!--                                 <path-->
<!--                                    d="M40.7004 5.93425C40.5829 5.5845 40.2802 5.3295 39.9157 5.27375L35.6734 4.6255L33.7679 0.56625C33.6054 0.22025 33.2582 0 32.8767 0C32.4949 0 32.1479 0.22025 31.9854 0.56625L30.0797 4.62575L25.8374 5.274C25.4729 5.32975 25.1702 5.5845 25.0529 5.9345C24.9357 6.2845 25.0242 6.67 25.2819 6.9345L28.3799 10.1112L27.6462 14.6055C27.5857 14.9775 27.7434 15.3515 28.0512 15.569C28.3587 15.7865 28.7647 15.8085 29.0954 15.626L32.8769 13.5347L36.6584 15.626C36.8077 15.7085 36.9719 15.749 37.1354 15.749C37.3344 15.749 37.5334 15.6885 37.7027 15.569C38.0104 15.3517 38.1679 14.9777 38.1074 14.6055L37.3737 10.1112L40.4719 6.9345C40.7292 6.67 40.8177 6.2845 40.7004 5.93425Z"-->
<!--                                    fill="#E8C54A" />-->
<!--                              </g>-->
<!--                              <g clip-path="url(#clip2_247_27)">-->
<!--                                 <path-->
<!--                                    d="M65.7004 5.93425C65.5829 5.5845 65.2802 5.3295 64.9157 5.27375L60.6734 4.6255L58.7679 0.56625C58.6054 0.22025 58.2582 0 57.8767 0C57.4949 0 57.1479 0.22025 56.9854 0.56625L55.0797 4.62575L50.8374 5.274C50.4729 5.32975 50.1702 5.5845 50.0529 5.9345C49.9357 6.2845 50.0242 6.67 50.2819 6.9345L53.3799 10.1112L52.6462 14.6055C52.5857 14.9775 52.7434 15.3515 53.0512 15.569C53.3587 15.7865 53.7647 15.8085 54.0954 15.626L57.8769 13.5347L61.6584 15.626C61.8077 15.7085 61.9719 15.749 62.1354 15.749C62.3344 15.749 62.5334 15.6885 62.7027 15.569C63.0104 15.3517 63.1679 14.9777 63.1074 14.6055L62.3737 10.1112L65.4719 6.9345C65.7292 6.67 65.8177 6.2845 65.7004 5.93425Z"-->
<!--                                    fill="#E8C54A" />-->
<!--                              </g>-->
<!--                              <g clip-path="url(#clip3_247_27)">-->
<!--                                 <path-->
<!--                                    d="M84.7682 5.05043L84.9949 5.53343L85.5224 5.61403L89.7351 6.25776L86.6578 9.41304L86.3054 9.77432L86.3868 10.2724L87.1155 14.736L83.3609 12.6597L82.8769 12.392L82.393 12.6597L78.6381 14.7362L79.3669 10.2724L79.4482 9.77435L79.0959 9.41307L76.0189 6.25788L80.2307 5.61427L80.7582 5.53368L80.9849 5.05071L82.8767 1.02095L84.7682 5.05043Z"-->
<!--                                    stroke="#E8C54A" stroke-width="2" />-->
<!--                              </g>-->
<!--                              <g clip-path="url(#clip4_247_27)">-->
<!--                                 <path-->
<!--                                    d="M109.768 5.05043L109.995 5.53343L110.522 5.61403L114.735 6.25776L111.658 9.41304L111.305 9.77432L111.387 10.2724L112.116 14.736L108.361 12.6597L107.877 12.392L107.393 12.6597L103.638 14.7362L104.367 10.2724L104.448 9.77435L104.096 9.41307L101.019 6.25788L105.231 5.61427L105.758 5.53368L105.985 5.05071L107.877 1.02095L109.768 5.05043Z"-->
<!--                                    stroke="#E8C54A" stroke-width="2" />-->
<!--                              </g>-->
<!--                              <defs>-->
<!--                                 <clipPath>-->
<!--                                    <rect width="16" height="16" fill="white" />-->
<!--                                 </clipPath>-->
<!--                                 <clipPath>-->
<!--                                    <rect width="16" height="16" fill="white" transform="translate(25)" />-->
<!--                                 </clipPath>-->
<!--                                 <clipPath>-->
<!--                                    <rect width="16" height="16" fill="white" transform="translate(50)" />-->
<!--                                 </clipPath>-->
<!--                                 <clipPath>-->
<!--                                    <rect width="16" height="16" fill="white" transform="translate(75)" />-->
<!--                                 </clipPath>-->
<!--                                 <clipPath>-->
<!--                                    <rect width="16" height="16" fill="white" transform="translate(100)" />-->
<!--                                 </clipPath>-->
<!--                              </defs>-->
<!--                           </svg>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                           <span>USD 190.00</span>-->
<!--                        </li>-->
<!--                     </ul>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </section>-->
      <!-- Ratting area end -->

      <!-- Trendy collection area start -->
<!--      <section class="fruniture-trendy section-space">-->
<!--         <div class="container">-->
<!--            <div class="furniture-trendy__header">-->
<!--               <div class="section-title-wrapper-4 mb-40">-->
<!--                  <span class="section-subtitle-4 mb-10">THIS MONTH</span>-->
<!--                  <h2 class="section-title-4">Trendy Collection</h2>-->
<!--               </div>-->
<!--               <div class="bd-product__filter-style furniture-trendy__tab nav nav-tabs" role="tablist">-->
<!--                  <button class="nav-link active" id="collection-tab" data-bs-toggle="tab" data-bs-target="#collection"-->
<!--                     type="button" role="tab" aria-selected="false">All Collection</button>-->
<!--                  <button class="nav-link" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button"-->
<!--                     role="tab" aria-selected="true">New In</button>-->
<!--                  <button class="nav-link" id="top-tab" data-bs-toggle="tab" data-bs-target="#top" type="button"-->
<!--                     role="tab" aria-selected="true">Top Rated</button>-->
<!--                  <button class="nav-link" id="tensing-tab" data-bs-toggle="tab" data-bs-target="#tensing" type="button"-->
<!--                     role="tab" aria-selected="true">Tensing Items</button>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="product__filter-tab">-->
<!--               <div class="tab-content" id="nav-tabContent">-->
<!--                  <div class="tab-pane fade active show" id="collection" role="tabpanel"-->
<!--                     aria-labelledby="collection-tab">-->
<!--                     <div class="row g-4">-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-badge">-->
<!--                                 <span class="product-trending">10% off</span>-->
<!--                              </div>-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product1.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">stylish grey chair</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 150.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product2.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">Chair pillow</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 190.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-badge">-->
<!--                                 <span class="product-trending">15% off</span>-->
<!--                              </div>-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product3.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">seater gray sofa</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 300.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product4.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">wooden chair</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 129.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-badge">-->
<!--                                 <span class="product-trending">10% off</span>-->
<!--                              </div>-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product5.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">Alexander sofa</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 150.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product6.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">stylish grey chair</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 150.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-badge">-->
<!--                                 <span class="product-trending">NEW</span>-->
<!--                              </div>-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product7.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">chair nobody armchair</a>-->
<!--                                 </h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 80.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product8.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">realistic sofa</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 49.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">-->
<!--                     <div class="row g-4">-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-badge">-->
<!--                                 <span class="product-trending">15% off</span>-->
<!--                              </div>-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product3.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">seater gray sofa</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 300.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product4.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">wooden chair</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 129.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product6.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">stylish grey chair</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 150.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-badge">-->
<!--                                 <span class="product-trending">NEW</span>-->
<!--                              </div>-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product7.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">chair nobody armchair</a>-->
<!--                                 </h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 80.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product8.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">realistic sofa</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 49.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="tab-pane fade" id="top" role="tabpanel" aria-labelledby="top-tab">-->
<!--                     <div class="row g-4">-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product4.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">wooden chair</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 129.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product6.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">stylish grey chair</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 150.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-badge">-->
<!--                                 <span class="product-trending">NEW</span>-->
<!--                              </div>-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product7.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">chair nobody armchair</a>-->
<!--                                 </h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 80.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product8.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">realistic sofa</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 49.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product6.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">stylish grey chair</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 150.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-badge">-->
<!--                                 <span class="product-trending">NEW</span>-->
<!--                              </div>-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product7.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">chair nobody armchair</a>-->
<!--                                 </h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 80.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product8.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">realistic sofa</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 49.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="tab-pane fade" id="tensing" role="tabpanel" aria-labelledby="tensing-tab">-->
<!--                     <div class="row g-4">-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-badge">-->
<!--                                 <span class="product-trending">15% off</span>-->
<!--                              </div>-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product3.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">seater gray sofa</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 300.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product4.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">wooden chair</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 129.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product6.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">stylish grey chair</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 150.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-badge">-->
<!--                                 <span class="product-trending">NEW</span>-->
<!--                              </div>-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product7.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">chair nobody armchair</a>-->
<!--                                 </h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 80.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
<!--                           <div class="product-item furniture__product">-->
<!--                              <div class="product-thumb theme-bg-2">-->
<!--                                 <a href="product-details.php"><img src="assets/imgs/furniture/product/product8.png"-->
<!--                                                                    alt=""></a>-->
<!--                                 <div class="product-action-item">-->
<!--                                    <button type="button" class="product-action-btn">-->
<!--                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"-->
<!--                                             stroke="white" stroke-width="2" stroke-linecap="round"-->
<!--                                             stroke-linejoin="round" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add to Cart</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn" data-bs-toggle="modal"-->
<!--                                       data-bs-target="#producQuickViewModal">-->
<!---->
<!--                                       <svg width="26" height="18" viewBox="0 0 26 18" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Quick View</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="product-action-btn">-->
<!---->
<!--                                       <svg width="21" height="20" viewBox="0 0 21 20" fill="none"-->
<!--                                          xmlns="http://www.w3.org/2000/svg">-->
<!--                                          <path-->
<!--                                             d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"-->
<!--                                             fill="white" />-->
<!--                                       </svg>-->
<!--                                       <span class="product-tooltip">Add To Wishlist</span>-->
<!--                                    </button>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                              <div class="product-content">-->
<!--                                 <h4 class="product-title"><a href="product-details.php">realistic sofa</a></h4>-->
<!--                                 <div class="user-rating mb-1">-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                    <i class="far fa-star"></i>-->
<!--                                 </div>-->
<!--                                 <div class="product-price">-->
<!--                                    <span class="product-new-price">USD 49.00</span>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </section>-->
      <!-- Trendy collection end end -->

      <!-- Ad banner area start -->
<!--      <section class="furniture-ad pb-100">-->
<!--         <div class="container">-->
<!--            <div class="row g-4">-->
<!--               <div class="col-xxl-7 col-xl-6">-->
<!--                  <div class="furniture-ad__item h-100 bg-image"-->
<!--                     data-background="assets/imgs/furniture/ad/ad-discount.png">-->
<!--                     <div class="fad-content">-->
<!--                        <h6 class="text-white mb-20 text-uppercase">HOT DEAL furniture</h6>-->
<!--                        <h2 class="text-capitalize text-white">Furniture limit offer <br> 30% Off</h2>-->
<!--                        <a class="border__btn-f mt-35" href="product-details.php">Buy Now<span><i-->
<!--                                 class="fa-regular fa-angle-right"></i></span></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="col-xxl-5 col-xl-6">-->
<!--                  <div class="furniture-ad__item  h-100 bg-image"-->
<!--                     data-background="assets/imgs/furniture/ad/ad-timer.png">-->
<!--                     <div class="fad-content fad-timer text-center">-->
<!--                        <h6 class="text-white mb-20 text-uppercase">HOT DEAL furniture</h6>-->
<!--                        <h2 class="text-capitalize text-white mb-30">Deals OF the Week</h2>-->
<!--                        <div class="countdown-wrapper">-->
<!--                           <ul>-->
<!--                              <li><span id="days">24</span>days</li>-->
<!--                              <li><span id="hours">1</span>hrs</li>-->
<!--                              <li><span id="minutes">7</span>mins</li>-->
<!--                              <li><span id="seconds">43</span>secs</li>-->
<!--                           </ul>-->
<!--                        </div>-->
<!--                        <a class="border__btn-f mt-40" href="product-details.php">Buy Now<span><i-->
<!--                                 class="fa-regular fa-angle-right"></i></span></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </section>-->
      <!-- Ad banner area end -->

      <!-- Testiminial area start -->
      <section class="furniture-testimonial section-space bg-image"
         data-background="assets/imgs/furniture/testimonial/bg.jpg">
         <div class="container">
            <div class="section-title-wrapper-4 is-white mb-40 text-center">
               <span class="section-subtitle-4 mb-10">Testimonials</span>
               <h2 class="section-title-4">Client Feedback</h2>
            </div>
            <div class="swiper testimonial-active-3">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="furniture-testimonial__item">
                        <div class="ft-head">
                           <div class="ft-info">
                              <div class="fs-rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fal fa-star"></i>
                              </div>
                              <h5>Annette Black</h5>
                              <span>Dog Trainer</span>
                           </div>
                           <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_276_28)">
                                 <path
                                    d="M23.9729 40C23.9729 37.384 23.9729 34.7679 23.9729 32.0675C27.1379 32.1519 29.7642 30.8861 31.717 27.7637C32.7945 26.076 33.5352 23.7131 33.5352 21.8565C29.8989 21.8565 26.1952 21.8565 22.4915 21.8565C22.4915 14.5148 22.4915 7.25738 22.4915 0C28.2827 0 34.0739 0 39.9325 0C39.9325 0.253165 39.9325 0.421941 39.9325 0.675106C39.9325 7.34177 39.9325 14.0084 39.9325 20.5907C39.9325 29.9578 35.084 37.5527 27.8113 39.5781C26.5992 40 25.3197 40.0844 23.9729 40ZM35.084 20C35.084 20.0844 35.1514 20.1688 35.1514 20.1688C35.4207 26.6667 31.7844 32.4895 26.6665 33.7553C26.2625 33.8397 25.7238 33.8397 25.5218 34.0928C25.3197 34.4304 25.4544 35.1055 25.4544 35.6118C25.4544 36.4557 25.4544 37.2996 25.4544 38.2278C26.3972 37.9747 27.2726 37.8903 28.148 37.6371C34.276 35.6118 38.451 28.8608 38.451 20.8439C38.451 14.6835 38.451 8.6076 38.451 2.44726C38.451 2.27848 38.451 2.1097 38.451 1.94093C33.6026 1.94093 28.8214 1.94093 24.0403 1.94093C24.0403 8.01688 24.0403 14.0084 24.0403 20C27.744 20 31.3803 20 35.084 20Z"
                                    fill="#B18B5E" />
                                 <path
                                    d="M1.4141 40C1.4141 37.384 1.4141 34.7679 1.4141 32.0675C4.4444 32.1519 7.00332 30.9705 8.95619 28.0169C10.1683 26.2447 10.909 23.8819 10.9764 21.7721C7.34002 21.7721 3.63632 21.7721 -0.0673828 21.7721C-4.2744e-05 14.5148 -4.2744e-05 7.25738 -4.2744e-05 0C5.7912 0 11.5824 0 17.3737 0C17.3737 0.168776 17.3737 0.337553 17.3737 0.506329C17.3737 7.25738 17.3737 14.0928 17.3737 20.8439C17.3064 29.7046 12.6599 37.2152 5.7912 39.4093C4.37706 39.9156 2.96292 40.0844 1.4141 40ZM15.9596 1.85654C11.1111 1.85654 6.32992 1.85654 1.54878 1.85654C1.54878 7.93249 1.54878 13.924 1.54878 20C5.25248 20 8.95619 20 12.5926 20C12.9293 27.0042 8.75417 33.4177 2.96292 34.0084C2.96292 35.3586 2.96292 36.7932 2.96292 38.2278C3.83834 37.9747 4.71376 37.8903 5.58918 37.5527C11.7171 35.6118 15.8922 28.7764 15.9596 20.7595C15.9596 14.5992 15.9596 8.52321 15.9596 2.36287C15.9596 2.27848 15.9596 2.1097 15.9596 1.85654Z"
                                    fill="#B18B5E" />
                              </g>
                              <defs>
                                 <clipPath>
                                    <rect width="40" height="40" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur the adipiscing elit vestibulum viverra eget felis
                           interdum fusce odio lacus.</p>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="furniture-testimonial__item">
                        <div class="ft-head">
                           <div class="ft-info">
                              <div class="fs-rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fal fa-star"></i>
                              </div>
                              <h5>Ralph Edwards</h5>
                              <span>UI/UX Designer</span>
                           </div>
                           <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_276_28)">
                                 <path
                                    d="M23.9729 40C23.9729 37.384 23.9729 34.7679 23.9729 32.0675C27.1379 32.1519 29.7642 30.8861 31.717 27.7637C32.7945 26.076 33.5352 23.7131 33.5352 21.8565C29.8989 21.8565 26.1952 21.8565 22.4915 21.8565C22.4915 14.5148 22.4915 7.25738 22.4915 0C28.2827 0 34.0739 0 39.9325 0C39.9325 0.253165 39.9325 0.421941 39.9325 0.675106C39.9325 7.34177 39.9325 14.0084 39.9325 20.5907C39.9325 29.9578 35.084 37.5527 27.8113 39.5781C26.5992 40 25.3197 40.0844 23.9729 40ZM35.084 20C35.084 20.0844 35.1514 20.1688 35.1514 20.1688C35.4207 26.6667 31.7844 32.4895 26.6665 33.7553C26.2625 33.8397 25.7238 33.8397 25.5218 34.0928C25.3197 34.4304 25.4544 35.1055 25.4544 35.6118C25.4544 36.4557 25.4544 37.2996 25.4544 38.2278C26.3972 37.9747 27.2726 37.8903 28.148 37.6371C34.276 35.6118 38.451 28.8608 38.451 20.8439C38.451 14.6835 38.451 8.6076 38.451 2.44726C38.451 2.27848 38.451 2.1097 38.451 1.94093C33.6026 1.94093 28.8214 1.94093 24.0403 1.94093C24.0403 8.01688 24.0403 14.0084 24.0403 20C27.744 20 31.3803 20 35.084 20Z"
                                    fill="#B18B5E" />
                                 <path
                                    d="M1.4141 40C1.4141 37.384 1.4141 34.7679 1.4141 32.0675C4.4444 32.1519 7.00332 30.9705 8.95619 28.0169C10.1683 26.2447 10.909 23.8819 10.9764 21.7721C7.34002 21.7721 3.63632 21.7721 -0.0673828 21.7721C-4.2744e-05 14.5148 -4.2744e-05 7.25738 -4.2744e-05 0C5.7912 0 11.5824 0 17.3737 0C17.3737 0.168776 17.3737 0.337553 17.3737 0.506329C17.3737 7.25738 17.3737 14.0928 17.3737 20.8439C17.3064 29.7046 12.6599 37.2152 5.7912 39.4093C4.37706 39.9156 2.96292 40.0844 1.4141 40ZM15.9596 1.85654C11.1111 1.85654 6.32992 1.85654 1.54878 1.85654C1.54878 7.93249 1.54878 13.924 1.54878 20C5.25248 20 8.95619 20 12.5926 20C12.9293 27.0042 8.75417 33.4177 2.96292 34.0084C2.96292 35.3586 2.96292 36.7932 2.96292 38.2278C3.83834 37.9747 4.71376 37.8903 5.58918 37.5527C11.7171 35.6118 15.8922 28.7764 15.9596 20.7595C15.9596 14.5992 15.9596 8.52321 15.9596 2.36287C15.9596 2.27848 15.9596 2.1097 15.9596 1.85654Z"
                                    fill="#B18B5E" />
                              </g>
                              <defs>
                                 <clipPath>
                                    <rect width="40" height="40" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur the adipiscing elit vestibulum viverra eget felis
                           interdum fusce odio lacus.</p>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="furniture-testimonial__item">
                        <div class="ft-head">
                           <div class="ft-info">
                              <div class="fs-rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fal fa-star"></i>
                              </div>
                              <h5>Jerome Bell</h5>
                              <span>Web Designer</span>
                           </div>
                           <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_276_28)">
                                 <path
                                    d="M23.9729 40C23.9729 37.384 23.9729 34.7679 23.9729 32.0675C27.1379 32.1519 29.7642 30.8861 31.717 27.7637C32.7945 26.076 33.5352 23.7131 33.5352 21.8565C29.8989 21.8565 26.1952 21.8565 22.4915 21.8565C22.4915 14.5148 22.4915 7.25738 22.4915 0C28.2827 0 34.0739 0 39.9325 0C39.9325 0.253165 39.9325 0.421941 39.9325 0.675106C39.9325 7.34177 39.9325 14.0084 39.9325 20.5907C39.9325 29.9578 35.084 37.5527 27.8113 39.5781C26.5992 40 25.3197 40.0844 23.9729 40ZM35.084 20C35.084 20.0844 35.1514 20.1688 35.1514 20.1688C35.4207 26.6667 31.7844 32.4895 26.6665 33.7553C26.2625 33.8397 25.7238 33.8397 25.5218 34.0928C25.3197 34.4304 25.4544 35.1055 25.4544 35.6118C25.4544 36.4557 25.4544 37.2996 25.4544 38.2278C26.3972 37.9747 27.2726 37.8903 28.148 37.6371C34.276 35.6118 38.451 28.8608 38.451 20.8439C38.451 14.6835 38.451 8.6076 38.451 2.44726C38.451 2.27848 38.451 2.1097 38.451 1.94093C33.6026 1.94093 28.8214 1.94093 24.0403 1.94093C24.0403 8.01688 24.0403 14.0084 24.0403 20C27.744 20 31.3803 20 35.084 20Z"
                                    fill="#B18B5E" />
                                 <path
                                    d="M1.4141 40C1.4141 37.384 1.4141 34.7679 1.4141 32.0675C4.4444 32.1519 7.00332 30.9705 8.95619 28.0169C10.1683 26.2447 10.909 23.8819 10.9764 21.7721C7.34002 21.7721 3.63632 21.7721 -0.0673828 21.7721C-4.2744e-05 14.5148 -4.2744e-05 7.25738 -4.2744e-05 0C5.7912 0 11.5824 0 17.3737 0C17.3737 0.168776 17.3737 0.337553 17.3737 0.506329C17.3737 7.25738 17.3737 14.0928 17.3737 20.8439C17.3064 29.7046 12.6599 37.2152 5.7912 39.4093C4.37706 39.9156 2.96292 40.0844 1.4141 40ZM15.9596 1.85654C11.1111 1.85654 6.32992 1.85654 1.54878 1.85654C1.54878 7.93249 1.54878 13.924 1.54878 20C5.25248 20 8.95619 20 12.5926 20C12.9293 27.0042 8.75417 33.4177 2.96292 34.0084C2.96292 35.3586 2.96292 36.7932 2.96292 38.2278C3.83834 37.9747 4.71376 37.8903 5.58918 37.5527C11.7171 35.6118 15.8922 28.7764 15.9596 20.7595C15.9596 14.5992 15.9596 8.52321 15.9596 2.36287C15.9596 2.27848 15.9596 2.1097 15.9596 1.85654Z"
                                    fill="#B18B5E" />
                              </g>
                              <defs>
                                 <clipPath>
                                    <rect width="40" height="40" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur the adipiscing elit vestibulum viverra eget felis
                           interdum fusce odio lacus.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="navigation__wrapprer text-center">
               <div class="common-slider-navigation">
                  <button class="testimonial-button-prev"><i class="fa-regular fa-arrow-left"></i></button>
                  <button class="testimonial-button-next"><i class="fa-regular fa-arrow-right"></i></button>
               </div>
            </div>
         </div>
      </section>
      <!-- Testiminial area end -->

      <!-- Best sell area start -->
<!--      <section class="furniture-seller section-space">-->
<!--         <div class="container">-->
<!--            <div class="section-title-wrapper-4 mb-40">-->
<!--               <span class="section-subtitle-4 mb-10">THIS Week</span>-->
<!--               <h2 class="section-title-4">Best Sellers</h2>-->
<!--            </div>-->
<!--            <div class="row g-4">-->
<!--               <div class="col-xl-4 col-lg-6 col-md-6">-->
<!--                  <div class="furniture-seller__item">-->
<!--                     <div class="fs-image">-->
<!--                        <img src="assets/imgs/furniture/product/fs-01.png" alt="">-->
<!--                     </div>-->
<!--                     <div class="fs-content">-->
<!--                        <h5><a href="product-details.php" class="text-capitalize">stylish grey chair</a></h5>-->
<!--                        <span>USD 66.00</span>-->
<!--                        <div class="fs-rating">-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="col-xl-4 col-lg-6 col-md-6">-->
<!--                  <div class="furniture-seller__item">-->
<!--                     <div class="fs-image">-->
<!--                        <img src="assets/imgs/furniture/product/fs-02.png" alt="">-->
<!--                     </div>-->
<!--                     <div class="fs-content">-->
<!--                        <h5><a href="product-details.php" class="text-capitalize">Chair pillow</a></h5>-->
<!--                        <span>USD 66.00</span>-->
<!--                        <div class="fs-rating">-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="col-xl-4 col-lg-6 col-md-6">-->
<!--                  <div class="furniture-seller__item">-->
<!--                     <div class="fs-image">-->
<!--                        <img src="assets/imgs/furniture/product/fs-03.png" alt="">-->
<!--                     </div>-->
<!--                     <div class="fs-content">-->
<!--                        <h5><a href="product-details.php" class="text-capitalize">Alexander roll ..</a></h5>-->
<!--                        <span>USD 66.00</span>-->
<!--                        <div class="fs-rating">-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="col-xl-4 col-lg-6 col-md-6">-->
<!--                  <div class="furniture-seller__item">-->
<!--                     <div class="fs-image">-->
<!--                        <img src="assets/imgs/furniture/product/fs-04.png" alt="">-->
<!--                     </div>-->
<!--                     <div class="fs-content">-->
<!--                        <h5><a href="product-details.php" class="text-capitalize">wooden chair</a></h5>-->
<!--                        <span>USD 66.00</span>-->
<!--                        <div class="fs-rating">-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="col-xl-4 col-lg-6 col-md-6">-->
<!--                  <div class="furniture-seller__item">-->
<!--                     <div class="fs-image">-->
<!--                        <img src="assets/imgs/furniture/product/fs-05.png" alt="">-->
<!--                     </div>-->
<!--                     <div class="fs-content">-->
<!--                        <h5><a href="product-details.php" class="text-capitalize">Chair pillow</a></h5>-->
<!--                        <span>USD 66.00</span>-->
<!--                        <div class="fs-rating">-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="col-xl-4 col-lg-6 col-md-6">-->
<!--                  <div class="furniture-seller__item">-->
<!--                     <div class="fs-image">-->
<!--                        <img src="assets/imgs/furniture/product/fs-06.png" alt="">-->
<!--                     </div>-->
<!--                     <div class="fs-content">-->
<!--                        <h5><a href="product-details.php" class="text-capitalize">seater gray sofa</a></h5>-->
<!--                        <span>USD 66.00</span>-->
<!--                        <div class="fs-rating">-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                           <i class="far fa-star"></i>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </section>-->
      <!-- Best sell area end -->

      <!-- Blog area start -->
<!--      <section class="blog-area theme-bg-2 section-space">-->
<!--         <div class="container">-->
<!--            <div class="row justify-content-center">-->
<!--               <div class="col-xxl-4 col-xl-4 col-lg-4">-->
<!--                  <div class="section-title-wrapper-4 text-center section-title-space">-->
<!--                     <span class="section-subtitle-4 mb-10">Read blog</span>-->
<!--                     <h2 class="section-title-4">Recent Blog</h2>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="row gy-5">-->
<!--               <div class="col-xxl-6 col-xl-6 col-lg-6">-->
<!--                  <div class="blog-item-4 furniture__blog-item">-->
<!--                     <div class="blog-content-4">-->
<!--                        <div class="blog-tag-wrapper mb-15">-->
<!--                           <a class="blog-tag" href="#">Chair Design</a>-->
<!--                        </div>-->
<!--                        <div class="postbox__meta mb-15">-->
<!--                           <span><a href="#">By Alex Manie</a></span>-->
<!--                           <span>07 jan, 2023</span>-->
<!--                        </div>-->
<!--                        <h4 class="blog-title">-->
<!--                           <a href="blog-details.html" class="text-capitalize">arrangement that's nearly perfect.</a>-->
<!--                        </h4>-->
<!--                        <a class="round-link" href="blog-details.html"><i class="fa-regular fa-angle-right"></i></a>-->
<!--                     </div>-->
<!--                     <div class="blog-item-thumb w-img">-->
<!--                        <a href="blog-details.html">-->
<!--                           <img src="assets/imgs/furniture/blog/blog-image1.jpg" alt="">-->
<!--                        </a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="col-xxl-6 col-xl-6 col-lg-6">-->
<!--                  <div class="blog-item-4 furniture__blog-item">-->
<!--                     <div class="blog-content-4">-->
<!--                        <div class="blog-tag-wrapper mb-15">-->
<!--                           <a class="blog-tag" href="#">Sofa Design</a>-->
<!--                        </div>-->
<!--                        <div class="postbox__meta mb-15">-->
<!--                           <span><a href="#">By Alex Manie</a></span>-->
<!--                           <span>07 jan, 2023</span>-->
<!--                        </div>-->
<!--                        <h4 class="blog-title">-->
<!--                           <a href="blog-details.html" class="text-capitalize">Eworkstation arrangement that's</a>-->
<!--                        </h4>-->
<!--                        <a class="round-link" href="blog-details.html"><i class="fa-regular fa-angle-right"></i></a>-->
<!--                     </div>-->
<!--                     <div class="blog-item-thumb-4 w-img">-->
<!--                        <a href="blog-details.html">-->
<!--                           <img src="assets/imgs/furniture/blog/blog-image2.jpg" alt="">-->
<!--                        </a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </section>-->
      <!-- Blog area end -->

      <!-- Support area start -->
<!--      <section class="support-area section-space pb-0">-->
<!--         <div class="container">-->
<!--            <div class="row g-5">-->
<!--               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                  <div class="support-item">-->
<!--                     <div class="support-content">-->
<!--                        <h3>Exclusive offers for you</h3>-->
<!--                        <p>Get weekly deals, valuable health information and more.</p>-->
<!--                        <a class="join-btn furniture-btn" href="#">sing up<span><i-->
<!--                                 class="fa-regular fa-angle-right"></i></span></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                  <div class="support-item is-light-yellow">-->
<!--                     <div class="support-content">-->
<!--                        <h3>Join Our Community</h3>-->
<!--                        <p>Get weekly deals, valuable health information and more.</p>-->
<!--                        <a class="join-btn furniture-btn" href="#">Join FREE now<span><i-->
<!--                                 class="fa-regular fa-angle-right"></i></span></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                  <div class="support-item is-pale-pink">-->
<!--                     <div class="support-content">-->
<!--                        <h3>Get our FREE app Now!</h3>-->
<!--                        <p>Get weekly deals, valuable health information and more.</p>-->
<!--                        <div class="mobile__app-download">-->
<!--                           <a class="app__download" href="#">-->
<!--                              <img src="assets/imgs/app/play-store.png" alt="image not found">-->
<!--                           </a>-->
<!--                           <a class="app__download" href="#">-->
<!--                              <img src="assets/imgs/app/apple-store.png" alt="image not found">-->
<!--                           </a>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </section>-->
      <!-- Support area end -->

      <!-- Brand area start -->
<!--      <div class="brand-area pt-100 pb-100">-->
<!--         <div class="container">-->
<!--            <div class="brand-grid border-0">-->
<!--               <div class="brand-item border-0 p-0">-->
<!--                  <div class="brand-thumb">-->
<!--                     <img src="assets/imgs/furniture/brand/brand-01.png" alt="">-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="brand-item border-0 p-0">-->
<!--                  <div class="brand-thumb">-->
<!--                     <img src="assets/imgs/furniture/brand/brand-02.png" alt="">-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="brand-item border-0 p-0">-->
<!--                  <div class="brand-thumb">-->
<!--                     <img src="assets/imgs/furniture/brand/brand-03.png" alt="">-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="brand-item border-0 p-0">-->
<!--                  <div class="brand-thumb">-->
<!--                     <img src="assets/imgs/furniture/brand/brand-04.png" alt="">-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="brand-item border-0 p-0">-->
<!--                  <div class="brand-thumb">-->
<!--                     <img src="assets/imgs/furniture/brand/brand-05.png" alt="">-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
      <!-- Brand area end -->
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
                     <a href="index.html"><img src="assets/imgs/furniture/Logo.png"
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
                        <li><a href="index.html">Home</a></li>
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
<header>
    <?php

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
    <div class="header">
        <div class="header-top-area grocery__top-header">
            <div class="header-layout-4">
                <div class="header-to-main d-none d-sm-flex">
                    <div class="link-text">
                        <span><img src="assets/imgs/icons/call.png" alt=""></span>
                        <a href="tel:+21695575544">+21695575544</a>
                    </div>
                    <div class="header-top-notice d-none d-lg-block">
                        <p>Accessories are always a good idea <span class="text-white">10% OFF</span> USE CODE “ AIX03 ”</p>
                    </div>

                    <div class="header-lang-item tp-header-setting">
                        <?php
                        if ($loggedIn) {
                            // Display the user's name instead of "Setting"
                            echo '<span class="header-setting-toggle text-white" id="header-setting-toggle">' . $userName . '</span>';
                            echo '<ul>';
                            echo '<li><a class="furniture-clr-hover" href="#">My Profile</a></li>';
                            echo '<li><a class="furniture-clr-hover" href="wishlist.php">Wishlist</a></li>';
                            echo '<li><a class="furniture-clr-hover" href="cart.php">Cart</a></li>';
                            // Check if the user is an admin
                            if ($isAdmin=="admin") {
                                echo '<li><a class="furniture-clr-hover" href="admin/product/main/products.php">Admin</a></li>';
                            }
                            echo '<li><a class="furniture-clr-hover" href="assets/php/logout.php">Logout</a></li>';
                            echo '</ul>';
                        } else {
                            // Display login and register buttons if the user is not logged in
                            echo '<a class="header-setting-toggle text-white login-button" href="auth/signin.php">Login</a>';
                            echo '<a class="header-setting-toggle text-white register-button" href="auth/signup.php">Register</a>';
                        }
                        ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="header-layout-4 header-bottom">
        <div id="header-sticky" class="header-4">
            <div class="mega-menu-wrapper">
                <div class="header-main-4">
                    <div class="header-left">
                        <div class="header-logo">
                            <a href="index.html">
                                <img src="assets/imgs/furniture/Logo.png" alt="logo not found">
                            </a>
                        </div>
                        <div class="mean__menu-wrapper furniture__menu d-none d-lg-block">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="product.html">Boutique</a>
                                            <ul class="submenu">
                                                <li><a href="product.html">Bagues</a></li>
                                                <li><a href="boucles.html">Boucles</a></li>
                                                <li><a href="colliers.html">Colliers</a></li>
                                                <li><a href="bracelets.html">Bracelets</a></li>
                                                <li><a href="pack.html">Pack</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-inline-flex align-items-center justify-content-end">
                        <div class="header-search d-none d-xxl-block">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4443 13.4445L16.9999 17" stroke="white" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z"
                                            stroke="white" stroke-width="2" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <?php
                        $wishlist_count = 0;
                        $cart_count = 0;
                        if (isset($_SESSION['id'])) {
                            $user_id = $_SESSION['id'];
                            // Fetch wishlist count
                            $stmt = $pdo->prepare("SELECT COUNT(*) FROM wishlist WHERE user_id = ?");
                            $stmt->execute([$user_id]);
                            $wishlist_count = $stmt->fetchColumn();

                            // Fetch cart count
                            $stmt = $pdo->prepare("SELECT COUNT(*) FROM cart WHERE user_id = ?");
                            $stmt->execute([$user_id]);
                            $cart_count = $stmt->fetchColumn();
                        }
                        ?>
                        <div class="header-action d-flex align-items-center ml-30">
                            <div class="header-action-item">
                                <a href="wishlist.php" class="header-action-btn">
                                    <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.2743 2.33413C20.6448 1.60193 19.8543 1.01306 18.9596 0.609951C18.0649 0.206838 17.0883 -0.0004864 16.1002 0.00291444C14.4096 -0.0462975 12.7637 0.529279 11.5011 1.61122C10.2385 0.529279 8.59252 -0.0462975 6.90191 0.00291444C5.91383 -0.0004864 4.93727 0.206838 4.04257 0.609951C3.14788 1.01306 2.35732 1.60193 1.72785 2.33413C0.632101 3.61193 -0.514239 5.92547 0.245772 9.69587C1.4588 15.7168 10.5548 20.6578 10.9388 20.8601C11.11 20.9518 11.3028 21 11.4988 21C11.6948 21 11.8875 20.9518 12.0587 20.8601C12.445 20.6534 21.541 15.7124 22.7518 9.69587C23.5164 5.92547 22.37 3.61193 21.2743 2.33413ZM20.4993 9.27583C19.6416 13.5326 13.4074 17.492 11.5011 18.6173C8.81516 17.0587 3.28927 13.1457 2.50856 9.27583C1.91872 6.35103 2.72587 4.65208 3.50773 3.74126C3.9212 3.26166 4.43995 2.87596 5.02678 2.61185C5.6136 2.34774 6.25396 2.21175 6.90191 2.21365C7.59396 2.16375 8.28765 2.2871 8.91534 2.57168C9.54304 2.85626 10.0833 3.29235 10.4835 3.83743C10.5822 4.012 10.7278 4.15794 10.9051 4.26003C11.0824 4.36212 11.2849 4.41662 11.4916 4.41787C11.6983 4.41911 11.9015 4.36704 12.0801 4.26709C12.2587 4.16714 12.4062 4.02296 12.5071 3.84959C12.9065 3.30026 13.448 2.86048 14.0781 2.57361C14.7081 2.28674 15.4051 2.16267 16.1002 2.21365C16.7495 2.21061 17.3915 2.34604 17.9798 2.6102C18.5681 2.87435 19.0881 3.26065 19.5025 3.74126C20.282 4.65208 21.0892 6.35103 20.4993 9.27583Z" fill="black" />
                                    </svg>
                                    <span class="header-action-badge bg-furniture"><?php echo $wishlist_count; ?></span>
                                </a>
                            </div>
                            <div class="header-action-item">
                                <a href="cart.php" class="header-action-btn cartmini-open-btn">
                                    <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.0625 10.6C14.0625 12.5883 12.4676 14.2 10.5 14.2C8.53243 14.2 6.9375 12.5883 6.9375 10.6M1 5.8H20M1 5.8V13C1 20.6402 2.33946 22 10.5 22C18.6605 22 20 20.6402 20 13V5.8M1 5.8L2.71856 2.32668C3.12087 1.5136 3.94324 1 4.84283 1H16.1571C17.0568 1 17.8791 1.5136 18.2814 2.32668L20 5.8" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="header-action-badge bg-furniture"><?php echo $cart_count; ?></span>
                                </a>
                            </div>
                        </div>
                        <div class="header-humbager ml-30">
                            <a class="sidebar__toggle" href="javascript:void(0)">
                                <div class="bar-icon-2">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- for wp -->
                            <div class="header__hamburger ml-50 d-none">
                                <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span>01</span>
                                    <span>01</span>
                                    <span>01</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
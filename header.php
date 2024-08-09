<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/demo1.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Dec 2021 16:52:00 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart - Marketplace HTML5 Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description"
        content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo1.min.css">

</head>

<body class="home">
    <div class="page-wrapper">
        <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
        <!-- Start of Header -->
        <header class="header" style="border 2px solid red">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome toGefen  Store message or remove it!</p>
                    </div>
                    <div class="header-right">
                        <div class="dropdown">
                            <a href="#currency">USD</a>
                            <div class="dropdown-box">
                                <a href="#USD">USD</a>
                                <a href="#EUR">EUR</a>
                            </div>
                        </div>
                        <!-- End of DropDown Menu -->

                        <div class="dropdown">
                            <a href="#language"><img src="assets/images/flags/eng.png" alt="ENG Flag" width="14"
                                    height="8" class="dropdown-image" /> ENG</a>
                            <div class="dropdown-box">
                                <a href="#ENG">
                                    <img src="assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                        class="dropdown-image" />
                                    ENG
                                </a>
                                <a href="#FRA">
                                    <img src="assets/images/flags/fra.png" alt="FRA Flag" width="14" height="8"
                                        class="dropdown-image" />
                                    FRA
                                </a>
                            </div>
                        </div>
                        <!-- End of Dropdown Menu -->
                        <span class="divider d-lg-show"></span>
                        <a href="blog.php" class="d-lg-show">Blog</a>
                        <a href="contact-us.php" class="d-lg-show">Contact Us</a>
                        <a href="my-account.php" class="d-lg-show">My Account</a>
                        <a href="assets/ajax/login.php" class="d-lg-show login sign-in"><i
                                class="w-icon-account"></i>Sign In</a>
                        <span class="delimiter d-lg-show">/</span>
                        <a href="assets/ajax/login.php" class="ml-0 d-lg-show login register">Register</a>
                    </div>
                </div>
            </div>
            <!-- End of Header Top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                        </a>
                        <a href="demo1.php" class="logo ml-lg-0">
                            <img src="assets/images/logo.png" alt="logo" width="144" height="45" />
                        </a>
                        <form method="get" action="#"
                            class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                            <div class="select-box">
                                <select id="category" name="category">
                                    <option value="">All Categories</option>
                                    <option value="4">Fashion</option>
                                    <option value="5">Furniture</option>
                                    <option value="6">Shoes</option>
                                    <option value="7">Sports</option>
                                    <option value="8">Games</option>
                                    <option value="9">Computers</option>
                                    <option value="10">Electronics</option>
                                    <option value="11">Kitchen</option>
                                    <option value="12">Clothing</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="search" id="search" placeholder="Search in..."
                                required />
                            <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-right ml-4">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                            <a href="tel:#" class="w-icon-call"></a>
                            <div class="call-info d-lg-show">
                                <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                    <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                                <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                            </div>
                        </div>
                        <a class="wishlist label-down link d-xs-show" href="wishlist.php">
                            <i class="w-icon-heart"></i>
                            <span class="wishlist-label d-lg-show">Wishlist</span>
                        </a>
                        <a class="compare label-down link d-xs-show" href="compare.php">
                            <i class="w-icon-compare"></i>
                            <span class="compare-label d-lg-show">Compare</span>
                        </a>
                        <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="#" class="cart-toggle label-down link">
                                <i class="w-icon-cart">
                                    <span class="cart-count">2</span>
                                </i>
                                <span class="cart-label">Cart</span>
                            </a>
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <span>Shopping Cart</span>
                                    <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                                </div>

                                <div class="products">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.php" class="product-name">Beige knitted
                                                elas<br>tic
                                                runner shoes</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$25.68</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.php">
                                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84"
                                                    width="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.php" class="product-name">Blue utility
                                                pina<br>fore
                                                denim dress</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$32.99</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.php">
                                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84"
                                                    height="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">$58.67</span>
                                </div>

                                <div class="cart-action">
                                    <a href="cart.php" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                    <a href="checkout.php" class="btn btn-primary  btn-rounded">Checkout</a>
                                </div>
                            </div>
                            <!-- End of Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->

            <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border" data-visible="true">
                                <a href="#" class="category-toggle text-dark" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true" data-display="static"
                                    title="Browse Categories">
                                    <i class="w-icon-category"></i>
                                    <span>Browse Categories</span>
                                </a>

                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-tshirt2"></i>Fashion
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Women</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">New Arrivals</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Best Sellers</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Trending</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Clothing</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Shoes</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Bags</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Accessories</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Jewlery &
                                                                Watches</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Men</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">New Arrivals</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Best Sellers</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Trending</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Clothing</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Shoes</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Bags</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Accessories</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Jewlery &
                                                                Watches</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="banner-fixed menu-banner menu-banner2">
                                                        <figure>
                                                            <img src="assets/images/menu/banner-2.jpg" alt="Menu Banner"
                                                                width="235" height="347" />
                                                        </figure>
                                                        <div class="banner-content">
                                                            <div class="banner-price-info mb-1 ls-normal">Get up to
                                                                <strong
                                                                    class="text-primary text-uppercase">20%Off</strong>
                                                            </div>
                                                            <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                            <a href="shop-banner-sidebar.php"
                                                                class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                                Shop Now<i class="w-icon-long-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-home"></i>Home & Garden
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Bedroom</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Beds, Frames &
                                                                Bases</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Dressers</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Nightstands</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Kid's Beds &
                                                                Headboards</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Armoires</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">Living Room</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Coffee Tables</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Chairs</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Tables</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Futons & Sofa
                                                                Beds</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Cabinets &
                                                                Chests</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Office</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Office Chairs</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Desks</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Bookcases</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">File Cabinets</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Breakroom
                                                                Tables</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">Kitchen & Dining</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Dining Sets</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Kitchen Storage
                                                                Cabinets</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Bashers Racks</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Dining Chairs</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Dining Room
                                                                Tables</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Bar Stools</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="menu-banner banner-fixed menu-banner3">
                                                        <figure>
                                                            <img src="assets/images/menu/banner-3.jpg" alt="Menu Banner"
                                                                width="235" height="461" />
                                                        </figure>
                                                        <div class="banner-content">
                                                            <h4
                                                                class="banner-subtitle font-weight-normal text-white mb-1">
                                                                Restroom</h4>
                                                            <h3
                                                                class="banner-title font-weight-bolder text-white ls-normal">
                                                                Furniture Sale</h3>
                                                            <div
                                                                class="banner-price-info text-white font-weight-normal ls-25">
                                                                Up to <span
                                                                    class="text-secondary text-uppercase font-weight-bold">25%
                                                                    Off</span></div>
                                                            <a href="shop-banner-sidebar.php"
                                                                class="btn btn-white btn-link btn-sm btn-slide-right btn-icon-right">
                                                                Shop Now<i class="w-icon-long-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-electronics"></i>Electronics
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Laptops &amp; Computers</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Desktop
                                                                Computers</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Monitors</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Laptops</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Hard Drives &amp;
                                                                Storage</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Computer
                                                                Accessories</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">TV &amp; Video</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">TVs</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Home Audio
                                                                Speakers</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Projectors</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Media Streaming
                                                                Devices</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Digital Cameras</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Digital SLR
                                                                Cameras</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Sports & Action
                                                                Cameras</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Camera Lenses</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Photo Printer</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Digital Memory
                                                                Cards</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">Cell Phones</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Carrier Phones</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Unlocked Phones</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Phone & Cellphone
                                                                Cases</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Cellphone
                                                                Chargers</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="menu-banner banner-fixed menu-banner4">
                                                        <figure>
                                                            <img src="assets/images/menu/banner-4.jpg" alt="Menu Banner"
                                                                width="235" height="433" />
                                                        </figure>
                                                        <div class="banner-content">
                                                            <h4 class="banner-subtitle font-weight-normal">Deals Of The
                                                                Week</h4>
                                                            <h3 class="banner-title text-white">Save On Smart EarPhone
                                                            </h3>
                                                            <div
                                                                class="banner-price-info text-secondary font-weight-bolder text-uppercase text-secondary">
                                                                20% Off</div>
                                                            <a href="shop-banner-sidebar.php"
                                                                class="btn btn-white btn-outline btn-sm btn-rounded">Shop
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-furniture"></i>Furniture
                                            </a>
                                            <ul class="megamenu type2">
                                                <li class="row">
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Furniture</h4>
                                                        <hr class="divider" />
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.php">Sofas & Couches</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Armchairs</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Bed Frames</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Beside Tables</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Dressing Tables</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Lighting</h4>
                                                        <hr class="divider" />
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.php">Light Bulbs</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Lamps</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Celling Lights</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Wall Lights</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Bathroom
                                                                    Lighting</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Home Accessories</h4>
                                                        <hr class="divider" />
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.php">Decorative
                                                                    Accessories</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Candals &
                                                                    Holders</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Home Fragrance</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Mirrors</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Clocks</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Garden & Outdoors</h4>
                                                        <hr class="divider" />
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.php">Garden
                                                                    Furniture</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Lawn Mowers</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Pressure
                                                                    Washers</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">All Garden
                                                                    Tools</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Outdoor Dining</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="row">
                                                    <div class="col-6">
                                                        <div class="banner banner-fixed menu-banner5 br-xs">
                                                            <figure>
                                                                <img src="assets/images/menu/banner-5.jpg" alt="Banner"
                                                                    width="410" height="123"
                                                                    style="background-color: #D2D2D2;" />
                                                            </figure>
                                                            <div class="banner-content text-right y-50">
                                                                <h4
                                                                    class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                                    New Arrivals</h4>
                                                                <h3
                                                                    class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                                    Amazing Sofa</h3>
                                                                <div
                                                                    class="banner-price-info font-weight-normal ls-normal">
                                                                    Starting at <strong>$125.00</strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="banner banner-fixed menu-banner5 br-xs">
                                                            <figure>
                                                                <img src="assets/images/menu/banner-6.jpg" alt="Banner"
                                                                    width="410" height="123"
                                                                    style="background-color: #9F9888;" />
                                                            </figure>
                                                            <div class="banner-content y-50">
                                                                <h4
                                                                    class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                                    Best Seller</h4>
                                                                <h3
                                                                    class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                                    Chair &amp; Lamp</h3>
                                                                <div
                                                                    class="banner-price-info font-weight-normal ls-normal text-white">
                                                                    From <strong>$165.00</strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-heartbeat"></i>Healthy & Beauty
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-gift"></i>Gift Ideas
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-gamepad"></i>Toy & Games
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-ice-cream"></i>Cooking
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-ios"></i>Smart Phones
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-camera"></i>Cameras & Photo
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-ruby"></i>Accessories
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-banner-sidebar.php"
                                                class="font-weight-bold text-primary text-uppercase ls-25">
                                                View All Categories<i class="w-icon-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <nav class="main-nav">
                                <ul class="menu active-underline">
                                    <li class="active">
                                        <a href="demo1.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="shop-banner-sidebar.php">Shop</a>

                                        <!-- Start of Megamenu -->
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Shop Pages</h4>
                                                <ul>
                                                    <li><a href="shop-banner-sidebar.php">Banner With Sidebar</a></li>
                                                    <li><a href="shop-boxed-banner.php">Boxed Banner</a></li>
                                                    <li><a href="shop-fullwidth-banner.php">Full Width Banner</a></li>
                                                    <li><a href="shop-horizontal-filter.php">Horizontal Filter<span
                                                                class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="shop-off-canvas.php">Off Canvas Sidebar<span
                                                                class="tip tip-new">New</span></a></li>
                                                    <li><a href="shop-infinite-scroll.php">Infinite Ajax Scroll</a>
                                                    </li>
                                                    <li><a href="shop-right-sidebar.php">Right Sidebar</a></li>
                                                    <li><a href="shop-both-sidebar.php">Both Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Shop Layouts</h4>
                                                <ul>
                                                    <li><a href="shop-grid-3cols.php">3 Columns Mode</a></li>
                                                    <li><a href="shop-grid-4cols.php">4 Columns Mode</a></li>
                                                    <li><a href="shop-grid-5cols.php">5 Columns Mode</a></li>
                                                    <li><a href="shop-grid-6cols.php">6 Columns Mode</a></li>
                                                    <li><a href="shop-grid-7cols.php">7 Columns Mode</a></li>
                                                    <li><a href="shop-grid-8cols.php">8 Columns Mode</a></li>
                                                    <li><a href="shop-list.php">List Mode</a></li>
                                                    <li><a href="shop-list-sidebar.php">List Mode With Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Product Pages</h4>
                                                <ul>
                                                    <li><a href="product-variable.php">Variable Product</a></li>
                                                    <li><a href="product-featured.php">Featured &amp; Sale</a></li>
                                                    <li><a href="product-accordion.php">Data In Accordion</a></li>
                                                    <li><a href="product-section.php">Data In Sections</a></li>
                                                    <li><a href="product-swatch.php">Image Swatch</a></li>
                                                    <li><a href="product-extended.php">Extended Info</a>
                                                    </li>
                                                    <li><a href="product-without-sidebar.php">Without Sidebar</a></li>
                                                    <li><a href="product-video.php">360<sup>o</sup> &amp; Video<span
                                                                class="tip tip-new">New</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Product Layouts</h4>
                                                <ul>
                                                    <li><a href="product-default.php">Default<span
                                                                class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="product-vertical.php">Vertical Thumbs</a></li>
                                                    <li><a href="product-grid.php">Grid Images</a></li>
                                                    <li><a href="product-masonry.php">Masonry</a></li>
                                                    <li><a href="product-gallery.php">Gallery</a></li>
                                                    <li><a href="product-sticky-info.php">Sticky Info</a></li>
                                                    <li><a href="product-sticky-thumb.php">Sticky Thumbs</a></li>
                                                    <li><a href="product-sticky-both.php">Sticky Both</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- End of Megamenu -->
                                    </li>
                                    <li>
                                        <a href="vendor-dokan-store.php">Vendor</a>
                                        <ul>
                                            <li>
                                                <a href="vendor-dokan-store-list.php">Store Listing</a>
                                                <ul>
                                                    <li><a href="vendor-dokan-store-list.php">Store listing 1</a></li>
                                                    <li><a href="vendor-wcfm-store-list.php">Store listing 2</a></li>
                                                    <li><a href="vendor-wcmp-store-list.php">Store listing 3</a></li>
                                                    <li><a href="vendor-wc-store-list.php">Store listing 4</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="vendor-dokan-store.php">Vendor Store</a>
                                                <ul>
                                                    <li><a href="vendor-dokan-store.php">Vendor Store 1</a></li>
                                                    <li><a href="vendor-wcfm-store-product-grid.php">Vendor Store 2</a>
                                                    </li>
                                                    <li><a href="vendor-wcmp-store-product-grid.php">Vendor Store 3</a>
                                                    </li>
                                                    <li><a href="vendor-wc-store-product-grid.php">Vendor Store 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.php">Blog</a>
                                        <ul>
                                            <li><a href="blog.php">Classic</a></li>
                                            <li><a href="blog-listing.php">Listing</a></li>
                                            <li>
                                                <a href="blog-grid-3cols.php">Grid</a>
                                                <ul>
                                                    <li><a href="blog-grid-2cols.php">Grid 2 columns</a></li>
                                                    <li><a href="blog-grid-3cols.php">Grid 3 columns</a></li>
                                                    <li><a href="blog-grid-4cols.php">Grid 4 columns</a></li>
                                                    <li><a href="blog-grid-sidebar.php">Grid sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog-masonry-3cols.php">Masonry</a>
                                                <ul>
                                                    <li><a href="blog-masonry-2cols.php">Masonry 2 columns</a></li>
                                                    <li><a href="blog-masonry-3cols.php">Masonry 3 columns</a></li>
                                                    <li><a href="blog-masonry-4cols.php">Masonry 4 columns</a></li>
                                                    <li><a href="blog-masonry-sidebar.php">Masonry sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog-mask-grid.php">Mask</a>
                                                <ul>
                                                    <li><a href="blog-mask-grid.php">Blog mask grid</a></li>
                                                    <li><a href="blog-mask-masonry.php">Blog mask masonry</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="post-single.php">Single Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about-us.php">Pages</a>
                                        <ul>

                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="become-a-vendor.php">Become A Vendor</a></li>
                                            <li><a href="contact-us.php">Contact Us</a></li>
                                            <li><a href="faq.php">FAQs</a></li>
                                            <li><a href="error-404.php">Error 404</a></li>
                                            <li><a href="coming-soon.php">Coming Soon</a></li>
                                            <li><a href="wishlist.php">Wishlist</a></li>
                                            <li><a href="cart.php">Cart</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                            <li><a href="my-account.php">My Account</a></li>
                                            <li><a href="compare.php">Compare</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="elements.php">Elements</a>
                                        <ul>
                                            <li><a href="element-accordions.php">Accordions</a></li>
                                            <li><a href="element-alerts.php">Alert &amp; Notification</a></li>
                                            <li><a href="element-blog-posts.php">Blog Posts</a></li>
                                            <li><a href="element-buttons.php">Buttons</a></li>
                                            <li><a href="element-cta.php">Call to Action</a></li>
                                            <li><a href="element-icons.php">Icons</a></li>
                                            <li><a href="element-icon-boxes.php">Icon Boxes</a></li>
                                            <li><a href="element-instagrams.php">Instagrams</a></li>
                                            <li><a href="element-categories.php">Product Category</a></li>
                                            <li><a href="element-products.php">Products</a></li>
                                            <li><a href="element-tabs.php">Tabs</a></li>
                                            <li><a href="element-testimonials.php">Testimonials</a></li>
                                            <li><a href="element-titles.php">Titles</a></li>
                                            <li><a href="element-typography.php">Typography</a></li>

                                            <li><a href="element-vendors.php">Vendors</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
                            <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->

<?php
include "header.php";
?>
        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="#">Vendor</a></li>
                        <li><a href="#">Dokan</a></li>
                        <li>Store</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Pgae Contetn -->
            <div class="page-content mb-8">
                <div class="container">
                    <div class="row gutter-lg">
                        <aside class="sidebar left-sidebar vendor-sidebar sticky-sidebar-wrapper sidebar-fixed">
                            <!-- Start of Sidebar Overlay -->
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                            <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-collapsible widget-categories">
                                        <h3 class="widget-title"><span>All Categories</span></h3>
                                        <ul class="widget-body filter-items search-ul">
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Computers</a></li>
                                            <li><a href="#">Electronics</a></li>
                                            <li><a href="#">Fashion</a></li>
                                            <li><a href="#">Furniture</a></li>
                                            <li><a href="#">Games</a></li>
                                            <li><a href="#">Kitchen</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Sports</a></li>
                                        </ul>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible widget-contact">
                                        <h3 class="widget-title"><span>Contact Vendor</span></h3>
                                        <div class="widget-body">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Your Name" />
                                            <input type="text" class="form-control" name="email" id="email_1"
                                                placeholder="you@example.com" />
                                            <textarea name="message" maxlength="1000" cols="25" rows="6"
                                                placeholder="Type your messsage..." class="form-control"
                                                required="required"></textarea>
                                            <a href="#" class="btn btn-dark btn-rounded">Send Message</a>
                                        </div>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible widget-time">
                                        <h3 class="widget-title"><span>Store Time</span></h3>
                                        <ul class="widget-body">
                                            <li><label>Sunday</label></li>
                                            <li><label>Monday</label></li>
                                            <li><label>Tuesday</label></li>
                                            <li><label>Wednesday</label></li>
                                            <li><label>Thursday</label></li>
                                            <li><label>Friday</label></li>
                                            <li><label>Saturday</label></li>
                                        </ul>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible widget-products">
                                        <h3 class="widget-title"><span>Best Selling</span></h3>
                                        <div class="widget-body">
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/1.jpg" alt="Product" width="100"
                                                            height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="product-default.html">3D Television</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 80%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$220.00</div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/2-1.jpg" alt="Product" width="100"
                                                            height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="product-default.html">Alarm Clock With Lamp</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 80%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <ins class="new-price">$30.00</ins><del
                                                            class="old-price">$60.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/3.jpg" alt="Product" width="100"
                                                            height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="product-default.html">Apple Laptop</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$1,000.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible widget-products">
                                        <h3 class="widget-title"><span>Top Rated</span></h3>
                                        <div class="widget-body">
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/12.jpg" alt="Product" width="100"
                                                            height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="product-default.html">Classic Simple Backpack</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$85.00</div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/13.jpg" alt="Product" width="100"
                                                            height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="product-default.html">Smart Watch</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$90.00</div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/20.jpg" alt="Product" width="100"
                                                            height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="product-default.html">Pencil Case</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$54.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget -->
                                </div>
                            </div>
                        </aside>
                        <!-- End of Sidebar -->

                        <div class="main-content">
                            <div class="store store-banner mb-4">
                                <figure class="store-media">
                                    <img src="assets/images/vendor/dokan/1.jpg" alt="Vendor" width="930" height="446"
                                        style="background-color: #414960;" />
                                </figure>
                                <div class="store-content">
                                    <figure class="seller-brand">
                                        <img src="assets/images/vendor/brand/1.jpg" alt="Brand" width="80"
                                            height="80" />
                                    </figure>
                                    <h4 class="store-title">Vendor 1</h4>
                                    <ul class="seller-info-list list-style-none mb-6">
                                        <li class="store-address">
                                            <i class="w-icon-map-marker"></i>
                                            Steven Street, El Carjon
                                            California, United States (US)
                                        </li>
                                        <li class="store-phone">
                                            <a href="tel:1234567890">
                                                <i class="w-icon-phone"></i>
                                                1234567890
                                            </a>
                                        </li>
                                        <li class="store-rating">
                                            <i class="w-icon-star-full"></i>
                                            4.33 rating from 3 reviews
                                        </li>
                                        <li class="store-open">
                                            <i class="w-icon-cart"></i>
                                            Store Open
                                        </li>
                                    </ul>
                                    <div class="social-icons social-no-color border-thin">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-google w-icon-google"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                        <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                        <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Store Banner -->

                            <h2 class="title vendor-product-title mb-4"><a href="#">Products</a></h2>

                            <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/1.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">3D Television</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    $220.00 - $230.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/2-1.jpg" alt="Product" width="300"
                                                    height="338" />
                                                <img src="assets/images/shop/2-2.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-countdown-container">
                                                <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                                    data-format="DHMS" data-compact="false"
                                                    data-labels-short="Days, Hours, Mins, Secs">
                                                    00:00:00:00</div>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Alarm Clock With Lamp</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    <ins class="new-price">$30.00</ins><del
                                                        class="old-price">$60.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/3.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Apple Laptop</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    $1,000.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/4.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Attachable Charge Alarm</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(7 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    $15.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/5.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Best Travel Bag</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    $83.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/6.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Black Stunt Motor</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(12 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    $374.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/7-1.jpg" alt="Product" width="300"
                                                    height="338" />
                                                <img src="assets/images/shop/7-2.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Blue Sky Trunk</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(9 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    $85.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/8.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Bodycare Smooth Powder</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    $25.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/9.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Bright Green IPhone</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    $950.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/10.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Cavin Fashion Suede Handbag</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    $163.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/11-1.jpg" alt="Product" width="300"
                                                    height="338" />
                                                <img src="assets/images/shop/11-2.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Charming Design Watch</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    $30.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/12.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Classic Simple Backpack</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(9 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    $85.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Main Content -->
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
        <?php
include "footer.php";
?>
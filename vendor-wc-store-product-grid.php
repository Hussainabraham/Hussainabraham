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
                        <li>Shop</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <!-- Start of Shop Content -->
                    <div class="shop-content row gutter-lg mb-10">
                        <!-- Start of Sidebar, Shop Sidebar -->
                        <aside class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed">
                            <!-- Start of Sidebar Overlay -->
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

                            <!-- Start of Sidebar Content -->
                            <div class="sidebar-content scrollable">
                                <!-- Start of Sticky Sidebar -->
                                <div class="sticky-sidebar">
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><span>All Categories</span></h3>
                                        <ul class="widget-body filter-items search-ul">
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Babies</a></li>
                                            <li><a href="#">Beauty</a></li>
                                            <li><a href="#">Decoration</a></li>
                                            <li><a href="#">Electronics</a></li>
                                            <li><a href="#">Fashion</a></li>
                                            <li><a href="#">Food</a></li>
                                            <li><a href="#">Furniture</a></li>
                                            <li><a href="#">Kitchen</a></li>
                                            <li><a href="#">Medical</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Watches</a></li>
                                        </ul>
                                    </div>
                                    <!-- End of Collapsible Widget -->
                                </div>
                                <!-- End of Sidebar Content -->
                            </div>
                            <!-- End of Sidebar Content -->
                        </aside>
                        <!-- End of Shop Sidebar -->

                        <!-- Start of Shop Main Content -->
                        <div class="main-content">
                            <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                <div class="toolbox-left">
                                    <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                                        btn-icon-left d-block d-lg-none"><i
                                            class="w-icon-category"></i><span>Filters</span></a>
                                    <div class="toolbox-item toolbox-sort select-box text-dark">
                                        <label>Sort By :</label>
                                        <select name="orderby" class="form-control">
                                            <option value="default" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by latest</option>
                                            <option value="price-low">Sort by pric: low to high</option>
                                            <option value="price-high">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="toolbox-right">
                                    <div class="toolbox-item toolbox-show select-box">
                                        <select name="count" class="form-control">
                                            <option value="9">Show 9</option>
                                            <option value="12" selected="selected">Show 12</option>
                                            <option value="24">Show 24</option>
                                            <option value="36">Show 36</option>
                                        </select>
                                    </div>
                                    <div class="toolbox-item toolbox-layout">
                                        <a href="vendor-wc-store-product-grid.html"
                                            class="icon-mode-grid btn-layout active">
                                            <i class="w-icon-grid"></i>
                                        </a>
                                        <a href="vendor-wc-store-product-list.html" class="icon-mode-list btn-layout">
                                            <i class="w-icon-list"></i>
                                        </a>
                                    </div>
                                </div>
                            </nav>
                            <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                                <div class="product-wrap">
                                    <div class="product product-simple text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/1.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">3D Television</a>
                                            </h4>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$220.00 - $230.00</div>
                                                <div class="product-action">
                                                    <a href="#"
                                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                            <div class="sold-by">
                                                Sold By:
                                                <a href="#">Vendor 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-simple text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/2-1.jpg" alt="Product" width="300"
                                                    height="338" />
                                                <img src="assets/images/shop/2-2.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Alarm Clock With
                                                    Lamp</a></h4>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    <ins class="new-price">$30.00</ins><del
                                                        class="old-price">$60.00</del>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#"
                                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                            <div class="sold-by">
                                                Sold By:
                                                <a href="#">Vendor 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-simple text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/3.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Apple Laptop</a>
                                            </h4>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$1,000.00</div>
                                                <div class="product-action">
                                                    <a href="#"
                                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                            <div class="sold-by">
                                                Sold By:
                                                <a href="#">Vendor 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-simple text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/4.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Attachable Charge
                                                    Alarm</a></h4>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$15.00</div>
                                                <div class="product-action">
                                                    <a href="#"
                                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                            <div class="sold-by">
                                                Sold By:
                                                <a href="#">Vendor 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-simple text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/5.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Best Travel Bag</a>
                                            </h4>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$83.00</div>
                                                <div class="product-action">
                                                    <a href="#"
                                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                            <div class="sold-by">
                                                Sold By:
                                                <a href="#">Vendor 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-simple text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/6.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Black Stunt
                                                    Motor</a></h4>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$374.00</div>
                                                <div class="product-action">
                                                    <a href="#"
                                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                            <div class="sold-by">
                                                Sold By:
                                                <a href="#">Vendor 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-simple text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/7-1.jpg" alt="Product" width="300"
                                                    height="338" />
                                                <img src="assets/images/shop/7-2.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Blue Sky Trunk</a>
                                            </h4>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$85.00</div>
                                                <div class="product-action">
                                                    <a href="#"
                                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                            <div class="sold-by">
                                                Sold By:
                                                <a href="#">Vendor 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-simple text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/8.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Bodycare Smooth
                                                    Powder</a></h4>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$25.00</div>
                                                <div class="product-action">
                                                    <a href="#"
                                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                            <div class="sold-by">
                                                Sold By:
                                                <a href="#">Vendor 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-simple text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/9.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Bright Green
                                                    IPhone</a></h4>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$950.00</div>
                                                <div class="product-action">
                                                    <a href="#"
                                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                            <div class="sold-by">
                                                Sold By:
                                                <a href="#">Vendor 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-simple text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/10.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Cavin Fashion Suede
                                                    Handbag</a></h4>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$163.00</div>
                                                <div class="product-action">
                                                    <a href="#"
                                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                            <div class="sold-by">
                                                Sold By:
                                                <a href="#">Vendor 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-simple text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/11-1.jpg" alt="Product" width="300"
                                                    height="338" />
                                                <img src="assets/images/shop/11-2.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Charming Design
                                                    Watch</a></h4>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$30.00</div>
                                                <div class="product-action">
                                                    <a href="#"
                                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                            <div class="sold-by">
                                                Sold By:
                                                <a href="#">Vendor 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-simple text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/shop/12.jpg" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Classic Simple
                                                    Backpack</a></h4>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$85.00</div>
                                                <div class="product-action">
                                                    <a href="#"
                                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                            <div class="sold-by">
                                                Sold By:
                                                <a href="#">Vendor 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Shop Main Content -->
                    </div>
                    <!-- End of Shop Content -->
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
        <?php
include "footer.php";
?>
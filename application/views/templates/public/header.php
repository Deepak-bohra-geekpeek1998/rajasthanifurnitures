<!-- START HEADER SECTION -->
<header class="header-section section sticker header-transparent">
    <div class="container-fluid">
        <div class="row">
            <!-- logo -->
            <div class="col-lg-2 col-sm-4 col-6">
                <div class="header-logo">
                    <a href="<?php echo base_url() ?>"><img
                            src="<?php echo base_url() ?>assets/public/img/logo/Rajasthani_Furnitures_Logo_A1-removebg-preview.png"
                            style="width: 41%;    margin-top: 0px;" alt="main logo"></a>
                </div>
            </div>
            <!-- primary-menu -->
            <div class="col-lg-8 col-12 d-none d-lg-block" style="margin-left: 16%;">
                <nav class="main-menu text-center">
                    <ul>
                        <li class=""><a href="<?php echo base_url() ?>">Home</a>
                            <!-- <ul class="sub-menu">
                                <li class="active"><a href="<?php echo base_url('index') ?>">Home one</a></li>
                                <li><a href="index-2.html">Home two</a></li>
                                <li><a href="index-3.html">Home three</a></li>
                                <li><a href="index-4.html">Home four</a></li>
                            </ul> -->
                        </li>
                        <li><a href="<?php echo base_url() ?>about-us">About Us</a></li>
                        <!-- <li><a href="shop.html">shop</a>
                            <ul class="mega-menu">
                                <li><a href="shop-list-right-sidebar.html">Chair</a>
                                    <ul>
                                        <li><a href="shop.html">Tops</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Bras &amp; Tanks</a></li>
                                        <li><a href="shop-list.html">Trousers</a></li>
                                        <li><a href="shop-right-sidebar.html">Hoodies &amp; Sweatshirts</a></li>
                                        <li><a href="shop.html">Tees</a></li>
                                        <li><a href="shop-list.html">Jackets</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-list.html">Table</a>
                                    <ul>
                                        <li><a href="shop.html">Tops</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Bras &amp; Tanks</a></li>
                                        <li><a href="shop-list.html">Trousers</a></li>
                                        <li><a href="shop-right-sidebar.html">Hoodies &amp; Sweatshirts</a></li>
                                        <li><a href="shop.html">Tees</a></li>
                                        <li><a href="shop-list.html">Jackets</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-right-sidebar.html">Cabinet</a>
                                    <ul>
                                        <li><a href="shop.html">Tops</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Bras &amp; Tanks</a></li>
                                        <li><a href="shop-list.html">Trousers</a></li>
                                        <li><a href="shop-right-sidebar.html">Hoodies &amp; Sweatshirts</a></li>
                                        <li><a href="shop.html">Tees</a></li>
                                        <li><a href="shop-list.html">Jackets</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="">Products</a> -->
                        <li>
                            <a>Products</a>
                            <ul class="mega-menu">
                                <li>
                                    <?php
                                    $bohra = call_header_data();
                                    foreach ($bohra as $category_data) {
                                        // p($bohra);
                                        ?>
                                        <a
                                            href="<?php echo base_url() ?>product-category/<?php echo $category_data['category_id'] ?>">
                                            <?php echo $category_data['category_name'] ?>
                                        </a>
                                    <?php } ?>
                                </li>
                            </ul>
                        </li>

                        <li><a href="<?php echo base_url() ?>contact-us">contact Us</a></li>
                        <!-- <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="cart.html">cart</a></li>
                                <li><a href="checkout.html">checkout</a></li>
                                <li><a href="contact.html">contact</a></li>
                                <li><a href="login.html">login</a></li>
                                <li><a href="product-details.html">product detail
                                <li><a href="shop-list.html">shop list</a></li>
                                <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                <li><a href="wishlist.html">wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">blog</a></li>
                                <li><a href="blog-details.html">blog details</a></li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="contact.html">Contact</a></li> -->
                    </ul>
                </nav>
            </div>
            <!-- header-search & total-cart -->
            <div class="col-lg-2 col-sm-8 col-6">
                <div class="header-option-btns float-end">
                    <!-- header-search -->
                    <!-- <div class="header-search float-start">
                        <button class="search-toggle" data-bs-toggle="modal" data-bs-target="#myModal"><i
                                class="pe-7s-search"></i></button>
                    </div> -->
                    <!-- header Account -->
                    <!-- <div class="header-account float-start">
                        <ul>
                            <li><a class="dropdown-toggle" href="#" id="dropdownAccountBtn" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="pe-7s-config"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownAccountBtn">
                                    <li><a href="login.html">Log in</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="wishlist.html">Wish list</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> -->
                    <!-- Header Cart -->
                    <!-- <div class="header-cart float-start">

                        <a class="cart-toggle dropdown-toggle" href="#" data-toggle="dropdown" id="dropdownCartBtn"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="pe-7s-cart"></i>
                            <span>2</span>
                        </a>

                        <div class="mini-cart-brief dropdown-menu" aria-labelledby="dropdownCartBtn">
                            <div class="cart-items">
                                <p>You have <span>2 items</span> in your shopping bag</p>
                            </div>

                            <div class="all-cart-product clearfix">
                                <div class="single-cart clearfix">
                                    <div class="cart-image">
                                        <a href="product-details.html"><img
                                                src="<?php echo base_url() ?>assets/public/img/product/cart-1.jpg"
                                                alt="Image"></a>
                                    </div>
                                    <div class="cart-info">
                                        <h5><a href="product-details.html">Le Parc Minotti Chair</a></h5>
                                        <p>Price : £9.00</p>
                                        <p>Qty : 1</p>
                                        <a href="#" class="cart-delete" title="Remove this item"><i
                                                class="pe-7s-trash"></i></a>
                                    </div>
                                </div>
                                <div class="single-cart clearfix">
                                    <div class="cart-image">
                                        <a href="product-details.html"><img
                                                src="<?php echo base_url() ?>assets/public/img/product/cart-2.jpg"
                                                alt="Image"></a>
                                    </div>
                                    <div class="cart-info">
                                        <h5><a href="product-details.html">DSR Eiffel chair</a></h5>
                                        <p>Price : £9.00</p>
                                        <p>Qty : 1</p>
                                        <a href="#" class="cart-delete" title="Remove this item"><i
                                                class="pe-7s-trash"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-totals">
                                <h5>Total <span>£12.00</span></h5>
                            </div>

                            <div class="cart-bottom  clearfix">
                                <a href="checkout.html">Check out</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Mobile Menu Nav -->
        <div class="mobile-menu"></div>
    </div>
</header>
<!-- END HEADER SECTION -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PV1YLF7J19"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PV1YLF7J19');
</script>
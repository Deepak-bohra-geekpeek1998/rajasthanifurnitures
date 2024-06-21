<!-- <footer>
<style>
    .site-header {
        background-color: #212121;
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        backdrop-filter: saturate(180%) blur(20px);
    }
</style>
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-center align-items-center">
            <a class="py-2">
            <img style="width:100px;" class="img-fluid" src="<?php echo base_url() ?>assets/public/header_logo/logo.png" alt="" srcset="">
            <h2 style="color: yellowgreen;">Restaurant Menu</h2>
            </a>
        </div>
    </nav>
</footer> -->
<!-- ======= Footer ======= -->
<!-- <footer id="footer" class="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Rajasthani Furnitures</span></strong>. All Rights Reserved
        </div>
        <div class="credits"> -->
<!-- All the links in the footer should remain intact. -->
<!-- You can delete the links only if you purchased the pro version. -->
<!-- Licensing information: https://bootstrapmade.com/license/ -->
<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
<!-- Designed by <a href="https://geekpeek.in/">GeekPeek Software and Technology</a>
        </div>
    </div> -->
<!-- </footer> -->
<!-- End Footer -->
<!-- FOOTER TOP SECTION START -->
<style>
    .pb-60{
             padding-bottom: 30px;
    }





    @media only screen and (max-width: 767px) {
        .footer-bottom-section .copyright p{
            font-size: 13px;
        }
         }
    </style>
<div class="footer-top-section section pb-60" style="    padding-top: 35px;">
    <div class="container">
        <div class="row">
            <!-- Footer Widget -->
            <div class="footer-widget col-lg-6 col-md-6 col-12 mb-8">
                <h4 class="widget-title">Contact Info</h4>
                <p>
                    <strong>Address :</strong>
                    <span>
                        <a href="https://www.google.com/maps?q=2nd+Floor+Apple+City+Complex,+Near+HP+Petrol+Pump+Seegehali,+
                        Kadugudi,+Bengaluru+-+560067+(INDIA)" target="_blank">
                            2nd Floor Apple City Complex, Near HP Petrol Pump Seegehali,
                            Kadugudi, Bengaluru - 560067 (INDIA)
                        </a>
                    </span>
                </p>
                <p>
                    <strong>Phone :</strong>
                    <span><a href="tel:+919035533828">+91 9035533828</a></span>
                    <span style="margin-left: 67px;"><a href="tel:+918769960029">+91 8769960029</a></span>
                    <span style="margin-left: 67px;"><a href="tel:+919664149405">+91 9664149405</a></span>
                </p>
                <p><strong>Email :</strong> <a
                        href="mailto:premsinghparihar0029@gmail.com">premsinghparihar0029@gmail.com</a></p>
                <!-- Footer Social -->
                <div class="footer-social fix">
                    <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i
                            class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener"><i
                            class="fa fa-instagram"></i></a>
                    <a href="https://www.rss.com/" target="_blank" rel="noopener"><i class="fa fa-rss"></i></a>
                    <a href="https://www.twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i
                            class="fa fa-pinterest"></i></a>
                </div>
            </div>
            <!-- Footer Widget -->
            <!-- <div class="footer-widget link-widget col-lg-3 col-md-6 col-12 mb-8">
                <h4 class="widget-title">accounts</h4>
                <ul>
                    <li><a href="register.html">My Account</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">My Cart</a></li>
                    <li><a href="login.html">Sign In</a></li>
                    <li><a href="checkout.html">Check out</a></li>
                </ul>
            </div> -->
            <!-- Footer Widget -->
            <div class="footer-widget col-lg-6 col-md-6 col-12 mb-8">
                <h4 class="widget-title">tags</h4>
                <div class="tag-cloud fix">
                    <?php
                    $bohra = call_header_data();
                    foreach ($bohra as $category_data) {
                        // p($bohra);
                        ?>
                        <a href="<?php echo base_url() ?>product-category/<?php echo $category_data['category_id'] ?>">
                            <?php echo $category_data['category_name'] ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <!-- Footer Widget -->
            <!-- <div class="footer-widget col-lg-4 col-md-6 col-12 mb-8">
                <h4 class="widget-title">Newsletters</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor incididunt.</p>
                <form class="sunscribe-form">
                    <input type="email" class="email" placeholder="Email Address">
                    <div class="clear"><input type="submit" class="button" value="Subscribe"></div>
                </form>
            </div> -->
        </div>
    </div>
</div>
<!-- FOOTER TOP SECTION END -->

<!-- FOOTER BOTTOM SECTION START -->
<div class="footer-bottom-section section pb-20 pt-20">
    <div class="container">
        <div class="row">
            <!-- Copyright -->
            <div class="copyright text-center text-md-start col-md-6 col-12">
                <p>© 2024 Rajasthani Furnitures. Made with <i class="fa fa-heart heart-icon"></i> By <a target="_blank"
                        href="https://geekpeek.in/">GeekPeek</a></p>
            </div>
            <!-- Payment Method -->
            <!-- <div class="payment-method text-center text-md-end col-md-6 col-12">
                <a href="shop.html">
                    <img src="<?php echo base_url() ?>assets/public/img/payment/1.png" alt="payment" />
                    <img src="<?php echo base_url() ?>assets/public/img/payment/2.png" alt="payment" />
                    <img src="<?php echo base_url() ?>assets/public/img/payment/3.png" alt="payment" />
                    <img src="<?php echo base_url() ?>assets/public/img/payment/4.png" alt="payment" />
                </a>
            </div> -->
        </div>
    </div>
</div>
<!-- FOOTER BOTTOM SECTION END -->
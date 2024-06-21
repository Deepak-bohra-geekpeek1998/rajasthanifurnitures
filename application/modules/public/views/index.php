<!-- Search Modal -->
<div class="search-modal modal fade text-center" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <button type="button" class="btn-modal-close" data-bs-dismiss="modal"><i class="pe-7s-close"></i></button>
            <div class="header-search-form">
                <form action="#">
                    <input type="text" placeholder="Search">
                    <button><i class="pe-7s-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Mobile styles */
@media only screen and (max-width: 767px) {
    .nivo-caption{
        margin-left: 73px!important;
    }
    .hero-slider-content h4 {
    font-size: 10px;
    margin-bottom: 10px;
}
.hero-slider-content h1 {
    font-size: 14px;
    margin-bottom: 10px;
    margin-left: 0;
}
.hero-slider-content {
    margin-top: 0;
    padding-right: 0px;
    text-align: center;
}
}
    </style>
<!-- START SLIDER SECTION -->
<div class="home-slider-section section">
    <!-- Home Slider -->
    <div id="home-slider" class="slides">
        <?php if (!empty($banner)) {
            foreach ($banner as $data) { ?>
                <img src="<?php echo base_url('assets/admin/banner_image/' . $data['banner_image']) ?>" alt="Image"
                    title="#slider-caption-<?php echo $data['banner_id']; ?>" />
            <?php }
        } ?>
    </div>

    <?php if (!empty($banner)) {
        foreach ($banner as $data) { ?>
            <!-- Caption for each image -->
            <div id="slider-caption-<?php echo $data['banner_id']; ?>" class="nivo-html-caption" >
                <div class="container">
                    <div class="row">
                        <div class="hero-slider-content col-lg-6 offset-lg-6 col-md-7 offset-md-5 col-12"
                            style="color: #000000; font-weight: bold;">
                            <h4 class="wow rotateInDownLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <?php echo $data['banner_heading']; ?>
                            </h4>
                            <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                <?php echo $data['banner_quotes']; ?>
                            </h1>
                            <p class="wow fadeInUp" style="text-align: justify;" data-wow-duration="1s"
                                data-wow-delay="1.5s">
                                <?php echo $data['banner_description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    } ?>
</div>

<!-- END SLIDER SECTION -->

<!-- BANNER-SECTION START -->
<div class="banner-section section pt-100" style="padding-top:54px">
    <div class="container">
    <div class="section-title text-center mb-70">
        <h2 class="elementor-heading-title elementor-size-default" style="    line-height: 30px;">Customization As <b style="color:#ffae00;">Per Requirement</b></h2>
</div>
        <div class="row">
            <!-- Banner Item Start -->
            <div class="col-md-6 col-12 mb-6">
                <div class="single-banner">
                <a href="#"><img src="<?php echo base_url() ?>assets/public/img/product/1.webp" alt="Image"></a>
                </div>
            </div>
            <!-- Banner Item End -->
            <!-- Banner Item Start -->
            <div class="col-md-6 col-12 mb-6">
                <div class="single-banner">

                <a href="#"><img src="<?php echo base_url() ?>assets/public/img/product/2.webp"
                        alt="Image"></a>
                </div>
            </div>
            <!-- Banner Item End -->
        </div>
    </div>
</div>
<!-- BANNER-SECTION END -->
<style>
    .product-img {
        height: 157px;
    }
</style>
<!-- PRODUCT SECTION START -->
<div class="product-section section pb-60">
    <div class="container">
        <div class="section-title text-center mb-70">
            <!-- <h4>our products</h4>
            <h2>new arrivals</h2> -->
            <!-- <h2>SHOP BY CATEGORIES</h2> -->
            <h2 class="elementor-heading-title elementor-size-default">SHOP BY <b style="color:#ffae00">CATEGORIES</b></h2>

        </div>
        <div class="row">
            <!-- product-item start -->
            <?php if (!empty($select)) {
                foreach ($select as $data) {
                    // p($data); 
                    // var_dump($data) 
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                        <div class="product-item text-center">
                            <div class="product-img">
                                <!-- <a class="image" href="<?php //echo base_url() ?>beds"> -->
                                <a href="<?php echo base_url() ?>product-category/<?php echo $data['category_id'] ?>"><img
                                        src="<?php echo base_url('assets/admin/category_image/' . $data['category_image']) ?>" alt="Image" />
                                </a>
                                <a href="<?php echo base_url() ?>product-category/<?php echo $data['category_id'] ?>" class="add-to-cart">Read More</a>
                                <!-- <div class="action-btn fix">
                            <a href="wishlist.html" title="Wishlist"><i class="pe-7s-like"></i></a>
                            <a href="<?php echo base_url() ?>beds-images" title="Quickview"><i
                                    class="pe-7s-look"></i></a>
                            <a href="<?php echo base_url() ?>beds-images" title="Compare"><i
                                    class="pe-7s-repeat"></i></a></div> -->
                            </div>
                            <div class="product-info">
                                <h5 class="title"><a
                                        href="<?php echo base_url() ?>product-category/<?php echo $data['category_id'] ?>">
                                        <?php echo $data['category_name'] ?>
                                    </a></h5>
                                <!-- <span class="price"><span class="new">$169.00</span></span> -->
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</div>
<!-- PRODUCT SECTION END -->

<!-- TESTIMONIAL SECTION START -->
<div class="testimonial-section section pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12 m-auto">
                <!-- Testimonial Slider -->
                <div class="testimonial-slider text-center">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <img src="<?php echo base_url() ?>assets/public/img/testimonials/testimonials-5.jpg"
                            alt="Image">
                        <p style="color:black; text-align:justify;">“ I recently had the pleasure of purchasing furniture from Rajasthani Furnitures, and I couldn't be more delighted with the entire experience. From the moment I walked into the store to the seamless delivery of my new pieces, every aspect of the process was outstanding. ”</p>
                        <i class="pe-7s-way" style="color:black;"></i>
                        <h5 style="color:black;">Deepak Bohra</h5>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <img src="<?php echo base_url() ?>assets/public/img/testimonials/testimonials-4.jpg"
                            alt="Image">
                        <p style="color:black; text-align:justify;">“ Investigationes demonstraverunt lectores legere me
                            lius quod ii legunt saepius. Claritas
                            est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
                            notare quam littera gothica, quam nunc putamus parum claram. ”</p>
                        <i class="pe-7s-way" style="color:black;"></i>
                        <h5 style="color:black;">Diane Stevens</h5>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <img src="<?php echo base_url() ?>assets/public/img/testimonials/testimonials-3.jpg"
                            alt="Image">
                        <p style="color:black; text-align:justify;">“ Investigationes demonstraverunt lectores legere me
                            lius quod ii legunt saepius. Claritas
                            est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
                            notare quam littera gothica, quam nunc putamus parum claram. ”</p>
                        <i class="pe-7s-way" style="color:black;"></i>
                        <h5 style="color:black;">Mary Harper</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
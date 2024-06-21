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
    .page-banner-section {
        background-image: url("assets/public/img/product/1920*300_image/pexels-max-rahubovskiy-8143679.jpg");
        padding: 100px 0 65px;
    }
</style>
<!-- PAGE BANNER SECTION -->
<div class="page-banner-section section">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col-xs-12">
                <!-- <h2>Shop</h2> -->
                <!-- <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">shop</li>
                </ul> -->
            </div>
        </div>
    </div>
</div>
<!-- END PAGE BANNER SECTION -->

<!-- PAGE SECTION START -->
<!-- PRODUCT SECTION START -->
<div class="product-section section pb-60">
    <div class="container">
        <div class="section-title text-center mb-70">
            <br>
            
            <?php
                    if (!empty($category_data)) {
                        // Print only the first element's product name
                        echo '<h2>' . $category_data[0]['product_name'] . '</h2>';
                    }
                    ?>
            <!-- <h2>
                Products
            </h2> -->

        </div>
        <div class="row">
            <!-- product-item start -->
            <?php if (!empty($category_data)) {
                foreach ($category_data as $data) {
                    // p($data); 
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                        <div class="product-item text-center">
                            <div class="product-img">
                                <!-- <a class="image" href="<?php echo base_url() ?>beds-images"> -->
                                <!-- <img src="<?php echo base_url() ?>assets/public/product_images/' . $data['category_image']) ?>"
                                    alt="Image" />" -->
                                <a href="<?php echo base_url() ?>product-detail/<?php echo $data['product_id'] ?>"><img
                                        src="<?php echo base_url('assets/admin/product_images/' . $data['product_images']) ?>"
                                        alt="Image" />
                                </a>
                                <a href="<?php echo base_url() ?>product-detail/<?php echo $data['product_id'] ?>" style="font-size:12px" class="add-to-cart">Product Detail</a>
                                <!-- <div class="action-btn fix">
                            <a href="wishlist.html" title="Wishlist"><i class="pe-7s-like"></i></a>
                            <a href="<?php echo base_url() ?>beds-images" title="Quickview"><i
                                    class="pe-7s-look"></i></a>
                            <a href="<?php echo base_url() ?>beds-images" title="Compare"><i
                                    class="pe-7s-repeat"></i></a>
                        </div> -->
                            </div>
                            <div class="product-info">
                                <!-- <h5 class="title"><a href="<?php echo base_url() ?>beds-images">Bedroom Beds</a></h5> -->
                                <!-- <h5 class="title">Bedroom Beds</h5> -->
                                <!-- <span class="price"><span class="new">&#8377; -->
                                <?php //echo $data['product_price']; ?>
                                <!-- </span></span> -->
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</div>
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

<!-- PAGE BANNER SECTION -->
<div class="page-banner-section section">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col-xs-12">
                <h2>Product Detail</h2>
                <!-- <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Furniture Name</li>
                </ul> -->
            </div>
        </div>
    </div>
</div>
<!-- END PAGE BANNER SECTION -->

<!-- PAGE SECTION START -->
<div class="page-section section pt-100" style=" padding-bottom:70px;padding-top: 10px;">
    <div class="container">
        <div class="row mb-40">
            <?php if (!empty($detail_data)) {
                foreach ($detail_data as $detail) {
                    // p($detail);
                    ?>
                    <div class="col-12 col-md-6 col-lg-4 mb-40">
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="<?php echo base_url('assets/admin/product_images/' . $detail['product_images']) ?>"
                                    alt="Image" />
                            </div>
                            <!-- <div class="pro-large-img tab-pane" id="pro-large-img-2">
                        <img src="img/product/2.jpg" alt="Image" />
                    </div>
                    <div class="pro-large-img tab-pane" id="pro-large-img-3">
                        <img src="img/product/3.jpg" alt="Image" />
                    </div>
                    <div class="pro-large-img tab-pane" id="pro-large-img-4">
                        <img src="img/product/4.jpg" alt="Image" />
                    </div>
                    <div class="pro-large-img tab-pane" id="pro-large-img-5">
                        <img src="img/product/5.jpg" alt="Image" />
                    </div> -->
                        </div>
                        <!-- Nav tabs -->
                        <!-- <div class="pro-thumb-img-slider nav">
                    <div><a href="#pro-large-img-1" data-bs-toggle="tab"><img src="img/product/1.jpg" alt="Image" /></a>
                    </div>
                    <div><a href="#pro-large-img-2" data-bs-toggle="tab"><img src="img/product/2.jpg" alt="Image" /></a>
                    </div>
                    <div><a href="#pro-large-img-3" data-bs-toggle="tab"><img src="img/product/3.jpg" alt="Image" /></a>
                    </div>
                    <div><a href="#pro-large-img-4" data-bs-toggle="tab"><img src="img/product/4.jpg" alt="Image" /></a>
                    </div>
                    <div><a href="#pro-large-img-5" data-bs-toggle="tab"><img src="img/product/5.jpg" alt="Image" /></a>
                    </div>
                </div> -->
                    </div>
                    <style>
                        .mb-40 {
                            margin-bottom: -34px;
                        }

                        .page-banner-section {
                            padding: 165px 0 0px;
                        }
                    </style>
                    <div class="col-12 col-md-6 col-lg-8 mb-40">
                        <div class="product-details">
                            <h2 class="title">
                                <?php echo $detail['product_name'] ?>
                            </h2>
                            <!-- <span class="price section"><span class="new">$137.00</span></span> -->
                            <span class="availability section"><strong>available:</strong> <span class="in"><i
                                        class="fa fa-check"></i> In
                                    Stock</span><!--<span class="out"><i class="fa fa-times"></i> Out of Stock</span>--></span>
                            <div class="short-desc section">
                                <p style="    text-align: justify;"><strong>Quick Overview:</strong>
                                    <?php echo $detail['product_description'] ?>
                                </p>
                            </div>
                            <!-- <div class="color-list section">
                        <button class="active" style="background-color: #855439;"><i class="fa fa-check"></i></button>
                        <button style="background-color: #FF6801;"><i class="fa fa-check"></i></button>
                        <button style="background-color: #DCDCDA;"><i class="fa fa-check"></i></button>
                    </div>
                    <ul class="usefull-link section">
                        <li><a href="#/"><i class="pe-7s-mail"></i> Email to a Friend</a></li>
                        <li><a href="wishlist.html"><i class="pe-7s-like"></i> Wishlist</a></li>
                        <li><a href="#"><i class="pe-7s-repeat"></i> Compare</a></li>
                    </ul>
                    <div class="quantity-cart section">
                        <div class="product-quantity">
                            <input type="text" value="0">
                        </div>
                        <button class="add-to-cart">add to cart</button>
                    </div>
                    <div class="share-icons section">
                        <a class="twitter" href="#/"><i class="fa fa-facebook"></i> facebook</a>
                        <a class="facebook" href="#/"><i class="fa fa-twitter"></i> twitter</a>
                        <a class="google" href="#/"><i class="fa fa-google-plus"></i> linkedin</a>
                        <a class="pinterest" href="#/"><i class="fa fa-pinterest"></i> facebook</a>
                    </div> -->
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
        <div class="row">
            <!-- Nav tabs -->
            <!-- <div class="col-12">
                <ul class="pro-info-tab-list section nav">
                    <li><a class="active" href="#more-info" data-bs-toggle="tab">More info</a></li>
                    <li><a href="#data-sheet" data-bs-toggle="tab">Data sheet</a></li>
                    <li><a href="#reviews" data-bs-toggle="tab">Reviews</a></li>
                </ul>
            </div> -->
            <!-- Tab panes -->
            <!-- <div class="tab-content col-14">
                <div class="pro-info-tab tab-pane active" id="more-info">
                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs
                        delivering stylish separates and statement dresses which have since evolved into a full
                        ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result?
                        Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the
                        beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion
                        extends to a range of accessories including shoes, hats, belts and more!</p>
                </div>
                <div class="pro-info-tab tab-pane" id="data-sheet">
                    <table class="table-data-sheet">
                        <tbody>
                            <tr class="odd">
                                <td>Compositions</td>
                                <td>Cotton</td>
                            </tr>
                            <tr class="even">
                                <td>Styles</td>
                                <td>Casual</td>
                            </tr>
                            <tr class="odd">
                                <td>Properties</td>
                                <td>Short Sleeve</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pro-info-tab tab-pane" id="reviews">
                    <a href="product-details.html">Be the first to write your review!</a>
                </div>
            </div> -->
        </div>
    </div>
</div>
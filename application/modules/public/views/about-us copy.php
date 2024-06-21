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
    .page-banner-content .breadcrumb li {
        color: #999999;
        text-transform: none;
    }

    .row {
        --bs-gutter-x: 2px;
    }

    @media (max-width: 767px) {
        h2 {
            font-size: 18px;
            /* Additional mobile styles if needed */
        }
    }

    /* Media query for desktop view */
    @media (min-width: 768px) {
        h2 {
            font-size: 30px;
            /* Additional desktop styles if needed */
        }
    }

    .text-secondary {
        --bs-text-opacity: #353535;
        color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
    }

    .about-us-3 .count-img {
        margin: auto auto 13px;
    }
</style>
<!-- PAGE BANNER SECTION -->
<div class="page-banner-section section">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col-xs-12">
                <h2>About Us</h2>
                <ul class="breadcrumb">
                    <li style="text-align: justify;">Welcome to Rajasthani Furnitures, where we transform spaces into
                        personalized
                        sanctuaries. With a commitment to unmatched craftsmanship, our furniture seamlessly blends
                        timeless design and enduring quality.</li>
                    <!-- <li class="active">About Us</li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE BANNER SECTION -->

<!-- PAGE SECTION START -->
<div class="page-section section pt-100 pb-60" style="padding-top:0px">
    <div class="container">
        <div class="row">
            <section class="py-3 py-md-5 py-xl-8">
                <div class="container">
                    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                        <div class="col-12 col-lg-6 col-xl-5">
                            <img class="img-fluid rounded" loading="lazy"
                                    src="<?php echo base_url() ?>assets/public/img/product/3about.jpg"
                                    alt="">
                        </div>
                        <div class="col-12 col-lg-6 col-xl-7">
                            <div class="row justify-content-xl-center" style="text-align: justify;">
                                <div class="col-12 col-xl-11">
                                    <h2 class="h2sclass">Welcome To Our Company</h2>
                                    <!-- <p class="lead fs-4 text-secondary mb-3">Rajasthani Furnitures is a one stop
                                        shop for all your furniture and household needs.</p> -->
                                    <p class="mb-5">Nullam gravida orci ac luctus molestie. Fusce finibus congue
                                        erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra
                                        nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar                                            nec massa vitae sollicitudin.</p>
                                    <p class="mb-5">Nullam gravida orci ac luctus molestie. Fusce finibus congue
                                        erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra
                                            nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar
                                        nec massa vitae sollicitudin.</p>
                                    <p class="mb-5">Nullam gravida orci ac luctus molestie. Fusce finibus congue
                                        erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra
                                        nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar
                                        nec massa vitae sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-3 py-md-5 py-xl-8">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="row justify-content-xl-center" style="text-align: justify;">
                    <div class="col-12 col-xl-11">
                        <h2 class="h2sclass">Welcome To Our Company</h2>
                        <!-- <p class="lead fs-4 text-secondary mb-3">Rajasthani Furnitures is a one stop
                            shop for all your furniture and household needs.</p> -->
                        <p class="mb-5">Nullam gravida orci ac luctus molestie. Fusce finibus congue
                            erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra
                            nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar
                            nec massa vitae sollicitudin.</p>
                        <p class="mb-5">Nullam gravida orci ac luctus molestie. Fusce finibus congue
                            erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra
                            nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar
                            nec massa vitae sollicitudin.</p>
                        <p class="mb-5">Nullam gravida orci ac luctus molestie. Fusce finibus congue
                            erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra
                            nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar
                            nec massa vitae sollicitudin.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <img class="img-fluid rounded" loading="lazy"
                    src="<?php echo base_url() ?>assets/public/img/product/2about.jpg"
                    alt="">
            </div>
        </div>
    </div>
</section>


                <!-- Comments Wrapper -->
                <div class="comment-wrapper mt-40 mb-40">
                    <h3 style="font-weight:bold;">Leave A Comment</h3>
                    <div class="comment-form">
                        <form action="<?php echo base_url()?>client" method="post"  enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <label for="name">full name</label>
                                    <input id="name" name="client_name" type="text">
                                </div>
                                <div class="col-md-4 col-12">
                                    <label for="email">email address</label>
                                    <input id="client_email" name="client_email" type="email">
                                </div>
                                <div class="col-md-4 col-12">
                                    <label for="phone">subject</label>
                                    <input id="phone" name="client_subject" type="text">
                                </div>
                                <div class="col-12">
                                    <label for="message">message</label>
                                    <textarea id="message" name="client_message"></textarea>
                                </div>
                                <div class="col-12">
                                    <input type="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE SECTION END -->
<!-- PAGE BANNER SECTION -->
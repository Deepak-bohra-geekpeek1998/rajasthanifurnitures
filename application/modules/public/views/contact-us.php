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
                <h2></h2>
                <!-- <ul class="breadcrumb">
                    <li><a href="#"></a></li>
                    <li class="active"></li>
                </ul> -->
            </div>
        </div>
    </div>
</div>
<!-- END PAGE BANNER SECTION -->

<!-- PAGE SECTION START -->
<div class="page-section section pt-100 pb-100" style="padding-top:0px">
    <div class="container">
        <div class="row">
            <div class="contact-info col-lg-4 col-12 mb-40">
                <h3>Contact Info</h3>

                <p><i class="pe-7s-map-marker"></i><span>2nd Floor Apple City Complex, Near HP Petrol Pump Seegehali,
                        Kadugudi, Bengluru - 560067 (INDIA) </span>
                </p>

                <p>
                    <i class="pe-7s-call"></i>
                    <span>Phone : +91 9035533828</span>
                    <span>Phone : +91 8769960029</span>
                    <span style="margin-left: 29px;">Phone : +91 9664149405</span>
                </p>

                <p>
                    <i class="pe-7s-mail"></i>
                    <a href="#/">premsinghparihar0029@gmail.com</a>
                    <!-- <a href="#/">Support@domain.com</a> -->
                </p>

                <div class="contact-social">
                    <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i
                            class="fa fa-facebook"></i></a>
                    <a href="https://www.twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener"><i
                            class="fa fa-linkedin"></i></a>
                    <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i
                            class="fa fa-pinterest"></i></a>
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener"><i
                            class="fa fa-instagram"></i></a>
                </div>

            </div>
            <div class="contact-form col-lg-8 col-12 mb-40">
                <h3>Contact form</h3>
                <form action="<?php echo base_url() ?>client" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4 col-12 mb-20">
                            <label for="name">Your Name</label>
                            <input id="client_name" name="client_name" type="text">
                        </div>
                        <div class="col-md-4 col-12 mb-20">
                            <label for="email">Your Email</label>
                            <input id="client_email" name="client_email" type="email">
                        </div>
                        <div class="col-md-4 col-12 mb-20">
                            <label for="subject">Subject</label>
                            <input id="client_subject" name="client_subject" type="text">
                        </div>
                        <div class="col-12 mb-20">
                            <label for="message">Message</label>
                            <textarea id="client_message" name="client_message"></textarea>
                        </div>
                        <div class="col-12">
                            <input type="submit" value="send">
                        </div>
                    </div>
                </form>
                <div class="form-message"></div>
            </div>
            <div class="col-12 mt-40">
                <!-- Google Map Area Start -->
                <div class="contact-map">
                    <!-- <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2224905.8379164026!2d-63.27089988050263!3d-2.8569688249815943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91e8605342744385%3A0x3d3c6dc1394a7fc7!2sAmazon%20Rainforest!5e0!3m2!1sen!2sbd!4v1635401091721!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.4102704398497!2d77.75677807466577!3d13.00952538730936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae0fbf8f15440b%3A0x7e9cf7fb3b545e9f!2sRajasthani%20Furnitures!5e0!3m2!1sen!2sin!4v1704720186203!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <!-- End of Google Map Area -->
            </div>
        </div>
    </div>
</div>
<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<html lang="en" style="--theme-deafult:#24695c; --theme-secondary:#ba895d;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url() ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon.png" type="image/x-icon">
    <title>GoldBook - Our Gold Market</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">

    <link id="color" rel="stylesheet" href="<?php echo base_url() ?>assets/css/color-1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/select2.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/icofont.css">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/sweetalert2.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.css">

</head>

<body>

    <script src="<?php echo base_url() ?>assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/apexcharts.js"></script>

    <div class="page-wrapper null compact-wrapper" id="pageWrapper">

        <?php echo $template_header; ?>

        <div class="page-body-wrapper null">

            <?php include_once("sidebar.php"); ?>
            <?php echo $template_content; ?>

            <?php echo $template_footer; ?>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="<?php echo base_url() ?>/assets/js/moment.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/additional-methods.js"></script>


    <!-- feather icon js-->
    <script src="<?php echo base_url() ?>assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?php echo base_url() ?>assets/js/sidebar-menu.js"></script>
    <script src="<?php echo base_url() ?>assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="<?php echo base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- login js-->

    <script src="<?php echo base_url() ?>assets/js/bootstrap/popper.min.js"></script>
    <!-- Plugins JS start-->
    <script src="<?php echo base_url() ?>assets/js/chart/chartist/chartist.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chart/knob/knob.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chart/knob/knob-chart.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="<?php echo base_url() ?>assets/js/prism/prism.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/clipboard/clipboard.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/counter/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/counter/counter-custom.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom-card/custom-card.js"></script>
    <script src="<?php echo base_url() ?>assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dashboard/default.js"></script>
    <script src="<?php echo base_url() ?>assets/js/notify/index.js"></script>
    <script src="<?php echo base_url() ?>assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="<?php echo base_url() ?>assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="<?php echo base_url() ?>assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.serializeJSON/3.2.1/jquery.serializejson.min.js" integrity="sha512-SdWDXwOhhVS/wWMRlwz3wZu3O5e4lm2/vKK3oD0E5slvGFg/swCYyZmts7+6si8WeJYIUsTrT3KZWWCknSopjg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script src="<?php echo base_url() ?>assets/js/select2.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/select2.full.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/select2-custom.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/js/theme-customizer/customizer.js"></script> -->

</body>

</html>


<div class="page-main-header">
    <div class="main-header-right row m-0">
        <div class="main-header-left">
            <div class="logo-wrapper text-uppercase animated-bounce" style="font-weight: bolder; font-size: 17px;"><a href=""><?php echo $_SESSION['businessname'] ?></a></div>
            <div class="toggle-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-center status_toggle middle" id="sidebar-toggle">
                    <line x1="18" y1="10" x2="6" y2="10"></line>
                    <line x1="21" y1="6" x2="3" y2="6"></line>
                    <line x1="21" y1="14" x2="3" y2="14"></line>
                    <line x1="18" y1="18" x2="6" y2="18"></line>
                </svg>
            </div>
        </div>
        <div class="left-menu-header col">
            <ul>
                <li>
                    <form class="form-inline search-form">
                        <div class="search-bg"><i class="fa fa-search"></i>
                            <input class="form-control-plaintext" placeholder="Search here..">
                        </div>
                    </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                </li>
            </ul>
        </div>
        <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize">
                            <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
                        </svg></a></li>
                <li class="onhover-dropdown">
                    <div class="bookmark-box"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg></div>
                    <div class="bookmark-dropdown onhover-show-div">
                        <div class="form-group mb-0">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                                <input class="form-control" type="text" placeholder="Search for bookmark...">
                            </div>
                        </div>
                        <ul class="m-t-5">
                            <li class="add-to-bookmark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox bookmark-icon">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                </svg>Email<span class="pull-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg></span></li>
                            <li class="add-to-bookmark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square bookmark-icon">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>Chat<span class="pull-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg></span></li>
                            <li class="add-to-bookmark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command bookmark-icon">
                                    <path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path>
                                </svg>Feather Icon<span class="pull-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg></span></li>
                            <li class="add-to-bookmark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay bookmark-icon">
                                    <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                </svg>Widgets<span class="pull-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg></span></li>
                        </ul>
                    </div>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                            <path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path>
                        </svg><span class="dot-animated"></span></div>
                    <ul class="notification-dropdown onhover-show-div">
                        <li>
                            <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                        </li>
                        <li class="noti-primary">
                            <div class="media"><span class="notification-bg bg-light-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                    </svg></span>
                                <div class="media-body">
                                    <p>Delivery processing </p><span>10 minutes ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="noti-secondary">
                            <div class="media"><span class="notification-bg bg-light-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg></span>
                                <div class="media-body">
                                    <p>Order Complete</p><span>1 hour ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="noti-success">
                            <div class="media"><span class="notification-bg bg-light-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg></span>
                                <div class="media-body">
                                    <p>Tickets Generated</p><span>3 hour ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="noti-danger">
                            <div class="media"><span class="notification-bg bg-light-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <polyline points="17 11 19 13 23 9"></polyline>
                                    </svg></span>
                                <div class="media-body">
                                    <p>Delivery Complete</p><span>6 hour ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="mode"><i class="fa fa-moon-o"></i></div>
                </li>
                <li class="onhover-dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    <ul class="chat-dropdown onhover-show-div">
                        <li>
                            <div class="media"><img class="img-fluid rounded-circle me-3" src="<?php echo base_url() ?>assets/images/user/4.jpg" alt="">
                                <div class="media-body"><span>Ain Chavez</span>
                                    <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                                </div>
                                <p class="f-12">32 mins ago</p>
                            </div>
                        </li>
                        <li>
                            <div class="media"><img class="img-fluid rounded-circle me-3" src="<?php echo base_url() ?>assets/images/user/1.jpg" alt="">
                                <div class="media-body"><span>Erica Hughes</span>
                                    <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                                </div>
                                <p class="f-12">58 mins ago</p>
                            </div>
                        </li>
                        <li>
                            <div class="media"><img class="img-fluid rounded-circle me-3" src="<?php echo base_url() ?>assets/images/user/2.jpg" alt="">
                                <div class="media-body"><span>Kori Thomas</span>
                                    <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                                </div>
                                <p class="f-12">1 hr ago</p>
                            </div>
                        </li>
                        <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All </a></li>
                    </ul>
                </li>
                <li class="onhover-dropdown p-0">
                    <button class="btn btn-primary-light" type="button"><a href="<?php echo base_url() ?>admin/user/logout"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>Log out</a></button>
                </li>
            </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                <circle cx="12" cy="12" r="1"></circle>
                <circle cx="19" cy="12" r="1"></circle>
                <circle cx="5" cy="12" r="1"></circle>
            </svg></div>
    </div>
</div>


<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="<?php echo base_url() ?>admin/User/categories"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                <circle cx="12" cy="12" r="3"></circle>
                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
            </svg></a><img class="img-90 rounded-circle" src="<?php echo base_url() ?>assets/images/dashboard/1.png" alt="">
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600"><?php echo $_SESSION['name'] ?></h6>
        </a>
        <p class="mb-0 font-roboto"> Our Gold Market Business </p>
        <!-- <ul>
            <li><span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
            </li>
            <li><span>2 year</span>
                <p>Experince</p>
            </li>
            <li><span><span class="counter">95.2</span>k</span>
                <p>Follower </p>
            </li>
        </ul> -->
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow disabled" id="left-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar" style="display: block;">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div id="metal_id">
                            <p>Check Metals Price: <a class="ms-2" href="<?php echo base_url(); ?>admin/Metal_contro/metallist">Metal Price</a></p>
                        </div>
                    </li>

                    <li class="fs-6"><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>admin/User/home"><i class="icon-home"></i><span class="px-3">Dashboard</span>
                        </a>
                    </li>

                    <li class="fs-6"><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>admin/User/all_customer"><i class="fa fa-users"></i><span class="px-3">Customers</span>
                        </a>
                    </li>

                    <li class="fs-6"><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>admin/User/all_supplier"><i class="icofont icofont-users-alt-4"></i><span class="px-3">Suppliers</span>
                        </a>
                    </li>


                    <li class="fs-6"><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>admin/User/all_items"><i class="icon-list"></i><span class="px-3">Items</span>
                        </a>
                    </li>

                    <li class="fs-6"><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>admin/User/all_sale"><i class="icon-shopping-cart"></i><span class="px-3">Sale</span>
                        </a>
                    </li>

                    <li class="fs-6"><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>admin/User/all_purchase"><i class="icofont icofont-money-bag"></i><span class="px-3">Purchase</span>
                        </a>
                    </li>

                    <li class="fs-6"><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>admin/User/all_receipt"><i class="icon-receipt"></i><span class="px-3">receipt</span>
                        </a>
                    </li>

                    <li class="fs-6"><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>admin/User/all_payment"><i class="icon-shift-right"></i><span class="px-3">Payment/Issue</span>
                        </a>
                    </li>

                    <li class="fs-6"><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>admin/User/all_ledgers"><i class="icofont icofont-book-alt"></i><span class="px-3">Ledgers</span>
                        </a>
                    </li>

                    <li class="fs-6"><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>admin/User/all_ledger_groups"><i class="icofont icofont-ebook"></i><span class="px-3">Ledger Groups</span>
                        </a>
                    </li>

                    <li class="fs-6"><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>admin/User/reports"><i class="icon-stats-up"></i><span class="px-3">Reports</span>
                        </a>
                    </li>
                    <li class="dropdown fs-6"><a class="nav-link menu-title" href="javascript:void(0)"><i class="icon-settings"></i><span class="px-3">Settings</span>
                            <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="<?php echo base_url() ?>admin/User/categories">Categories</a></li>
                            <li><a href="#">Other</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © GoldBook All rights reserved.</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted &amp; made with <i class="fa fa-heart font-secondary"></i></p>
            </div>
        </div>
    </div>
</footer>
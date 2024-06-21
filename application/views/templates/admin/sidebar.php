<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <a href="<?php echo base_url() ?>admin/dashboard"><img
                        src="<?php echo base_url() ?>assets/public/img/logo/Rajasthani_Furnitures_Logo_A1-removebg-preview.png" class="img-circle"
                        alt="User Image" style="border-radius:0% !important;height: 44px;width: 45px;"></a>
            </div>
            <div class="info">
                <a href="<?php echo base_url() ?>admin/dashboard" class="d-block">Rajasthani Furniture </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <!-- <li class="nav-item menu-open">
                    <a href="home" class="nav-link active" style="text-align: center; background-color: #343a40;">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/dashboard" style="color: white;" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/home" class="nav-link" style="color: white;">
                        <img src="<?php echo base_url() ?>assets/admin/dist/img/report.png" alt="" height=" 30"
                            style="height: 22px;">
                        <p style="margin: 5px;">
                            Product List
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/add_product" style="color: white;" class="nav-link">
                        <i class="fas fa-box-open" aria-hidden="true" style="margin-left:1px"></i>
                        <img src="<?php echo base_url() ?>assets/admin/dist/img/add-to-cart.png" alt="User Image"
                            style="height: 22px;">
                        <p style="margin: 1px;">
                            Add Product
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>client-list" style="color: white;" class="nav-link">
                        <!-- <i class="fas fa-box-open" aria-hidden="true" style="margin-left:1px"></i> -->
                        <img src="<?php echo base_url() ?>assets/admin/dist/img/users.png" alt="User Image"
                            style="height: 22px;">
                        <p style="margin: 1px;">
                            Client Data
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?php echo base_url() ?>category-add" style="color: white;" class="nav-link">
                        <img src="<?php echo base_url() ?>assets/admin/dist/img/add-product.png" alt="User Image"
                            style="height: 22px;">
                        <p style="margin: 1px;">
                            Category Add
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>banner-list" style="color: white;" class="nav-link">
                        <img src="<?php echo base_url() ?>assets/admin/dist/img/add-product.png" alt="User Image"
                            style="height: 22px;">
                        <p style="margin: 1px;">
                            Banner List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>category-list" style="color: white;" class="nav-link">
                        <i class="fa fa-list" aria-hidden="true" style="margin-left:1px"></i>
                        <p style="margin: 6px;">
                            Category List
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="add_product" class="nav-link active"
                        style="text-align: center;     background-color: #343a40;">
                        <i class="fas fa-box-open" aria-hidden="true"></i>
                        <p>
                            Add Packages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li> -->

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
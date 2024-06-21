  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"  aria-label="bars" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="<?php echo base_url()?>admin/dashboard" style="color: black;"  aria-label="Home" class="nav-link">Home</a>
          </li>
          <!-- <li class="nav-item d-none d-sm-inline-block">
              <a href="#"  aria-label="Contact" style="color: black;" class="nav-link">Contact</a>
          </li>   -->
          <li class="nav-item d-none d-sm-inline-block">
              <a href="<?php echo base_url()?>admin/home" style="color: black;"  aria-label="Home" class="nav-link">Product List</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="<?php echo base_url()?>admin/add_product" style="color: black;"  aria-label="Home" class="nav-link">Add Product</a>
          </li>
          <!-- <li class="nav-item d-none d-sm-inline-block">
              <a href="<?php echo base_url()?>admin/dashboard" style="color: black;"  aria-label="Home" class="nav-link">Home</a>
          </li>        -->
          <li class="nav-item d-none d-sm-inline-block">
              <a href="<?php echo base_url()?>client-list" style="color: black;"  aria-label="Home" class="nav-link">Client List</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="<?php echo base_url()?>category-add" style="color: black;"  aria-label="Home" class="nav-link">Category Add</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="<?php echo base_url()?>category-list" style="color: black;"  aria-label="Home" class="nav-link">Category List</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="<?php echo base_url()?>banner-add" style="color: black;"  aria-label="Home" class="nav-link">Banner Add</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="<?php echo base_url()?>banner-list" style="color: black;"  aria-label="Home" class="nav-link">Banner List</a>
          </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link"  href="<?php echo base_url() ?>logout" style="color: black;" role="button">
              Logout &nbsp;
              <i class="fas fa-sign-out-alt"></i>
              </a>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->
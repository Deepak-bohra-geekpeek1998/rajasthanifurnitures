<style>
    /* Increase the height of the form elements */
    .card-body {
        min-height: 300px;
        /* Adjust this value as needed */
    }

    #product_description {
        height: 100px;
        /* Adjust this value as needed */
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/home" class="btn btn-primary">Tour List</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard" class="btn btn-primary">Back To Home</a></li>
                        <li class="breadcrumb-item active"><a href="home">Back</a></li> -->
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div id="msg">
                <?php if (!empty($this->session->flashdata('blog_msg'))) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                <?php echo $this->session->flashdata('blog_msg'); ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <script>
                  setTimeout(function() {
                      $('#msg').hide('slow');
                  }, 4000);
            </script>
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <!-- card -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="text-align: center;">Add Product</h3>
                            <a href="<?php echo base_url() ?>" style="justify-content: flex-end;display: flex;">Add Product</a>
                        </div>
                        <!-- form start -->
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url() ?>package_add"
                                enctype="multipart/form-data">

                                <div class="row">
                                    <input type="hidden" name="id" id="id"
                                        value="<?php echo !empty($package_update['product_id']) ? $package_update['product_id'] : ''; ?>">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputStatus">Product Category</label>
                                            <?php
                                            $selected_category = !empty($package_update['product_category']) ? $package_update['product_category'] : '';
                                            ?>
                                            <select id="product_category" name="product_category"
                                                class="form-control custom-select">
                                                <?php foreach ($select as $category): ?>
                                                    <option value="<?= $category['category_id'] ?>"
                                                        <?= ($selected_category == $category['category_id']) ? 'selected' : '' ?>>
                                                        <?= $category['category_name'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputStatus">Product Category</label>
                                            <select id="product_category" name="product_category"
                                                class="form-control custom-select"
                                                value="<?php //echo !empty($package_update['product_category']) ? $package_update['product_category'] : ''; ?>">
                                                <?php
                                                //p($select);
                                                //foreach ($select as $category):
                                                
                                                //  p($category);
                                                
                                                ?>
                                                    <option value="<?php //$category['category_name'] ?>">
                                                        <?php //$category['category_id'] ?>
                                                    </option>
                                                <?php //endforeach; ?>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control" id="product_name" name="product_name"
                                                type="text" placeholder="Product Name Please"
                                                value="<?php echo !empty($package_update['product_name']) ? $package_update['product_name'] : ''; ?>"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Product
                                                Price</label>
                                            <input class="form-control" id="product_price" name="product_price"
                                                type="text" placeholder="Product Price"
                                                value="<?php echo !empty($package_update['product_price']) ? $package_update['product_price'] : ''; ?>"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Product Description</label>
                                        <input name="product_description" class="form-control"
                                            value="<?php echo !empty($package_update['product_description']) ? $package_update['product_description'] : ''; ?>"
                                            id="product_description" cols="30" rows="2" style="height: 39px;"
                                            placeholder="Product Description Here..!">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Product Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="product_images"
                                                    name="product_images"
                                                    value="<?php echo !empty($package_update['product_image']) ? $package_update['product_image'] : ''; ?>">
                                                <label class="custom-file-label" for="product_images">Product
                                                    Image
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="username">Image <small style="color:#8997bd;font-weight: 700;">
                                                (Upload an image recommended size: as your opinion)</small></label>
                                    </div>
                                    <div class="col-12" style="margin-top:15px">
                                        <a href="#" class="btn btn-secondary">Cancel</a>
                                        <input type="submit" value="Submit" class="btn btn-success float-right">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script>
    $(function () {
        $.validator.setDefaults({
            submitHandler: function () {
                alert("Form successful submitted!");
            }
        });
        $('#quickForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5
                },
                terms: {
                    required: true
                },
            },
            messages: {
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
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

    /* .card-body {
        min-height: 135px;
    } */
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Banner Add</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <!-- card -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="text-align: center;">Add Product</h3>
                        </div>
                        <!-- form start -->
                        <div class="card-body">

                            <form method="post" action="<?php echo base_url() ?>banner-data"
                                enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="banner_id" id="banner_id"
                                            value="<?php echo !empty($banner_update['banner_id']) ? $banner_update['banner_id'] : ''; ?>">
                                        <div class="form-group">
                                            <label for="category_name">Banner Name</label>
                                            <input type="text" class="form-control" id="banner_name" name="banner_name"
                                                placeholder="Banner Name"
                                                value="<?php echo !empty($banner_update['banner_name']) ? $banner_update['banner_name'] : ''; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Banner
                                                Heading</label>
                                            <input class="form-control" id="banner_heading" name="banner_heading"
                                                type="text" placeholder="Banner Heading"
                                                value="<?php echo !empty($banner_update['banner_heading']) ? $banner_update['banner_heading'] : ''; ?>"
                                                required="">
                                        </div>
                                    </div>
<?php //p($banner_update);?>
                                    
                                    <div class="col-md-6">
                                        <label>Banner Quotes</label>
                                        <input name="banner_quotes" class="form-control"
                                            value="<?php echo !empty($banner_update['banner_quotes']) ? $banner_update['banner_quotes'] : ''; ?>"
                                            id="banner_quotes" cols="30" rows="2" style="height: 39px;"
                                            placeholder="Banner Quotes Here..!">
                                    </div>
                                    <div class="col-md-6" >
                                        <label>Banner Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="banner_image"
                                                    value="<?php echo !empty($banner_update['banner_image']) ? $banner_update['banner_image'] : ''; ?>"
                                                    name="banner_image">
                                                <label class="custom-file-label" for="category_image">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <label for="username">Image
                                            <small style="color:#8997bd;font-weight: 700;">
                                                (Upload
                                                an image recommended size: Width 1920x height 900
                                                pixels)</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Banner Description</label>
                                        <textarea class="form-control" name="banner_description"  id="banner_description"
                                            value="" rows="3" placeholder="Banner Description Here..!"><?php echo !empty($banner_update['banner_description']) ? $banner_update['banner_description'] : ''; ?></textarea>
                                    </div>
                                       
                                        <!-- <input  class="form-control"
                                             cols="30" rows="2" style="height: 39px;"
                                            placeholder="Banner Description Here..!"> -->
                                    </div>
                                    <div class="col-md-6">
                                        
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
<!-- <form method="post" action="<?php //echo base_url() ?>banner-data" enctype="multipart/form-data">
                            <div class="card-body">
                                <input type="hidden" name="banner_id" id="banner_id"
                                    value="<?php //echo !empty($banner_update['banner_id']) ? $banner_update['banner_id'] : ''; ?>">
                                <div class="form-group">
                                    <label for="category_name">Banner Name</label>
                                    <input type="text" class="form-control" id="banner_name" name="banner_name"
                                        placeholder="Banner Name"
                                        value="<?php //echo !empty($banner_update['banner_name']) ? $banner_update['banner_name'] : ''; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Banner Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="banner_image"
                                                name="banner_image">
                                            <label class="custom-file-label" for="category_image">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label for="username">Image <small style="color:#8997bd;font-weight: 700;"> (Upload
                                            an image recommended size: Width 1920x height 900 pixels)</small></label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form> -->
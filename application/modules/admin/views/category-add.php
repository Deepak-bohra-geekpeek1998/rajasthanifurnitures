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

    .card-body {
        min-height: 135px;
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Category</h1>
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
                            <h3 class="card-title">Category Add</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="<?php echo base_url() ?>category-form"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                <input type="hidden" name="category_id" id="category_id"
                                    value="<?php echo !empty($category_update['category_id']) ? $category_update['category_id'] : ''; ?>">
                                <div class="form-group">
                                    <label for="category_name">Category Name</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name"
                                        placeholder="Category Name"
                                        value="<?php echo !empty($category_update['category_name']) ? $category_update['category_name'] : ''; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Category Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="category_image"
                                                name="category_image">
                                            <label class="custom-file-label" for="category_image">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="username">Image <small style="color:#8997bd;font-weight: 700;">
                                                (Upload an image recommended size: as your opinion)</small></label>
                                    </div>
                                </div>
                                <div class="col-12" style="margin-top:15px">
                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                    <input type="submit" value="Submit" class="btn btn-success float-right">
                                </div>
                            </div>
                            <!-- <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div> -->
                        </form>
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
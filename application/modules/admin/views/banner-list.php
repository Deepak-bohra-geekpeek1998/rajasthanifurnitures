<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Rajasthani Furnitures</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <!-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard" class="btn btn-primary">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>admin/home" class="btn btn-primary">Tour List</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>admin/add_Category" class="btn btn-primary">Add
                                Tour</a></li>
                    </ol> -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
   
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Banner List</h3>
                            <a href="<?php echo base_url() ?>banner-add" style="justify-content: flex-end;display: flex;">Add Banner</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Banner No.</th>
                                        <th>Banner Name</th>
                                        <th>Banner Heading</th>
                                        <th>Banner Description</th>
                                        <th>Banner Quotes</th>
                                        <th>Banner Image</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1; ?>
                                    <?php if (!empty($banner_data)) {
                                        foreach ($banner_data as $data) {
                                            // p($data); 
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $sno++; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['banner_name'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['banner_heading'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['banner_description'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['banner_quotes'] ?>
                                                </td>
                                                <td>
                                                    <img src="<?php echo base_url('assets/admin/banner_image/' . $data['banner_image']) ?>"
                                                        alt="" style="width: 100%;height: 90px;">
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>update_banner/<?php echo $data['banner_id'] ?>"
                                                        onclick="return confirm('Are you sure to Update?')"
                                                        data-toggle="tooltip" style="color: Black;" title="Edit"><i
                                                            class="fas fa-edit"></i></a>
                                                    &nbsp;
                                                    <a href="<?php echo base_url() ?>delete_banner/<?php echo $data['banner_id'] ?>"
                                                        style="color: Black;"
                                                        onclick="return confirm('Are you sure you want to Delete Payment ')"
                                                        data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></a>
                                                    &nbsp;
                                                </td>

                                            </tr>

                                        <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</div>
<!-- /.content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
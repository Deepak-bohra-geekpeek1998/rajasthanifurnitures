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
                            <h3 class="card-title">Category List</h3>
                            <a href="<?php echo base_url() ?>category-add" style="justify-content: flex-end;display: flex;">Add Category</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Category No.</th>
                                        <th>Category Name</th>

                                        <th>Category Image</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1; ?>
                                    <?php if (!empty($select)) {
                                        foreach ($select as $data) {
                                            // p($select); 
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $sno++; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['category_name'] ?>
                                                </td>
                                                <td>
                                                    <img src="<?php echo base_url('assets/admin/category_image/' . $data['category_image']) ?>"
                                                        alt="" style="width: 100%;height: 90px;">
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>update_category/<?php echo $data['category_id'] ?>"
                                                        onclick="return confirm('Are you sure to Update?')"
                                                        data-toggle="tooltip" style="color: Black;" title="Edit"><i
                                                            class="fas fa-edit"></i></a>
                                                    &nbsp;
                                                    <a href="<?php echo base_url() ?>delete_category/<?php echo $data['category_id'] ?>"
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
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
                        <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>admin/add_Client" class="btn btn-primary">Add
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
                            <h3 class="card-title">Client List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Client Name</th>
                                        <th>Client E-Mail</th>
                                        <th>Client Subject</th>
                                        <th>Client Message</th>
                                        <th>Action</th>
                                        <!-- <th>Action</th> -->

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
                                                    <?php echo $data['client_name'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['client_email'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['client_subject'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['client_message'] ?>
                                                </td>
                                                <!-- <td><img src="<?php //echo base_url('assets/admin/Client_images/' . $data['Client_images']) ?>"
                                                        alt="" style="width: 100%;height: 90px;"></td>
                                                <td>
                                                    <a href="<?php ///echo base_url() ?>update_package/<?php //echo $data['Client_id'] ?>"
                                                        onclick="return confirm('Are you sure to Update?')"
                                                        data-toggle="ooltip" style="color: Black;" title="Edit"><i
                                                            class="fas fa-edit"></i></a> -->
                                                    &nbsp;
                                                    <td>
                                                    <a href="<?php echo base_url() ?>client_delete/<?php echo $data['client_id'] ?>"
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
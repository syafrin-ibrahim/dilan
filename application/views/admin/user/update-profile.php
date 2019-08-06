<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- card primary -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Profile</h3>
            </div>
            <form role="form" method="post" action="<?= base_url('admin/user/updateProfile'); ?>" enctype="multipart/form-data">
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="row">

                        <div class="col-md-6">
                            <h5>Profile User</h5>

                            <hr>

                            <input type="hidden" name="id_user" class="form-control form-control-sm col-10" value="<?= $user['user_id']; ?>">


                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" name="email" class="form-control form-control-sm col-10" value="<?= $user['email']; ?>" readonly>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nama" class="form-control form-control-sm col-10" value="<?= $user['nama']; ?>" required>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Photo</label>
                                <div class="col-sm-8">
                                    <img src="<?= base_url('asset/dist/img/') . $user['image']; ?>" class="img-thumbnail">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Ganti Foto</label>
                                <div class="col-sm-8">
                                    <input type="file" name="image" class="form-control form-control-sm col-12">

                                </div>
                            </div>
                        </div>
                        <!-- end col-md-6 -->
                        <div id="air" class="col-md-6">

                        </div>
                        <!-- end col-md-6 -->
                    </div>
                </div><!-- end card body-->
                <!-- card footer -->
                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">update</button>

                </div>
                <!-- end card footer -->
            </form>
        </div>
        <!-- /.card primary-->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
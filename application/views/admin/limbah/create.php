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
                        <li class="breadcrumb-item active">Data Limbah B3</li>
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
                <h3 class="card-title">Data Limbah B3</h3>
            </div>
            <form role="form" method="post" action="<?= base_url('admin/limbah/create'); ?>" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <input type="text" name="id_usaha" class="form-control form-control-sm col-10" value="<?= $usaha['id_usaha']; ?>">
                            <input type="text" name="nm_usaha" class="form-control form-control-sm col-10" value="<?= $usaha['nm_usaha']; ?>">
                            <input type="text" name="id_user" class="form-control form-control-sm col-10" value="<?= $usaha['user_id']; ?>">

                            <h5>Data Limbah B3</h5>

                            <hr>

                            <div class="form-group row">
                                <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Periode</label>
                                    <div class="col-sm-8">
                                        <input id="date3" class="form-control form-control-sm col-6" type="text" name="tgl_pantau" readonly>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Jenis Limba B3</label>
                                <div class="col-sm-8">
                                    <input type="text" name="parameter" class="form-control form-control-sm col-10">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">a. Jumlah Periode Sebelumnya (ton)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="b_mutu" class="form-control form-control-sm col-10">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">b. Jumlah Periode Ini (ton)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="h_pantau" class="form-control form-control-sm col-10">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">c. Disimpan Di TPS (ton)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="h_pantau" class="form-control form-control-sm col-10">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">d. Dimanfaatkan (ton)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="h_pantau" class="form-control form-control-sm col-10">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">e. Diserahkan Ke Pihak Ke III (ton)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="h_pantau" class="form-control form-control-sm col-10">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Total a + b (ton)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="h_pantau" class="form-control form-control-sm col-10">

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
                    <button type="submit" name="submit" class="btn btn-primary">simpan</button>
                    <button type="button" class="btn btn-primary" onclick="self.history.back()">batal</button>
                </div>
                <!-- end card footer -->
            </form>
        </div>
        <!-- /.card primary-->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
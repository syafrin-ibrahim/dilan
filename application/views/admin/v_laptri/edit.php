<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pelaporan Triwulan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Triwulan</li>
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
                <h3 class="card-title"><?= $usaha['nm_usaha']; ?></h3>
            </div>
            <form role="form" method="post" action="<?= base_url('admin/v_laptri/act'); ?>">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Data Laporan Triwulan</h5>

                            <hr>
                            <input type="hidden" name="id_usaha" class="form-control form-control-sm col-10" value="<?= $usaha['id_usaha']; ?>">
                            <input type="hidden" name="id_lapor" class="form-control form-control-sm col-10" value="<?= $usaha['id_lapor']; ?>">
                            <input type="hidden" name="nm_usaha" class="form-control form-control-sm col-10" value="<?= $usaha['nm_usaha']; ?>">
                            <!-- <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Jenis Laporan</label>
                                <div class="col-sm-8">
                                    <select name="jenis" class="form-control form-control-sm col-6">
                                        <option value="">:. Jenis Laporan .:</option>
                                        <option value="1">Kualitas Air</option>
                                        <option value="2">Pengelolahan Limbah</option>

                                    </select>
                                </div>
                            </div>-->

                            <div class="form-group row">
                                <?php
                                $a = explode("-", $usaha['periode']);
                                ?>
                                <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Periode</label>
                                    <div class="col-sm-8">
                                        <div class="input-group input-daterange">
                                            <input id="date1" name="m1" type="text" class="form-control form-control-sm col-4" value="<?= $a[0]; ?>" readonly>
                                            <div class="input-group-addon">&nbsp; to &nbsp;</div>
                                            <input id="date2" name="m2" type="text" class="form-control form-control-sm col-4" value="<?= $a[1]; ?>" readonly>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Tahun</label>
                                    <div class="col-sm-8">
                                        <input class="form-control form-control-sm col-3" type="text" value="<?= $usaha['tahun']; ?>" name="tahun" readonly>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Pemantauan PH</label>
                                <div class="col-sm-8">
                                    <input type="text" name="PH" value="<?= $usaha['PH']; ?>" class="form-control form-control-sm col-10" readonly>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Lampiran</label>
                                <div class="col-sm-8">
                                    <input type="text" name="lampiran" value="<?= $usaha['lampiran']; ?>" class="form-control form-control-sm col-10" readonly>

                                </div>
                            </div>
                           
                        </div>
                        <!-- end col-md-6 -->
                        <div class="col-md-6">
                            <h5>Data Kualitas Air</h5>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Parameter</label>
                                <div class="col-sm-8">
                                    <input type="text" name="parameter" class="form-control form-control-sm col-10" value="<?= $usaha['parameter']; ?>" readonly>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Tanggal Pemantauan</label>
                                    <div class="col-sm-8">
                                        <input id="date3" class="form-control form-control-sm col-5" value="<?= $usaha['tgl_pantau'] ?>" type="text" name="tgl_pantau" readonly>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Baku Mutu (mg/liter)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="b_mutu" class="form-control form-control-sm col-10" value="<?= $usaha['b_mutu']; ?>" readonly>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Hasil Pemantauan (mg/liter)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="h_pantau" class="form-control form-control-sm col-10" value="<?= $usaha['h_pantau']; ?>" readonly>

                                </div>
                            </div>

                        </div>
                        <!-- end col-md-6 -->
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                        <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Koreksi</label>
                                <div class="col-sm-12">
                                    <textarea id="editor" name="keterangan" placeholder="Isi Pesan Anda Disini" required></textarea>

                                </div>


                            </div>
                        </div>
                    </div>
                </div><!-- end card body-->
                <!-- card footer -->
                <div class="card-footer">
                    <button type="submit" name="update" class="btn btn-primary">verifikasi</button>
                    <button type="button" class="btn btn-primary" onclick="self.history.back()">batal</button>
                    <button type="submit" name="correct" class="btn btn-primary">koreksi</button>
                </div>
                <!-- end card footer -->
            </form>
        </div>
        <!-- /.card primary-->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
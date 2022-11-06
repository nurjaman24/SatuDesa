<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Edit Data Desa</h1>
                        </div>
                    </div>
                    <hr>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                    <?php  foreach ($tb_desa as $td) { ?>
                                        <form action="<?= base_url('Admin/prosesubahdatadesa')?>" method="POST">
                                            <input type="hidden" class="form-control" value="<?= $td->id_desa ?>" name="id_desa" hidden/>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Nama Desa<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" name="nama_desa" value="<?= $td->nama_desa ?>" required autofocus maxlength="30"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Nama Kepala Desa<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" name="nama_kepala_desa" value="<?= $td->nama_kepala_desa ?>" required maxlength="40"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Alamat Desa<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" name="alamat_desa" value="<?= $td->alamat_desa ?>" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Kecamatan<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" name="kecamatan_desa" value="<?= $td->kecamatan_desa ?>" required maxlength="20"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Kabupaten<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" name="kabupaten_desa" value="<?= $td->kabupaten_desa ?>" required maxlength="30"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Alamat Email Desa<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="email" class="form-control" name="email_desa" value="<?= $td->email_desa ?>" required maxlength="40"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">No. Telepon Desa<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" name="telepon_desa" value="<?= $td->telepon_desa ?>" required maxlength="15"/>
                                                    </div>
                                                </div>
                                            </div>

                                                <div class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
                                                    <div class="modal-area-button">
                                                        <a class="Danger danger-color" href="<?= base_url('Admin/datadesa')?>">Kembali</a>
                                                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Simpan</a>
                                                    </div>
                                                </div>
                                                <div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                                <!-- <h2>Yakin !</h2> -->
                                                                <p>Pastikan semua data sudah terisi dengan benar !!</p>
                                                                <!-- <code>Data yang sudah disimpan tidak dapat diubah.</code> -->
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <button class="btn btn-md btn-primary" type="submit">Tetap Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    <?php  } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
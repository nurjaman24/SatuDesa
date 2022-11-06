<div class="basic-form-area mg-b-15">
            <div class="container-fluid">
      <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Tambah Data Persyaratan</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <?= form_open_multipart('Warga/prosestambahpersyaratan'); ?>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Nama Persyaratan<code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="hidden" class="form-control" name="id_penduduk" required autofocus maxlength="20" value="<?= $this->session->userdata('id_penduduk')?>"/>
                                                                <input type="text" class="form-control" name="nama_persyaratan" required autofocus maxlength="20" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">File Persyaratan<code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="file" class="form-control" name="file_persyaratan" required maxlength="20" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
                                                        <div class="modal-area-button">
                                                            <a class="Danger danger-color" href="<?= base_url('Warga/tambahpengajuan')?>">Kembali</a>
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
                                                                    <p>Pastikan semua data sudah terisi dengan benar !!</p>
                                                                    <!-- <code>Data yang sudah disimpan tidak dapat diubah.</code> -->
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <button class="btn btn-md btn-primary" type="submit">Tetap Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 <?php form_close();?>
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
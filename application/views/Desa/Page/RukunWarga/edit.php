<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Ubah Data Rukun Warga</h1>
                        </div>
                    </div>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                        <?php foreach ($tb_rukun_warga as $trw) { ?>
                                            <form action="<?= base_url('desa/prosesubahrw')?>" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <input type="text" name="id_rukun_warga" value="<?= $trw->id_rukun_warga?>" hidden>
                                                        <select name="id_desa" id="id_desa" class="form-control" required readonly>
                                                            <option value="<?= $trw->id_desa?>"><?= $trw->nama_desa?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <input type="text" name="identitas" value="<?= $trw->identitas?>" placeholder="Identitas" class="form-control" maxlength="20" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <input type="text" name="rukun_warga" value="<?= $trw->rukun_warga?>" placeholder="Rukun Warga" class="form-control" maxlength="10" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <input type="text" name="nama_ketua_rw" value="<?= $trw->nama_ketua_rw?>" placeholder="Ketua Rukun Warga" class="form-control" maxlength="20" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <input type="text" name="nip_nik" value="<?= $trw->nip_nik?>" placeholder="NIP / NIK" class="form-control" maxlength="30" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <!-- Button -->
                                                <div class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
                                                    <div class="modal-area-button">
                                                        <a class="Danger danger-color" href="<?= base_url('desa/datarukunwarga')?>">Kembali</a>
                                                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Simpan</a>
                                                    </div>
                                                </div>
                                                <!-- Modal Simpan -->
                                                <div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                                <p>Simpan Perubahan ??</p>
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <button class="btn btn-md btn-primary" type="submit">Tetap Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php }?>
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
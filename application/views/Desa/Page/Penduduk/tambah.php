<div class="basic-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Tambah Data Penduduk</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">

                                                <form action="<?= base_url('AdminDesa/prosestambahdatapenduduk')?>" method="post">                                                    
                                                    <!-- No KK dan Nama Lengkap -->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">No Kartu Keluarga <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control" name="no_kk" required maxlength="20" minlength="16" autofocus placeholder="0000000000000000"/>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Nama Lengkap <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control" name="nama" required maxlength="30" onkeyup="this.value = this.value.toUpperCase();"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- NIK dan Jenis Kelamin -->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">NIK <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control" name="nik" required maxlength="20" minlength="16" placeholder="0000000000000000"/>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Jenis Kelamin <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" name="jenis_kelamin" required>
                                                                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                                                                        <option value="PEREMPUAN">PEREMPUAN</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Tempat dan Tanggal Lahir -->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Tempat Lahir <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control" name="tempat_lahir" required maxlength="30" onkeyup="this.value = this.value.toUpperCase();"/>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Tanggal Lahir <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="date" class="form-control" name="tanggal_lahir" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Agama dan Pendidikan -->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Agama <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" name="agama" required maxlength="">
                                                                        <option value="ISLAM">ISLAM</option>
                                                                        <option value="KRISTEN">KRISTEN</option>
                                                                        <option value="HINDU">HINDU</option>
                                                                        <option value="BUDHA">BUDHA</option>
                                                                        <option value="LAINNYA">LAINNYA</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Pendidikan <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" name="pendidikan" required maxlength="">
                                                                        <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH</option>
                                                                        <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                                                        <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                                                        <option value="SLTP / SEDERAJAT">SLTP / SEDERAJAT</option>
                                                                        <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                                                        <option value="DIPLOMA IV / STRATA I">DIPLOMA IV / STRATA I</option>
                                                                        <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                                                        <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                                                        <option value="STRATA II">STRATA II</option>
                                                                        <option value="STRATA III">STRATA III</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Jenis Pekerjaan dan Golongan Darah -->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Jenis Pekerjaan <code>*</code><label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control" name="jenis_pekerjaan" required maxlength="30" onkeyup="this.value = this.value.toUpperCase();"/>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Golongan Darah <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" name="golongan_darah" required maxlength="">
                                                                        <option value="A+">A+</option>
                                                                        <option value="A-">A-</option>
                                                                        <option value="B+">B+</option>
                                                                        <option value="B-">B-</option>
                                                                        <option value="AB+">AB+</option>
                                                                        <option value="AB-">AB-</option>
                                                                        <option value="O+">O+</option>
                                                                        <option value="O-">O-</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Status Perkawinan dan Tanggal Perkawinan -->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Status Perkawinan <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" name="status_perkawinan" required maxlength="">
                                                                        <option value="BELUM KAWIN">BELUM KAWIN</option>
                                                                        <option value="KAWIN">KAWIN</option>
                                                                        <option value="CERAI HIDUP">CERAI HIDUP</option>
                                                                        <option value="CERAI MATI">CERAI MATI</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Tanggal Perkawinan</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="date" class="form-control" name="tanggal_perkawinan" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Status Di Keluarga dan Kewarganegaraan -->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Status Di Keluarga <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" name="status_dikeluarga" required maxlength="" >
                                                                        <option value="KEPALA KELUARGA">KEPALA KELUARGA</option>
                                                                        <option value="ISTRI">ISTRI</option>
                                                                        <option value="ANAK">ANAK</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Kewarganegaraan <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" name="kewarganegaraan" required maxlength="">
                                                                        <option value="WNI">WNI</option>
                                                                        <option value="WNA">WNA</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- No. PASPOR dan KITAP -->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">No. PASPOR <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control" name="no_paspor" required minlength="10" placeholder="" onkeyup="this.value = this.value.toUpperCase();"/>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">No. KITAP<code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control" name="no_kitap" required maxlength="10" placeholder="" onkeyup="this.value = this.value.toUpperCase();"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Ayah dan Ibu kandung -->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Ayah<code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control" name="ayah" required maxlength="50" placeholder="" onkeyup="this.value = this.value.toUpperCase();"/>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Ibu Kandung<code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control" name="ibu" required maxlength="50" placeholder="" onkeyup="this.value = this.value.toUpperCase();"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Alamat dan RT/RW -->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Alamat<code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control" name="alamat" required placeholder="KP. BANTAR SULING" onkeyup="this.value = this.value.toUpperCase();"/>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">RT/RW<code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-5">
                                                                <input type="number" class="form-control" name="rukun_tetangga" required maxlength="5" placeholder="" onkeyup="this.value = this.value.toUpperCase();"/>
                                                            </div>
                                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2" style="margin-left:2%;margin-right:-2%;">
                                                                <h2>/</h2>
                                                            </div>
                                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-5" >
                                                                <input type="number" class="form-control" name="rukun_warga" required maxlength="5" placeholder="" onkeyup="this.value = this.value.toUpperCase();"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Desa dan  Kecamatan-->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Desa <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <select name="id_desa" class="form-control" required>
                                                                <?php
                                                                    foreach($tb_desa as $td){
                                                                ?>
                                                                    <option value="<?= $td->id_desa?>"><?= $td->nama_desa?></option>
                                                                <?php }?>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Kecamatan<code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control" name="kecamatan" required maxlength="50" placeholder="KECAMATAN SINGAPARNA" onkeyup="this.value = this.value.toUpperCase();"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Kabupaten dan Kontak -->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Kabupaten<code>*</code><label>
                                                            </div>

                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control" name="kabupaten" required maxlength="50" placeholder="KABUPATEN TASIKMALAYA" onkeyup="this.value = this.value.toUpperCase();"/>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">No. Handphone Aktif<code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="tel" class="form-control" name="no_handphone_aktif" required maxlength="20" minlength="13" placeholder="6282128262881"/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
                                                        <div class="modal-area-button">
                                                            <a class="Danger danger-color" href="<?= base_url('AdminDesa/datapenduduk')?>">Kembali</a>
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
                                                </form>
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
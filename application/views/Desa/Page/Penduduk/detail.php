<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Detail Data Penduduk</h1>
                        </div>
                    </div>
                    <hr>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                        <!-- <CENTER><h4>DATA DIRI</h4></CENTER> -->
                                        <?php  foreach ($tb_penduduk as $tpen) { ?>
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <table class="table table-bordered">
                                                        <tr><td width="40%">No. Kartu Keluarga</td><td><?= $tpen->no_kk?></td></tr>
                                                        <tr><td>No. Induk Kependudukan</td><td><?= $tpen->nik?></td></tr>
                                                        <tr><td>Nama Lengkap</td><td><?= $tpen->nama?></td></tr>
                                                        <tr><td>Kelamin</td><td><?= $tpen->jenis_kelamin?></td></tr>
                                                        <tr><td>Tempat Tanggal Lahir</td><td><?= $tpen->tempat_lahir.", ".$tpen->tanggal_lahir?></td></tr>
                                                        <tr><td>Alamat Lengkap</td><td><?= $tpen->alamat." RT/RW ".$tpen->rukun_tetangga."/".$tpen->rukun_warga."<br>".ucwords(strtolower($tpen->nama_desa))." ".$tpen->kecamatan." ".$tpen->kabupaten?></td></tr>
                                                        <tr><td>No. Handphone</td><td><?= $tpen->no_handphone_aktif?></td></tr>
                                                    </table>
                                                    <!-- <hr> -->
                                                    <table class="table table-bordered">
                                                        <tr><td width="40%">Nama Ayah</td><td><?= $tpen->ayah?></td></tr>
                                                        <tr><td>Nama Ibu</td><td><?= $tpen->ibu?></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-lg-5">
                                                    <!-- <table class="table table-bordered"> -->
                                                        <!-- <tr><td>No. Handphone</td><td><?= $tpen->no_handphone_aktif?></td></tr> -->
                                                    <!-- </table> -->
                                                    <table class="table table-bordered">
                                                        <tr><td>Agama</td><td><?= $tpen->agama?></td></tr>
                                                        <tr><td>Pendidikan</td><td><?= $tpen->pendidikan?></td></tr>
                                                        <tr><td>Jenis Pekerjaan</td><td><?= $tpen->jenis_pekerjaan?></td></tr>
                                                        <tr><td>Golongan Darah</td><td><?= $tpen->golongan_darah?></td></tr>
                                                        <tr><td>Status Pernikahan</td><td><?= $tpen->status_perkawinan?></td></tr>
                                                        <tr><td>Tanggal Pernikahan</td><td><?= $tpen->tanggal_perkawinan?></td></tr>
                                                        <tr><td>Status Hubungan Dalam Keluarga</td><td><?= $tpen->status_hubungan_dalam_keluarga?></td></tr>
                                                        <tr><td>Kewarganegaraan</td><td><?= $tpen->kewarganegaraan?></td></tr>
                                                        <tr><td>No. PASPORT / No. KITAP</td><td><?= $tpen->no_paspor."/".$tpen->no_kitap?></td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php }?>
                                        <hr>
                                        <div class="modal-bootstrap shadow-inner responsive-mg-b-0">
                                            <div class="modal-area-button">
                                                <a class="Danger danger-color" href="<?= base_url('desa/datapenduduk')?>">Kembali</a>
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
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <h1><u><?= strtoupper('Data Diri')?></u></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <center><img src="<?= base_url('asset/img/profile/user.png')?>" alt="" width="70%"></center>
                            <hr>
                            <!-- Persyaratan -->
                            <table id="" data-toggle="table" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama Persyaratan</th>
                                        <th>File Persyaratan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tb_persyaratan as $tper) {?>
                                        <tr>
                                            <td><?= $tper->nama_persyaratan?></td>
                                            <td><a href="<?= base_url('asset/persyaratan/'.$tper->file_persyaratan)?>" target="_blank" rel="noopener noreferrer">Lihat</a></td>
                                            <!-- <td><?= $tpro->nik?></td> -->
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <?php foreach ($tb_profile as $tpro) {?>
                                <!-- Data Diri -->
                                <table id="" data-toggle="table">
                                    <h1>
                                        <tr><td>No. Kartu Keluarga</td> <td><?= $tpro->no_kk?></td></tr>
                                        <tr><td>Nama Lengkap</td> <td><?= $tpro->nama?></td></tr>
                                        <tr><td>No. Induk Kependudukan</td> <td><?= $tpro->nik?></td></tr>
                                        <tr><td>Jenis Kelamin</td> <td><?= $tpro->jenis_kelamin?></td></tr>
                                        <tr><td>Tempat/Tgl. Lahir</td> <td><?= $tpro->tempat_lahir.", ".$tpro->tanggal_lahir?></td></tr>
                                        <tr><td>Agama</td> <td><?= $tpro->agama?></td></tr>
                                        <tr><td>Pendidikan</td> <td><?= $tpro->pendidikan?></td></tr>
                                        <tr><td>Pekerjaan</td> <td><?= $tpro->jenis_pekerjaan?></td></tr>
                                        <tr><td>Golongan Darah</td> <td><?= $tpro->golongan_darah?></td></tr>
                                        <tr><td>Status Perkawinan</td> <td><?= $tpro->status_perkawinan?></td></tr>
                                        <tr><td>Tanggal Perkawinan</td> <td><?= date($tpro->tanggal_perkawinan)?></td></tr>
                                        <tr><td>Status Hubungan Dalam Keluarga</td> <td><?= $tpro->status_hubungan_dalam_keluarga?></td></tr>
                                        <tr><td>Kewarganegaraan</td> <td><?= $tpro->kewarganegaraan?></td></tr>
                                        <tr><td>No. PASPOR / KITAP</td> <td><?= $tpro->no_paspor?> / <?= $tpro->no_kitap?></td></tr>
                                        <tr><td>Nama Ayah / Ibu Kandung</td> <td><?= $tpro->ayah?>/<?= $tpro->ibu?></td></tr>
                                        <tr><td>Alamat Lengkap</td> <td><?= $tpro->alamat." ".$tpro->rukun_tetangga." ".$tpro->rukun_warga." ".$tpro->nama_desa." ".$tpro->kecamatan?></td></tr>
                                        <tr>
                                            <td>Kontak </td> 
                                            <td>+<?= $tpro->no_handphone_aktif?>
                                                <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#Modalkontak<?= $tpro->id_penduduk?>">
                                                    <i class="fa fa-pen btn btn-warning">Update</i>
                                                </a><br><br>
                                                <!-- Update Kontak-->
                                                    <div id="Modalkontak<?= $tpro->id_penduduk?>" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-close-area modal-close-df">
                                                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                                </div>
                                                                <!-- <div class="modal-header text-center">
                                                                Buat Catatan 
                                                                </div> -->
                                                                <div class="modal-body">
                                                                    <form action="<?= base_url('Warga/updatekontak')?>" method="post">
                                                                        <input type="text" name="id_penduduk" value="<?= $tpro->id_penduduk?>" hidden>
                                                                        <input type="tel" class="form-control" name="no_handphone_aktif" required maxlength="20" minlength="13" placeholder="6282128262881" value="<?= $tpro->no_handphone_aktif?>">
                                                                        <hr>
                                                                        <button class="btn btn-md btn-primary" type="submit">Update Kontak</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </td>
                                        </tr>
                                    </h1>
                                </table>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data Penduduk</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                
                            </div>
                            <div class="">
                                <a href="<?= base_url('desa/tambahdatapenduduk')?>" class="btn btn-success">Tambah Data</a>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="nik" >Nomor Induk Keluarga</th>
                                        <th data-field="nama" >Nama Lengkap</th>
                                        <th data-field="jenis_kelamin">Jenis Kelamin</th>
                                        <th data-field="alamat_lengkap">Alamat Lengkap</th>
                                        <th data-field="jenis_pekerjaan" >Jenis Pekerjaan</th>
                                        <th data-field="hp" >No Handphone</th>
                                        <th data-field="akun_penduduk">Akun Penduduk</th>
                                        <th data-field="action">Detail | Ubah | Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($tb_penduduk as $tpen){?>
                                    <tr>
                                        <td><?= $tpen->nik?></td>
                                        <td><?= $tpen->nama?></td>
                                        <td><?= $tpen->jenis_kelamin?></td>
                                        <td><?= $tpen->alamat?> RT/RW <?= $tpen->rukun_tetangga?>/<?= $tpen->rukun_warga?> <?= $tpen->nama_desa?> <?= $tpen->kecamatan?> <?= $tpen->kabupaten?></td>
                                        <td><?= $tpen->jenis_pekerjaan?></td>
                                        <td><?= $tpen->no_handphone_aktif?></td>
                                        <td>
                                            <!-- Generate Akun Penduduk -->
                                            <?php
                                                $id_relasi = $tpen->id_penduduk;
                                                $level = "penduduk";
                                                $user = str_replace(' ', '', $tpen->nama);
                                                $pass = "satudesa24";
                                                $akunrw = $this->db->query("SELECT * FROM `tb_akun` WHERE id_relasi = $id_relasi and level = '$level' ")->result();
                                                $stat_akunrw = $this->db->query("SELECT * FROM `tb_akun` WHERE id_relasi = $id_relasi and level = '$level' ")->num_rows();
                                                // var_dump($akundesa);
                                                if ($stat_akunrw > 0) {
                                                    foreach ($akunrw as $arw) { ?>
                                                        <?= $arw->username;?><br>
                                                        Level : <?= $arw->level;?><br>
                                                        <a href="<?= base_url('desa/hapusakunpenduduk/'.$id_relasi."/".$level)?>" class="btn btn-xs btn-danger" style="color:white;" >
                                                        <i class="fa fa-trash"></i>
                                                        Hapus Akun
                                                    </a>
                                            <?php
                                                    } 
                                                } else { ?>
                                                    <a href="<?= base_url('desa/buatakunpenduduk/'.$id_relasi."/".$user."/".$pass."/".$level)?>" class="btn btn-xs btn-success" style="color:white;" >
                                                        <i class="fa fa-address-card"></i>
                                                        Generate Akun
                                                    </a>
                                            <?php
                                                } ?>
                                        </td>
                                        <td>
                                            <a href="#"><i class="fa fa-info btn btn-info"></i></a>
                                            <!-- <a href="<?= base_url('desa/detail_penduduk/'.$tpen->id_penduduk)?>"><i class="fa fa-info btn btn-info"></i></a> -->
                                            &nbsp;<!-- <hr> -->
                                            <a href="<?= base_url('desa/edit_penduduk/'.$tpen->id_penduduk)?>"><i class="fa fa-edit btn btn-primary"></i></a>
                                            &nbsp;<!-- <hr> -->
                                            <a href="<?= base_url('desa/hapus_penduduk/'.$tpen->id_penduduk)?>"><i class="fa fa-trash btn btn-danger"></i></a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->
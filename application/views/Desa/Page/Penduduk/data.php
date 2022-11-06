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
                                <!-- <select class="form-control dt-tb">
                                    <option value="">Export Dasar</option>
                                    <option value="all">Export Semua</option>
                                    <option value="selected">Export Yang Dipilih</option>
                                </select> -->
                            </div>
                            <div class="">
                                <a href="<?= base_url('AdminDesa/tambahdatapenduduk')?>" class="btn btn-success">Tambah Data</a>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="no_kk" >No Kartu Keluarga</th>
                                        <th data-field="nama" >Nama Lengkap</th>
                                        <th data-field="nik">Nomor Induk Kependudukan</th>
                                        <th data-field="jenis_kelamin">Jenis Kelamin</th>
                                        <th data-field="alamat_lengkap">Alamat Lengkap</th>
                                        <th data-field="jenis_pekerjaan" >Jenis Pekerjaan</th>
                                        <th data-field="WNI/WNA" >WNI/WNA</th>
                                        <th data-field="hp" >No Handphone</th>
                                        <th data-field="action">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($tb_penduduk as $tpen){?>
                                    <tr>
                                        <td><?= $tpen->no_kk?></td>
                                        <td><?= $tpen->nama?></td>
                                        <td><?= $tpen->nik?></td>
                                        <!-- <td><?= $tpen->tempat_lahir?>, <?= $tpen->tanggal_lahir?></td> -->
                                        <td><?= $tpen->jenis_kelamin?></td>
                                        <td><?= $tpen->alamat?> <?= $tpen->rukun_tetangga?>/<?= $tpen->rukun_warga?> <?= $tpen->nama_desa?> <?= $tpen->kecamatan?> <?= $tpen->kabupaten?></td>
                                        <!-- <td><?= $tpen->agama?></td>
                                        <td><?= $tpen->status_perkawinan?></td> -->
                                        <td><?= $tpen->jenis_pekerjaan?></td>
                                        <td><?= $tpen->kewarganegaraan?></td>
                                        <!-- <td><?= $tpen->status_dikeluarga?></td> -->
                                        <td><?= $tpen->no_handphone_aktif?></td>
                                        <td>
                                            <a href="<?= base_url('AdminDesa/edit_penduduk/'.$tpen->id_penduduk)?>"><i class="fa fa-edit btn btn-primary"> Ubah</i></a>
                                            <br><br>
                                            <a href="<?= base_url('AdminDesa/hapus_penduduk/'.$tpen->id_penduduk)?>"><i class="fa fa-trash btn btn-danger"> Hapus</i></a>
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
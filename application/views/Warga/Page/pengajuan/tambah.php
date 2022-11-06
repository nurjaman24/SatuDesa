<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <!-- Jenis Pengajuan tersedia -->        
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="admin-pro-accordion-wrap shadow-inner">
                    <div class="sparkline12-list">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h3>Jenis pengajuan yang tersedia</h3>
                                <p>Silakan upload persyaratan di form yang tersedia!!</p>
                            </div>
                        </div>    
                        <div class="panel-group edu-custon-design" id="accordion2">
                            <?php foreach ($tb_jenis_dokumen as $tjd) { ?>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-head">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse<?= $tjd->id_jenis?>">
                                            <h5><?= $tjd->jenis_dokumen?></h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse<?= $tjd->id_jenis?>" class="panel-collapse panel-ic collapse">
                                    <div class="panel-body admin-panel-content animated flash">
                                        Persyaratan : 
                                        <pre>
                                        <?= $tjd->persyaratan?>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulir Pengajuan -->
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="sparkline12-list">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Buat Pengajuan Dokumen</h1>
                        </div>
                    </div>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                        <?php
                                            foreach ($tb_profile as $tpro);
                                            date_default_timezone_set('Asia/Jakarta');
                                            $datetime = date('d-m-Y H:i:s');
                                            $date = date('d-m-Y');
                                        ?>
                                        <form action="<?= base_url('Warga/prosestambahpengajuandokumen')?>" method="post">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Tanggal Pengajuan <code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" required value="<?= $date?>" readonly/>
                                                        <input type="hidden" class="form-control" name="tgl_pengajuan" required value="<?= $datetime?>" readonly/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Nama Lengkap<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <select name="id_penduduk" id="id_penduduk" class="form-control" readonly>
                                                            <option value="<?= $tpro->id_penduduk?>"><?= $tpro->nama?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Nama Desa<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <select name="id_desa" id="id_desa" class="form-control" readonly>
                                                            <option value="<?= $tpro->id_desa?>"><?= $tpro->nama_desa?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Jenis Dokumen<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <select name="id_jenis" id="id_jenis" class="form-control">
                                                            <?php foreach ($tb_jenis_dokumen as $tjd) { ?>
                                                                <option value="<?= $tjd->id_jenis?>">
                                                                    <?= $tjd->jenis_dokumen?>
                                                                </option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Penyerahan<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="hidden" name="status_pengajuan" value="Dalam Proses">
                                                        <select name="penyerahan_dokumen" id="penyerahan_dokumen" class="form-control">
                                                            <option value="Ambil Sendiri">Ambil Sendiri (GRATIS)</option>
                                                            <option value="Diantar Ke Rumah">Diantar Ke Rumah (Rp. 10.000)</option>
                                                            <option value="Diantar Ke Luar Desa">
                                                                Diantar Ke Luar Desa (Konfirmasi ke Admin)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Konfirmasi ke Admin</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <?php
                                                            $NoWhatApps = $tpro->telepon_desa;
                                                            $pesan = 'Hallo Admin, saya mau konsultasi.';
                                                        ?>
                                                    <a  class='btn btn-success' href='https://api.whatsapp.com/send?phone=<?= $NoWhatApps?>&text=<?= $pesan?>'>Klik Disini</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
                                                <div class="modal-area-button">
                                                    <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">
                                                        <i class="fa fa-send"></i>
                                                        Ajukan Dokumen
                                                    </a>
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
                                                            <h4>Pastikan semua data sudah terisi dengan benar !!</h4>
                                                            <code>Harap lengkapi persyaratan terlebih dahulu sebelum mengajukan dokumen</code>
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
        <br>
        <div class="row">
            <!-- Formulir Persyaratan -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <!-- <h1>Data Persyaratan</h1> -->
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div class="">
                                <a href="<?= base_url('Warga/tambahpersyaratan')?>" class="btn btn-success">Tambah Data</a>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="nama_per" >Nama Persyaratan</th>
                                        <th data-field="file" >File Persyaratan</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($tb_persyaratan as $tak){?>
                                    <tr>
                                        <td></td>
                                        <td><?= $tak->nama_persyaratan?></td>
                                        <td>
                                            <a href="<?= base_url('asset/persyaratan/'.$tak->file_persyaratan)?>" 
                                                target="_blank" rel="noopener noreferrer" >
                                                <button class="btn btn-primary btn-sm">
                                                Lihat File
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="" href="#" data-toggle="modal" data-target="#<?= $tak->id_persyaratan?>">
                                                <i class="btn btn-danger fa fa-trash text-white"></i>
                                            </a>
                                            <div id="<?= $tak->id_persyaratan?>" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <span class="educate-icon educate-danger modal-check-pro information-icon-pro"></span>
                                                            <h1>Yakin ingin menghapus data ini?</h1>
                                                            <code>Data akan dihapus secara permanent</code>
                                                        </div>
                                                        <div class="modal-footer danger-md text-white">
                                                            <a href="<?= base_url('warga/hapus_persyaratan/'.$tak->id_persyaratan)?>" class="">
                                                                <i class="fa fa-trash">
                                                                    Tetap Hapus
                                                                </i>    
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="" class="modal modal-edu-general default-popup-DangerModal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <i class="educate-icon educate-danger modal-check-pro information-icon-pro"></i>
                                                            
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
<div class="basic-form-area mg-b-15">
            <div class="container-fluid">
      <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Tambah Data Jenis Dokumen</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">

                                                <form action="<?= base_url('AdminDesa/prosestambahjenisdokumen')?>" method="post">
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Jenis Dokumen <code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <?php 
                                                                $array = array(
                                                                    'SURAT KETERANGAN DOMISILI',
                                                                    'SURAT KETERANGAN BELUM MENIKAH',
                                                                    'SURAT KETERANGAN MENIKAH',
                                                                    'SURAT KETERANGAN USAHA',
                                                                    'SURAT KETERANGAN KELAHIRAN',
                                                                    'SURAT KETERANGAN KEMATIAN',
                                                                    // Belum ada Template
                                                                    'SURAT UPCPK',
                                                                    'SURAT KETERANGAN KEPEMILIKAN TANAH',
                                                                    'SURAT KETERANGAN KEHILANGAN',
                                                                    'SURAT KETERANGAN MATI SUAMI/ISTRI',
                                                                    'SURAT KETERANGAN BEDA IDENTITAS',
                                                                    'SURAT SKCK',
                                                                    'SURAT KETERANGAN TIDAK MAMPU',
                                                                    'SURAT KETERANGAN KERAMAIAN',
                                                                    'SURAT PINDAH',
                                                                    'SURAT KETERANGAN LAINNYA',                                        
                                                                    // 'SURAT KETERANGAN PENGANTAR BARANG',
                                                                    // 'SURAT KETERANGAN PENGANTAR TERNAK',
                                                                    // 'SURAT KETERANGAN RUMAH TANGGAN MISKIN SEKALI',
                                                                    // 'SURAT KETERANGAN PENGHASILAN ORANG TUA',
                                                                    // 'PERMOHONAN IZIN KERAMAIAN PESTA',
                                                                    // 'SURAT KETERANGAN AHLI WARIS',
                                                                    // 'SURAT KETERANGAN BEPERGIAN',
                                                                    // 'SURAT KETERANGAN TIDAK BERADA DI TEMPAT',
                                                                );
                                                                foreach($tb_jenis_dokumen as $tjd){                                                                    
                                                                    if (in_array($tjd->jenis_dokumen, $array)) 
                                                                    {
                                                                        unset($array[array_search($tjd->jenis_dokumen,$array)]);
                                                                    }
                                                                }
                                                            ?>
                                                                <select name="jenis_dokumen" class="form-control" required>
                                                                <?php foreach ($array as $data) {?>
                                                                    <option value="<?= $data?>"><?= $data?></option>                                                                    
                                                                <?php }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Persyaratan<code>*</code></label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea name="persyaratan" class="form-control" cols="30" rows="10" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
                                                        <div class="modal-area-button">
                                                            <a class="Danger danger-color" href="<?= base_url('AdminDesa/Jenisdokumen')?>">Kembali</a>
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
<!-- Dokumen -->
    <!-- Pilih Jenis Dokumen -->
    <?php include("Pilih_Jenis_Dokumen.php"); ?>
    <!-- Cek Status Pengajuan -->
    <?php 
        // Jika Template Tersedia
        if (!empty($jenisfungsicetak)) {
            // Jika Status Pengajuan Selesai
                if ($tpeng->status_pengajuan == "Selesai") { ?>
                    <!-- Cetak Dokumen -->
                        <a class="Primary mg-b-10" href="<?= base_url('CetakDokumen/'.$jenisfungsicetak."/".$tpeng->token_surat)?>" title="klik untuk mencetak dokumen" target="_blank">
                            <i class="btn btn-default fa fa-print" title="Klik untuk mencetak dokumen"> Cetak</i>
                        </a>
                        <br>
                        <br>
                        <?php 
                } 
            // Jika Status Pengajuan Dalam Proses
                elseif ($tpeng->status_pengajuan == "Dalam Proses"){ ?>
                    <!-- Buat Dokumen -->
                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#ModalBuatDokumen<?= $tpeng->id_pengajuan?>">
                            <i class="btn btn-danger fa fa-file" title="Klik untuk membuat dokumen"> Buat</i>
                        </a><br><br>
                    <!-- Modal Buat Dokumen -->
                        <div id="ModalBuatDokumen<?= $tpeng->id_pengajuan?>" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Tombol Close -->
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    <!-- Header Modal Untuk Label Jenis Dokumen -->
                                        <div class="modal-header text-center">
                                            Membuat Dokumen 
                                            <br>
                                            <b><?= $tpeng->jenis_dokumen?></b>
                                        </div>
                                    <!-- Body Modal Untuk Formulir Dokumen-->
                                    <div class="modal-body">
                                        <!-- FORMULIR DOKUMEN -->
                                        <form action="<?= base_url('AdminDesa/buatdokumen')?>" method="post">   
                                            <!-- Pilih Tabel Penyimpanan -->
                                                <div>
                                                    <!-- Tambahkan Script Untuk Memilih Tabel Penyimpanan Data -->
                                                    <?php include("Pilih_Tabel_Penyimpanan.php"); ?>
                                                    <!-- Input Nama Tabel Penyimpanan-->
                                                    <input type="hidden" class="form-control" name="nama_tabel" required value="<?= $nama_tabel?>"/>
                                                    <!-- Input ID Pengajuan -->
                                                    <input type="hidden" class="form-control" name="id_pengajuan" required value="<?= $tpeng->id_pengajuan?>"/>
                                                    <!-- Input Token Surat -->
                                                    <input type="hidden" class="form-control" name="token_surat" required value="<?= $token_surat?>"/>
                                                </div>     
                                            <!-- Nama Desa -->
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <label class="login2 pull-left pull-left-pro">Nama Desa/Kelurahan <code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="id_desa" required maxlength="" >
                                                                <option value="<?= $tpeng->id_desa?>"><?= $tpeng->nama_desa?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Nama Penduduk -->
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <label class="login2 pull-left pull-left-pro">NIK | Nama Penduduk <code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="id_penduduk" required maxlength="" >
                                                                <option value="<?= $tpeng->id_penduduk?>"><?= $tpeng->nik?> | <?= $tpeng->nama?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Nomor Surat -->
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <label class="login2 pull-left pull-left-pro">Nomor Surat<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                        <input type="text" class="form-control" name="nomor_surat" required maxlength="40" placeholder="Format menyesuaikan dari desa"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tgl. Keluar Surat -->
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <label class="login2 pull-left pull-left-pro">Tempat dikeluarkan, Tanggal Keluar<code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <input type="text" class="form-control " name="tempat_keluar" required maxlength="20" placeholder="Tempat dikeluarkan, "/>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <input type="text" class="form-control " name="tanggal_keluar" required maxlength="20" placeholder="Tanggal Bulan Tahun" autocomplite/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Include Formulir Tambahan Sesuai Jenis Dokumen -->
                                            <?php 
                                                include("Template_Form_Tambahan.php");
                                            ?>
                                            <!-- Button Buat Dokumen-->
                                            <div class="modal-area-button">
                                                <button class="btn btn-md btn-primary" type="submit">
                                                    <i class="fa fa-send"></i>
                                                    Buat Dokumen
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                }
        }
        // Jika Template Tidak Tersedia
        else{
            // Jika Status Pengajuan Selesai 
                if ($tpeng->status_pengajuan == "Selesai") {
                    $btncolor = "primary";
                }
            // Jika Status Pengajuan Dalam Proses
                elseif ($tpeng->status_pengajuan == "Dalam Proses") {
                    $btncolor = "danger";
                } ?>
            <!-- Tombol Untuk Mengupdate Status Pengajuan -->
                <a class="Primary mg-b-10" href="<?= base_url("AdminDesa/dokumenselesai/".$tpeng->id_pengajuan."/".$tpeng->status_pengajuan."/".$token_surat)?>">
                    <i class="btn btn-<?= $btncolor?> fa fa-file" title="Klik untuk membuat dokumen"> <?= $tpeng->status_pengajuan?></i>
                </a>
                <br>
                <br>
            <?php 
        } 
    ?>
<!-- Dokumen [../END]-->
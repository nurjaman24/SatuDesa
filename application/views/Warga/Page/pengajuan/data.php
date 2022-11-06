<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Pengajuan Administrasi Warga</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <!-- <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Dasar</option>
                                    <option value="all">Export Semua</option>
                                    <option value="selected">Export Yang Dipilih</option>
                                </select>
                            </div> -->
                            <div class="">
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="jenis_dokumen">Tanggal Pengajuan</th>
                                        <th data-field="id_penduduk" >Detail Pengajuan</th>
                                        <th data-field="keterangan" >Keterangan</th>
                                        <th data-field="status_pengajuan" >Status Pengajuan</th>
                                        <th data-field="aksi" >Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($tb_pengajuan as $tpeng){
                                        $token_surat = "TKSN".$tpeng->id_pengajuan.$tpeng->id_penduduk.$tpeng->id_desa.$tpeng->id_jenis;
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td><?=  $tpeng->tgl_pengajuan?></td>
                                        <td>
                                            NIK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $tpeng->nik?><br>
                                            Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $tpeng->nama?><br>
                                            <?= $tpeng->nama_desa?><br>
                                            <!-- <?= $tpeng->nama_kepala_desa?><br> -->
                                            <hr>
                                            <?= $tpeng->jenis_dokumen?>
                                        </td>
                                        <td>
                                            Catatan : <br>
                                            <?= $tpeng->keterangan?>
                                        </td>
                                        <td>
                                            <?= $tpeng->status_pengajuan?><br>
                                            <?php
                                                if (empty($tpeng->token_surat)) {
                                                    
                                                } else {
                                                    echo "<small><code>$tpeng->token_surat</code></small><br>";
                                                }
                                            ?>
                                            <hr>
                                            <?= $tpeng->penyerahan_dokumen?>
                                            <?php 
                                            if ($tpeng->penyerahan_dokumen == "Diantar Ke Luar Desa"){
                                                
                                            } else {
                                              echo "($tpeng->biaya)";  
                                            }
                                            ?>
                                            
                                        </td>
                                        <td>
                                            <!-- Tambah Catatan -->
                                                <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#ModalCatatan<?= $tpeng->id_pengajuan?>">
                                                    <i class="fa fa-plus btn btn-success"> Tambah Catatan</i>
                                                </a><br><br>
                                                <!-- Modal Catatan-->
                                                    <div id="ModalCatatan<?= $tpeng->id_pengajuan?>" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-close-area modal-close-df">
                                                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                                </div>
                                                                <div class="modal-header text-center">
                                                                Buat Catatan 
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?= base_url('Warga/simpancatatan')?>" method="post">
                                                                        <input type="text" name="id_pengajuan" value="<?= $tpeng->id_pengajuan?>" hidden>
                                                                        <textarea name="keterangan" id="keterangan" class="form-control" cols="50" rows="10"><?= $tpeng->keterangan?></textarea>
                                                                        <br>
                                                                        <button class="btn btn-md btn-primary" type="submit">Kirim Catatan</button>
                                                                    </form>
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
<!-- Static Table End -->
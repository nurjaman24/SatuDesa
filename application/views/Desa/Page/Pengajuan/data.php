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
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"
                                    data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" 
                                    data-resizable="false" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" 
                                    data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="tanggal_pengajuan">Tanggal Pengajuan</th>
                                        <th data-field="detail_pengajuan" >Detail Pengajuan</th>
                                        <th data-field="keterangan" >Keterangan</th>
                                        <th data-field="status_pengajuan" >Status Pengajuan</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($tb_pengajuan as $tpeng){
                                        $token_surat = "TKSN".$tpeng->id_pengajuan.$tpeng->id_penduduk.$tpeng->id_desa.$tpeng->id_jenis;
                                    ?>
                                    <tr>
                                        <!-- Tanggal Pengajuan -->
                                        <td><?=  $tpeng->tgl_pengajuan?></td>
                                        <!-- Detail Pengajuan -->
                                        <td>
                                            NIK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $tpeng->nik?><br>
                                            Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $tpeng->nama?><br>
                                            <?= $tpeng->nama_desa?><br>
                                            <!-- <?= $tpeng->nama_kepala_desa?><br> -->
                                            <hr>
                                            <?= $tpeng->jenis_dokumen?>
                                        </td>
                                        <!-- Keterangan -->
                                        <td>
                                            <pre>
                                                <?= $tpeng->persyaratan?>
                                            </pre>
                                            <hr>
                                            Catatan : <br>
                                            <?= $tpeng->keterangan?>
                                        </td>
                                        <!-- Status Pengajuan -->
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
                                        <!-- Action -->
                                        <td>
                                            <?php
                                            include("Action/Button_Tambah_Catatan.php");
                                            include("Action/Lihat_Persyaratan.php");
                                            include("Action/Buat_Dokumen.php");
                                            ?>
                                                <hr>
                                                <?php 
                                                    $pesan = "Dokumen anda sudah selesai.";
                                                ?>
                                                <a  class="btn btn-sm btn-success" style="width:100%;"
                                                    href="https://api.whatsapp.com/send?phone=<?= $tpeng->no_handphone_aktif?>&text=<?= $pesan?>"
                                                    target="_blank">
                                                    <i class="fa fa-whatsapp" style="color:white;">
                                                    <b>  Via WhatsApp</b>
                                                    </i>    
                                                </a>
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
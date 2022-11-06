<!-- Lihat Persyaratan -->
    <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#ModalPersyaratan<?= $tpeng->id_penduduk?>">
        <i class="btn btn-primary fa fa-eye" title="Lihat persyaratan "> Lihat</i>
    </a>
<!-- Modal Persyaratan -->
    <div id="ModalPersyaratan<?= $tpeng->id_penduduk?>" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
                <div class="modal-header text-center">
                Persyaratan Penduduk atas Nama : <?= $tpeng->nama?>, dengan NIK <?= $tpeng->nik?>
                </div>
                <div class="modal-body">
                    <table class="table-hover">
                        <tbody>
                            <?php 
                                $tb_persyaratan = $this->db->query("SELECT * FROM `tb_persyaratan` Where id_penduduk = $tpeng->id_penduduk")->result();
                                foreach($tb_persyaratan as $tper){
                            ?>
                                <tr>
                                    <td><?= $tper->nama_persyaratan?></td>
                                    <td>:</td>
                                    <td>
                                        <a href="<?= base_url('asset/persyaratan/').$tper->file_persyaratan ?>" target="_blank">
                                            <i class="btn btn-primary fa fa-eye" title="Lihat persyaratan "> Lihat</i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- Tambah Catatan -->
    <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#ModalCatatan<?= $tpeng->id_pengajuan?>">
        <i class="fa fa-plus btn btn-success" title="Klik untuk membuat catatan"> Catatan</i>
    </a>
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
                    <form action="<?= base_url('AdminDesa/simpancatatan')?>" method="post">
                        <input type="text" name="id_pengajuan" value="<?= $tpeng->id_pengajuan?>" hidden>
                        <textarea name="keterangan" id="keterangan" class="form-control" cols="50" rows="10"><?= $tpeng->keterangan?></textarea>
                        <br>
                        <button class="btn btn-md btn-primary" type="submit">Kirim Catatan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
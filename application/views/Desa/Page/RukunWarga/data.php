<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Rukun Warga</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                            </div>
                            <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#ModalRw">
                                <i class="btn btn-primary fa fa-plus"> Tambah Data Rukun Warga</i>
                            </a>
                            <div id="ModalRw" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('desa/prosestambahrw')?>" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <select name="id_desa" id="id_desa" class="form-control" required>
                                                            <?php foreach ($tb_desa as $td) { ?>
                                                                <option value="<?= $td->id_desa?>"><?= $td->nama_desa?></option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <input type="text" name="identitas" placeholder="Identitas" class="form-control" maxlength="20" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <input type="text" name="rukun_warga" placeholder="Rukun Warga" class="form-control" maxlength="10" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <input type="text" name="nama_ketua_rw" placeholder="Ketua Rukun Warga" class="form-control" maxlength="20" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <input type="text" name="nip_nik" placeholder="NIP / NIK" class="form-control" maxlength="16" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row text-left">
                                                    <div class="col-lg-4 col-md-4">
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Kirim</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="nama_desa">Nama Desa</th>
                                        <th data-field="identitas" >Identitas</th>
                                        <th data-field="rukun_warga" >RW</th>
                                        <th data-field="ketua_rw" >Ketua RW</th>
                                        <th data-field="nip/nik" >NIP/NIK</th>
                                        <th data-field="akun_rw" >Akun RW</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($tb_rukun_warga as $trw){?>
                                    <tr>
                                        <td><?=  $trw->nama_desa?></td>
                                        <td><?=  $trw->identitas?></td>
                                        <td><?=  $trw->rukun_warga?></td>
                                        <td><?=  $trw->nama_ketua_rw?></td>
                                        <td><?=  $trw->nip_nik?></td>
                                        <td>
                                            <?php
                                                $id_relasi = $trw->id_rukun_warga;
                                                $level = "rw";
                                                $user = str_replace(' ', '', $trw->identitas);
                                                $pass = "satudesa24";
                                                $akunrw = $this->db->query("SELECT * FROM `tb_akun` WHERE id_relasi = $id_relasi and level = '$level' ")->result();
                                                $stat_akunrw = $this->db->query("SELECT * FROM `tb_akun` WHERE id_relasi = $id_relasi and level = '$level' ")->num_rows();
                                                // var_dump($akundesa);
                                                if ($stat_akunrw > 0) {
                                                    foreach ($akunrw as $arw) { ?>
                                                        <?= $arw->username;?><br>
                                                        Level : <?= $arw->level;?><br>
                                                        <a href="<?= base_url('desa/hapusakunrw/'.$id_relasi."/".$level)?>" class="btn btn-xs btn-danger" style="color:white;" >
                                                        <i class="fa fa-trash"></i>
                                                        Hapus Akun
                                                    </a>
                                            <?php
                                                    } 
                                                } else { ?>
                                                    <a href="<?= base_url('desa/buatakunrw/'.$id_relasi."/".$user."/".$pass."/".$level)?>" class="btn btn-xs btn-success" style="color:white;" >
                                                        <i class="fa fa-address-card"></i>
                                                        Generate Akun
                                                    </a>
                                            <?php
                                                } ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('desa/edit_rw/'.$trw->id_rukun_warga)?>"><i class="fa fa-edit btn btn-sm btn-primary"> Ubah</i></a> 
                                            <a href="<?= base_url('desa/hapus_rw/'.$trw->id_rukun_warga)?>"><i class="fa fa-trash btn btn-sm btn-danger"> Hapus</i></a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            <i><small style="font-size: 12px;"><code><b>Note : </b>Default password akun Rukun Warga "satudesa24"</code></small></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->
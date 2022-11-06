<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data Desa</h1>
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
                                <a href="<?= base_url('admin/tambahdatadesa')?>" class="btn btn-success">Tambah Data</a>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <!-- <th data-field="state" data-checkbox="true"></th> -->
                                        <th data-field="data_desa" data-editable="false">Logo Desa</th>
                                        <th data-field="nama_desa" data-editable="false">Data Desa</th>
                                        <th data-field="alamat_desa" data-editable="false">Alamat Desa</th>
                                        <th data-field="email_desa" data-editable="false">Kontak Desa</th>
                                        <th data-field="telepon_desa" data-editable="false">Akun Desa</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($tb_desa as $td){?>
                                    <tr>
                                        <!-- <td></td> -->
                                        <td>
                                            <center>
                                                <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#ModalLogo<?= $td->id_desa?>">
                                                    <?php if (empty($td->logo_desa)) {?>
                                                        <i class="btn btn-primary fa fa-eye"> </i>
                                                    <?php } else { ?>
                                                        <img src="<?= base_url('asset/img/logo/'.$td->logo_desa)?>" alt="<?= $td->logo_desa?>" width="40%">
                                                    <?php } ?>
                                                </a>
                                                <div id="ModalLogo<?= $td->id_desa?>" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php if (empty($td->logo_desa)) {?>
                                                                    <!-- Upload -->
                                                                    <?= form_open_multipart('Admin/upload_logo_desa'); ?>
                                                                        <div class="row">
                                                                            <div class="col-lg-10 col-md-10">
                                                                                <input type="hidden" name="id_desa" value="<?= $td->id_desa?>">
                                                                                <input type="file" name="upload_logo_desa" id="upload_logo_desa" class="form-control" required>
                                                                            </div>
                                                                            <div class="col-lg-2 col-md-2">
                                                                                <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
                                                                            </div>
                                                                        </div>
                                                                    <?php form_close();?>
                                                                <?php } else { ?>
                                                                    <img src="<?= base_url('asset/img/logo/'.$td->logo_desa)?>" alt="<?= $td->logo_desa?>" width="50%">
                                                                    <hr>
                                                                    <a href="<?= base_url('Admin/hapus_file_logo/'.$td->id_desa)?>">
                                                                        <span class="btn btn-danger text-white">
                                                                            <i class="fa fa-trash"></i> Hapus File
                                                                        </span>
                                                                    </a>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>
                                        </td>
                                        <td>
                                            <b><?= $td->nama_desa?></b><br>
                                            <b><?= $td->nama_kepala_desa?></b>
                                        </td>
                                        <td><?=  strtoupper($td->alamat_desa." ".$td->kecamatan_desa." ".$td->kabupaten_desa)?></td>
                                        <td><a href="https://<?= $td->email_desa?>" target="_blank" ><?= $td->email_desa?></a><br>
                                            <?= $td->telepon_desa?>
                                        </td>
                                        <td>
                                            <?php
                                                $id_relasi = $td->id_desa;
                                                $level = "desa";
                                                $user = str_replace(' ', '', $td->nama_desa);
                                                $pass = "satudesa24";
                                                $akundesa = $this->db->query("SELECT * FROM `tb_akun` WHERE id_relasi = $id_relasi and level = '$level' ")->result();
                                                $stat_akundesa = $this->db->query("SELECT * FROM `tb_akun` WHERE id_relasi = $id_relasi and level = '$level' ")->num_rows();
                                                // var_dump($akundesa);
                                                if ($stat_akundesa > 0) {
                                                    foreach ($akundesa as $ad) { ?>
                                                        <?= $ad->username;?><br>
                                                        Level : <?= $ad->level;?><br>
                                                        <a href="<?= base_url('admin/hapusakundesa/'.$id_relasi."/".$level)?>" class="btn btn-xs btn-danger" style="color:white;" >
                                                        <i class="fa fa-trash"></i>
                                                        Hapus Akun
                                                    </a>
                                            <?php
                                                    } 
                                                } else { ?>
                                                    <a href="<?= base_url('admin/buatakundesa/'.$id_relasi."/".$user."/".$pass."/".$level)?>" class="btn btn-xs btn-success" style="color:white;" >
                                                        <i class="fa fa-address-card"></i>
                                                        Generate Akun
                                                    </a>
                                            <?php
                                                } ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('admin/edit_desa/'.$td->id_desa)?>"><i class="fa fa-edit btn btn-warning"></i></a>
                                            <hr>
                                            <a href="<?= base_url('admin/hapus_desa/'.$td->id_desa)?>"><i class="fa fa-trash btn btn-danger"></i></a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            <i><small style="font-size: 12px;"><code><b>Note : </b>Default password akun desa "satudesa24"</code></small></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->
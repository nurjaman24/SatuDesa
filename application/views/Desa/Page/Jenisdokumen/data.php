<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Jenis Dokumen</h1>
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
                                <a href="<?= base_url('AdminDesa/tambahdatajenisdokumen')?>" class="btn btn-success">Tambah Data</a>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <!-- <th data-field="state" data-checkbox="true"></th> -->
                                        <th data-field="jenis_dokumen">Jenis Dokumen</th>
                                        <th data-field="persyaratan" >Persyaratan</th>
                                        <th data-field="action">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($tb_jenis_dokumen as $tjd){?>
                                    <tr>
                                        <!-- <td></td> -->
                                        <td><?=  $tjd->jenis_dokumen?></td>
                                        <td>
                                            <pre>
                                            <?= $tjd->persyaratan?>
                                            </pre>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('AdminDesa/edit_jenis/'.$tjd->id_jenis)?>"><i class="fa fa-edit btn btn-primary"> Ubah</i></a> 
                                            <a href="<?= base_url('AdminDesa/hapus_jenis/'.$tjd->id_jenis)?>"><i class="fa fa-trash btn btn-danger"> Hapus</i></a>
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
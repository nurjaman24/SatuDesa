<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data Persyaratan</h1>
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
                                            <a href="<?= base_url('warga/hapus_persyaratan/'.$tak->id_persyaratan)?>"><i class="fa fa-trash btn btn-danger"></i></a>
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
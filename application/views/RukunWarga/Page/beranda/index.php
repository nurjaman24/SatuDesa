<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <h1><u><?= strtoupper('Data Diri')?></u></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <center><img src="<?= base_url('asset/img/profile/user.png')?>" alt="" width="70%"></center>
                            <hr>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <?php foreach ($tb_profile as $tpro) {?>
                                <!-- Data Diri -->
                                <table id="" data-toggle="table">
                                    <h1>
                                        <tr><td class="col-lg-4">Nama Desa</td> <td><?= $tpro->nama_desa?></td></tr>
                                        <tr><td>Nama Kepala Desa</td> <td><?= $tpro->nama_kepala_desa?></td></tr>
                                        <tr><td>Alamat Kantor Desa</td> <td><?= $tpro->alamat_desa." ".$tpro->kecamatan_desa." ".$tpro->kabupaten_desa?></td></tr>
                                        <tr><td>Alamat Email Desa</td> <td><?= $tpro->email_desa?></td></tr>
                                        <tr><td>Kontak Desa</td> <td><?= $tpro->telepon_desa?></td></tr>
                                        <tr><td>Indentitas RW</td> <td><?= $tpro->rukun_warga. " - ".$tpro->identitas."<br>".$tpro->nip_nik." - ".$tpro->nama_ketua_rw?></td></tr>
                                    </h1>
                                </table>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
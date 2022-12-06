<div class="container-fluid">
    <div class="row" style="margin-top:2%;margin-left:1%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
                <?php foreach ($tb_desa as $tdes) {?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <h1><u><?= strtoupper($tdes->nama_desa)?></u></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <img src="<?= base_url('asset/img/logo/'.$tdes->logo_desa)?>" alt="" srcset="">
                            </div>
                            <!-- Data Desa -->
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <table id="" data-toggle="table" >
                                    <h1>
                                        <tr><td>Nama Kepala Desa</td><td>:</td><td><?= $tdes->nama_kepala_desa?></td></tr>
                                        <tr><td>Alamat Kantor Desa</td><td>:</td><td><?= $tdes->alamat_desa?></td></tr>
                                        <tr><td>Kecamatan</td><td>:</td><td><?= ucwords(strtolower($tdes->kecamatan_desa))?></td></tr>
                                        <tr><td>Kabupaten</td><td>:</td><td><?= ucwords(strtolower($tdes->kabupaten_desa))?></td></tr>
                                        <tr><td>Alamat Email</td><td>:</td><td><?= $tdes->email_desa?></td></tr>
                                        <tr><td>No. Telepon</td><td>:</td><td>+<?= $tdes->telepon_desa?></td></tr>
                                    </h1>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:1%;margin-left:1%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
                <div class="container-fluid">
                    <h4>>> Rekapitulasi Pengajuan</h4>                    
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:1%;margin-left:1%;margin-bottom:1%;">
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Jenis Dokumen</h5>
                                <h2><span class="counter">1145</span> Item<span class="tuition-fees"></span></h2>
                                <!-- <a href="<?= base_url("admin/grafikrekapitulasi/".$desa->id_desa)?>" class="btn btn-primary ">Lihat Grafik</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
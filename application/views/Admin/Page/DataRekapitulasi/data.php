<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Rekapitulasi Transaksi Desa</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:2%;margin-left:1%;">
                    <div class="analytics-sparkle-area">
                        <div class="container-fluid">
                            <div class="row">
                                <?php foreach ($tb_desa as $desa) { ?>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="analytics-sparkle-line reso-mg-b-30">
                                            <div class="analytics-content">
                                                <h5><?= $desa->nama_desa?></h5>
                                                <?php
                                                    $n_penduduk = $this->db->query("SELECT COUNT(id_penduduk) AS jumlah FROM `tb_penduduk` WHERE id_desa = '$desa->id_desa'")->result();
                                                    foreach ($n_penduduk as $Penduduk);
                                                ?>
                                                <h2><span class="counter"><?= $Penduduk->jumlah?></span> Jiwa <span class="tuition-fees">Penduduk</span></h2>
                                                <a href="<?= base_url("admin/grafikrekapitulasi")?>" class="btn btn-primary ">Lihat Grafik</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->
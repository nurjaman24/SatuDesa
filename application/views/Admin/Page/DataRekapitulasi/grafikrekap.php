<div class="charts-area mg-b-15">
    <div class="container-fluid">
        <div class="row" style="margin-left:1%;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="charts-single-pro responsive-mg-b-30">
                    <div class="alert-title">
                        <h2>Grafik</h2>
                        <p>Rekapitulasi Transaksi Desa</p>
                        <code>
                            Note : JS Grafik Ada di Footer.php <br><br>
                            Tugas Buat Pemanggilan data dari database <br><br>
                            SQL Uji Coba :<br><br>
                            <pre>SELECT id_pengajuan, tgl_pengajuan, nama, nama_desa, jenis_dokumen FROM `tb_pengajuan` INNER JOIN tb_penduduk ON tb_pengajuan.id_penduduk = tb_penduduk.id_penduduk JOIN tb_desa ON tb_penduduk.id_desa = tb_desa.id_desa JOIN tb_jenis_dokumen ON tb_pengajuan.id_jenis = tb_jenis_dokumen.id_jenis WHERE tb_penduduk.id_desa = 1;</pre>
                            
                        </code>
                    </div>
                    <div id="bar1-chart">
                        <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                        <canvas id="GrafikRekap" width="" height="160" style="display: block; width: 505px; height: 252px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
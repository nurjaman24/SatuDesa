<?php foreach ($tb_skelahiran as $tsdom) { ?>
    <div class="container-fluid">
        <div class="" 
            style="
                text-align:left;
                color:black;
                background-color:white;
                padding: 2.54cm 2.54cm 2.54cm 2.54cm;
                font-family:'Times New Roman', Times, serif;
            ">
            <!-- KOP SURAT -->
                <div class="row" style="
                    margin: 0.05cm 0.05cm 0.05cm 0.05cm;
                    text-align:center;
                ">
                    <!-- Logo -->
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <img src="<?= base_url('asset/img/logo/'.$tsdom->logo_desa)?>" width="100%">
                    </div>
                    <!-- Idensitas Desa -->
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <font style="font-size:24pt;"><b>PEMERINTAH DAERAH <?= strtoupper($tsdom->kabupaten_desa)?></b></font><br>
                        <font style="font-size:18pt;"><?= strtoupper($tsdom->kecamatan_desa)?></font><br>
                        <font style="font-size:24pt;"><b><?= strtoupper($tsdom->nama_desa)?></b></font><br>
                        <font style="font-size:18pt;"><?= ucwords($tsdom->alamat_desa)?></font><br>
                    </div>
                </div>
            <!-- /KOP SURAT -->
            <hr color="black">
            <br>

            <div style="
                text-align:center;
                font-weight:bold
            ">
                <b><u><font style="font-size:18pt;">SURAT KETERANGAN KELAHIRAN</font></u></b><br>
                <font style="font-size:18pt;">Nomor: <?= $tsdom->nomor_surat?></font><br>
            </div>
            <br>

            <div style="text-align:justify;">
            <p style="font-size:20pt;">
                    <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                    Yang bertanda tangan di bawah ini, menerangkan bahwa:
                </p>
            </div>
            <!-- Tabel -->
            <div style="font-size:20pt;">
                <table id="table" data-toggle="">
                    <tr style="text-align:left;">
                        <td   width="26%">&nbsp;Hari</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->hari_dilahirkan))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td   width="26%">&nbsp;Tanggal</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->tanggal_dilahirkan))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td   width="26%">&nbsp;Di</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->tempat_dilahirkan))?></td>
                    </tr>
                </table>
            </div>
            <div style="font-size:20pt;text-align:left;">
                <p>
                    Telah lahir seorang anak <?= ucwords(strtolower($tsdom->jenis_kelamin_anak))?>. Anak Ke - <?= $tsdom->anak_ke?> bernama :
                </p>
            </div>
            <div style="font-size:24pt;text-align:center;">
                <p>
                    <b><?= $tsdom->nama_anak?></b>
                </p>
            </div>
            <div style="font-size:20pt;text-align:left;">
                <p>
                    Dari seorang ibu bernama :
                </p>
            </div>
            <div style="font-size:24pt;text-align:center;">
                <p>
                    <b><?= $tsdom->nama_ibu?></b>
                </p>
            </div>
            <div style="font-size:20pt;">
                <table id="table" data-toggle="">
                    <tr style="text-align:left;">
                        <td width="26%">Tanggal Lahir (UMUR) &nbsp;&nbsp;&nbsp;&nbsp; </td>
                        <td width="5%" style="vertical-align: text-top;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->tanggal_lahir_ibu))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td width="26%">Agama</td>
                        <td width="5%">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->agama_ibu))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td width="26%">Istri dari</td>
                        <td width="5%" >:</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div style="font-size:24pt;text-align:center;">
                <p>
                    <b><?= ucwords(strtolower($tsdom->nama))?></b>
                </p>
            </div>
            <div style="font-size:20pt;">
                <table id="table" data-toggle="">
                    <tr style="text-align:left;">
                        <td width="26%">Tanggal Lahir (UMUR)</td>
                        <td width="5%" style="vertical-align: text-top;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->tanggal_lahir))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td width="26%">Agama</td>
                        <td width="5%">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->agama))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td width="26%">Pekerjaan</td>
                        <td width="5%">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->jenis_pekerjaan))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td width="26%" style="vertical-align: text-top;">Alamat</td>
                        <td width="5%" style="vertical-align: text-top;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->alamat))." ".ucwords(strtolower($tsdom->rukun_tetangga))."/".ucwords(strtolower($tsdom->rukun_warga))." ".ucwords(strtolower($tsdom->nama_desa))." ".ucwords(strtolower($tsdom->kecamatan_desa))." ".ucwords(strtolower($tsdom->kabupaten))?></td></tr>
                    </tr>
                </table>
            </div>
            <br>
            <div style="font-size:20pt;text-align:left;">
                <p>
                    Surat  keterangan ini dibuat atas dasar yang sebenarnya.                
                </p>
            </div>
            <br>
            <!-- Tertanda -->
            <div style="font-size:20pt;text-align:justify;">
                <table width="100%" class="text-center">
                    <tr><td width="60%"></td><td width="40%"><?= $tsdom->tanggal_surat?></td></tr>
                    <tr><td width="60%"></td><td width="40%">Kepala <?= ucwords(strtolower($tsdom->nama_desa))?></td></tr>
                    <tr><td width="60%"></td><td width="40%"><br><br><br><br></td></tr>
                    <tr><td width="60%"></td><td width="40%"><b><?= $tsdom->nama_kepala_desa?></b></td></tr>
                </table>
            </div>
        </div>
    </div>
<?php } ?>
<?php foreach ($tb_sku as $tsdom) { ?>
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
                <b><u><font style="font-size:18pt;">SURAT KETERANGAN USAHA</font></u></b><br>
                <font style="font-size:18pt;">Nomor: <?= $tsdom->nomor_surat?></font><br>
            </div>
            <br>

            <div style="text-align:justify;">
            <p style="font-size:20pt;">
                    <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                    Yang bertanda tangan di bawah ini Kepala <?= ucwords(strtolower($tsdom->nama_desa))?> <?= ucwords(strtolower($tsdom->kecamatan_desa))?> <?= ucwords(strtolower($tsdom->kabupaten_desa))?>, menerangkan bahwa:
                </p>
            </div>
            <br>
            
            <!-- Tabel Data Diri -->
            <div style="font-size:20pt;">
                <table id="table" data-toggle="">
                    <tr style="text-align:left;">
                        <td style="padding: 10px;" width="26%">&nbsp;Nama Lengkap</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->nama))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td style="padding: 10px;" width="26%">&nbsp;NIK</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->nik))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td style="padding: 10px;" width="26%">&nbsp;Jenis Kelamin</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->jenis_kelamin))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td style="padding: 10px;" width="26%">&nbsp;Tempat/Tgl Lahir</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->tempat_lahir))." ".ucwords(strtolower($tsdom->tanggal_lahir))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td style="padding: 10px;" width="26%">&nbsp;Status Perkawinan</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->status_perkawinan))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td style="padding: 10px;" width="26%">&nbsp;Pekerjaan</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->jenis_pekerjaan))?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td style="padding: 10px;" width="40%">&nbsp;Alamat</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= ucwords(strtolower($tsdom->alamat))." ".ucwords(strtolower($tsdom->rukun_tetangga))."/".ucwords(strtolower($tsdom->rukun_warga))." ".ucwords(strtolower($tsdom->nama_desa))." ".ucwords(strtolower($tsdom->kecamatan_desa))." ".ucwords(strtolower($tsdom->kabupaten))?></td></tr>
                    </tr>
            
                    <td width="100%"colspan=3 >&nbsp;<p>Orang tersebut diatas  benar-benar  mempunyai jenis usaha  :</p></td>

                    <tr style="text-align:left;">
                        <td style="padding: 10px;" width="26%">&nbsp;Jenis Usaha</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= $tsdom->jenis_usaha?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td style="padding: 10px;" width="26%">&nbsp;Lokasi di</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= $tsdom->lokasi_di?></td>
                    </tr>

                    <tr style="text-align:left;">
                        <td style="padding: 10px;" width="26%">&nbsp;Sejak Tahun</td>
                        <td width="5%" style="text-align: center;">:</td>
                        <td>&nbsp;<?= $tsdom->sejak_tahun?></td>
                    </tr>

                </table>
            </div>
            <br><br>
            <div style="font-size:20pt;text-align:left;">
                <p>
                    Demikian keterangan ini dibuat dengan sebenarnya, agar dapat dipergunakan sebagaimana mestinya.
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
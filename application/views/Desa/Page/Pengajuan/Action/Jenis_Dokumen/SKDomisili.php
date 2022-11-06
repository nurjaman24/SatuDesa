<?php if ($tpeng->jenis_dokumen == "SURAT KETERANGAN DOMISILI") { ?>
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Alamat Domisili <code>*</code></label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-select-list">
                    <select class="form-control custom-select-value h-100" name="alamat" required maxlength="">
                        <option value="<?= $tpeng->alamat?> <?= $tpeng->rukun_tetangga?>/<?= $tpeng->rukun_warga?> <?= $tpeng->nama_desa?> <?= $tpeng->kecamatan?> <?= $tpeng->kabupaten?>">
                            <?= $tpeng->alamat?> <?= $tpeng->rukun_tetangga?>/<?= $tpeng->rukun_warga?> <?= $tpeng->nama_desa?> <?= $tpeng->kecamatan?> <?= $tpeng->kabupaten?>
                        </option>
                    </select>
                </div>
            </div>
        </div>
    </div> 
<?php } ?>
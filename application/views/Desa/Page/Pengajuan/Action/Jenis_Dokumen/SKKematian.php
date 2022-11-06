<?php if ($tpeng->jenis_dokumen == "SURAT KETERANGAN KEMATIAN") { ?>
    <div class="form-group-inner">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Tanggal<code>*</code></label>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Tempat Kematian<code>*</code></label>
            </div>
        </div>
    </div>
    <div class="form-group-inner">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="date" class="form-control" name="tanggal_kematian" placeholder="Tanggal Meninggal"/>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control" name="tempat_kematian" required maxlength="40" placeholder="Tempat Meninggal"/>
            </div>
        </div>
    </div>

    <div class="form-group-inner">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Kecamatan<code>*</code></label>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Kabupaten<code>*</code></label>
            </div>
        </div>
    </div>
    <div class="form-group-inner">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control" name="kecamatan_kematian" required maxlength="40" placeholder="Kecamatan Singaparna"/>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control" name="kabupaten_kematian" required maxlength="40" placeholder="Kabupaten Tasikmalaya"/>
            </div>
        </div>
    </div>

    <div class="form-group-inner">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Sebab Kematian<code>*</code></label>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Provinsi<code>*</code></label>
            </div>
        </div>
    </div>
    <div class="form-group-inner">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control" name="sebab_kematian" required maxlength="40" placeholder="Sebab Kematian"/>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control" name="provinsi_kematian" required maxlength="40" placeholder="Provinsi"/>
            </div>
        </div>
    </div>
    
    <div class="form-group-inner">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Keterangan Visum<code>*</code></label>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control" name="ket_visum" required maxlength="40" placeholder="Keterangan Visum"/>
            </div>
        </div>
    </div>
<?php } ?>
<?php if ($tpeng->jenis_dokumen == "SURAT KETERANGAN TIDAK MAMPU") { ?>
    <div class="form-group-inner">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">No ID DTKS<code>*</code></label>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Penghasilan<code>*</code></label>
            </div>
        </div>
    </div>
    <div class="form-group-inner">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control" name="no_id_dtks" required maxlength="30" placeholder="No ID DTKS"/>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control" name="penghasilan" required maxlength="10" placeholder="Penghasilan"/>
            </div>
        </div>
    </div>

    <div class="form-group-inner">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Nama Keperluan<code>*</code></label>
            </div>
            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="nama_keperluan" required maxlength="30" placeholder="Nama Keperluan"/>
            </div>
        </div>
    </div>
    <div class="form-group-inner">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">TKSK<code>*</code></label>
            </div>
            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="tksk" required maxlength="30" placeholder="Tenaga Kesejahteraan Sosial Kecamatan(TKSK)"/>
            </div>
        </div>
    </div>

    <div class="form-group-inner">
        <div class="row">
            <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Fasilitator<code>*</code></label>
            </div>        
            <div class=" col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <input type="text" class="form-control" name="fasilitator" required maxlength="40" placeholder="Fasilitator"/>
            </div>
        </div>
    </div>
<?php } ?>
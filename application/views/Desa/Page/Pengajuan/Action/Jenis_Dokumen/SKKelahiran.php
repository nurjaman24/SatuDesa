<?php if ($tpeng->jenis_dokumen == "SURAT KETERANGAN KELAHIRAN") { ?>
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Hari Kelahiran <code>*</code></label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Tanggal Kelahiran <code>*</code></label>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                
                <input type="text" class="form-control " name="hari_dilahirkan" required
                maxlength="20" placeholder="Hari Kelahiran" autocomplite/>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
            <input type="date" class="form-control " name="tanggal_dilahirkan" required autocomplite/>
                
            </div>
        </div>
    </div>
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Tempat Kelahiran <code>*</code></label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                <input type="text" class="form-control " name="tempat_dilahirkan" required
                maxlength="100" placeholder="Tempat Kelahiran" autocomplite/>
            </div>
        </div>
    </div>
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Nama Anak <code>*</code></label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Nama Ibu <code>*</code></label>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control " name="nama_anak" required
                maxlength="50" placeholder="Nama Anak" autocomplite/>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control " name="nama_ibu" required
                maxlength="50" placeholder="Nama Anak" autocomplite/>
            </div>
        </div>
    </div>
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Tanggal Lahir Ibu<code>*</code></label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Agama Ibu <code>*</code></label>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="date" class="form-control " name="tanggal_lahir_ibu" required autocomplite/>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-select-list">
                    <select class="form-control custom-select-value h-100" name="agama_ibu">
                        <option value="ISLAM">ISLAM</option>
                        <option value="KRISTEN">KRISTEN</option>
                        <option value="HINDU">HINDU</option>
                        <option value="BUDHA">BUDHA</option>
                        <option value="LAINNYA">LAINNYA</option>
                    </select>
                </div>
            </div>
        </div>
    </div>   
<?php } ?>
<?php if ($tpeng->jenis_dokumen == "SURAT KETERANGAN USAHA") { ?>
    <!-- Jenis Usaha -->
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Jenis Usaha<code>*</code></label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-select-list">
                    <input type="text" class="form-control" name="jenis_usaha" required 
                    maxlength="30" placeholder="Jenis Usaha" autocomplite>
                </div>
            </div>
        </div>
    </div> 
    <!-- Lokasi Usaha -->
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Lokasi Di<code>*</code></label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-select-list">
                    <input type="text" class="form-control" name="lokasi_di" required 
                    maxlength="100" placeholder="Lokasi Di" autocomplite>
                </div>
            </div>
        </div>
    </div> 

    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Sejak Tahun<code>*</code></label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-select-list">
                    <input type="text" class="form-control" name="sejak_tahun" required 
                    maxlength="5" placeholder="Sejak Tahun" autocomplite>
                </div>
            </div>
        </div>
    </div> 
<?php } ?>
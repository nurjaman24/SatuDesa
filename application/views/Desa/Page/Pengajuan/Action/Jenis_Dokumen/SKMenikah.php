<?php if ($tpeng->jenis_dokumen == "SURAT KETERANGAN MENIKAH") { ?>
    <!-- Nama -->
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Nama Pasangan <code>*</code></label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-select-list">
                    <input type="text" class="form-control " name="nama_pasangan" required 
                    maxlength="50" placeholder="Nama Pasangan" autocomplite/>
                </div>
            </div>
        </div>
    </div> 
    <!-- Kelamin -->
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Jenis Kelamin <code>*</code></label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-select-list">
                    <select class="form-control custom-select-value h-100" name="kelamin_pasangan" required maxlength="">
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
        </div>
    </div> 
    <!-- Tempat Tanggal Lahir -->
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Tempat Tangggal Lahir<code>*</code></label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control " name="ttl_pasangan" required 
                    maxlength="50" placeholder="Tempat, Tanggal Lahir" autocomplite/>
            </div>
        </div>
    </div>
    <!-- Status Kawin -->
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Status Perkawinan<code>*</code></label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control " name="status_perkawinan_pasangan" required 
                    maxlength="50" placeholder="Status Pernikahan" autocomplite/>
            </div>
        </div>
    </div>
    <!-- Alamat -->
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Alamat Pasangan<code>*</code></label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control " name="alamat_pasangan" required 
                    maxlength="200" placeholder="Alamat Pasangan" autocomplite/>
            </div>
        </div>
    </div>
    <!-- tahun menikah -->
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Tahun Menikah<code>*</code></label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control " name="tahunmenikah" required 
                    maxlength="20" placeholder="Tahun Menikah" autocomplite/>
            </div>
        </div>
    </div>
<?php } ?>
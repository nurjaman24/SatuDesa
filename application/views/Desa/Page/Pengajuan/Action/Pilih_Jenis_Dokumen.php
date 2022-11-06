<?php
    if ($tpeng->jenis_dokumen == "SURAT KETERANGAN DOMISILI") { 
        $jenisfungsicetak = "cetak_sdomisili";   
    }
    elseif ($tpeng->jenis_dokumen == "SURAT KETERANGAN BELUM MENIKAH") {
        $jenisfungsicetak = "cetak_sbmenikah"; 
    }
    elseif ($tpeng->jenis_dokumen == "SURAT KETERANGAN MENIKAH") {
        $jenisfungsicetak = "cetak_smenikah"; 
    }
    elseif ($tpeng->jenis_dokumen == "SURAT KETERANGAN USAHA") {
        $jenisfungsicetak = "cetak_sku"; 
    }
    elseif ($tpeng->jenis_dokumen == "SURAT KETERANGAN KELAHIRAN") {
        $jenisfungsicetak = "cetak_skelahiran"; 
    }
    elseif ($tpeng->jenis_dokumen == "SURAT KETERANGAN KEMATIAN") {
        $jenisfungsicetak = "cetak_skematian"; 
    }
    elseif ($tpeng->jenis_dokumen == "SURAT KETERANGAN TIDAK MAMPU") {
        $jenisfungsicetak = "cetak_sktm";
    }
    // elseif ($tpeng->jenis_dokumen == "SURAT UPCPK") {
    //     $jenisfungsicetak = "cetak_upcpk"; 
    // }
    else{
        $jenisfungsicetak = ""; 
    }
?>
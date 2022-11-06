<?php
if ($tpeng->jenis_dokumen == "SURAT KETERANGAN DOMISILI") { 
    $nama_tabel = "tb_sdomisili";   
}
elseif ($tpeng->jenis_dokumen == "SURAT KETERANGAN BELUM MENIKAH") {
    $nama_tabel = "tb_sbmenikah";
}
elseif ($tpeng->jenis_dokumen == "SURAT KETERANGAN MENIKAH") {
    $nama_tabel = "tb_smenikah";
}
elseif ($tpeng->jenis_dokumen == "SURAT KETERANGAN KEMATIAN") {
    $nama_tabel = "tb_skematian";
}
elseif ($tpeng->jenis_dokumen == "SURAT KETERANGAN KELAHIRAN") {
    $nama_tabel = "tb_skelahiran";
}
elseif ($tpeng->jenis_dokumen == "SURAT KETERANGAN USAHA") {
    $nama_tabel = "tb_sku";
}
elseif ($tpeng->jenis_dokumen == "SURAT KETERANGAN TIDAK MAMPU"){
    $nama_tabel = "tb_sktm";
}
// elseif ($tpeng->jenis_dokumen == "SURAT UPCPK") {
//     $nama_tabel = "tb_upcpk";
// }
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {
    function __construct(){
        parent::__construct();
        // Data login
            if($this->session->userdata('id_akun') == ""){
                redirect(base_url("Login"));
            }elseif (!empty($this->session->userdata('id_akun'))){
                if ($this->session->userdata('level') != "Desa") {
                    redirect(base_url("Login"));
                }
            }
        $this->load->view('Desa/Layout/head');
        $this->load->view('Desa/Layout/sidebar');
        $this->load->view('Desa/Layout/navbar');
    }
    // Beranda Desa
        public function beranda(){
            $id_desa = $this->session->userdata('id_relasi');
            $where = array('id_desa' => $id_desa);
            $data['tb_desa'] = $this->M_App->edit_data('tb_desa',$where)->result();

            $this->load->view('Desa/Page/beranda',$data);
            $this->load->view('Desa/Layout/footer');
        }
    // END Beranda Desa
// ==========================================================================================================================    
    // RUKUN WARGA (DONE)
        // CREATE
            // Formulir Menggunakan Pop Up Modal (DONE)
            // Proses insert
                // Rukun Warga (DONE)
                    public function prosestambahrw(){
                        $id_desa = $this->input->post('id_desa');
                        $identitas = $this->input->post('identitas');
                        $rukun_warga = $this->input->post('rukun_warga');
                        $nama_ketua_rw = $this->input->post('nama_ketua_rw');
                        $nip_nik = $this->input->post('nip_nik');

                        $data = array(
                            'id_desa' => $id_desa,
                            'identitas' => $identitas,
                            'no_rukun_warga' => $rukun_warga,
                            'nama_ketua_rw' => $nama_ketua_rw,
                            'nip_nik' => $nip_nik
                        );
                        $this->M_App->simpan_data('tb_rukun_warga', $data);
                        redirect('Desa/datarukunwarga/');
                    }
                // Generate Akun Rukun Warga (Done)
                    public function buatakunrw($id_relasi, $user, $pass, $level){
                        $password_md5 = md5($pass);

                        $data = array(
                            'id_relasi' => $id_relasi,
                            'username' => $user,
                            'password' => $password_md5,
                            'level' => $level,
                        );
                        $this->M_App->simpan_data('tb_akun', $data);
                        redirect('Desa/datarukunwarga/');
                    }
        // READ (DONE)
            public function datarukunwarga(){
                $id_desa = $this->session->userdata("id_relasi");
                $where = array('tb_rukun_warga.id_desa' => $id_desa);
                $data['tb_rukun_warga'] = $this->M_App->tampil_data_join_where('tb_rukun_warga', 'tb_desa', 'tb_desa.id_desa = tb_rukun_warga.id_desa', $where, 'id_rukun_warga','ASC')->result();
                $where = array('id_desa' => $id_desa);
                $data['tb_desa'] = $this->M_App->tampil_data_where('tb_desa', $where, 'id_desa','ASC')->result();
                $this->load->view('Desa/Page/RukunWarga/data', $data);
                $this->load->view('Desa/Layout/footer');
            }
        // UPDATE
            // Formulir Ubah Data Rukun Warga (Done)
                function edit_rw($id_rukun_warga){
                    $where = array('id_rukun_warga' => $id_rukun_warga);
                    $data['tb_rukun_warga'] = $this->M_App->edit_data_join('tb_rukun_warga','tb_desa','tb_desa.id_desa = tb_rukun_warga.id_desa',$where)->result();
                    $this->load->view('Desa/Page/RukunWarga/edit',$data);
                    $this->load->view('Desa/Layout/footer');
                }
            // Proses Ubah (DONE)
                function prosesubahrw(){
                    $id_rukun_warga = $this->input->post('id_rukun_warga');
                    $id_desa = $this->input->post('id_desa');
                    $identitas = $this->input->post('identitas');
                    $rukun_warga = $this->input->post('rukun_warga');
                    $nama_ketua_rw = $this->input->post('nama_ketua_rw');
                    $nip_nik = $this->input->post('nip_nik');

                    $data = array(
                        'id_desa' => $id_desa,
                        'identitas' => $identitas,
                        'no_rukun_warga' => $rukun_warga,
                        'nama_ketua_rw' => $nama_ketua_rw,
                        'nip_nik' => $nip_nik
                    );
                    $where = array('id_rukun_warga' => $id_rukun_warga);
                    $this->M_App->proses_update($where, $data, 'tb_rukun_warga');
                    redirect('Desa/datarukunwarga');
                }
        // DELETE
            // Hapus Data Rukun Warga & Akun Rukun Warga (DONE)
                function hapus_rw($id_rukun_warga){
                    $where = array('id_rukun_warga' => $id_rukun_warga);
                    $this->M_App->hapus_data('tb_rukun_warga', $where);     

                    $whereakun = array(
                        'id_relasi' => $id_rukun_warga,
                        'level' => 'rw',
                    );
                    $this->M_App->hapus_data('tb_akun', $whereakun);
                    redirect('Desa/datarukunwarga/');
                }
            // Hapus Data Akun Rukun Warga (DONE)
                function hapusakunrw($id_relasi,$level){
                    $whereakun = array(
                        'id_relasi' => $id_relasi,
                        'level' => $level,
                    );
                    $this->M_App->hapus_data('tb_akun', $whereakun);
                    redirect('Desa/datarukunwarga/');
                }
    // END RUKUN WARGA

    // PENDUDUK
        // CREATE
            // Formulir Insert (DONE)
                public function tambahdatapenduduk(){
                    $id_desa = $this->session->userdata("id_relasi");
                    $where = array('id_desa' => $id_desa);
                    $data['tb_desa'] = $this->M_App->tampil_data_where('tb_desa', $where, 'id_desa','ASC')->result();
                    // Tampilkan Data RW
                    $data['tb_rukun_warga'] = $this->M_App->tampil_data_where('tb_rukun_warga', $where, 'id_rukun_warga','ASC')->result();
                    $this->load->view('Desa/Page/Penduduk/tambah', $data);
                    $this->load->view('Desa/Layout/footer');
                }
            // Proses insert
                // Penduduk (DONE)
                    public function prosestambahdatapenduduk(){
                        $no_kk = $this->input->post('no_kk');
                        $nama = $this->input->post('nama');
                        $nik = $this->input->post('nik');
                        $jenis_kelamin = $this->input->post('jenis_kelamin');
                        $tempat_lahir = $this->input->post('tempat_lahir');
                        $tanggal_lahir = $this->input->post('tanggal_lahir');
                        $agama = $this->input->post('agama');
                        $pendidikan = $this->input->post('pendidikan');
                        $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
                        $golongan_darah = $this->input->post('golongan_darah');
                        $status_perkawinan = $this->input->post('status_perkawinan');
                        $tanggal_perkawinan = $this->input->post('tanggal_perkawinan');
                        $status_dikeluarga = $this->input->post('status_dikeluarga');
                        $kewarganegaraan = $this->input->post('kewarganegaraan');
                        $no_paspor = $this->input->post('no_paspor');
                        $no_kitap = $this->input->post('no_kitap');
                        $ayah = $this->input->post('ayah');
                        $ibu = $this->input->post('ibu');
                        $alamat = $this->input->post('alamat');
                        $rukun_tetangga = $this->input->post('rukun_tetangga');
                        $rukun_warga = $this->input->post('rukun_warga');
                        $id_desa = $this->input->post('id_desa');
                        $kecamatan = $this->input->post('kecamatan');
                        $kabupaten = $this->input->post('kabupaten');
                        $no_handphone_aktif = $this->input->post('no_handphone_aktif');
                        $data = array(
                            'no_kk' => $no_kk,
                            'nama' => $nama,
                            'nik' => $nik,
                            'jenis_kelamin' => $jenis_kelamin,
                            'tempat_lahir' => $tempat_lahir,
                            'tanggal_lahir' => $tanggal_lahir,
                            'agama' => $agama,
                            'pendidikan' => $pendidikan,
                            'jenis_pekerjaan' => $jenis_pekerjaan,
                            'golongan_darah' => $golongan_darah,
                            'status_perkawinan' => $status_perkawinan,
                            'tanggal_perkawinan' => $tanggal_perkawinan,
                            'status_hubungan_dalam_keluarga' => $status_dikeluarga,
                            'kewarganegaraan' => $kewarganegaraan,
                            'no_paspor' =>$no_paspor,
                            'no_kitap' =>$no_kitap,
                            'ayah' =>$ayah,
                            'ibu' =>$ibu,
                            'alamat' => $alamat,
                            'rukun_tetangga' => $rukun_tetangga,
                            'rukun_warga' => $rukun_warga,
                            'id_desa' => $id_desa,
                            'kecamatan' => $kecamatan,
                            'kabupaten' => $kabupaten,
                            'no_handphone_aktif' => $no_handphone_aktif,
                        );
                        $this->M_App->simpan_data('tb_penduduk', $data);
                        redirect('Desa/datapenduduk/');
                    }
                // Generate Akun Penduduk (Done)
                    // Akun Penduduk (Done)
                        public function buatakunpenduduk($id_relasi, $user, $pass, $level){
                            $password_md5 = md5($pass);

                            $data = array(
                                'id_relasi' => $id_relasi,
                                'username' => $user,
                                'password' => $password_md5,
                                'level' => $level,
                            );
                            $this->M_App->simpan_data('tb_akun', $data);
                            redirect('Desa/datapenduduk/');
                        }
        // READ (DONE)
            // Data Penduduk
                // public function datapenduduk_API(){
                //     $id_desa = $this->session->userdata("id_relasi");
                //     $where = array('tb_penduduk.id_desa' => $id_desa);
                //     $data['tb_penduduk'] = $this->M_App->tampil_data_join2_where('tb_penduduk', 'tb_desa', 'tb_desa.id_desa = tb_penduduk.id_desa', 'tb_rukun_warga', 'tb_rukun_warga.id_rukun_warga = tb_penduduk.rukun_warga', $where, 'id_penduduk','ASC')->result();
                //     echo json_encode($data);
                // }
            public function datapenduduk(){
                $id_desa = $this->session->userdata("id_relasi");
                $where = array('tb_penduduk.id_desa' => $id_desa);
                $data['tb_penduduk'] = $this->M_App->tampil_data_join2_where('tb_penduduk', 'tb_desa', 'tb_desa.id_desa = tb_penduduk.id_desa', 'tb_rukun_warga', 'tb_rukun_warga.id_rukun_warga = tb_penduduk.rukun_warga', $where, 'id_penduduk','ASC')->result();
                $this->load->view('Desa/Page/Penduduk/data', $data);
                // $this->load->view('Desa/Page/Penduduk/data');
                $this->load->view('Desa/Layout/footer');
            }
            // Detail Data Penduduk
            public function detail_penduduk($id_penduduk){
                $id_desa = $this->session->userdata("id_relasi");
                $where = array(
                    'tb_penduduk.id_desa' => $id_desa,
                    'tb_penduduk.id_penduduk' => $id_penduduk
                );
                $data['tb_penduduk'] = $this->M_App->tampil_data_join2_where('tb_penduduk', 'tb_desa', 'tb_desa.id_desa = tb_penduduk.id_desa', 'tb_rukun_warga', 'tb_rukun_warga.id_rukun_warga = tb_penduduk.rukun_warga', $where, 'id_penduduk','ASC')->result();
                $this->load->view('Desa/Page/Penduduk/detail', $data);
                $this->load->view('Desa/Layout/footer');
                
            }
        // UPDATE
            // Formulir Ubah Data Penduduk (DONE)
                function edit_penduduk($id_penduduk){
                    $id_desa = $this->session->userdata("id_relasi");
                    $wheredesa = array('id_desa' => $id_desa);
                    $data['tb_desa'] = $this->M_App->tampil_data_where('tb_desa', $wheredesa, 'id_desa','ASC')->result();
                    $data['tb_rukun_warga'] = $this->M_App->tampil_data_where('tb_rukun_warga', $wheredesa, 'id_rukun_warga','ASC')->result();

                    // $data['tb_desa'] = $this->M_App->tampil_data('tb_desa','id_desa','ASC')->result();
                    $where = array('id_penduduk' => $id_penduduk);
                    $data['tb_penduduk'] = $this->M_App->edit_data_join2('tb_penduduk', 'tb_desa', 'tb_desa.id_desa = tb_penduduk.id_desa', 'tb_rukun_warga', 'tb_rukun_warga.id_rukun_warga = tb_penduduk.rukun_warga', $where)->result();
                    $this->load->view('Desa/Page/Penduduk/edit',$data);
                    $this->load->view('Desa/Layout/footer');
                }
            // Proses Ubah (DONE)
                function prosesubahpenduduk(){
                    $id_penduduk = $this->input->post('id_penduduk');
                    $no_kk = $this->input->post('no_kk');
                    $nama = $this->input->post('nama');
                    $nik = $this->input->post('nik');
                    $jenis_kelamin = $this->input->post('jenis_kelamin');
                    $tempat_lahir = $this->input->post('tempat_lahir');
                    $tanggal_lahir = $this->input->post('tanggal_lahir');
                    $agama = $this->input->post('agama');
                    $pendidikan = $this->input->post('pendidikan');
                    $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
                    $golongan_darah = $this->input->post('golongan_darah');
                    $status_perkawinan = $this->input->post('status_perkawinan');
                    $tanggal_perkawinan = $this->input->post('tanggal_perkawinan');
                    $status_dikeluarga = $this->input->post('status_dikeluarga');
                    $kewarganegaraan = $this->input->post('kewarganegaraan');
                    $no_paspor = $this->input->post('no_paspor');
                    $no_kitap = $this->input->post('no_kitap');
                    $ayah = $this->input->post('ayah');
                    $ibu = $this->input->post('ibu');
                    $alamat = $this->input->post('alamat');
                    $rukun_tetangga = $this->input->post('rukun_tetangga');
                    $rukun_warga = $this->input->post('rukun_warga');
                    $id_desa = $this->input->post('id_desa');
                    $kecamatan = $this->input->post('kecamatan');
                    $kabupaten = $this->input->post('kabupaten');
                    $no_handphone_aktif = $this->input->post('no_handphone_aktif');
                    
                    $data = array(
                        'no_kk' => $no_kk,
                        'nama' => $nama,
                        'nik' => $nik,
                        'jenis_kelamin' => $jenis_kelamin,
                        'tempat_lahir' => $tempat_lahir,
                        'tanggal_lahir' => $tanggal_lahir,
                        'agama' => $agama,
                        'pendidikan' => $pendidikan,
                        'jenis_pekerjaan' => $jenis_pekerjaan,
                        'golongan_darah' => $golongan_darah,
                        'status_perkawinan' => $status_perkawinan,
                        'tanggal_perkawinan' => $tanggal_perkawinan,
                        'status_hubungan_dalam_keluarga' => $status_dikeluarga,
                        'kewarganegaraan' => $kewarganegaraan,
                        'no_paspor' =>$no_paspor,
                        'no_kitap' =>$no_kitap,
                        'ayah' =>$ayah,
                        'ibu' =>$ibu,
                        'alamat' => $alamat,
                        'rukun_tetangga' => $rukun_tetangga,
                        'rukun_warga' => $rukun_warga,
                        'id_desa' => $id_desa,
                        'kecamatan' => $kecamatan,
                        'kabupaten' => $kabupaten,
                        'no_handphone_aktif' => $no_handphone_aktif,
                    );
                    $where = array('id_penduduk' => $id_penduduk);
                    $this->M_App->proses_update($where, $data, 'tb_penduduk');
                    redirect('Desa/datapenduduk');    
                }
        // DELETE
            // Hapus Data Penduduk & Akun Penduduk (DONE)
                function hapus_penduduk($id_penduduk){
                    $where = array('id_penduduk' => $id_penduduk);
                    $this->M_App->hapus_data('tb_penduduk', $where);     

                    $whereakun = array(
                        'id_relasi' => $id_penduduk,
                        'level' => 'penduduk',
                    );
                    $this->M_App->hapus_data('tb_akun', $whereakun);
                    redirect('Desa/datapenduduk/');
                }
            // Hapus Data Akun Penduduk (DONE)
                function hapusakunpenduduk($id_relasi,$level){
                    $whereakun = array(
                        'id_relasi' => $id_relasi,
                        'level' => $level,
                    );
                    $this->M_App->hapus_data('tb_akun', $whereakun);
                    redirect('Desa/datapenduduk/');
                }
    // END PENDUDUK

    // JENIS DOKUMEN
        // CREATE
            // Formulir Insert (DONE)
                public function tambahdatajenisdokumen(){
                    $data['tb_jenis_dokumen'] = $this->M_App->tampil_data('tb_jenis_dokumen','id_jenis','ASC')->result();
                    $this->load->view('Desa/Page/Jenisdokumen/tambah', $data);
                    $this->load->view('Desa/Layout/footer');
                }
            // Proses insert
                // Jenis Dokumen (DONE)
                    public function prosestambahjenisdokumen(){
                        $jenis_dokumen = $this->input->post('jenis_dokumen');
                        $persyaratan = $this->input->post('persyaratan');
                        
                        $data = array(
                            'jenis_dokumen' => $jenis_dokumen,
                            'persyaratan' => $persyaratan,
                        
                        );
                        $this->M_App->simpan_data('tb_jenis_dokumen', $data);
                        redirect('Desa/jenisdokumen/');
                    }

        // READ (DONE)
            public function jenisdokumen(){
                $data['tb_jenis_dokumen'] = $this->M_App->tampil_data('tb_jenis_dokumen','id_jenis','ASC')->result();
                $this->load->view('Desa/Page/Jenisdokumen/data', $data);
                $this->load->view('Desa/Layout/footer');
            }
        // UPDATE
            // Formulir Ubah Data Jenis Dokumen (DONE)
                function edit_jenis($id_jenis){
                    $where = array('id_jenis' => $id_jenis);
                    $data['tb_jenis_dokumen'] = $this->M_App->edit_data('tb_jenis_dokumen',$where)->result();
                    $this->load->view('Desa/Page/Jenisdokumen/edit',$data);
                    $this->load->view('Desa/Layout/footer');
                }
            // Proses Ubah (DONE)
                function prosesubahjenis(){
                    $id_jenis = $this->input->post('id_jenis');
                    $jenis_dokumen = $this->input->post('jenis_dokumen');
                    $persyaratan = $this->input->post('persyaratan');
                    $data = array(
                        'jenis_dokumen' => $jenis_dokumen,
                        'persyaratan' => $persyaratan
                    );
                    $where = array('id_jenis' => $id_jenis);
                    $this->M_App->proses_update($where, $data, 'tb_jenis_dokumen');
                    redirect('Desa/jenisdokumen');
                }
        // DELETE
                // Hapus Data Jenis Dokumen(DONE)
                    function hapus_jenis($id_jenis){
                        $where = array('id_jenis' => $id_jenis);
                        $this->M_App->hapus_data('tb_jenis_dokumen', $where);
                        redirect('Desa/jenisdokumen/');
                    }
    // END JENIS DOKUMEN

    // PENGAJUAN
        // CREATE
            // Buat Dokumen (DONE)
                public function buatdokumen(){
                    // ID Pengajuan
                        $id_pengajuan = $this->input->post('id_pengajuan');
                    
                    // Pilih nama tabel
                        $nama_tabel = $this->input->post('nama_tabel');
                    
                    // Token Surat
                        $token_surat = $this->input->post('token_surat');
                    
                    // Data Umum
                        // $id_desa = $this->input->post('id_desa');
                        $id_penduduk = $this->input->post('id_penduduk');
                        $nomor_surat = $this->input->post('nomor_surat');
                        $tempat_keluar = $this->input->post('tempat_keluar');
                        $tanggal_keluar = $this->input->post('tanggal_keluar');
                        $tanggal_surat = $tempat_keluar.", ".$tanggal_keluar;
                    
                    // Variabel POST
                        // Data Domisili     -> tb_sdomisili (DONE)
                            $alamat = $this->input->post('alamat');
                        // END Data Domisili -> tb_sdomisili

                        // Data SK Belum Menikah     -> tb_sbmenikah
                            // Tidak Ada Data Tambahan
                        // END Data SK Belum Menikah -> tb_sbmenikah
                        
                        // Data SK Menikah     -> tb_smenikah
                            $nama_pasangan = $this->input->post('nama_pasangan');
                            $kelamin_pasangan = $this->input->post('kelamin_pasangan');
                            $ttl_pasangan = $this->input->post('ttl_pasangan');
                            $status_perkawinan_pasangan = $this->input->post('status_perkawinan_pasangan');
                            $alamat_pasangan = $this->input->post('alamat_pasangan');
                            $tahunmenikah = $this->input->post('tahunmenikah');
                        // END Data SK Menikah -> tb_smenikah
                        
                        // Data SK Usaha     -> tb_sku
                            $jenis_usaha = $this->input->post('jenis_usaha');
                            $lokasi_di = $this->input->post('lokasi_di');
                            $sejak_tahun = $this->input->post('sejak_tahun');     
                        // END Data SK Usaha -> tb_sku

                        // Data SK Kelahiran     -> tb_kelahiran
                            $hari_dilahirkan = $this->input->post('hari_dilahirkan');
                            $tanggal_dilahirkan = $this->input->post('tanggal_dilahirkan');
                            $tempat_dilahirkan = $this->input->post('tempat_dilahirkan');
                            $nama_anak = $this->input->post('nama_anak');
                            $nama_ibu = $this->input->post('nama_ibu');
                            $tanggal_lahir_ibu = $this->input->post('tanggal_lahir_ibu');
                            $agama_ibu = $this->input->post('agama_ibu');
                        // END Data SK Kelahiran -> tb_kelahiran
                        
                        // Data SK Kematian     -> tb_skematian
                            $tanggal_kematian = $this->input->post('tanggal_kematian');
                            $tempat_kematian = $this->input->post('tempat_kematian');
                            $kecamatan_kematian = $this->input->post('kecamatan_kematian');
                            $kabupaten_kematian = $this->input->post('kabupaten_kematian');
                            $provinsi_kematian = $this->input->post('provinsi_kematian');
                            $sebab_kematian = $this->input->post('sebab_kematian');
                            $ket_visum = $this->input->post('ket_visum');
                        // END Data SK Kematian -> tb_skematian

                        // Data SKTM     -> tb_sktm
                            $no_id_dtks = $this->input->post("no_id_dtks");
                            $penghasilan = $this->input->post("penghasilan");
                            $nama_keperluan = $this->input->post("nama_keperluan");
                            $tksk = $this->input->post("tksk");
                            $fasilitator = $this->input->post("fasilitator");
                        // END Data SKTM -> tb_sktm
                    // END Variabel POST

                    // Kondisi Pengalokasian Tabel Pada Database
                        // SK Domisili
                            if ($nama_tabel == "tb_sdomisili") {
                                $data = array(
                                    'id_penduduk' => $id_penduduk,
                                    'nomor_surat' => $nomor_surat,
                                    'token_surat' => $token_surat,
                                    'tanggal_surat' => $tanggal_surat,
                                    // POST Spesial Domisili
                                    'alamat' => $alamat,
                                );
                            } 
                        // SK Belum Menikah
                            elseif ($nama_tabel == "tb_sbmenikah"){
                                $data = array(
                                    // 'id_desa' => $id_desa,
                                    'id_penduduk' => $id_penduduk,
                                    'nomor_surat' => $nomor_surat,
                                    'token_surat' => $token_surat,
                                    'tanggal_surat' => $tanggal_surat,
                                );
                            }
                        // SK Menikah
                            elseif ($nama_tabel == "tb_smenikah"){
                                $data = array(
                                    'id_desa' => $id_desa,
                                    'id_penduduk' => $id_penduduk,
                                    'nomor_surat' => $nomor_surat,
                                    'token_surat' => $token_surat,
                                    'tanggal_surat' => $tanggal_surat,
                                    'nama_pasangan' => $nama_pasangan,
                                    'kelamin_pasangan' => $kelamin_pasangan,
                                    'ttl_pasangan' => $ttl_pasangan,
                                    'status_perkawinan_pasangan' => $status_perkawinan_pasangan,
                                    'alamat_pasangan' => $alamat_pasangan,
                                    'tahunmenikah' => $tahunmenikah,
                                );
                            }
                        // SK Usaha
                            elseif ($nama_tabel == "tb_sku"){
                                $data = array(
                                    'id_desa' => $id_desa,
                                    'id_penduduk' => $id_penduduk,
                                    'nomor_surat' => $nomor_surat,
                                    'token_surat' => $token_surat,
                                    'tanggal_surat' => $tanggal_surat,
                                    'jenis_usaha' => $jenis_usaha,
                                    'lokasi_di' => $lokasi_di,
                                    'sejak_tahun' => $sejak_tahun,
                                    
                                );
                            }
                        // SK Kelahiran
                            elseif ($nama_tabel == "tb_skelahiran"){
                                $data = array(
                                    'id_desa' => $id_desa,
                                    'id_penduduk' => $id_penduduk,
                                    'nomor_surat' => $nomor_surat,
                                    'token_surat' => $token_surat,
                                    'tanggal_surat' => $tanggal_surat,
                                    'hari_dilahirkan' => $hari_dilahirkan,
                                    'tanggal_dilahirkan' => $tanggal_dilahirkan,
                                    'tempat_dilahirkan' => $tempat_dilahirkan,
                                    'nama_anak' => $nama_anak,
                                    'nama_ibu' => $nama_ibu,
                                    'tanggal_lahir_ibu' => $tanggal_lahir_ibu,
                                    'agama_ibu' => $agama_ibu,
                                );
                            }
                        // SK Kematian
                            elseif ($nama_tabel == "tb_skematian") {
                                $data = array(
                                    'id_desa' => $id_desa,
                                    'id_penduduk' => $id_penduduk,
                                    'nomor_surat' => $nomor_surat,
                                    'token_surat' => $token_surat,
                                    'tanggal_surat' => $tanggal_surat,
                                    // Data POST Spesial
                                    'tanggal_kematian' => $tanggal_kematian,
                                    'tempat_kematian' => $tempat_kematian,
                                    'kecamatan_kematian' => $kecamatan_kematian,
                                    'kabupaten_kematian' => $kabupaten_kematian,
                                    'provinsi_kematian' => $provinsi_kematian,
                                    'sebab_kematian' => $sebab_kematian,
                                    'ket_visum' => $ket_visum,
                                    
                                );
                            }
                        // SKTM
                            elseif ($nama_tabel == "tb_sktm") {
                                $data = array(
                                    'id_desa' => $id_desa,
                                    'id_penduduk' => $id_penduduk,
                                    'nomor_surat' => $nomor_surat,
                                    'token_surat' => $token_surat,
                                    'tanggal_surat' => $tanggal_surat,
                                    'no_id_dtks' => $no_id_dtks,
                                    'penghasilan' => $penghasilan,
                                    'nama_keperluan' => $nama_keperluan,
                                    'tksk' => $tksk,
                                    'fasilitator'=> $fasilitator,
                                );
                            }
                    // END Kondisi Pengalokasian Tabel Pada Database

                    // simpan data ke tabel database
                        $this->M_App->simpan_data($nama_tabel, $data);

                    // Membuat Perintah Ubah status pengajuan menjadi selesai
                        $update_status_pengajuan = array(
                            'token_surat' => $token_surat,
                            'status_pengajuan' => 'Selesai',
                        );
                        $where = array('id_pengajuan' => $id_pengajuan);
                        $this->M_App->proses_update($where, $update_status_pengajuan, 'tb_pengajuan');
                    // Pindahkan halaman ke data pengajuan
                        redirect('Desa/pengajuan/');
                }
                
                // function dokumenselesai($id, $status, $token_surat){
                    //     if ($status == "Selesai") {
                    //         $updatestatus = "Dalam Proses";
                    //         $tkn = "";
                    //     }else {
                    //         $updatestatus = "Selesai";
                    //         $tkn = $token_surat;
                    //     }
                    //     $update_status_pengajuan = array(
                    //         'token_surat' => $tkn,
                    //         'status_pengajuan' => $updatestatus,
                    //     );
                    //     $where = array('id_pengajuan' => $id);
                    //     $this->M_App->proses_update($where, $update_status_pengajuan, 'tb_pengajuan');
                    //     redirect('desa/pengajuan/');
                // }
            
        // READ (DONE)
            // Data Pengajuan
                public function pengajuan(){
                    $id_desa = $this->session->userdata("id_relasi");
                    $where = array('tb_penduduk.id_desa' => $id_desa);
                    $data['tb_pengajuan'] = $this->M_App->tampil_data_join3_where('tb_pengajuan', 'tb_penduduk', 'tb_penduduk.id_penduduk = tb_pengajuan.id_penduduk','tb_desa', 'tb_desa.id_desa = tb_penduduk.id_desa','tb_jenis_dokumen', 'tb_jenis_dokumen.id_jenis = tb_pengajuan.id_jenis', $where,'id_pengajuan','ASC')->result();
                    $this->load->view('Desa/Page/Pengajuan/data', $data);
                    $this->load->view('Desa/Layout/footer');
                }
        // UPDATE
            // Buat Catatan (DONE)
                function simpancatatan(){
                    $id_pengajuan = $this->input->post('id_pengajuan');
                    $keterangan = $this->input->post('keterangan');
                    $data = array(
                        'keterangan' => $keterangan,
                    );
                    $where = array('id_pengajuan' => $id_pengajuan);
                    $this->M_App->proses_update($where, $data, 'tb_pengajuan');
                    redirect('Desa/pengajuan');
                }
    // END PENGAJUAN

    // ARSIP DOKUMEN 
        // CREATE
            // upload Dokumen (Done)
                public function tambahdataarsip(){
                    $id_desa = $this->session->userdata('id_relasi');
                    $where = array('id_desa' => $id_desa);
                    $data['tb_desa'] = $this->M_App->edit_data('tb_desa', $where)->result();
                    $data['tb_penduduk'] = $this->M_App->edit_data('tb_penduduk', $where)->result();
                    $data['tb_jenis_dokumen'] = $this->M_App->tampil_data('tb_jenis_dokumen','id_jenis','ASC')->result();
    
                    $this->load->view('Desa/Page/Arsip/tambah', $data);
                    $this->load->view('Desa/Layout/footer');
                }
            
            // Proses Insert (Done)
                function prosestambaharsip(){
                    // $id_desa = $this->input->post('id_desa');
                    $id_penduduk = $this->input->post('id_penduduk');
                    $id_jenis_dokumen = $this->input->post('id_jenis_dokumen');
                    // Upload Gambar
                    $config['upload_path']      = 'asset/arsip';
                    $config['allowed_types']    = 'pdf|doc|docx|gif|jpg|png|jpeg';
                    $config['max_size']         = 999999999;
                    $config['max_width']        = 999999999;
                    $config['max_height']       = 999999999;
                    $config['encrypt_name']     = TRUE;
                
                    $this->load->library('upload',$config);
            
                    if (!$this->upload->do_upload('file_dokumen')) {
                        $pesan = $this->upload->display_errors();
                    }
                    $berkas = $this->upload->data('file_name');
            
                    $data = array(
                        // 'id_desa' => $id_desa,
                        'id_penduduk' => $id_penduduk,
                        'id_jenis_dokumen' => $id_jenis_dokumen,
                        'file_dokumen' => $berkas,
                    );
                    $this->M_App->simpan_data('tb_arsip', $data);
                    redirect('Desa/arsipdokumen');
                }
        // READ (Done)
            // Data Arsip Dokumen
                public function arsipdokumen(){
                    $id_desa = $this->session->userdata("id_relasi");
                    $where = array('tb_penduduk.id_desa' => $id_desa);
                    $data['tb_arsip'] = $this->M_App->tampil_data_join3_where('tb_arsip', 
                    'tb_penduduk', 'tb_penduduk.id_penduduk = tb_arsip.id_penduduk',
                    'tb_desa', 'tb_desa.id_desa = tb_penduduk.id_desa', 
                    'tb_jenis_dokumen', 'tb_jenis_dokumen.id_jenis = tb_arsip.id_jenis_dokumen', $where,'id_arsip_dokumen','ASC')->result();
                    $this->load->view('Desa/Page/Arsip/data', $data);
                    $this->load->view('Desa/Layout/footer');
                }
        // DELETE (Done)
            // Hapus Arsip Dokumen
                function hapus_arsip($id_arsip){
                    $where = array('id_arsip_dokumen' => $id_arsip);
                    
                    $data = array(
                        'file_dokumen' => null,
                    );

                    
                    $data2 = $this->M_App->getDataByID($where, 'tb_arsip')->row();
                    $nama = 'asset/arsip/'.$data2->file_dokumen;
                    
                    if (is_readable($nama) && unlink($nama)) { 
                        // Hapus File
                        $this->M_App->hapus_file($where, $data, 'tb_arsip');
                        // Hapus Data
                        $this->M_App->hapus_data('tb_arsip', $where);
                        redirect('Desa/arsipdokumen/');
                    }else {
                        echo "Gagal";
                    }
                }

    // END ARSIP DOKUMEN 
// ==========================================================================================================================    

}

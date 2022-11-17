<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rw extends CI_Controller {
    function __construct(){
        parent::__construct();
        // Data login
        if($this->session->userdata('id_akun') == ""){
            redirect(base_url("Loginv2"));
        }elseif (!empty($this->session->userdata('id_akun'))){
            if ($this->session->userdata('level') != "rw") {
                redirect(base_url("Loginv2"));
            }
        }
        $this->load->view('RukunWarga/Layout/head');
        $this->load->view('RukunWarga/Layout/sidebar');
        $this->load->view('RukunWarga/Layout/navbar');
    }
    // Beranda
        // READ
            // Biodata dan Persyaratan
                public function beranda(){
                    $id_rukun_warga = $this->session->userdata('id_relasi');
                    $where = array('id_rukun_warga' => $id_rukun_warga);
                    $data['tb_profile'] = $this->M_App->edit_data_join('tb_rukun_warga', 'tb_desa', 'tb_desa.id_desa = tb_rukun_warga.id_desa', $where)->result();
                    // $data['tb_persyaratan'] = $this->M_App->edit_data('tb_persyaratan',$where)->result();

                    $this->load->view('RukunWarga/Page/beranda/index',$data);
                    $this->load->view('RukunWarga/Layout/footer');
                }
        // UPDATE
            // Ubah Kontak
                function updatekontak(){
                    $id_penduduk = $this->input->post('id_penduduk');
                    $no_handphone_aktif = $this->input->post('no_handphone_aktif');
                    $data = array(
                        'no_handphone_aktif' => $no_handphone_aktif,
                    );
                    $where = array('id_penduduk' => $id_penduduk);
                    $this->M_App->proses_update($where, $data, 'tb_penduduk');
                    redirect('Penduduk/beranda');
                }
    // End Beranda

    // BUAT PENGAJUAN, JENIS DOKUMEN & PERSYARATAN
        // CREATE
            // Buat Pengajuan (DONE)
                public function prosespengajuandokumen(){
                    $tgl_pengajuan = $this->input->post('tgl_pengajuan');
                    $id_penduduk = $this->input->post('id_penduduk');
                    $id_jenis = $this->input->post('id_jenis');
                    $status_pengajuan = $this->input->post('status_pengajuan');
                    $penyerahan_dokumen = $this->input->post('penyerahan_dokumen');
                    $alamat_pengiriman = $this->input->post('alamat_pengiriman');
                
                    if ($this->input->post('penyerahan_dokumen') == "Diantar Dalam Desa") {
                        $ongkir = "5000";
                    } else if ($this->input->post('penyerahan_dokumen') == "Diantar Keluar Desa") {
                        $ongkir = "10000";
                    } else{
                        $ongkir = "0";
                    }

                    $data = array(
                        'tgl_pengajuan' => $tgl_pengajuan,
                        'id_penduduk' => $id_penduduk,
                        'id_jenis' => $id_jenis,
                        'status_pengajuan' => $status_pengajuan,
                        'penyerahan_dokumen' => $penyerahan_dokumen,
                        'alamat_pengiriman' => $alamat_pengiriman,
                        'biaya' => $ongkir,

                    );
                    $this->M_App->simpan_data('tb_pengajuan', $data);
                    // var_dump($data);
                    redirect('penduduk/trackingpengajuan/');
                }
            // END Buat Pengajuan
            // Upload Persyaratan (DONE)
                // Formulir
                    public function tambahpersyaratan(){
                        $data['tb_desa'] = $this->M_App->tampil_data('tb_desa','id_desa','ASC')->result();
                        $this->load->view('Penduduk/Page/persyaratan/tambah', $data);
                        $this->load->view('Penduduk/Layout/footer');
                    }
                // Proses Upload
                    public function prosestambahpersyaratan(){
                        $id_penduduk = $this->input->post('id_penduduk');
                        $nama_persyaratan = $this->input->post('nama_persyaratan');
                        $file_persyaratan = $this->input->post('file_persyaratan');
        
                        // Upload Gambar
                        $config['upload_path']      = 'asset/persyaratan';
                        $config['allowed_types']    = 'gif|jpg|png|jpeg|pdf|doc|docx';
                        $config['max_size']         = 999999999;
                        $config['max_width']        = 999999999;
                        $config['max_height']       = 999999999;
                    
                        $this->load->library('upload',$config);
                
                        if (!$this->upload->do_upload('file_persyaratan')) {
                            $pesan = $this->upload->display_errors();
                        }
                        $berkas = $this->upload->data('file_name');
        
                        $data = array(
                            'id_penduduk' => $id_penduduk,
                            'nama_persyaratan' => $nama_persyaratan,
                            'file_persyaratan' => $berkas
                        );
                        $this->M_App->simpan_data('tb_persyaratan', $data);
                        redirect('penduduk/pengajuan/');
                    }
            // END Upload Persyaratan
        // READ
            // Pengajuan
                public function pengajuan(){
                    // Menampilkan Persyaratan
                    $id_penduduk = $this->session->userdata('id_relasi');
                    $kondisi = array('tb_persyaratan.id_penduduk' => $id_penduduk);
                    $data['tb_persyaratan'] = $this->M_App->edit_data_join('tb_persyaratan', 'tb_penduduk', 'tb_penduduk.id_penduduk = tb_persyaratan.id_penduduk', $kondisi)->result();
                    
                    // Menampilkan  Data Penduduk 
                    $where = array('id_penduduk' => $id_penduduk);
                    $data['tb_profile'] = $this->M_App->edit_data_join('tb_penduduk', 'tb_desa', 'tb_desa.id_desa = tb_penduduk.id_desa', $where)->result();
                    $data['tb_jenis_dokumen'] = $this->M_App->tampil_data('tb_jenis_dokumen','id_jenis','ASC')->result();
                    
                    // Mengload View Pengajuan
                    $this->load->view('Penduduk/Page/pengajuan/index', $data);
                    $this->load->view('Penduduk/Layout/footer');
                }
            // END Pengajuan
        // DELETE
            // Hapus File Persyaratan
                function hapus_persyaratan($id_persyaratan){
                    $where = array('id_persyaratan' => $id_persyaratan);
                    
                    $data = array(
                        'file_persyaratan' => null,
                    );

                    
                    $data2 = $this->M_App->getDataByID($where, 'tb_persyaratan')->row();
                    $nama = 'asset/persyaratan/'.$data2->file_persyaratan;
                    
                    if (is_readable($nama) && unlink($nama)) { 
                        // Hapus File
                        $this->M_App->hapus_file($where, $data, 'tb_persyaratan');
                        // Hapus Data
                        $this->M_App->hapus_data('tb_persyaratan', $where);
                        redirect('penduduk/pengajuan/');
                    }else {
                        echo "Gagal";
                    }
                }
            // END Hapus File Persyaratan
    // END BUAT PENGAJUAN, JENIS DOKUMEN & PERSYARATAN

    // TRACKING PENGAJUAN (DONE)
        // CREATE
            // Buat Catatan
                function simpancatatan(){
                    $id_pengajuan = $this->input->post('id_pengajuan');
                    $keterangan = $this->input->post('keterangan');
                    $data = array(
                        'keterangan' => $keterangan,
                    );
                    $where = array('id_pengajuan' => $id_pengajuan);
                    $this->M_App->proses_update($where, $data, 'tb_pengajuan');
                    redirect('penduduk/trackingpengajuan');
                }
            // END Buat Catatan
        // READ
            // Tracking Pengajuan
                public function trackingpengajuan(){
                    $id_penduduk = $this->session->userdata('id_relasi');
                    $where = array('tb_pengajuan.id_penduduk' => $id_penduduk);
                    $data['tb_pengajuan'] = $this->M_App->edit_data_join3('tb_pengajuan', 
                    'tb_penduduk', 'tb_penduduk.id_penduduk = tb_pengajuan.id_penduduk',
                    'tb_desa', 'tb_desa.id_desa = tb_penduduk.id_desa',
                    'tb_jenis_dokumen', 'tb_jenis_dokumen.id_jenis = tb_pengajuan.id_jenis',
                    $where)->result();
                    $this->load->view('Penduduk/Page/pengajuan/data', $data);
                    $this->load->view('Penduduk/Layout/footer');
                }
            // END Tracking Pengajuan
    // END TRACKING PENGAJUAN
}
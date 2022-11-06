<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {
    function __construct(){
        parent::__construct();
        // Models
            $this->load->model('M_App');
        // Helper URL
            $this->load->helper('url');
        // Data login
            $this->session->userdata();

        if($this->session->userdata('id_akun_warga') == ""){
            redirect(base_url("Login"));
        }
        $this->load->view('Warga/Layout/head');
        $this->load->view('Warga/Layout/sidebar');
        $this->load->view('Warga/Layout/navbar');
    }
    // Profile
    public function beranda(){
        $id_penduduk = $this->session->userdata('id_penduduk');
        $where = array('id_penduduk' => $id_penduduk);
        $data['tb_profile'] = $this->M_App->edit_data_join('tb_penduduk', 'tb_desa', 'tb_desa.id_desa = tb_penduduk.id_desa', $where)->result();
        $data['tb_persyaratan'] = $this->M_App->edit_data('tb_persyaratan',$where)->result();

        $this->load->view('Warga/Page/beranda/biodata',$data);
        $this->load->view('Warga/Layout/footer');
    }

    // Create
        // Persyaratan
            public function tambahpersyaratan(){
                $data['tb_desa'] = $this->M_App->tampil_data('tb_desa','id_desa','ASC')->result();
                $this->load->view('Warga/Page/persyaratan/tambah', $data);
                $this->load->view('Warga/Layout/footer');
            }
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
                redirect('Warga/tambahpengajuan/');
            }
        // Pengajuan
            public function tambahpengajuan(){
                // Menampilkan Persyaratan
                $id_penduduk = $this->session->userdata('id_penduduk');
                $kondisi = array('tb_persyaratan.id_penduduk' => $id_penduduk);
                $data['tb_persyaratan'] = $this->M_App->edit_data_join('tb_persyaratan', 'tb_penduduk', 'tb_penduduk.id_penduduk = tb_persyaratan.id_penduduk', $kondisi)->result();
                // Menampilkan  Data Penduduk 
                $where = array('id_penduduk' => $id_penduduk);
                $data['tb_profile'] = $this->M_App->edit_data_join('tb_penduduk', 'tb_desa', 'tb_desa.id_desa = tb_penduduk.id_desa', $where)->result();
                $data['tb_jenis_dokumen'] = $this->M_App->tampil_data('tb_jenis_dokumen','id_jenis','ASC')->result();
                $this->load->view('Warga/Page/pengajuan/tambah', $data);
                $this->load->view('Warga/Layout/footer');
            }
            public function prosestambahpengajuandokumen(){
                $tgl_pengajuan = $this->input->post('tgl_pengajuan');
                $id_penduduk = $this->input->post('id_penduduk');
                $id_desa = $this->input->post('id_desa');
                $id_jenis = $this->input->post('id_jenis');
                $status_pengajuan = $this->input->post('status_pengajuan');
                $penyerahan_dokumen = $this->input->post('penyerahan_dokumen');
            
                if ($this->input->post('penyerahan_dokumen') == "Diantar Ke Rumah") {
                    $ongkir = "Rp. 10.000";
                } else if ($this->input->post('penyerahan_dokumen') == "Diantar Ke Luar Desa") {
                    $ongkir = "";
                } else{
                    $ongkir = "Rp. 0";
                }
                

                // $biaya = $ongkir;

                $data = array(
                    'tgl_pengajuan' => $tgl_pengajuan,
                    'id_penduduk' => $id_penduduk,
                    'id_desa' => $id_desa,
                    'id_jenis' => $id_jenis,
                    'status_pengajuan' => $status_pengajuan,
                    'penyerahan_dokumen' => $penyerahan_dokumen,
                    'biaya' => $ongkir,

                );
                $this->M_App->simpan_data('tb_pengajuan', $data);
                redirect('Warga/pengajuan/');
            }
    // Read
        // Pesyaratan
            public function persyaratan(){
                $id_penduduk = $this->session->userdata('id_penduduk');
                $kondisi = array('tb_persyaratan.id_penduduk' => $id_penduduk);

                $data['tb_persyaratan'] = $this->M_App->edit_data_join('tb_persyaratan', 'tb_penduduk', 'tb_penduduk.id_penduduk = tb_persyaratan.id_penduduk', $kondisi)->result();
                $this->load->view('Warga/Page/persyaratan/data', $data);
                $this->load->view('Warga/Layout/footer');
            }
        // Tracking Pengajuan
            public function pengajuan(){
                $id_penduduk = $this->session->userdata('id_penduduk');
                $where = array('tb_pengajuan.id_penduduk' => $id_penduduk);
                $data['tb_pengajuan'] = $this->M_App->edit_data_join3('tb_pengajuan', 
                'tb_penduduk', 'tb_penduduk.id_penduduk = tb_pengajuan.id_penduduk',
                'tb_desa', 'tb_desa.id_desa = tb_pengajuan.id_desa',
                'tb_jenis_dokumen', 'tb_jenis_dokumen.id_jenis = tb_pengajuan.id_jenis',
                $where)->result();
                $this->load->view('Warga/Page/pengajuan/data', $data);
                $this->load->view('Warga/Layout/footer');
            }
    // Update
        // Buat Catatan
        function simpancatatan(){
            $id_pengajuan = $this->input->post('id_pengajuan');
            $keterangan = $this->input->post('keterangan');
            $data = array(
                'keterangan' => $keterangan,
            );
            $where = array('id_pengajuan' => $id_pengajuan);
            $this->M_App->proses_update($where, $data, 'tb_pengajuan');
            redirect('Warga/pengajuan');
        }
        // Update Kontak
        function updatekontak(){
            $id_penduduk = $this->input->post('id_penduduk');
            $no_handphone_aktif = $this->input->post('no_handphone_aktif');
            $data = array(
                'no_handphone_aktif' => $no_handphone_aktif,
            );
            $where = array('id_penduduk' => $id_penduduk);
            $this->M_App->proses_update($where, $data, 'tb_penduduk');
            redirect('Warga/beranda');
        }
    // Delete
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
                redirect('Warga/tambahpengajuan/');
            }else {
                echo "Gagal";
            }
        }
}
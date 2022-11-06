<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CetakDokumen extends CI_Controller {
    function __construct(){
        parent::__construct();
        // Models
            $this->load->model('M_App');
        // Helper URL
            $this->load->helper('url');
        // Data login
            $this->session->userdata();

        if($this->session->userdata('id_admin') == ""){
            redirect(base_url("Login"));
        }
        $this->load->view('CetakDokumen/Layout/head');
        // $this->load->view('CetakDokumen/Layout/sidebar');
        // $this->load->view('CetakDokumen/Layout/navbar');
    }

    public function cetak_sdomisili($token_surat){
        $where = array('token_surat' => $token_surat);
        $data['tb_sdomisili'] = $this->M_App->edit_data_join2('tb_sdomisili', 'tb_desa', 'tb_desa.id_desa = tb_sdomisili.id_desa', 'tb_penduduk', 'tb_penduduk.id_penduduk = tb_sdomisili.id_penduduk', $where)->result();

        $this->load->view('CetakDokumen/Jenis/surat_keterangan_domisili',$data);
        $this->load->view('CetakDokumen/Layout/footer');
    }
    public function cetak_smenikah($token_surat){
        $where = array('token_surat' => $token_surat);
        $data['tb_smenikah'] = $this->M_App->edit_data_join2('tb_smenikah', 'tb_desa', 'tb_desa.id_desa = tb_smenikah.id_desa', 'tb_penduduk', 'tb_penduduk.id_penduduk = tb_smenikah.id_penduduk', $where)->result();

        $this->load->view('CetakDokumen/Jenis/surat_keterangan_menikah',$data);
        $this->load->view('CetakDokumen/Layout/footer');
    }
    public function cetak_sbmenikah($token_surat){
        $where = array('token_surat' => $token_surat);
        $data['tb_sbmenikah'] = $this->M_App->edit_data_join2('tb_sbmenikah', 'tb_desa', 'tb_desa.id_desa = tb_sbmenikah.id_desa', 'tb_penduduk', 'tb_penduduk.id_penduduk = tb_sbmenikah.id_penduduk', $where)->result();

        $this->load->view('CetakDokumen/Jenis/surat_keterangan_belum_menikah',$data);
        $this->load->view('CetakDokumen/Layout/footer');
    }
    public function cetak_sku($token_surat){
        $where = array('token_surat' => $token_surat);
        $data['tb_sku'] = $this->M_App->edit_data_join2('tb_sku', 'tb_desa', 'tb_desa.id_desa = tb_sku.id_desa', 'tb_penduduk', 'tb_penduduk.id_penduduk = tb_sku.id_penduduk', $where)->result();

        $this->load->view('CetakDokumen/Jenis/surat_keterangan_usaha',$data);
        $this->load->view('CetakDokumen/Layout/footer');
    }
    public function cetak_skelahiran($token_surat){
        $where = array('token_surat' => $token_surat);
        $data['tb_skelahiran'] = $this->M_App->edit_data_join2('tb_skelahiran', 'tb_desa', 'tb_desa.id_desa = tb_skelahiran.id_desa', 'tb_penduduk', 'tb_penduduk.id_penduduk = tb_skelahiran.id_penduduk', $where)->result();

        $this->load->view('CetakDokumen/Jenis/surat_keterangan_kelahiran',$data);
        $this->load->view('CetakDokumen/Layout/footer');
    }
    public function cetak_skematian($token_surat){
        $where = array('token_surat' => $token_surat);
        $data['tb_skematian'] = $this->M_App->edit_data_join2('tb_skematian', 'tb_desa', 'tb_desa.id_desa = tb_skematian.id_desa', 'tb_penduduk', 'tb_penduduk.id_penduduk = tb_skematian.id_penduduk', $where)->result();

        $this->load->view('CetakDokumen/Jenis/surat_keterangan_kematian',$data);
        $this->load->view('CetakDokumen/Layout/footer');
    }
    public function cetak_sktm($token_surat){
        $where = array('token_surat' => $token_surat);
        $data['tb_sktm'] = $this->M_App->edit_data_join2('tb_sktm', 'tb_desa', 'tb_desa.id_desa = tb_sktm.id_desa', 'tb_penduduk', 'tb_penduduk.id_penduduk = tb_sktm.id_penduduk', $where)->result();

        $this->load->view('CetakDokumen/Jenis/surat_keterangan_tidak_mampu',$data);
        $this->load->view('CetakDokumen/Layout/footer');
    }

}
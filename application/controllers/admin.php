<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        // Data login
            $this->session->userdata();

            if($this->session->userdata('id_akun') == ""){
                redirect(base_url("Loginv2"));
            }elseif (!empty($this->session->userdata('id_akun'))){
                if ($this->session->userdata('level') != "admin") {
                    redirect(base_url("Loginv2"));
                }
            }
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/Layout/navbar');
    }

    public function beranda()
	{
        redirect('/admin/datadesa');
    }

    // Create =======================================================================================================
        public function tambahdatadesa(){
            $this->load->view('Admin/Page/Desa/tambah');
            $this->load->view('Admin/Layout/footer');
        }
        // Proses Insert Database
        public function prosestambahdatadesa(){
            $nama_desa = $this->input->post('nama_desa');
            $nama_kepala_desa = $this->input->post('nama_kepala_desa');
            $alamat_desa = $this->input->post('alamat_desa');
            $kecamatan_desa = $this->input->post('kecamatan_desa');
            $kabupaten_desa = $this->input->post('kabupaten_desa');
            $email_desa = $this->input->post('email_desa');
            $telepon_desa = $this->input->post('telepon_desa');

            $data = array(
                'nama_desa' => $nama_desa,
                'nama_kepala_desa' => $nama_kepala_desa,
                'alamat_desa' => $alamat_desa,
                'kecamatan_desa' =>$kecamatan_desa,
                'kabupaten_desa' => $kabupaten_desa,
                'email_desa' => $email_desa,
                'telepon_desa' => $telepon_desa,
            );
            $this->M_App->simpan_data('tb_desa', $data);
            redirect('Admin/datadesa/');
        }
        
        public function buatakundesa($id_relasi, $user, $pass, $level){
            $password_md5 = md5($pass);

            $data = array(
                'id_relasi' => $id_relasi,
                'username' => $user,
                'password' => $password_md5,
                'level' => $level,
            );
            $this->M_App->simpan_data('tb_akun', $data);
            redirect('admin/datadesa/');
        }
    // Read =========================================================================================================
        public function datadesa()
        {   
            $data['tb_desa'] = $this->M_App->tampil_data('tb_desa','id_desa','ASC')->result();

            $this->load->view('Admin/Page/Desa/data', $data);
            $this->load->view('Admin/Layout/footer');
        }
        public function dataadmindesa()
        {
            $data['tb_admindesa'] = $this->M_App->tampil_data_join('tb_admindesa', 'tb_desa', 'tb_desa.id_desa = tb_admindesa.id_desa', 'id_admin','ASC')->result();

            $this->load->view('Admin/Page/AdminDesa/data', $data);
            $this->load->view('Admin/Layout/footer');
        }
    // Update =======================================================================================================
        // Desa
        function edit_desa($id_desa){
            $where = array('id_desa' => $id_desa);
            $data['tb_desa'] = $this->M_App->edit_data('tb_desa',$where)->result();
            $this->load->view('Admin/Page/Desa/edit',$data);
            $this->load->view('Admin/Layout/footer');
        }
        function prosesubahdatadesa(){
            $id_desa = $this->input->post('id_desa');
            $nama_desa = $this->input->post('nama_desa');
            $nama_kepala_desa = $this->input->post('nama_kepala_desa');
            $alamat_desa = $this->input->post('alamat_desa');
            $kecamatan_desa = $this->input->post('kecamatan_desa');
            $kabupaten_desa = $this->input->post('kabupaten_desa');
            $email_desa = $this->input->post('email_desa');
            $telepon_desa = $this->input->post('telepon_desa');

            $data = array(
                'nama_desa' => $nama_desa,
                'nama_kepala_desa' => $nama_kepala_desa,
                'alamat_desa' => $alamat_desa,
                'kecamatan_desa' =>$kecamatan_desa,
                'kabupaten_desa' => $kabupaten_desa,
                'email_desa' => $email_desa,
                'telepon_desa' => $telepon_desa,
            );
            $where = array('id_desa' => $id_desa);
            $this->M_App->proses_update($where, $data, 'tb_desa');
            redirect('Admin/datadesa');   
        }

    // Delete =======================================================================================================
        function hapus_desa($id_desa){
            $where = array('id_desa' => $id_desa);
            $this->M_App->hapus_data('tb_desa', $where);     
            $whereakun = array(
                'id_relasi' => $id_desa,
                'level' => 'desa',
            );
            $this->M_App->hapus_data('tb_akun', $whereakun);
            // $this->M_App->hapus_data('tb_penduduk', $where);
            redirect('admin/datadesa/');
        }
        function hapusakundesa($id_relasi,$level){
            $whereakun = array(
                'id_relasi' => $id_relasi,
                'level' => $level,
            );
            $this->M_App->hapus_data('tb_akun', $whereakun);
            redirect('admin/datadesa/');
        }
    // Upload data ==================================================================================================
        // Berkas Penduduk
            // Upload Logo Desa
            function upload_logo_desa(){
                $id_desa = $this->input->post('id_desa');
                // Upload Gambar
                $config['upload_path']      = 'asset/img/logo';
                $config['allowed_types']    = 'gif|jpg|png|jpeg';
                $config['max_size']         = 999999999;
                $config['max_width']        = 999999999;
                $config['max_height']       = 999999999;
            
                $this->load->library('upload',$config);
        
                if (!$this->upload->do_upload('upload_logo_desa')) {
                    $pesan = $this->upload->display_errors();
                }
                $berkas = $this->upload->data('file_name');
        
                $data = array(
                    'logo_desa' => $berkas,
                );
                $where = array('id_desa' => $id_desa);
                $this->M_App->proses_update($where, $data, 'tb_desa');
                redirect('Admin/datadesa');
            }

            function hapus_file_logo($id){
                $where = array('id_desa' => $id);
                $data = array(
                    'logo_desa' => null,
                );

                
                $data2 = $this->M_App->getDataByID($where, 'tb_desa')->row();
                $nama = 'asset/img/logo/'.$data2->logo_desa;
                
                if (is_readable($nama) && unlink($nama)) { 
                    $delete = $this->M_App->hapus_file($where, $data, 'tb_desa');
                    echo "Berhasil";
                    redirect('Admin/datadesa');
                }else {
                    echo "Gagal";
                }
            }

}

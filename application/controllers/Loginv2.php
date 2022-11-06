<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginv2 extends CI_Controller {
    // Halaman Login
	function index(){
        // Membuat Array Data Desa
        $data['tb_desa'] = $this->M_App->tampil_data('tb_desa','id_desa','ASC')->result();
        
        // Menampilkan View Halaman Login
        $this->load->view('login/index',$data);
    }

	// Pengecekan login
	function auth(){
        $relasi = 'admin';
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $sandi_md5 = md5($password); // konversi ke encrypt => Md5

        // Menampilkan data login
        $where = array(
            'username' => $username,
            'password' => $sandi_md5
        );
        
        $stat = $this->M_App->cek_akun($where,'tb_akun')->num_rows();
        if ($stat > 0) {
            $data = $this->M_App->cek_akun($where, 'tb_akun')->result();
            foreach ($data as $data);
            
            $datalogin = array(
                'id_akun'=> $data->id_akun,
                'id_relasi'=> $data->id_relasi,
                'username'=> $data->username,
                'password'=> $data->password,
                'level'=> $data->level,
                // 'relasi'=> $relasi
            );
            // var_dump($datalogin);
            $this->session->set_userdata($datalogin);
            header('location:'.base_url().$data->level.'/beranda');
        }else{
            echo "Tidak Masuk";
            // header('location:'.base_url().'Login');
        }

    }
    
    function logout(){
        $this->session->sess_destroy(); // Destroy data login sebelumnya
        header('location:'.base_url().'Loginv2');
    }
}

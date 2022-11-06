<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    // Halaman Login
	function index(){
        // Membuat Array Data Desa
        $data['tb_desa'] = $this->M_App->tampil_data('tb_desa','id_desa','ASC')->result();
        // Menampilkan View Halaman Login
        $this->load->view('login/index',$data);
    }
    
    // Halaman Register - Belum digunakan
    // function register(){
    //     $this->load->view('register/index');
    // }

	// Pengecekan login
	function auth(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $sandi_md5 = md5($password); // konversi ke encrypt => Md5
        $akses = $this->input->post('akses');

        // Jika Admin yang login => Akses Admin
        if ($akses == "Admin") {
            $where = array(
                'username' => $username,
                'password' => $sandi_md5
            );
            $stat = $this->M_App->cek_akun($where,'tb_admin')->num_rows();
            if ($stat > 0) {
                $data = $this->M_App->cek_akun($where, 'tb_admin')->result();
                foreach ($data as $data);
                $datalogin = array(
                    'id_admin'=> $data->id_admin,
                    'nama_admin'=> $data->nama_admin,
                    'username'=> $data->username,
                    'password'=> $data->password,
                    'password_desk'=> $data->password_desk
                );
                $this->session->set_userdata($datalogin);
                header('location:'.base_url().'Admin/beranda');
            }else{
                // echo "Tidak Masuk Admin";
                header('location:'.base_url().'Login');
            }
        // Jika Admin Desa yang login => Akses Admin Desa
        }elseif ($akses == "AdminDesa") {
            $where = array(
                'username' => $username,
                'password' => $sandi_md5
            );
            $stat = $this->M_App->cek_akun($where,'tb_admindesa')->num_rows();
            if ($stat > 0) {
                $data = $this->M_App->cek_akun($where, 'tb_admindesa')->result();
                foreach ($data as $data);
                $datalogin = array(
                    'id_admin'=> $data->id_admin,
                    'nip'=> $data->nip,
                    'id_desa'=> $data->id_desa,
                    'username'=> $data->username,
                    'password'=> $data->password,
                    'password_desk'=> $data->password_desk,
                );
                $this->session->set_userdata($datalogin);
                // var_dump($where);
                // echo "Masuk Admin Desa";
                header('location:'.base_url().'AdminDesa/beranda');
            }else{
                // echo "Tidak Masuk Admin Desa";
                header('location:'.base_url().'Login');
            }
        // Jika Warga yang login => Akses Warga 
        }elseif ($akses == "Warga") {
            $where = array(
                'username' => $username,
                'password' => $sandi_md5
            );
            $stat = $this->M_App->cek_akun($where,'tb_akunwarga')->num_rows();
            if ($stat > 0) {
                $data = $this->M_App->cek_akun($where, 'tb_akunwarga')->result();
                foreach ($data as $data);
                $datalogin = array(
                    'id_akun_warga'=> $data->id_akun_warga,
                    'id_penduduk'=> $data->id_penduduk,
                    'username'=> $data->username,
                    'password'=> $data->password,
                    'password_desk'=> $data->password_desk
                );
                $this->session->set_userdata($datalogin);
                // var_dump($datalogin);
                // echo "Masuk Warga Desa";
                header('location:'.base_url().'Warga/beranda');

            }else{
                // echo "Tidak Masuk Warga Desa";
                header('location:'.base_url().'Login');
            }
        }
    }
    
    function logout(){
        $this->session->sess_destroy(); // Destroy data login sebelumnya
        header('location:'.base_url().'Login');
    }
}

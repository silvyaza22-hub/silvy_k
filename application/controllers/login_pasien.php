<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_pasien_model');
    }

    public function index()
    {
        // Jika sudah login langsung ke dashboard pasien
        if($this->session->userdata('login_pasien')){
            redirect('dashboard_pasien');
        }
            $this->load->view('login_pasien/index');
    }

    public function login()
    {
        $email    = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);

        $pasien = $this->login_pasien_model->cek_login($email, $password);

        if($pasien){

            $data = array(
                'id_pasien'    => $pasien->id_pasien,
                'nama_pasien'  => $pasien->nama,
                'email_pasien' => $pasien->email,
                'login_pasien' => TRUE
            );

            $this->session->set_userdata($data);

            redirect('dashboard_pasien');

        }else{

            $this->session->set_flashdata(
                'error',
                'Email atau Password salah!'
            );

            redirect('login_pasien');
        }
    }

    public function logout()
{
    $this->session->sess_destroy();
    redirect('login_pasien');
}
}
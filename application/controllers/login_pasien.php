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
        $this->load->view('login_pasien');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $pasien = $this->login_pasien_model->cek_login($email, $password);

       if($pasien){

        $this->session->set_userdata([
            'id_pasien' => $pasien->id_pasien,
            'nama' => $pasien->nama,
            'login_pasien' => TRUE
        ]);

        redirect('dashboard_pasien');



        }else{

            $this->session->set_flashdata('error','Email atau Password salah');
            redirect('login_pasien');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login_pasien');
    }
}
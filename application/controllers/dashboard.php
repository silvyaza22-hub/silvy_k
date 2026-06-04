<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['total_pasien'] = $this->db->count_all('pasien');
        $data['total_dokter'] = $this->db->count_all('dokter');
        $data['total_pendaftaran'] = $this->db->count_all('pendaftaran');

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}
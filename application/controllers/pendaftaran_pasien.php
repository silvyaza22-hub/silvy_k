<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran_pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login_pasien')){
            redirect('login_pasien');
        }
    }

    public function index()
    {
        $id_pasien = $this->session->userdata('id_pasien');

        $this->db->select('pendaftaran.*, dokter.nama_dokter');
        $this->db->from('pendaftaran');
        $this->db->join('dokter', 'dokter.id_dokter = pendaftaran.id_dokter');
        $this->db->where('pendaftaran.id_pasien', $id_pasien);

        $data['pendaftaran'] = $this->db->get()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pendaftaran_pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['dokter'] = $this->db->get('dokter')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pendaftaran_pasien/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = array(
            'id_pasien'      => $this->session->userdata('id_pasien'),
            'id_dokter'      => $this->input->post('dokter_id'),
            'keluhan'        => $this->input->post('keluhan'),
            'tanggal_daftar' => $this->input->post('tanggal_daftar'),
            'jam_kunjungan'  => $this->input->post('jam_kunjungan'),
            'status'         => 'Proses'
        );

        $this->db->insert('pendaftaran', $data);

        $this->session->set_flashdata(
            'success',
            'Pendaftaran berhasil dikirim'
        );

        redirect('pendaftaran_pasien');
    }
}
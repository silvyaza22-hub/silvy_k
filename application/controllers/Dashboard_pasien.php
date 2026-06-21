<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_pasien extends CI_Controller {

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

        // Total pendaftaran
        $this->db->where('id_pasien', $id_pasien);
        $data['total_daftar'] = $this->db->count_all_results('pendaftaran');

        // Total disetujui
        $this->db->where('id_pasien', $id_pasien);
        $this->db->where('status', 'Disetujui');
        $data['total_disetujui'] = $this->db->count_all_results('pendaftaran');

        // Total diproses
        $this->db->where('id_pasien', $id_pasien);
        $this->db->where('status', 'Proses');
        $data['total_proses'] = $this->db->count_all_results('pendaftaran');

        // Total ditolak
        $this->db->where('id_pasien', $id_pasien);
        $this->db->where('status', 'Ditolak');
        $data['total_ditolak'] = $this->db->count_all_results('pendaftaran');

        // Riwayat pendaftaran pasien
        $this->db->select('pendaftaran.*, dokter.nama_dokter');
        $this->db->from('pendaftaran');
        $this->db->join(
            'dokter',
            'dokter.id_dokter = pendaftaran.id_dokter'
        );
        $this->db->where(
            'pendaftaran.id_pasien',
            $id_pasien
        );
        $this->db->order_by('pendaftaran.id_daftar', 'DESC');

        $data['pendaftaran'] = $this->db->get()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dashboard_pasien/index', $data);
        $this->load->view('templates/footer');
    }
}
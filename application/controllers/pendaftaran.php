<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        
        if(!$this->session->userdata('login')){
            redirect('auth');
        }

        $this->load->model('pendaftaran_model');
    }

    public function index()
    {
        $data['pendaftaran'] = $this->pendaftaran_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pendaftaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['pasien'] = $this->db->get('pasien')->result();
        $data['dokter'] = $this->db->get('dokter')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pendaftaran/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'id_pasien'      => $this->input->post('pasien_id'),
            'id_dokter'      => $this->input->post('dokter_id'),
            'keluhan'        => $this->input->post('keluhan'),
            'tanggal_daftar' => $this->input->post('tanggal_daftar'),
            'jam_kunjungan'  => $this->input->post('jam_kunjungan'),
            'status'         => $this->input->post('status')
        ];

        $this->pendaftaran_model->insert($data);

        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect('pendaftaran');
    }

    public function edit($id)
    {
        $data['pasien'] = $this->db->get('pasien')->result();
        $data['dokter'] = $this->db->get('dokter')->result();
        $data['data'] = $this->db->get_where('pendaftaran', ['id_daftar' => $id])->row();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pendaftaran/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = [
            'id_pasien'      => $this->input->post('pasien_id'),
            'id_dokter'      => $this->input->post('dokter_id'),
            'keluhan'        => $this->input->post('keluhan'),
            'tanggal_daftar' => $this->input->post('tanggal_daftar'),
            'jam_kunjungan'  => $this->input->post('jam_kunjungan'),
            'status'         => $this->input->post('status')
        ];

        $this->db->where('id_daftar', $id);
        $this->db->update('pendaftaran', $data);

        $this->session->set_flashdata('success', 'Data berhasil diupdate');
        redirect('pendaftaran');
    }

    public function hapus($id)
    {
        $this->pendaftaran_model->delete($id);

        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('pendaftaran');
    }
}
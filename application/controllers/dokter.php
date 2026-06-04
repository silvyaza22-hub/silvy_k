<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Dokter_model');
    }

    public function index()
    {
        $data['dokter'] = $this->Dokter_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dokter/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dokter/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'nama_dokter' => $this->input->post('nama_dokter'),
            'spesialis'   => $this->input->post('spesialis')
        ];

        $this->Dokter_model->insert($data);

        redirect('dokter');
    }

    public function hapus($id)
    {
        $this->Dokter_model->delete($id);

        redirect('dokter');
    }

    public function edit($id)
    {
        $data['dokter'] = $this->Dokter_model->get_by_id($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dokter/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = [
            'nama_dokter' => $this->input->post('nama_dokter'),
            'spesialis'   => $this->input->post('spesialis')
        ];

        $this->Dokter_model->update($id, $data);

        redirect('dokter');
    }

    public function cetak_dokter()
    {
        $data['dokter'] = $this->db->get('dokter')->result();

        $this->load->view('laporan/cetak_dokter', $data);
    }
}
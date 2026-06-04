<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spesialis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Spesialis_model');
    }

    public function index()
    {
        $data['spesialis'] = $this->Spesialis_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('spesialis/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('spesialis/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'spesialis' => $this->input->post('spesialis')
        ];

        $this->Spesialis_model->insert($data);

        redirect('spesialis');
    }

    public function hapus($id)
    {
        $this->Spesialis_model->delete($id);

        $this->session->set_flashdata('success','Data berhasil dihapus');

        redirect('spesialis');
    }

    public function edit($id)
    {
        $data['spesialis'] = $this->Spesialis_model->get_by_id($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('spesialis/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = [
            'spesialis' => $this->input->post('spesialis')
        ];

        $this->Spesialis_model->update($id, $data);

        $this->session->set_flashdata('success','Data berhasil diupdate');

        redirect('spesialis');
    }
}
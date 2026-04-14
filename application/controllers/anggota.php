<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('anggota_model');
    }

    public function index()
    {
        $data['anggota'] = $this->anggota_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'nomor_anggota' => $this->input->post('nomor_anggota'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'tanggal_daftar' => $this->input->post('tanggal_daftar'),
            'status' => $this->input->post('status')
        ];

        $this->anggota_model->insert($data);

        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect('anggota');
    }
    public function hapus($nomor)
    {
        $this->anggota_model->delete($nomor);
        redirect('anggota');
    }

    public function edit($nomor)
    {
        $data['anggota'] = $this->anggota_model->get_by_id($nomor);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($nomor)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'tanggal_daftar' => $this->input->post('tanggal_daftar')
        ];

        $this->anggota_model->update($nomor, $data);
        redirect('anggota');
    }
}
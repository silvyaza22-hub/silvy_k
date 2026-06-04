<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pasien_model');
    }

    public function index()
    {
        $data['pasien'] = $this->pasien_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pasien/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
{
    $data = [
        'nama' => $this->input->post('nama'),
        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
        'alamat' => $this->input->post('alamat'),
        'no_telp' => $this->input->post('no_telp')
    ];

    $this->pasien_model->insert($data);

    $this->session->set_flashdata('success', 'Data pasien berhasil ditambahkan');
    redirect('pasien');
}

    public function hapus($id)
    {
        $this->pasien_model->delete($id);
        redirect('pasien');
    }

    public function edit($id)
    {
        $data['pasien'] = $this->pasien_model->get_by_id($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pasien/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
{
    $data = [
        'nama' => $this->input->post('nama'),
        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
        'alamat' => $this->input->post('alamat'),
        'no_telp' => $this->input->post('no_telp')
    ];

    $this->pasien_model->update($id, $data);

    redirect('pasien');
}
    public function cetak_pasien()
    {
        $data['pasien'] = $this->db->get('pasien')->result();

        $this->load->view('laporan/cetak_pasien', $data);
    }
}
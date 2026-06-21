<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi_pasien extends CI_Controller {

    public function index()
    {
        $this->load->view('registrasi_pasien/index');
    }

    public function simpan()
    {
        $data = array(
            'nama'          => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat'        => $this->input->post('alamat'),
            'no_telp'       => $this->input->post('no_telp'),
            'email'         => $this->input->post('email'),
            'password'      => $this->input->post('password')
        );

        $this->db->insert('pasien', $data);

        $this->session->set_flashdata(
            'success',
            'Registrasi berhasil, silakan login.'
        );

        redirect('login_pasien');
    }
}
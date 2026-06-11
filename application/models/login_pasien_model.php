<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pasien_model extends CI_Model {

    public function cek_login($email, $password)
    {
        return $this->db->get_where('pasien', [
            'email' => $email,
            'password' => $password
        ])->row();
    }
}
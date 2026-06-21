<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pasien_model extends CI_Model {

    public function cek_login($email, $password)
    {
        return $this->db
                    ->where('email', $email)
                    ->where('password', $password)
                    ->get('pasien')
                    ->row();
    }
}
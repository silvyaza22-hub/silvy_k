<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggota_model extends CI_Model {

    private $table = 'anggota';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function delete($nomor)
    {
        return $this->db->delete($this->table, ['nomor_anggota' => $nomor]);
    }

    public function get_by_id($nomor)
    {
        return $this->db->get_where($this->table, ['nomor_anggota' => $nomor])->row();
    }

    public function update($nomor, $data)
    {
        $this->db->where('nomor_anggota', $nomor);
        return $this->db->update($this->table, $data);
    }
}
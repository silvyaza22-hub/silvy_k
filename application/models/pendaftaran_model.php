<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran_model extends CI_Model {

    private $table = 'pendaftaran';

    public function get_all()
{
    $this->db->select('
        pendaftaran.*,
        pasien.nama AS nama_pasien,
        dokter.nama_dokter
    ');
    $this->db->from('pendaftaran');
    $this->db->join('pasien', 'pasien.id_pasien = pendaftaran.id_pasien');
    $this->db->join('dokter', 'dokter.id_dokter = pendaftaran.id_dokter');

    return $this->db->get()->result();
}
    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, [
            'id_daftar' => $id
        ])->row();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_daftar', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, [
            'id_daftar' => $id
        ]);
    }

    public function setujui($id)
    {
        $this->db->where('id_daftar', $id);
        return $this->db->update($this->table, [
            'status' => 'Disetujui'
        ]);
    }

    public function tolak($id)
    {
        $this->db->where('id_daftar', $id);
        return $this->db->update($this->table, [
            'status' => 'Ditolak'
        ]);
    }
}
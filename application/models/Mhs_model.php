<?php

class Mhs_model extends CI_Model
{
    public function getMahasiswa()
    {
        $this->db->select('*');
        $this->db->from('mhs_baru');
        $this->db->join('pendaftaran', 'pendaftaran.nama = mhs_baru.nama_mhs');
        $this->db->where('pendaftaran.email', $this->session->userdata('email'));

        $query = $this->db->get();
        return $query->row_array();
    }
}

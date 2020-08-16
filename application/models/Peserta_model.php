<?php

class Peserta_model extends CI_Model
{
    public function getAllPeserta()
    {
        $this->db->select('*');
        $this->db->from('peserta_ujian');
        $this->db->join('pendaftaran', 'pendaftaran.id_pendaftaran = peserta_ujian.id_pendaftaran');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPesertaById($id)
    {
        $this->db->select('*');
        $this->db->from('peserta_ujian');
        $this->db->join('pendaftaran', 'peserta_ujian.id_pendaftaran = pendaftaran.id_pendaftaran');
        $this->db->join('jalur_masuk', 'pendaftaran.kode_jalur = jalur_masuk.id_jalur');
        $this->db->join('jurusan', 'pendaftaran.kode_jrs = jurusan.kode_jrs');
        $this->db->where('peserta_ujian.id_peserta', $id);

        $query = $this->db->get();
        return $query->row_array();
    }

    public function editPeserta()
    {
        $data = [
            "id_peserta" => $this->input->post('id_peserta', true),
            "nilai" => $this->input->post('nilai', true),
            "status" => $this->input->post('status', true),
            "id_pendaftaran" => $this->input->post('id_pendaftaran', true)
        ];

        $this->db->where('id_peserta', $this->input->post('id_peserta'));
        $this->db->update('peserta_ujian', $data);
    }
}

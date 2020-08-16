<?php

class Calon_model extends CI_Model
{
    public function getMahasiswa()
    {
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->join('jurusan', 'pendaftaran.kode_jrs = jurusan.kode_jrs');
        $this->db->join('jalur_masuk', 'pendaftaran.kode_jalur = jalur_masuk.id_jalur');
        $this->db->where('pendaftaran.no_ijazah', $this->session->userdata('no_ijazah'));

        $query = $this->db->get();
        return $query->row_array();
    }

    public function getTglUjian($kode_jalur)
    {
        $this->db->select('*');
        $this->db->from('jalur_masuk');
        $this->db->where('id_jalur', $kode_jalur);

        $query = $this->db->get();
        return $query->row_array();
    }

    public function getSoal()
    {
        $this->db->select('*');
        $this->db->from('soal');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getCountSoal()
    {
        return $this->db->count_all('soal');
    }

    public function inputNilai($nilai)
    {
        $data = [
            "nilai" => $nilai,
            "id_pendaftaran" => $this->input->post('id_pendaftaran')
        ];

        $this->db->insert('peserta_ujian', $data);
    }

    public function cekKelulusan($id)
    {
        $this->db->select('*');
        $this->db->from('peserta_ujian');
        $this->db->where('id_pendaftaran', $id);

        $query = $this->db->get();
        return $query->row_array();
    }
}

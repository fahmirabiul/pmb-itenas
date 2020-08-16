<?php

class Jurusan_model extends CI_Model
{

    public function getAllJurusan()
    {
        return $this->db->get('jurusan')->result_array();
    }

    public function insertJurusan()
    {
        $data = [
            "mapel" => $this->input->post('mapel'),
            "pertanyaan" => $this->input->post('pertanyaan', true),
            "pil_a" => $this->input->post('pil_a', true),
            "pil_b" => $this->input->post('pil_b', true),
            "pil_c" => $this->input->post('pil_c', true),
            "pil_d" => $this->input->post('pil_d', true),
            "jawaban" => $this->input->post('jawaban', true)
        ];

        $this->db->insert('soal', $data);
    }

    public function deleteJurusan($id)
    {
        $this->db->where('kode_jrs', $id);
        $this->db->delete('jurusan');
    }

    public function getJurusanById($id)
    {
        return $this->db->get_where('jurusan', ['kode_jrs' => $id])->row_array();
    }

    public function editJurusan()
    {
        $data = [
            "kode_jrs" => $this->input->post('kode_jrs', true),
            "nama_jrs" => $this->input->post('nama_jrs', true),
            "fakultas" => $this->input->post('fakultas', true),
            "akreditasi" => $this->input->post('akreditasi', true),
            "uang_kuliah" => $this->input->post('uang_kuliah', true),
            "dpp_wajib" => $this->input->post('dpp_wajib', true),
            "brosur" => $this->input->post('brosur', true)
        ];

        $this->db->where('kode_jrs', $this->input->post('kode_jrs'));
        $this->db->update('jurusan', $data);
    }
}

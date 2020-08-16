<?php

class Soal_model extends CI_Model
{
    public function getAllSoal()
    {
        $this->db->select('*');
        $this->db->from('soal');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function insertSoal()
    {
        $data = [
            "mapel" => $this->input->post('mapel', true),
            "pertanyaan" => $this->input->post('pertanyaan', true),
            "pil_a" => $this->input->post('pil_a', true),
            "pil_b" => $this->input->post('pil_b', true),
            "pil_c" => $this->input->post('pil_c', true),
            "pil_d" => $this->input->post('pil_d', true),
            "jawaban" => $this->input->post('jawaban', true)
        ];

        $this->db->insert('soal', $data);
    }

    public function getSoalById($id)
    {
        return $this->db->get_where('soal', ['id_soal' => $id])->row_array();
    }

    public function editSoal()
    {
        $data = [
            "id_soal" => $this->input->post('id_soal', true),
            "mapel" => $this->input->post('mapel', true),
            "pertanyaan" => $this->input->post('pertanyaan', true),
            "pil_a" => $this->input->post('pil_a', true),
            "pil_b" => $this->input->post('pil_b', true),
            "pil_c" => $this->input->post('pil_c', true),
            "pil_d" => $this->input->post('pil_d', true),
            "jawaban" => $this->input->post('jawaban', true)
        ];

        $this->db->where('id_soal', $this->input->post('id_soal'));
        $this->db->update('soal', $data);
    }

    public function deleteSoal($id)
    {
        $this->db->where('id_soal', $id);
        $this->db->delete('soal');
    }
}

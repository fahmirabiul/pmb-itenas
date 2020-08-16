<?php
class Berita_model extends CI_Model
{
    public function getBerita($id)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('id', $id);

        $query = $this->db->get();
        return $query->row_array();
    }

    public function getBeritaResult()
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(3);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAllBerita()
    {
        $this->db->select('*');
        $this->db->from('berita');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function insertBerita()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "judul" => $this->input->post('judul', true),
            "tanggal" => $this->input->post('tanggal', true),
            "highlight" => $this->input->post('highlight', true),
            "isi" => $this->input->post('isi', true),
            "link" => $this->input->post('link', true)
        ];

        $this->db->insert('berita', $data);
    }

    public function editBerita()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "judul" => $this->input->post('judul', true),
            "tanggal" => $this->input->post('tanggal', true),
            "highlight" => $this->input->post('highlight', true),
            "isi" => $this->input->post('isi', true),
            "link" => $this->input->post('link', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('berita', $data);
    }

    public function deleteBerita($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('berita');
    }
}

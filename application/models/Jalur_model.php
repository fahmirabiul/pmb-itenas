<?php

class Jalur_model extends CI_Model
{
    public function getAllJalur()
    {
        return $this->db->get('jalur_masuk')->result_array();
    }

    public function insertJalur()
    {
        $data = [
            "nama_jalur" => $this->input->post('nama_jalur', true),
            "biaya" => $this->input->post('biaya', true),
            "periode" => $this->input->post('periode', true),
            "pendaftaran_aw" => $this->input->post('pendaftaran_aw', true),
            "pendaftaran_ak" => $this->input->post('pendaftaran_ak', true),
            "ujian" => $this->input->post('ujian', true),
            "pengumuman" => $this->input->post('pengumuman', true),
            "daftar_ulang_aw" => $this->input->post('daftar_ulang_aw', true),
            "daftar_ulang_ak" => $this->input->post('daftar_ulang_ak', true),
        ];

        $this->db->insert('jalur_masuk', $data);
    }

    public function deleteJalur($id)
    {
        $this->db->where('id_jalur', $id);
        $this->db->delete('jalur_masuk');
    }

    public function getJalurById($id)
    {
        return $this->db->get_where('jalur_masuk', ['id_jalur' => $id])->row_array();
    }

    public function editJalur()
    {
        $data = [
            "id_jalur" => $this->input->post('id_jalur', true),
            "nama_jalur" => $this->input->post('nama_jalur', true),
            "biaya" => $this->input->post('biaya', true),
            "periode" => $this->input->post('periode', true),
            "pendaftaran_aw" => $this->input->post('pendaftaran_aw', true),
            "pendaftaran_ak" => $this->input->post('pendaftaran_ak', true),
            "ujian" => $this->input->post('ujian', true),
            "pengumuman" => $this->input->post('pengumuman', true),
            "daftar_ulang_aw" => $this->input->post('daftar_ulang_aw', true),
            "daftar_ulang_ak" => $this->input->post('daftar_ulang_ak', true),
        ];

        $this->db->where('id_jalur', $this->input->post('id_jalur'));
        $this->db->update('jalur_masuk', $data);
    }

    public function getPmdk()
    {
        $this->db->like('nama_jalur', 'pmdk');
        return $this->db->get('jalur_masuk')->result_array();
    }

    public function getUsm()
    {
        $this->db->like('nama_jalur', 'usm');
        return $this->db->get('jalur_masuk')->result_array();
    }

    public function getOdt()
    {
        $this->db->like('nama_jalur', 'odt');
        return $this->db->get('jalur_masuk')->result_array();
    }

    public function getJalurPendaftaran()
    {
        return $this->db->get_where('jalur_masuk', ['id_jalur' => $this->input->get('kode_jalur')])->row_array();
    }
}

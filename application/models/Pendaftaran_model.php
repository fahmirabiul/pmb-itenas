<?php

class Pendaftaran_model extends CI_Model
{

    public function tambah($tempat_lahir)
    {
        $data = [
            "nama" => strtolower($this->input->post('nama')),
            // "tempat_lahir" => strtolower($this->input->post('tempat_lahir')),
            "tempat_lahir" => strtolower($tempat_lahir),
            "tgl_lahir" => $this->input->post('tgl_lahir'),
            "jns_kelamin" => strtolower($this->input->post('jns_kelamin')),
            "alamat" => strtolower($this->input->post('alamat')),
            "nohp" => $this->input->post('nohp'),
            "agama" => strtolower($this->input->post('agama')),
            "email" => $this->input->post('email'),
            "nama_ortu" => strtolower($this->input->post('nama_ortu')),
            "alamat_ortu" => strtolower($this->input->post('alamat_ortu')),
            "nohp_ortu" => $this->input->post('nohp_ortu'),
            "no_ijazah" => $this->input->post('no_ijazah'),
            "asal_sekolah" => strtolower($this->input->post('asal_sekolah')),
            "kode_jalur" => $this->input->post('kode_jalur'),
            "kode_jrs" => $this->input->post('jurusan')
        ];

        $this->db->insert('pendaftaran', $data);
    }

    public function getIdPendaftaran($ijazah)
    {
        $this->db->select('id_pendaftaran');
        $this->db->from('pendaftaran');
        $this->db->where('no_ijazah', $ijazah);
        return $this->db->get()->row();
    }
}

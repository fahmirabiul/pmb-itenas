<?php

class Invoice_model extends CI_Model
{
    public function getTagihan($kode)
    {
        $this->db->select('biaya');
        $this->db->from('jalur_masuk');
        $this->db->where('id_jalur', $kode);
        return $this->db->get()->row();
    }

    public function buat($va_number, $tagihan, $idPendaftaran)
    {

        $data = [
            "va_number" => $va_number,
            "kode_merchant" => 9132,
            "nama_merchant" => "Institut Teknologi Nasional",
            "tagihan" => $tagihan,
            "id_pendaftaran" => $idPendaftaran
        ];

        $this->db->insert('invoice', $data);
    }

    public function getInvoice()
    {
        $this->db->select('*');
        $this->db->from('invoice');
        $this->db->where('va_number', $this->input->post('noVa'));

        $query = $this->db->get();
        return $query->row_array();
    }

    public function updateStatus()
    {
        $dataInvoice = [
            'status' => 'paid off'
        ];

        $this->db->where('va_number', $this->input->post('noVa'));
        $this->db->update('invoice', $dataInvoice);
    }

    public function updateStatus2()
    {
        $dataPendaftaran = [
            'status_bayar' => 'lunas'
        ];

        $this->db->where('id_pendaftaran', $this->input->post('id_pendaftaran'));
        $this->db->update('pendaftaran', $dataPendaftaran);
    }
}

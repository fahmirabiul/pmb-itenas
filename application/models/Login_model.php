<?php

class Login_model extends CI_Model
{
    public function ambilLoginAdmin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = ['username' => $row->username, 'password' => $row->password];
            }
            $this->session->set_userdata($sess);
            redirect('admin');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Login Gagal! </div>');
            redirect('auth/login');
        }
    }

    public function ambilLoginPendaftaran($username, $password)
    {
        $this->db->where('email', $username);
        $this->db->where('no_ijazah', $password);
        $query = $this->db->get('pendaftaran');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = ['email' => $row->email, 'no_ijazah' => $row->no_ijazah];
            }
            $this->session->set_userdata($sess);
            redirect('calon_mhs');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Login Gagal! </div>');
            redirect('auth/login');
        }
    }

    public function keamananAdmin()
    {
        $username = $this->session->userdata('username');
        if (empty($username)) {
            $this->session->sess_destroy();
            redirect('auth/login');
        }
    }

    public function keamananCalonMahasiswa()
    {
        $email = $this->session->userdata('email');
        if (empty($email)) {
            $this->session->sess_destroy();
            redirect('auth/login');
        }
    }
}

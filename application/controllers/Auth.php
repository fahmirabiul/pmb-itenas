<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model');
    }

    public function login()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/indexlte');
        } else {
            // lolos form validation
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();
        $pendaftar = $this->db->get_where('pendaftaran', ['email' => $username])->row_array();
        if ($admin) {
            // jika admin ada di database
            // cek password
            $this->Login_model->ambilLoginAdmin($username, $password);
        } else if ($pendaftar) {
            // jika pendaftar ada di database
            $this->Login_model->ambilLoginPendaftaran($username, $password);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Login Gagal! </div>');
            redirect('auth/login');
        }
    }

    public function logoutAdmin()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Anda telah keluar! </div>');
        redirect('user');
    }

    public function logoutCalonMahasiswa()
    {
        $this->session->unset_userdata('nama');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Anda telah keluar! </div>');
        redirect('user');
    }
}

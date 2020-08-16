<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Login_model');
        $this->Login_model->keamananAdmin();

        // model admin
        $this->load->model('Admin_model');
        $this->load->model('Jalur_model');
        $this->load->model('Jurusan_model');
        $this->load->model('Peserta_model');
        $this->load->model('Soal_model');
        $this->load->model('Berita_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        // ieu ulah di hapus nya ril
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        // echo 'Halaman Admin ' . $data['admin']['username'];
        // sampe dieu

        $this->load->view('templates/header_admin', $data);
        // $this->load->view('admin/..');
        $this->load->view('templates/footer_admin');
    }

    // CRUD Jalur
    public function jalur()
    {
        $data['jalur_masuk'] = $this->Jalur_model->getAllJalur();
        $this->load->view('templates/header_admin');
        $this->load->view('admin/jalur_index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function jalur_create()
    {
        $this->form_validation->set_rules('nama_jalur', 'Nama Jalur', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya', 'required|numeric');
        $this->form_validation->set_rules('periode', 'Periode', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_admin');
            $this->load->view('admin/jalur_create');
            $this->load->view('templates/footer_admin');
        } else {
            $this->Jalur_model->insertJalur();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/jalur');
        }
    }

    public function jalur_detail($id)
    {
        $data['jalur_masuk'] = $this->Jalur_model->getJalurById($id);
        $this->load->view('templates/header_admin');
        $this->load->view('admin/jalur_detail', $data);
        $this->load->view('templates/footer_admin');
    }

    public function jalur_edit($id)
    {
        $this->form_validation->set_rules('nama_jalur', 'Nama Jalur', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');
        $this->form_validation->set_rules('pengumuman', 'Pengumuman', 'required');
        $data['jalur'] = $this->Jalur_model->getJalurById($id);

        if ($this->input->post('submit')) {
            $this->Jalur_model->editJalur();
            $this->session->set_flashdata('flash', 'diedit');
            redirect('admin/jalur');
        } else {
            $this->load->view('templates/header_admin');
            $this->load->view('admin/jalur_edit', $data);
            $this->load->view('templates/footer_admin');
        }
    }

    public function jalur_delete($id)
    {
        $this->Jalur_model->deleteJalur($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/jalur');
    }
    // End of CRUD Jalur

    // CRUD jurusan
    public function jurusan()
    {
        $data['jurusan'] = $this->Jurusan_model->getAllJurusan();
        $this->load->view('templates/header_admin');
        $this->load->view('admin/jurusan_index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function jurusan_create()
    {
        $this->form_validation->set_rules('kode_jrs', 'Kode Jurusan', 'required');
        $this->form_validation->set_rules('nama_jrs', 'Nama Jurusan', 'required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_admin');
            $this->load->view('admin/jurusan_create');
            $this->load->view('templates/footer_admin');
        } else {
            $this->Jurusan_model->insertJurusan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/jurusan');
        }
    }

    public function jurusan_detail($id)
    {
        $data['jurusan'] = $this->Jurusan_model->getJurusanById($id);
        $this->load->view('templates/header_admin');
        $this->load->view('admin/jurusan_detail', $data);
        $this->load->view('templates/footer_admin');
    }

    public function jurusan_edit($id)
    {
        $this->form_validation->set_rules('kode_jrs', 'Kode Jurusan', 'required');
        $this->form_validation->set_rules('nama_jrs', 'Nama Jurusan', 'required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
        $data['jurusan'] = $this->Jurusan_model->getJurusanById($id);

        if ($this->input->post('submit')) {
            $this->Jurusan_model->editJurusan();
            $this->session->set_flashdata('flash', 'diedit');
            redirect('admin/jurusan');
        } else {
            $this->load->view('templates/header_admin');
            $this->load->view('admin/jurusan_edit', $data);
            $this->load->view('templates/footer_admin');
        }
    }

    public function jurusan_delete($id)
    {
        $this->Jurusan_model->deleteJurusan($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/jurusan');
    }
    // End of CRUD jurusan

    // Edit Peserta Ujian
    public function peserta()
    {
        $data['peserta'] = $this->Peserta_model->getAllPeserta();
        $this->load->view('templates/header_admin');
        $this->load->view('admin/peserta_index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function peserta_detail($id)
    {
        $data['peserta'] = $this->Peserta_model->getPesertaById($id);
        $this->load->view('templates/header_admin');
        $this->load->view('admin/peserta_detail', $data);
        $this->load->view('templates/footer_admin');
    }

    public function peserta_edit($id)
    {
        $this->form_validation->set_rules('kode_jrs', 'Kode Jurusan', 'required');
        $data['peserta'] = $this->Peserta_model->getPesertaById($id);

        if ($this->input->post('submit')) {
            $this->Peserta_model->editPeserta();
            $this->session->set_flashdata('flash', 'diedit');
            redirect('admin/peserta');
        } else {
            $this->load->view('templates/header_admin');
            $this->load->view('admin/peserta_edit', $data);
            $this->load->view('templates/footer_admin');
        }
    }

    public function peserta_delete($id)
    {
    }
    // End of Edit Peserta Ujian

    // CRUD soal
    public function soal()
    {
        $data['soal'] = $this->Soal_model->getAllSoal();
        $this->load->view('templates/header_admin');
        $this->load->view('admin/soal_index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function soal_create()
    {

        $this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'required');
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
        $this->form_validation->set_rules('jawaban', 'Jawaban', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_admin');
            $this->load->view('admin/soal_create');
            $this->load->view('templates/footer_admin');
        } else {
            $this->Soal_model->insertSoal();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/soal');
        }
    }

    public function soal_detail($id)
    {
        $data['soal'] = $this->Soal_model->getSoalById($id);
        $this->load->view('templates/header_admin');
        $this->load->view('admin/soal_detail', $data);
        $this->load->view('templates/footer_admin');
    }

    public function soal_edit($id)
    {
        $data['soal'] = $this->Soal_model->getSoalById($id);

        if ($this->input->post('submit')) {
            $this->Soal_model->editSoal();
            $this->session->set_flashdata('flash', 'diedit');
            redirect('admin/soal');
        } else {
            $this->load->view('templates/header_admin');
            $this->load->view('admin/soal_edit', $data);
            $this->load->view('templates/footer_admin');
        }
    }

    public function soal_delete($id)
    {
        $this->Soal_model->deleteSoal($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/soal');
    }
    // End of CRUD soal

    // CRUD berita
    public function berita()
    {
        $data['berita'] = $this->Berita_model->getAllBerita();
        $this->load->view('templates/header_admin');
        $this->load->view('admin/berita_index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function berita_create()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('highlight', 'Highlight', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_admin');
            $this->load->view('admin/berita_create');
            $this->load->view('templates/footer_admin');
        } else {
            $this->Berita_model->insertBerita();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/berita');
        }
    }

    public function berita_detail($id)
    {
        $data['berita'] = $this->Berita_model->getBerita($id);
        $this->load->view('templates/header_admin');
        $this->load->view('admin/berita_detail', $data);
        $this->load->view('templates/footer_admin');
    }

    public function berita_edit($id)
    {
        $data['berita'] = $this->Berita_model->getBerita($id);

        if ($this->input->post('submit')) {
            $this->Berita_model->editBerita();
            $this->session->set_flashdata('flash', 'diedit');
            redirect('admin/berita');
        } else {
            $this->load->view('templates/header_admin');
            $this->load->view('admin/berita_edit', $data);
            $this->load->view('templates/footer_admin');
        }
    }

    public function berita_delete($id)
    {
        $this->Berita_model->deleteBerita($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/berita');
    }
    // End of CRUD berita
}

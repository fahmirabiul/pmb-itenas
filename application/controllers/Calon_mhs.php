<?php

class Calon_mhs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Calon_model');
        $this->load->model('Mhs_model');
        $this->load->library('form_validation');
        $this->Login_model->keamananCalonMahasiswa();
    }

    public function index()
    {
        $data['calon'] = $this->db->get_where('pendaftaran', ['no_ijazah' =>
        $this->session->userdata('no_ijazah')])->row_array();

        $data['calon'] = $this->Calon_model->getMahasiswa();

        $this->load->view('templates/header_calonlte', $data);
        $this->load->view('calon_mhs/index', $data);
        $this->load->view('templates/footer_calonlte');
    }

    public function ujian_online()
    {
        $data['calon'] = $this->Calon_model->getMahasiswa();
        if ($this->input->post('pin_ujian') == '1234') {
            $data['soal'] = $this->Calon_model->getSoal();
            $data['count_soal'] = $this->Calon_model->getCountSoal();

            $this->load->view('templates/header_calonlte', $data);
            $this->load->view('calon_mhs/ujian_online', $data);
            $this->load->view('templates/footer_calonlte');
        } else {
            $kode_jalur = $data['calon']['kode_jalur'];
            $data['jalur'] = $this->Calon_model->getTglUjian($kode_jalur);

            $this->load->view('templates/header_calonlte', $data);
            $this->load->view('calon_mhs/ujian_online_pin', $data);
            $this->load->view('templates/footer_calonlte');
        }
    }

    public function cek_jawaban()
    {
        $data['calon'] = $this->Calon_model->getMahasiswa();
        if ($this->input->post('submit')) {
            $id_pendaftaran = $this->input->post('id_pendaftaran');
            $cek_id = $this->db->get_where('peserta_ujian', ['id_pendaftaran' => $id_pendaftaran])->row_array();

            if ($cek_id > 0) {
                $this->load->view('templates/header_calonlte', $data);
                $this->load->view('calon_mhs/ujian_onesubmit');
                $this->load->view('templates/footer_calonlte');
            } else {
                $data['soal'] = $this->Calon_model->getSoal();

                $no = 1;
                $jml_benar = 0;
                foreach ($data['soal'] as $data) {
                    $no++;
                    $jawabanmhs = $this->input->post('pil' . $no);
                    $jawaban = $data['jawaban'];

                    if ($jawabanmhs == $jawaban) {
                        $jml_benar++;
                    } else {
                        $jml_benar;
                    }
                }
                $nilai = $jml_benar * 25;
                $this->Calon_model->inputNilai($nilai);

                // tampilan
                $data['calon'] = $this->Calon_model->getMahasiswa();
                $data['jml_benar'] = $jml_benar;
                $data['nilai'] = $nilai;

                $this->load->view('templates/header_calonlte', $data);
                $this->load->view('calon_mhs/hasil_ujian', $jml_benar, $nilai);
                $this->load->view('templates/footer_calonlte');
            }
        }
    }

    public function daftar_ulang()
    {

        $data['calon'] = $this->Calon_model->getMahasiswa();
        $id_pendaftar = $data['calon']['id_pendaftaran'];

        $cek_id = $this->db->get_where('peserta_ujian', ['id_pendaftaran' => $id_pendaftar])->row_array();

        if ($cek_id > 0) {
            $data['mhs_baru'] = $this->Mhs_model->getMahasiswa();
            $data['status'] = $this->Calon_model->cekKelulusan($id_pendaftar);

            if ($data['status']['status'] == 'lulus') {
                $this->load->view('templates/header_calonlte', $data);
                $this->load->view('calon_mhs/daftar_ulang', $data);
                $this->load->view('templates/footer_calonlte');
            } else {
                $this->load->view('templates/header_calonlte', $data);
                $this->load->view('calon_mhs/daftar_ulang_block');
                $this->load->view('templates/footer_calonlte');
            }
        } else {
            $this->load->view('templates/header_calonlte', $data);
            $this->load->view('calon_mhs/daftar_ulang_block');
            $this->load->view('templates/footer_calonlte');
        }
    }

    public function upload()
    {
        $data['mhs_baru'] = $this->Mhs_model->getMahasiswa();

        if ($this->input->post('upload')) {
            echo 'berhasil';
        } else {
            // cek jika ada gambar yang akan diupload
            $foto_up = $_FILES['pas_foto']['name'];
            $nama = $this->input->post('nama_mhs');

            // atur spesifikasi foto
            if ($foto_up) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/daftul/pasfoto/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('pas_foto')) {
                    $old_foto = $data['mhs_baru']['foto'];

                    // jika yg di upload adalah foto baru
                    if ($old_foto != 'default.png') {
                        unlink(FCPATH . 'assets/img/daftul/pasfoto/' . $old_foto);
                    }

                    $new_foto = $this->upload->data('file_name');
                    $this->db->set('foto', $new_foto);
                    $this->db->where('nama_mhs', $nama);
                    $this->db->update('mhs_baru');

                    $this->session->set_flashdata('pasfoto', '<div class="alert alert-success" role="alert">
                    Berkas Berhasil di Upload!
                  </div>');
                    redirect('calon_mhs/daftar_ulang');
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }
    }

    public function uploadIjazah()
    {
        $data['mhs_baru'] = $this->Mhs_model->getMahasiswa();

        if ($this->input->post('upload')) {
            echo 'berhasil';
        } else {
            // cek jika ada gambar yang akan diupload
            $ijazah_up = $_FILES['ijazah']['name'];
            $nama = $this->input->post('nama_mhs');

            // atur spesifikasi foto
            if ($ijazah_up) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/daftul/ijazah/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('ijazah')) {
                    $old_ijazah = $data['mhs_baru']['ijazah'];

                    // jika yg di upload adalah foto baru
                    if ($old_ijazah != 'default.png') {
                        unlink(FCPATH . 'assets/img/daftul/ijazah/' . $old_ijazah);
                    }

                    $new_foto = $this->upload->data('file_name');
                    $this->db->set('ijazah', $new_foto);
                    $this->db->where('nama_mhs', $nama);
                    $this->db->update('mhs_baru');

                    $this->session->set_flashdata('ijazah', '<div class="alert alert-success" role="alert">
                    Berkas Berhasil di Upload!
                  </div>');
                    redirect('calon_mhs/daftar_ulang');
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }
    }
}

<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jurusan_model');
        $this->load->model('Jalur_model');
        $this->load->model('Pendaftaran_model');
        $this->load->model('Berita_model');
        $this->load->model('Invoice_model');
    }

    public function index()
    {
        $data['berita'] = $this->Berita_model->getBeritaResult();
        $this->load->view('user/landing_page', $data);
    }

    public function program_studi()
    {
        $data['jurusan'] = $this->Jurusan_model->getAllJurusan();
        $this->load->view('templates/header');
        $this->load->view('user/program_studi', $data);
        $this->load->view('templates/footer');
    }

    public function jalur_pmdk()
    {
        $data['jalur'] = $this->Jalur_model->getPmdk();
        $this->load->view('templates/header');
        $this->load->view('user/jalur_pmdk', $data);
        $this->load->view('templates/footer');
    }

    public function jalur_usm()
    {
        $data['jalur'] = $this->Jalur_model->getUsm();
        $this->load->view('templates/header');
        $this->load->view('user/jalur_usm', $data);
        $this->load->view('templates/footer');
    }

    public function jalur_odt()
    {
        $data['jalur'] = $this->Jalur_model->getOdt();
        $this->load->view('templates/header');
        $this->load->view('user/jalur_odt', $data);
        $this->load->view('templates/footer');
    }

    public function form_pendaftaran()
    {
        if ($this->input->get('kode_jalur') == 0) {
            $this->load->view('templates/header');
            $this->load->view('user/blok_pendaftaran');
            $this->load->view('templates/footer');
        } else {
            if ($this->input->post('daftar')) {

                $va_number = "9132" . $this->input->post('kode_jalur') . $this->input->post('no_ijazah');
                $kode_jalur = $this->input->post('kode_jalur');
                $result = $this->Invoice_model->getTagihan($kode_jalur);
                $tagihan = $result->biaya;

                $tempat_lahir = $this->input->post('kota') . ", " . $this->input->post('nm_provinsi');
                $this->Pendaftaran_model->tambah($tempat_lahir);

                $no_ijazah = $this->input->post('no_ijazah');
                $result1 = $this->Pendaftaran_model->getIdPendaftaran($no_ijazah);
                $idPendaftaran = $result1->id_pendaftaran;

                $this->Invoice_model->buat($va_number, $tagihan, $idPendaftaran);
                redirect(base_url() . 'user/pendaftaran_success/' . $va_number);
            } else {
                $data['jalur'] = $this->Jalur_model->getJalurPendaftaran();
                $data['jurusan'] = $this->Jurusan_model->getAllJurusan();
                $this->load->view('templates/header');
                $this->load->view('user/form_pendaftaran', $data);
            }
        }
    }

    public function kota($provinsi)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=" . $provinsi,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: 374b9cd25bfd5974d8b6b1da21d4f453"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $kota = json_decode($response, true);

            if ($kota['rajaongkir']['status']['code'] == '200') {
                foreach ($kota['rajaongkir']['results'] as $kt) {
                    echo "<option value='$kt[city_name]'>$kt[city_name]</option>";
                }
            }
        }
    }

    public function pendaftaran_success()
    {
        $this->load->view('templates/header');
        $this->load->view('user/pendaftaran_success');
        $this->load->view('templates/footer');
    }

    public function biaya_studi()
    {
        $data['pendaftaran'] = $this->Jalur_model->getAllJalur();
        $data['biaya'] = $this->Jurusan_model->getAllJurusan();
        $this->load->view('templates/header');
        $this->load->view('user/biaya_studi', $data);
        $this->load->view('templates/footer');
    }

    public function ptk_pendaftaran()
    {
        $this->load->view('templates/header');
        $this->load->view('user/petunjuk_pendaftaran');
        $this->load->view('templates/footer');
    }

    public function berita()
    {
        $idberita = $_GET['idberita'];
        $data['berita'] = $this->Berita_model->getBerita($idberita);
        $this->load->view('templates/header');
        $this->load->view('user/berita', $data);
        $this->load->view('templates/footer');
    }
}

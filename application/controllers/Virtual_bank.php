<?php

class Virtual_bank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Calon_model');
        $this->load->model('Invoice_model');
    }

    public function index()
    {
        if ($this->input->post('lanjut')) {
            $data['va'] = $this->Invoice_model->getInvoice();
            $this->load->view('vb/lanjut', $data);
        } elseif ($this->input->post('bayar')) {
            $data['va'] = $this->Invoice_model->getInvoice();
            $this->Invoice_model->updateStatus();
            $this->Invoice_model->updateStatus2();

            $this->load->view('vb/success', $data);
        } else {
            $this->load->view('vb/index');
        }
    }
}

<?php

class Ourproducts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ourproducts_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Our Products';
        $data['ourproducts'] = $this->Ourproducts_model->getAllOurproducts();
        if ($this->input->post('keyword')) {
            $data['ourproducts'] = $this->Ourproducts_model->cariDataOurproducts();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('ourproducts/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Our Products';
        $data['ourproducts'] = $this->Draftcutsample_model->getOurproductsById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('ourproducts/detail', $data);
        $this->load->view('templates/footer');
    }
}

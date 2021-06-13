<?php

class Allproducts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Myproducts_model');
    }

    public function index()
    {
        $data['title'] = 'All Products';
        $data['allproducts'] = $this->Myproducts_model->getAllMyproducts();
        if ($this->input->post('keyword')) {
            $data['myproducts'] = $this->Myproducts_model->cariDataMyproducts();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('allproducts/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Product';
        $data['allproducts'] = $this->Myproducts_model->getMyproductsById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('allproducts/detail', $data);
        $this->load->view('templates/footer');
    }
}

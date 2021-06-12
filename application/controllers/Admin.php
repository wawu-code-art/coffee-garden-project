<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Products for Admin';
        $data['products'] = $this->Admin_model->getAllProducts();
        if ($this->input->post('keyword')) {
            $data['products'] = $this->Admin_model->cariDataProducts();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    // public function tambah()
    // {
    //     $data['judul'] = 'Form Add Products';

    //     $this->form_validation->set_rules('productname', 'Product Name', 'required');
    //     $this->form_validation->set_rules('price', 'Price', 'required|numeric');
    //     $this->form_validation->set_rules('image', 'Image', 'required');
    //     $this->form_validation->set_rules('description', 'Description', 'required');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('admin/tambah');
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->Admin_model->tambahDataProducts();
    //         $this->session->set_flashdata('flash', 'Added');
    //         redirect('admin');
    //     }
    // }

    // public function hapus($id)
    // {
    //     $this->Admin_model->hapusDataProducts($id);
    //     $this->session->set_flashdata('flash', 'Deleted');
    //     redirect('admin');
    // }

    // public function detail($id)
    // {
    //     $data['judul'] = 'Detail Data Products';
    //     $data['products'] = $this->Admin_model->getProductsById($id);
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('draftcutsample/detail', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function ubah($id)
    // {
    //     $data['judul'] = 'Form Change Data Products';
    //     $data['products'] = $this->Admin_model->getProductsById($id);

    //     $this->form_validation->set_rules('productname', 'Product Name', 'required');
    //     $this->form_validation->set_rules('price', 'Price', 'required|numeric');
    //     $this->form_validation->set_rules('image', 'Image', 'required');
    //     $this->form_validation->set_rules('description', 'Description', 'required');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('products/ubah', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->Admin_model->ubahDataProducts();
    //         $this->session->set_flashdata('flash', 'Changed');
    //         redirect('admin');
    //     }
    // }
}

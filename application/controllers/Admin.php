<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Admin_model');
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $data['tittle'] = 'Administrator';
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer', $data);
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

<?php

class Myproducts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Myproducts_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'My Products';
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['myproducts'] = $this->Myproducts_model->getAllMyproducts();
        if ($this->input->post('keyword')) {
            $data['myproducts'] = $this->Myproducts_model->cariDataMyproducts();
        }

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('myproducts/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function detail($id)
    {
        $data['tittle'] = 'My Product';
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['myproducts'] = $this->Myproducts_model->getMyproductsById($id);

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('myproducts/detail', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah()
    {
        $data['title'] = 'Add Data Forms';
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric');
        $this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('myproducts/tambah', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->Myproducts_model->tambahMyProducts();
            $this->session->set_flashdata('flash', 'Added');
            redirect('myproducts');
        }
    }

    public function delete($id)
    {
        $this->Myproducts_model->hapusMyProducts($id);
        $this->session->set_flashdata('flash', 'Deleted');
        redirect('myproducts');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Change Data Products';
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['myproduct'] = $this->Myproducts_model->getMyproductsById($id);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric');
        $this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('myproducts/ubah', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->Myproducts_model->ubahDataProducts();
            $this->session->set_flashdata('flash', 'Changed');
            redirect('myproducts');
        }
    }
}

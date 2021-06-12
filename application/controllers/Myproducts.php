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
        $data['tittle'] = 'Administrator';
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
        $data['myproducts'] = $this->Draftcutsample_model->getMyproductsById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('myproducts/detail', $data);
        $this->load->view('templates/footer');
    }
}

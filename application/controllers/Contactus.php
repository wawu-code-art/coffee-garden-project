<?php

class Contactus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Home_model');
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Contact Us';
        $this->load->view('aboutus/index', $data);
    }
}

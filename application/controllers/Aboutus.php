<?php

class Aboutus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Home_model');
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'About Us';
        $this->load->view('aboutus/index', $data);
    }
}

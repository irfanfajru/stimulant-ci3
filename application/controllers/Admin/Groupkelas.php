<?php

class Groupkelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('m_groupkelas');
        $this->load->library('form_validation');
        $this->load->helper('middleware_helper');
        middleware_admin();
    }
    public function index()
    {
        $this->load->view('/Admin/navbar_dashboard');
        $this->load->view('/Admin/view_groupkelas');
    }
}

<?php

class Groupkelas extends CI_Controller{
    public function __construct(){
        parent::__construct();
        // $this->load->model('m_groupkelas');
        $this->load->library('form_validation');
    }
    public function index(){
        $this->load->view('navbar_dashboard');
        $this->load->view('view_groupkelas');
    }
}

?>
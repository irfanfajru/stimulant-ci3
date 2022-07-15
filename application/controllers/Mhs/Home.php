<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_matkul');
        $this->load->model('M_prak');
        $this->load->library('form_validation');
        $this->load->helper('middleware_helper');
        middleware_mhs();
    }
    public function index()
    {
        $this->load->view('/mhs/navbar_home');
        $this->load->view('/mhs/view_home');
    }

    public function groupkelas()
    {
        $data = array(
            'matkul' => $this->M_matkul->getMatkul(),
        );
        $this->load->view('/mhs/navbar_home');
        $this->load->view('/mhs/view_groupkelas', $data);
    }

    public function grouppraktikum()
    {
        $data = array(
            'prak' => $this->M_prak->getPrak(),
        );
        $this->load->view('/mhs/navbar_home');
        $this->load->view('/mhs/view_grouppraktikum', $data);
    }
    // function logout
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}

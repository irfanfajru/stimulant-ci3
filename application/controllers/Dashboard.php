<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
        $this->load->library('form_validation');
        // gate admin
        if ($this->session->userdata['id'] == null || $this->session->userdata['role'] != 1) {
            redirect('/');
        }
    }
    public function index()
    {
        $this->load->view('navbar_dashboard');
        $this->load->view('view_dashboard');
    }
    // function logout
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}

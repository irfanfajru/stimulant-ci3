<?php

class Grouppraktikum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('middleware_helper');
        $this->load->model('M_prak');
        middleware_admin();
    }
    public function index()
    {
        $this->load->view('/Admin/navbar_dashboard');
        $this->load->view('/Admin/view_grouppraktikum');
    }
    // delete grup Praktikum
    public function delete($id)
    {
        // if id exist
        if ($this->M_prak->getPrakById($id) != null) {
            $this->M_prak->deletePrak($id);
            echo "berhasil hapus grup praktikum";
        } else {
            echo "id grup praktikum tidak ditemukan";
        }
    }
}

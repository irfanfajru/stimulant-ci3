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
        $data = array('prak' => $this->M_prak->getPrak());
        $this->load->view('/Admin/navbar_dashboard');
        $this->load->view('/Admin/view_grouppraktikum', $data);
    }
    // delete grup Praktikum
    public function delete($id)
    {
        // get matkul if exists
        if ($this->M_prak->getPrakById($id) != null) {
            $this->M_prak->deletePrak($id);
            $this->session->set_flashdata('hapus', '<div class="alert alert-success" role="alert">Data Berhasil dihapus!</div>');
            redirect('/admin/grouppraktikum');
        } else {
            echo "id tidak ditemukan";
        }
    }
    // tambah grup praktikum
    public function add()
    {
        // request method get
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            $this->load->view('/Admin/navbar_dashboard');
            $this->load->view('/Admin/view_tambahgroupprak');
            // request method post
        } elseif ($this->input->server('REQUEST_METHOD') == 'POST') {
            // get data input
            $data = array(
                'matkul' => $this->input->post('matkul'),
                'slot' => $this->input->post('slot'),
                'dosen' => $this->input->post('dosen'),
                'link' => $this->input->post('link'),
                'semester' => $this->input->post('semester'),
            );
            // set validation rules
            $this->form_validation->set_rules('matkul', 'matkul', 'required|alpha');
            $this->form_validation->set_rules('slot', 'kelas', 'required');
            $this->form_validation->set_rules('dosen', 'dosen', 'required');
            $this->form_validation->set_rules('link', 'link', 'valid_url|required');
            $this->form_validation->set_rules('semester', 'semester', 'greater_than[0]|less_than_equal_to[8]|integer|required');
            // validate
            if ($this->form_validation->run() != false) {
                $this->M_prak->addPrak($data);
                $this->session->set_flashdata('tambah', '<div class="alert alert-success" role="alert">Data Berhasil ditambah!</div>');
                $this->load->view('/Admin/navbar_dashboard');
                $this->load->view('/Admin/view_tambahgroupprak');
            } else {
                $this->load->view('/Admin/navbar_dashboard');
                $this->load->view('/Admin/view_tambahgroupprak');
            }
        }
    }

    // edit grup kelas
    public function edit($id)
    {
        // request method get
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            if ($this->M_prak->getPrakById($id) != null) {
                $data = array('prak' => $this->M_prak->getPrakById($id)[0]);
                $this->load->view('/Admin/navbar_dashboard');
                $this->load->view('/Admin/view_editgroupprak', $data);
            } else {
                echo "id tidak ditemukan";
            }
            // request method post
        } elseif ($this->input->server('REQUEST_METHOD') == 'POST') {
            // get data input
            $data = array(
                'matkul' => $this->input->post('matkul'),
                'slot' => $this->input->post('slot'),
                'dosen' => $this->input->post('dosen'),
                'link' => $this->input->post('link'),
                'semester' => $this->input->post('semester'),
            );
            // set validation rules
            $this->form_validation->set_rules('matkul', 'matkul', 'required|alpha');
            $this->form_validation->set_rules('slot', 'slot', 'required');
            $this->form_validation->set_rules('dosen', 'dosen', 'required');
            $this->form_validation->set_rules('link', 'link', 'valid_url|required');
            $this->form_validation->set_rules('semester', 'semester', 'greater_than[0]|less_than_equal_to[8]|integer|required');
            // validate
            if ($this->form_validation->run() != false) {
                $this->M_prak->editPrak($id, $data);
                $this->session->set_flashdata('edit', '<div class="alert alert-success" role="alert">Data Berhasil diperbarui!</div>');
                $data = array('prak' => $this->M_prak->getPrakById($id)[0]);
                $this->load->view('/Admin/navbar_dashboard');
                $this->load->view('/Admin/view_editgroupprak', $data);
            } else {
                $data = array('prak' => $this->M_prak->getPrakById($id)[0]);
                $this->load->view('/Admin/navbar_dashboard');
                $this->load->view('/Admin/view_editgroupprak', $data);
            }
        }
    }
}

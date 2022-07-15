<?php

class Groupkelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('middleware_helper');
        $this->load->model('M_matkul');
        middleware_admin();
    }
    public function index()
    {
        $data = array(
            'matkul' => $this->M_matkul->getMatkul(),
        );
        $this->load->view('/Admin/navbar_dashboard');
        $this->load->view('/Admin/view_groupkelas', $data);
    }
    public function add()
    {
        // request method get
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            $this->load->view('/Admin/navbar_dashboard');
            $this->load->view('/Admin/view_tambahgroupkelas');
            // request method post
        } elseif ($this->input->server('REQUEST_METHOD') == 'POST') {
            // get data input
            $data = array(
                'matkul' => $this->input->post('matkul'),
                'kelas' => $this->input->post('kelas'),
                'dosen' => $this->input->post('dosen'),
                'link' => $this->input->post('link'),
                'semester' => $this->input->post('semester'),
            );
            // set validation rules
            $this->form_validation->set_rules('matkul', 'matkul', 'required');
            $this->form_validation->set_rules('kelas', 'kelas', 'required|exact_length[1]|alpha');
            $this->form_validation->set_rules('dosen', 'dosen', 'required');
            $this->form_validation->set_rules('link', 'link', 'valid_url|required');
            $this->form_validation->set_rules('semester', 'semester', 'greater_than[0]|less_than_equal_to[8]|integer|required');
            // validate
            if ($this->form_validation->run() != false) {
                $this->M_matkul->addMatkul($data);
                $this->session->set_flashdata('tambah', '<div class="alert alert-success" role="alert">Data Berhasil ditambah!</div>');
                $this->load->view('/Admin/navbar_dashboard');
                $this->load->view('/Admin/view_tambahgroupkelas');
            } else {
                $this->load->view('/Admin/navbar_dashboard');
                $this->load->view('/Admin/view_tambahgroupkelas');
            }
        }
    }

    // delete grup kelas by param id
    public function delete($id)
    {
        // get matkul if exists
        if ($this->M_matkul->getMatkulById($id) != null) {
            $this->M_matkul->deleteMatkul($id);
            $this->session->set_flashdata('hapus', '<div class="alert alert-success" role="alert">Data Berhasil dihapus!</div>');
            redirect('/admin/groupkelas');
        } else {
            echo "id tidak ditemukan";
        }
    }

    // edit grup kelas
    public function edit($id)
    {
        // request method get
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            if ($this->M_matkul->getMatkulById($id) != null) {
                $data = array('matkul' => $this->M_matkul->getMatkulById($id)[0]);
                $this->load->view('/Admin/navbar_dashboard');
                $this->load->view('/Admin/view_editgroupkelas', $data);
            } else {
                echo "id tidak ditemukan";
            }
            // request method post
        } elseif ($this->input->server('REQUEST_METHOD') == 'POST') {
            // get data input
            $data = array(
                'matkul' => $this->input->post('matkul'),
                'kelas' => $this->input->post('kelas'),
                'dosen' => $this->input->post('dosen'),
                'link' => $this->input->post('link'),
                'semester' => $this->input->post('semester'),
            );
            // set validation rules
            $this->form_validation->set_rules('matkul', 'matkul', 'required');
            $this->form_validation->set_rules('kelas', 'kelas', 'required|exact_length[1]|alpha');
            $this->form_validation->set_rules('dosen', 'dosen', 'required');
            $this->form_validation->set_rules('link', 'link', 'valid_url|required');
            $this->form_validation->set_rules('semester', 'semester', 'greater_than[0]|less_than_equal_to[8]|integer|required');
            // validate
            if ($this->form_validation->run() != false) {
                $this->M_matkul->editMatkul($id, $data);
                $this->session->set_flashdata('edit', '<div class="alert alert-success" role="alert">Data Berhasil diperbarui!</div>');
                $data = array('matkul' => $this->M_matkul->getMatkulById($id)[0]);
                $this->load->view('/Admin/navbar_dashboard');
                $this->load->view('/Admin/view_editgroupkelas', $data);
            } else {
                $data = array('matkul' => $this->M_matkul->getMatkulById($id)[0]);
                $this->load->view('/Admin/navbar_dashboard');
                $this->load->view('/Admin/view_editgroupkelas', $data);
            }
        }
    }
}

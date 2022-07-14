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
        $this->load->view('/Admin/navbar_dashboard');
        $this->load->view('/Admin/view_groupkelas');
    }
    public function tambahgroupkelas()
    {
        $this->load->view('/Admin/navbar_dashboard');
        $this->load->view('/Admin/view_tambahgroupkelas');
    }

    // delete grup kelas by param id
    public function delete($id)
    {
        // get matkul if exists
        if ($this->M_matkul->getMatkulById($id) != null) {
            $this->M_matkul->deleteMatkul($id);
            echo "berhasil hapus matkul";
        } else {
            echo "id tidak ditemukan";
        }
    }
}

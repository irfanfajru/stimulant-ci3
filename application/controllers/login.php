<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->input->server('REQUEST_METHOD') === 'GET') {
            // get method
            $this->load->view('view_login');
        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
            // post method
            $login = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            // validation rules
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() != false) {
                $data = $this->m_auth->login($login['username'], $login['password']);
                if ($data) {
                    $this->session->set_userdata('id', $data['id']);
                    $this->session->set_userdata('nama', $data['nama']);
                    $this->session->set_userdata('role', $data['role']);
                    if ($data['role'] == 1) {
                        redirect('/dashboard');
                    } else {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password salah!</div>');
                    redirect('/');
                }
            } else {
                $this->load->view('view_login');
            }
        }
    }
}

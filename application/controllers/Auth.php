<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('user', 'User', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
            // $this->load->view('auth/dashboard');
            //$this->load->view('tambah-mobil');
        } else {
            //validasi succes
            //Method private
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('user');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['user' => $username])->row_array();

        //jika usernya ada
        if ($user) {
            if ($password == $user['password']) {
                //masuk ke dashboard
                $data = [
                    'user' => $user['user']
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                // $this->session->set_flashdata('SALAH');
                redirect('auth');
            }
        } else {
            //$this->session->set_flashdata('SALAH');
            redirect('auth');
        }
    }
}

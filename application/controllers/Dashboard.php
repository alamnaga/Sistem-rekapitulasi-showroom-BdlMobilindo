<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('admin', ['user' =>
        $this->session->userdata('user')])->row_array();
        $this->load->view('auth/dashboard', $data);
    }
}

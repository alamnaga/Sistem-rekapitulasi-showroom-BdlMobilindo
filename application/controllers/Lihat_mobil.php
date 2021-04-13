<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mobil');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Mobil',
            'data_mobil' => $this->model_mobil->tabel_mobil()
        );
        $this->load->view('lihat-mobil', $data);
    }
}

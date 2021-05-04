<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lihatlaporan extends CI_Controller
{


    public function index()
    {
        $this->load->view('lihat-laporan');
    }
}

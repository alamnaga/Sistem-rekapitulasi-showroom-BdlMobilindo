<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_mobil');
        $this->load->model('model_pembelian');
        $this->load->model('model_penjualan');
    }

    public function lihatmobil()
    {
        $data = array(
            'title' => 'Data Mobil',
            'data_mobil' => $this->model_mobil->tabel_mobil()
        );
        $this->load->view('lihat-mobil', $data);
    }

    public function lihatpembelian()
    {
        $data = array(
            'title' => 'Data Mobil',
            'data_mobil' => $this->model_pembelian->tabel_pembelian()
        );
        $this->load->view('lihat-pembelian', $data);
    }

    public function lihatpenjualan()
    {
        $data = array(
            'title' => 'Data Mobil',
            'data_mobil' => $this->model_penjualan->tabel_penjualan()
        );
        $this->load->view('lihat-penjualan', $data);
    }

    public function AksiInsert()
    {
        $no_polis = $this->input->post('no_polis');
        $jenis_typr = $this->input->post('jenis_typr');
        $warna = $this->input->post('no_polis');
        $bahan_bakar = $this->input->post('bahan_bakar');
        $tahun_keluaran = $this->input->post('tahun_keluaran');
        $tgl_beli = $this->input->post('tgl_beli');
        $harga_jual = $this->input->post('harga_jual');
        $harga_beli = $this->input->post('harga_beli');


        $DataInsert = array(
            'no_polis' => $no_polis,
            'jenis_typr' => $jenis_typr,
            'warna' => $warna,
            'bahan_bakar' => $bahan_bakar,
            'tahun_keluaran' => $tahun_keluaran,
            'tgl_beli' => $tgl_beli,
            'harga_jual' => $harga_jual,
            'harga_beli' => $harga_beli,
        );

        // echo "<pre>";
        // print_r($DataInsert);
        // echo "</pre>";
        $this->model_mobil->InsertDataMobil($DataInsert);
        redirect(base_url('lihatmobil'));
    }

    public function index()
    {
        $this->form_validation->set_rules('user', 'User', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            // $this->load->view('auth/login');
            // $this->load->view('auth/dashboard');
            // $this->load->view('tambah-penjualan');
            $this->load->view('tambah-penjualan');

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

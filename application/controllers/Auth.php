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

    public function dashboard()
    {
        $data['jumlah_mobil'] = $this->model_mobil->jumlah_mobil();
        $data['jumlah_terjual'] = $this->model_mobil->jumlah_terjual();
        $data['jumlah_tersedia'] = $this->model_mobil->jumlah_tersedia();
        return $this->load->view('auth/dashboard', $data);
    }

    public function lihatmobil()
    {
        $data = array(
            'title' => 'Data Mobil',
            'data_mobil' => $this->model_mobil->tabel_mobil()
        );
        $this->load->view('lihat-mobil', $data);
    }


    public function status($id_mobil)
    {
        $data = $this->db->where('mobil', ['id_mobil' => $id_mobil])->result();

        $status_sekarang = $data->status;

        if ($status_sekarang == 1) {
            $this->db->where('mobil', ['id_mobil' => $id_mobil])->update([
                'status' => 0
            ]);
        } else {
            $this->db->where('mobil', ['id_mobil' => $id_mobil])->update([
                'status' => 1
            ]);
        }
        $this->load->view('lihat-mobil', $status_sekarang);
    }

    public function lihatsearch()
    {
        $data = array(
            'title' => 'Data Mobil',

        );
        $keyword = $this->input->post('keyword');
        $data['data_mobil'] = $this->model_mobil->get_keyword($keyword);
        $this->load->view('lihat-search', $data);
    }

    public function searchTersedia()
    {
        $data = array(
            'title' => 'Data Mobil',

        );
        $data['data_mobil'] = $this->model_mobil->tersedia();
        $this->load->view('lihat-search', $data);
    }

    public function searchTerjual()
    {
        $data = array(
            'title' => 'Data Mobil',
            //'data_mobil' => $this->model_mobil->tabel_mobil()
        );
        $data['data_mobil'] = $this->model_mobil->terjual();
        $this->load->view('lihat-search', $data);
    }

    public function lihatpembelian()
    {
        $data = array(
            'title' => 'Data Mobil',
            'data_pembelian' => $this->model_pembelian->tabel_pembelian()
        );
        $this->load->view('lihat-pembelian', $data);
    }

    public function lihatlaporanpembelian()
    {
        $data = array(
            'title' => 'Data Mobil',
            'data_laporan' => $this->model_pembelian->tabel_laporan()

        );
        $keyword = $this->input->get('keyword');
        $data['sum_jumlah'] = $this->model_pembelian->get_sum();
        $this->load->view('lihat-laporan-pembelian', $data);
    }

    public function lihatpenjualan()
    {
        $data = array(
            'title' => 'Data Mobil',
            'data_penjualan' => $this->model_penjualan->tabel_penjualan()
        );

        $this->load->view('lihat-penjualan', $data);
    }

    public function lihatlaporanpenjualan()
    {
        $data = array(
            'title' => 'Data Mobil',
            'data_laporan' => $this->model_penjualan->tabel_laporan()
        );
        $data['sum_jumlahpenjualan'] = $this->model_penjualan->get_sum();

        $this->load->view('lihat-laporan-penjualan', $data);
    }

    public function AksiInsert()
    {
        $this->load->model('Model_mobil', 'model');
        $this->model->insert();
        redirect(base_url('lihatmobil'));
    }

    public function AksiBeli()
    {
        $this->load->model('Model_beli', 'model');
        $this->model->tambah();
        redirect(base_url('lihatpembelian'));
    }

    public function AksiJual()
    {
        $this->load->model('Model_jual', 'modeljual');
        $this->modeljual->tambah();

        redirect(base_url('lihatpenjualan'));
    }

    public function edit_ubahmobil($id_mobil)
    {
        $where = array('id_mobil' => $id_mobil);
        $data['data_mobil'] = $this->model_mobil->edit_data($where, 'mobil')->result();
    }

    public function update()
    {
        $id_mobil       = $this->input->post('id_mobil');
        $no_polis       = $this->input->post('no_polis');
        $jenis_typr     = $this->input->post('jenis_typr');
        $warna          = $this->input->post('warna');
        $bahan_bakar    = $this->input->post('bahan_bakar');
        $tahun_keluaran = $this->input->post('tahun_keluaran');
        $tgl_jual       = $this->input->post('tgl_jual');
        $harga_jual     = $this->input->post('harga_jual');
        //$harga_beli     = $this->input->post('harga_beli');

        $data = array(
            'no_polis'          => $no_polis,
            'jenis_typr'        => $jenis_typr,
            'warna'             => $warna,
            'bahan_bakar'       => $bahan_bakar,
            'tahun_keluaran'    => $tahun_keluaran,
            'tgl_jual'          => $tgl_jual,
            'harga_jual'        => $harga_jual,
            'status'            => 0
            //'harga_beli'        => $harga_beli
        );

        $where = array('id_mobil' => $id_mobil);
        $this->model_mobil->update_data($where, $data, 'mobil');

        $this->model_mobil->InsertDataPenjualan($data);
        redirect(base_url('lihatmobil'));
    }

    public function hapus_mobil($id_mobil)
    {
        $where = array('id_mobil' => $id_mobil);
        $this->model_mobil->hapus_mobil($where, 'mobil');
        redirect('lihatmobil');
    }

    public function hapus_pembelian($id_beli)
    {
        $where = array('id_beli' => $id_beli);
        $this->model_pembelian->hapus_pembelian($where, 'pembelian');
        redirect('lihatpembelian');
    }

    public function hapus_penjualan($id_jual)
    {
        $where = array('id_jual' => $id_jual);
        $this->model_penjualan->hapus_penjualan($where, 'penjualan');

        redirect('lihatpenjualan');
    }

    public function excelpenjualan()
    {
        $data = array(
            'title' => 'Rekap Laporan Penjualan',
            'data_penjualan' => $this->model_penjualan->tabel_penjualan()
        );
        $data['sum_jumlahpenjualan'] = $this->model_penjualan->get_sum();
        $this->load->view('excel/excelpenjualan', $data);
    }

    public function excelpembelian()
    {
        $data = array(
            'title' => 'Rekap Laporan Pembelian',
            'data_pembelian' => $this->model_pembelian->tabel_pembelian()
        );
        $data['sum_jumlah'] = $this->model_pembelian->get_sum();
        $this->load->view('excel/excelpembelian', $data);
    }

    public function excelsearchpembelian()
    {
        $data = array(
            'title' => 'Rekap Laporan Pembelian',
            //'data_pembelian' => $this->model_pembelian->tabel_pembelian()
        );
        $keyword = $this->input->post('keyword');
        $data['data_lapor'] = $this->model_pembelian->get_keyword($keyword);
        $data['sum_jumlahpembelian'] = $this->model_pembelian->get_sumpembelian($keyword);
        $this->load->view('excel/excelsearch-pembelian', $data);
        //$this->load->view('lihatsearch-pembelian', $data);
    }

    public function lihatsearchpembelian()
    {
        $data = array(
            'title' => 'Data Mobil',
            //'data_laporan' => $this->model_pembelian->tabel_laporan()

        );
        $keyword = $this->input->post('keyword');
        $data['sum_jumlah'] = $this->model_pembelian->get_sumpembelian($keyword);
        $data['data_laporan'] = $this->model_pembelian->get_keyword($keyword);
        $this->load->view('lihatsearch-pembelian', $data);
    }

    public function lihatsearchpenjualan()
    {
        $data = array(
            'title' => 'Data Mobil',
            //'data_laporan' => $this->model_pembelian->tabel_laporan()

        );
        $keyword = $this->input->post('keyword');
        $data['sum_jumlah'] = $this->model_penjualan->get_sumpenjualan($keyword);
        $data['data_laporan'] = $this->model_penjualan->get_keyword($keyword);
        $this->load->view('lihatsearch-penjualan', $data);
    }


    public function index()
    {
        $this->form_validation->set_rules('user', 'User', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
            // $this->load->view('ubah-mobil');

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

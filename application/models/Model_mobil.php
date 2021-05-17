<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_mobil extends CI_Model
{
    public function tabel_mobil()
    {
        $query = $this->db->order_by('id_mobil', 'DESC')->get('mobil');
        return $query->result();
    }

    public function InsertDataPenjualan($data)
    {
        $this->db->insert('penjualan', $data);
    }
    // insert
    public function insert()
    {
        $this->db->trans_start();

        // jalankan query

        $data = [
            'no_polis' => $this->input->post('no_polis', true),
            'harga_beli' => $this->input->post('harga_beli', true),
            'harga_jual' => $this->input->post('harga_jual', true),
            'jenis_typr' => $this->input->post('jenis_typr', true),
            'warna' => $this->input->post('warna', true),
            'bahan_bakar' => $this->input->post('bahan_bakar', true),
            'tahun_keluaran' => $this->input->post('tahun_keluaran', true),
            'tgl_beli' => $this->input->post('tgl_beli', true),
            'tgl_jual' => $this->input->post('tgl_jual', true)
        ];

        $this->db->insert('mobil', $data);


        $penjualanmobil = [

            'no_polis' => $this->input->post('no_polis', true),
            'harga_jual' => $this->input->post('harga_jual', true),
            'jenis_typr' => $this->input->post('jenis_typr', true),
            'warna' => $this->input->post('warna', true),
            'bahan_bakar' => $this->input->post('bahan_bakar', true),
            'tahun_keluaran' => $this->input->post('tahun_keluaran', true),
            'tgl_jual' => $this->input->post('tgl_jual', true),
            'status'   => $this->input->post('status', true)
        ];

        $this->db->insert('penjualan', $penjualanmobil);

        $pembelianmobil = [

            'no_polis' => $this->input->post('no_polis', true),
            'harga_beli' => $this->input->post('harga_beli', true),
            'jenis_typr' => $this->input->post('jenis_typr', true),
            'warna' => $this->input->post('warna', true),
            'bahan_bakar' => $this->input->post('bahan_bakar', true),
            'tahun_keluaran' => $this->input->post('tahun_keluaran', true),
            'tgl_beli' => $this->input->post('tgl_beli', true),
            'status' => $this->input->post('status', true)
        ];

        $this->db->insert('pembelian', $pembelianmobil);




        $this->db->trans_complete();
    }
    // insert

    public function edit_data($where, $table)
    {

        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_mobil($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('mobil');
        $this->db->like('no_polis', $keyword);
        $this->db->or_like('jenis_typr', $keyword);
        $this->db->or_like('warna', $keyword);

        return $this->db->get()->result();
    }
    public function jumlah_mobil()
    {
        $this->db->select('*');
        $this->db->from('mobil');
        return $this->db->get()->num_rows();
    }

    public function jumlah_terjual()
    {
        $this->db->select('*');
        $this->db->from('mobil');
        $this->db->where('status', 1);
        return $this->db->get()->num_rows();
    }

    public function jumlah_tersedia()
    {
        $this->db->select('*');
        $this->db->from('mobil');
        $this->db->where('status', 0);
        return $this->db->get()->num_rows();
    }

    public function tersedia()
    {
        $this->db->select('*');
        $this->db->from('mobil');
        $this->db->where('status', 1);
        return $this->db->get()->result();
    }

    public function terjual()
    {
        $this->db->select('*');
        $this->db->from('mobil');
        $this->db->where('status', 0);
        return $this->db->get()->result();
    }
}

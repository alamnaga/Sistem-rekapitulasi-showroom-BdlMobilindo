<?php

class Model_jual extends CI_Model
{
    public function tambah()
    {
        $this->db->trans_start();

        // jalankan query

        $jual = [
            'no_polis' => $this->input->post('no_polis', true),
            'harga_jual' => $this->input->post('harga_jual', true),
            'jenis_typr' => $this->input->post('jenis_typr', true),
            'warna' => $this->input->post('warna', true),
            'bahan_bakar' => $this->input->post('bahan_bakar', true),
            'tahun_keluaran' => $this->input->post('tahun_keluaran', true),
            'tgl_jual' => $this->input->post('tgl_jual', true)
        ];

        $this->db->insert('penjualan', $jual);


        $penjualan = [

            'no_polis' => $this->input->post('no_polis', true),
            'harga_jual' => $this->input->post('harga_jual', true),
            'jenis_typr' => $this->input->post('jenis_typr', true),
            'warna' => $this->input->post('warna', true),
            'bahan_bakar' => $this->input->post('bahan_bakar', true),
            'tahun_keluaran' => $this->input->post('tahun_keluaran', true),
            'tgl_jual' => $this->input->post('tgl_jual', true)
        ];

        $this->db->insert('mobil', $penjualan);



        $this->db->trans_complete();
    }
}

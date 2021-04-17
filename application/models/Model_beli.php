<?php

class Model_beli extends CI_Model
{
    public function tambah()
    {
        $this->db->trans_start();

        // jalankan query

        $pembelian = [
            'no_polis' => $this->input->post('no_polis', true),
            'harga_beli' => $this->input->post('harga_beli', true),
            'jenis_typr' => $this->input->post('jenis_typr', true),
            'warna' => $this->input->post('warna', true),
            'bahan_bakar' => $this->input->post('bahan_bakar', true),
            'tahun_keluaran' => $this->input->post('tahun_keluaran', true),
            'tgl_beli' => $this->input->post('tgl_beli', true)
        ];

        $this->db->insert('pembelian', $pembelian);


        $mobil = [

            'no_polis' => $this->input->post('no_polis', true),
            'harga_beli' => $this->input->post('harga_beli', true),
            'jenis_typr' => $this->input->post('jenis_typr', true),
            'warna' => $this->input->post('warna', true),
            'bahan_bakar' => $this->input->post('bahan_bakar', true),
            'tahun_keluaran' => $this->input->post('tahun_keluaran', true),
            'tgl_beli' => $this->input->post('tgl_beli', true)
        ];

        $this->db->insert('mobil', $mobil);



        $this->db->trans_complete();
    }
}

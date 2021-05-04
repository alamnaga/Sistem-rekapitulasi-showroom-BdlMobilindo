<?php
class Fungsi
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    public function count_mobil()
    {
        $this->ci->model_mobil->tabel_mobil()->num_rows();
    }

    public function count_penjualan()
    {
        return $this->ci->model_prnjualan->tabel_penjualan()->num_rows();
    }

    public function count_pembelian()
    {
        return $this->ci->model_pembelian->tabel_pembelian()->num_rows();
    }
}

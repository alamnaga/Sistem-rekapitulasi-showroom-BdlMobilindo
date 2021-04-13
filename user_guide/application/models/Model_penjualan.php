<?php
defined('BASEPATH') or exit('No direct script access allowed');
class model_penjualan extends CI_Model
{
    public function tabel_penjualan()
    {
        $query = $this->db->order_by('id_jual', 'DESC')->get('penjualan');
        return $query->result();
    }
}

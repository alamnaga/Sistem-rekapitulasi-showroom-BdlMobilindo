<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_pembelian extends CI_Model
{
    public function tabel_pembelian()
    {
        $query = $this->db->order_by('id_beli', 'DESC')->get('pembelian');
        return $query->result();
    }
}

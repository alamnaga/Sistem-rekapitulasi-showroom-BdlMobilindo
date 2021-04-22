<?php
defined('BASEPATH') or exit('No direct script access allowed');
class model_pembelian extends CI_Model
{
    public function tabel_pembelian()
    {
        $query = $this->db->order_by('id_beli', 'DESC')->get('pembelian');
        return $query->result();
    }

    public function tabel_laporan()
    {
        $query = $this->db->order_by('id_beli', 'DESC')->get('pembelian');
        return $query->result();
    }

    public function hapus_pembelian($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function get_sum()
    {
        $this->db->select_sum('harga_beli', 'jumlah');
        $this->db->from('pembelian');
        return $this->db->get('')->row();
    }
}

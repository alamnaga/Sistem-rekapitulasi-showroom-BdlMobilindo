<?php
defined('BASEPATH') or exit('No direct script access allowed');
class model_penjualan extends CI_Model
{
    public function tabel_penjualan()
    {
        $query = $this->db->order_by('id_jual', 'DESC')->get('penjualan');
        return $query->result();
    }

    public function tabel_laporan()
    {
        $query = $this->db->order_by('id_jual', 'DESC')->get('penjualan');
        return $query->result();
    }

    public function hapus_penjualan($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function get_sum()
    {
        $this->db->select_sum('harga_jual', 'jumlahpenjualan');
        $this->db->from('penjualan');
        return $this->db->get('')->row();
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->like('tgl_jual', $keyword);
        // $this->db->or_like('jenis_typr', $keyword);
        // $this->db->or_like('warna', $keyword);

        return $this->db->get()->result();
    }
    public function get_sumpenjualan($keyword)
    {
        $this->db->select_sum('harga_jual', 'jumlah');
        $this->db->from('penjualan');
        $this->db->like('tgl_jual', $keyword);
        return $this->db->get('')->row();
    }
}

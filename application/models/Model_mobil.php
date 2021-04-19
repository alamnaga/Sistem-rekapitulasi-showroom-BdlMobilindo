<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_mobil extends CI_Model
{
    public function tabel_mobil()
    {
        $query = $this->db->order_by('id_mobil', 'DESC')->get('mobil');
        return $query->result();
    }

    public function InsertDataMobil($data)
    {
        $this->db->insert('mobil', $data);
    }
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
    // public function jumlah()
    // {
    //     $this->db->select('*');
    //     $this->db->from('mobil');
    //     return $this->db->get()->num_rows();
    // }
}

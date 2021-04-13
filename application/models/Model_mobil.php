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
}

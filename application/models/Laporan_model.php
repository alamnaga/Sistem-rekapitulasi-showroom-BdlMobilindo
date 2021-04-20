<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    function gettahun()
    {
        $query = $this->db->query("SELECT YEAR(tgl_beli) AS tahun FROM 
        pembelian GROUP BY YEAR(tgl_beli) ORDER BY YEAR(tgl_beli) ASC");

        return $query->result();
    }
}

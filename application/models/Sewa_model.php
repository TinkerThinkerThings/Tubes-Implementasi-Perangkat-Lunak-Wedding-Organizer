<?php

class Sewa_model extends CI_Model
{
    public function tambahSewa($data)
    {



        $this->db->insert('penyewaan', $data);
    }
}

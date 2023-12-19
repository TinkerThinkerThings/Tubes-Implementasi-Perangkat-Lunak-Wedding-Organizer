<?php

class Paket_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getpaket()
    {
        return $this->db->get('paket');
    }
    public function getIndoorPaket()
    {
        $this->db->where('keterangan', 'Indoor'); // Filter data berdasarkan keterangan
        return $this->db->get('paket')->result(); // Mengambil semua data yang sesuai
    }
    public function getOutdoorPaket()
    {
        $this->db->where('keterangan', 'Outdoor'); // Filter data berdasarkan keterangan
        return $this->db->get('paket')->result(); // Mengambil semua data yang sesuai
    }
    public function getDetailPaket($IdPaket)
    {
        $this->db->where('IdPaket', $IdPaket);
        return $this->db->get('paket')->row(); // Mendapatkan satu baris data sebagai objek
    }
    public function tambahsewa($data)
    {
        return $this->db->insert('penyewaan', $data);
    }
}

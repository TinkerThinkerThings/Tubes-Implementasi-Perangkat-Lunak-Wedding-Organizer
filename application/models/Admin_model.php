<?php

class Admin_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getOrder()
  {
    $this->db->order_by('ID_Sewa', 'DESC');
    return $this->db->get('penyewaan')->result();
  }

  public function getDataUser()
  {
    $this->db->where_in('Role', array('Pelanggan', 'Admin'));
    return $this->db->get('user')->result();
  }
  public function terimaPesanan($idSewa)
  {
    // Lakukan pembaruan status pesanan menjadi 'Diterima' berdasarkan ID_Sewa yang diterima
    $this->db->where('ID_Sewa', $idSewa);
    $this->db->update('penyewaan', ['status' => 'diterima']);
  }

  public function tolakPesanan($idSewa)
  {
    // Lakukan pembaruan status pesanan menjadi 'Ditolak' berdasarkan ID_Sewa yang diterima
    $this->db->where('ID_Sewa', $idSewa);
    $this->db->update('penyewaan', ['status' => 'ditolak']);
  }
}

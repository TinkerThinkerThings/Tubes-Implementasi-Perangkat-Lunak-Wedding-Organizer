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
    $this->db->where('ID_Sewa', $idSewa);
    $this->db->update('penyewaan', ['status' => 'diterima']);
  }

  public function tolakPesanan($idSewa)
  {
    $this->db->where('ID_Sewa', $idSewa);
    $this->db->update('penyewaan', ['status' => 'ditolak']);
  }

  public function getPaketById($idPaket)
  {
    $this->db->where('IdPaket', $idPaket);
    return $this->db->get('paket')->row();
  }
}

<?php
class Owner_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getOrder()
  {

    $this->db->where_in('Status', 'Diterima');
    return $this->db->get('penyewaan')->result();
  }
}

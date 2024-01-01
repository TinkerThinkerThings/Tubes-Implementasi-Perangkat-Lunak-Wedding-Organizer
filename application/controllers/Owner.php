<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Owner extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Owner_model');
  }

  public function index()
  {
    if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
      redirect(base_url('index.php/Verifikasidata/login'));
    }

    $data['dataLaporan'] = $this->Owner_model->getOrder();
    $this->load->view('owner/Owner.php', $data);
  }
}

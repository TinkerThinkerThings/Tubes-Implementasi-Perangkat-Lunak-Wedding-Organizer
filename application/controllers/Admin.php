<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
  }

  public function index()
  {
    $data['dataPenyewaan'] = $this->Admin_model->getOrder();

    $this->load->view('admin/admin', $data);
  }
}

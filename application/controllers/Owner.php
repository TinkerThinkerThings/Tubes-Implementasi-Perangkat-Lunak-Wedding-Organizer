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
    $this->load->view('owner/owner');
  }
}

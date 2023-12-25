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
    $data['dataUser'] = $this->Admin_model->getDataUser();
    $this->load->view('admin/admin', $data);
  }

  public function Admin()
  {
    if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
      redirect(base_url('index.php/Verifikasidata/login'));
    }
    $this->load->view('admin/Admin.php');
  }

  public function terimaPesanan($idSewa)
  {
    $this->Admin_model->terimaPesanan($idSewa);
    redirect(base_url('index.php/Admin/index'));
  }

  public function tolakPesanan($idSewa)
  {
    $this->Admin_model->tolakPesanan($idSewa);
    redirect(base_url('index.php/Admin/index'));
  }

  public function Paket()
  {
    if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
      redirect(base_url('index.php/Verifikasidata/login'));
    }
    $this->load->view('admin/Paket.php');
  }

  public function getPaketData($idPaket)
  {
    $data['dataPaket'] = $this->Admin_model->getDataPaketById($idPaket);
    $this->load->view('admin/ListPaket.php', $data);
  }

  public function Pembayaran()
  {
    if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
      redirect(base_url('index.php/Verifikasidata/login'));
    }
    $this->load->view('admin/Pembayaran.php');
  }
}

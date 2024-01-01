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
    $data['dataUser'] = $this->Admin_model->getDataUser();
    $data['dataUserCount'] = $this->Admin_model->countDataUser();
    $data['dataPenyewaanCount'] = $this->Admin_model->countDataPenyewaan();
    $data['dataPaketCount'] = $this->Admin_model->countDataPaket();
    $this->load->view('admin/admin', $data);
  }

  public function Admin()
  {
    if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
      redirect(base_url('index.php/Verifikasidata/login'));
    }
    $this->load->view('admin/Admin.php');
  }

  public function Paket()
  {
    if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
      redirect(base_url('index.php/Verifikasidata/login'));
    }
    $data['dataPaket'] = $this->Admin_model->getPaket();
    $this->load->view('admin/Paket.php', $data);
  }

  public function tambah_paket()
  {
    if ($this->input->post()) {
      $this->load->model('Admin_model');

      $config['upload_path'] = './asset/photo';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('gambar')) {
        $upload_data = $this->upload->data();
        $paket['gambar'] = 'asset/photo/' . $upload_data['file_name'];

        if ($this->Admin_model->tambahPaket($paket)) {
          redirect(base_url('index.php/Admin/Paket'));
        } else {
          echo "Gagal menambahkan paket.";
        }
      } else {
        $error = array('error' => $this->upload->display_errors());
        print_r($error);
      }
    } else {
      $this->load->view('admin/tambah_paket');
    }
  }

  public function hapus_paket($idPaket)
  {
    $this->Admin_model->hapusPaket($idPaket);
    redirect(base_url('index.php/Admin/Paket'));
  }

  public function edit_paket($idPaket)
  {
    $data['paket'] = $this->Admin_model->getPaketById($idPaket);

    if ($this->input->post()) {
      $this->Admin_model->updatePaket($idPaket, $this->input->post());
      redirect(base_url('index.php/Admin/Paket'));
    } else {
      $this->load->view('admin/edit_paket', $data);
    }
  }


  public function Pembayaran()
  {
    if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
      redirect(base_url('index.php/Verifikasidata/login'));
    }
    $data['dataPenyewaan'] = $this->Admin_model->getOrder();
    $this->load->view('admin/Pembayaran.php', $data);
  }

  public function terimaPesanan($idSewa)
  {
    $this->Admin_model->terimaPesanan($idSewa);
    redirect(base_url('index.php/Admin/Pembayaran'));
  }

  public function tolakPesanan($idSewa)
  {
    $this->Admin_model->tolakPesanan($idSewa);
    redirect(base_url('index.php/Admin/Pembayaran'));
  }
}

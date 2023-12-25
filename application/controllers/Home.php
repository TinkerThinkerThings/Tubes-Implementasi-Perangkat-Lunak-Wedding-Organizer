<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
            redirect(base_url('index.php/Verifikasidata/login'));
        }
        $this->load->view('Home.php');
    }
    public function Gallery()
    {
        if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
            redirect(base_url('index.php/Verifikasidata/login'));
        }
        $this->load->view('Gallery.php');
    }
    public function Kontak()
    {
        if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
            redirect(base_url('index.php/Verifikasidata/login'));
        }
        $this->load->view('Kontak.php');
    }
    public function Harga()
    {
        if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
            redirect(base_url('index.php/Verifikasidata/login'));
        }
        $this->load->view('Harga.php');
    }
    public function Konfirmasi()
    {
        if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
            redirect(base_url('index.php/Verifikasidata/login'));
        }
        $this->load->view('Konfirmasi.php');
    }
}

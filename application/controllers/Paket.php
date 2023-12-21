<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Paket_model');
    }
    public function index()
    {
        if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
            redirect(base_url('index.php/Verifikasidata/login'));
        }
        $data['indoorPaket'] = $this->Paket_model->getIndoorPaket();
        $data['outdoorPaket'] = $this->Paket_model->getOutdoorPaket();
        $data['paket'] = $this->Paket_model->getpaket()->result();
        $this->load->view('Paket.php', $data);
    }

    public function detail($IdPaket) // Contoh fungsi untuk menampilkan detail
    {
        if ($this->session->userdata('Role') !== 'Admin' && $this->session->userdata('Role') !== 'Owner' && $this->session->userdata('Role') !== 'Pelanggan') {
            redirect(base_url('index.php/Verifikasidata/login'));
        }
        $data['item'] = $this->Paket_model->getDetailPaket($IdPaket); // Ambil detail paket berdasarkan ID
        $this->load->view('DetailPaket', $data); // Memuat view 'DetailPaket' dengan data detail paket
    }
}

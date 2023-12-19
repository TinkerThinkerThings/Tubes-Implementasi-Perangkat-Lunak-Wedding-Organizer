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
        $data['indoorPaket'] = $this->Paket_model->getIndoorPaket();
        $data['outdoorPaket'] = $this->Paket_model->getOutdoorPaket();
        $data['paket'] = $this->Paket_model->getpaket()->result();
        $this->load->view('Paket.php', $data);
    }

    public function detail($IdPaket) // Contoh fungsi untuk menampilkan detail
    {
        $data['item'] = $this->Paket_model->getDetailPaket($IdPaket); // Ambil detail paket berdasarkan ID
        $this->load->view('DetailPaket', $data); // Memuat view 'DetailPaket' dengan data detail paket
    }
}

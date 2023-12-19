<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sewa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Paket_model');
    }
    // public function index($IdPaket)
    // {
    //     $data['item'] = $this->Paket_model->getDetailPaket($IdPaket);
    //     $this->load->view('Sewa.php', $data);
    // }
    public function index($IdPaket)
    {

        $data['item'] = $this->Paket_model->getDetailPaket($IdPaket);
        $this->load->view('Sewa.php', $data);
    }
    public function tambahsewa($IdPaket)
    {
        if ($this->input->post('submit')) {
            $data = array(
                'Nama_Pelanggan' => $this->input->post('Nama_Pelanggan'),
                'Alamat' => $this->input->post('Alamat'),
                'IdPaket' => $this->input->post('IdPaket'),
                'Harga' => $this->input->post('harga'),
                'Pembayaran' => $this->input->post('Pembayaran')
            );

            // Memanggil method tambahsewa dari model untuk menyimpan data ke database
            if ($this->Paket_model->tambahsewa($data)) {
                // Jika berhasil disimpan, redirect ke halaman tertentu
                redirect('index.php/home');
            } else {
                // Handle error jika penyimpanan gagal
            }
        }

        $data['item'] = $this->Paket_model->getDetailPaket($IdPaket);
        $this->load->view('Sewa.php', $data);
    }
}

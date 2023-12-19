<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sewa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Paket_model');
    }

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
            'IdPaket' => $IdPaket, // Menggunakan IdPaket dari parameter method
            'harga' => $this->input->post('harga'), // Retrieve 'harga' from the form
            'Pembayaran' => $this->input->post('Pembayaran')
        );

        // Memanggil method tambahsewa dari model untuk menyimpan data ke database
        if ($this->Paket_model->tambahsewa($data)) {
            // Jika berhasil disimpan, redirect ke halaman tertentu
            redirect(base_url('index.php/home'));

        } else {
            // Handle error jika penyimpanan gagal
        }
    }

    $data['item'] = $this->Paket_model->getDetailPaket($IdPaket);
    $this->load->view('Sewa.php', $data);
}

}

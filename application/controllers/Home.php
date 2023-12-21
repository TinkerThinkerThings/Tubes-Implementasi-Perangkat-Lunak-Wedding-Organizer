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
        $this->load->view('Home.php');
    }
    public function Gallery()
    {
        $this->load->view('Gallery.php');
    }
    public function Kontak()
    {
        $this->load->view('Kontak.php');
    }
    public function Harga()
    {
        $this->load->view('Harga.php');
    }
    public function Konfirmasi()
    {
        $this->load->view('Konfirmasi.php');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('Daftar');
    }

    public function register()
    {
        $this->form_validation->set_rules('Nama', 'Nama', 'required');
        $this->form_validation->set_rules('Alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        $this->form_validation->set_rules('Jenis_Kelamin', 'Jenis_Kelamin', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('No_Hp', 'No_HP', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('Daftar');
        } else {
            $data = array(
                'Nama' => $this->input->post('Nama'),
                'Alamat' => $this->input->post('Alamat'),
                'Password' => $this->input->post('Password'),
                'Jenis_Kelamin' => $this->input->post('Jenis_Kelamin'),
                'Email' => $this->input->post('Email'),
                'No_Hp' => $this->input->post('No_Hp'),
                'Role' => 'Pelanggan'
            );

            $result = $this->Auth_model->registerUser($data);

            if ($result) {
                redirect(base_url('index.php/Verifikasidata'));
            } else {
                $data['error'] = 'Registrasi gagal. Silakan coba lagi.';
                $this->load->view('Daftar', $data);
            }
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Verifikasidata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $this->load->view('Login');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php/Verifikasidata/login'));
    }
    public function login()
    {
        $Email = $this->input->post('Email');
        $Password = $this->input->post('Password');

        $user = $this->Auth_model->login($Email, $Password);

        if ($user !== false) {
            $this->session->set_userdata('user_id', $user->Id_User);
            $this->session->set_userdata('Role', $user->Role);

            // Set session data based on user role
            if ($user->Role === 'Admin' || $user->Role === 'Pelanggan' || $user->Role === 'Owner') {
                $this->session->set_userdata('login', true);
                $this->session->set_userdata('Id_User', $user->Id_User);
                $this->session->set_userdata('Nama', $user->Nama);
                $this->session->set_userdata('Alamat', $user->Alamat);
            }

            // Redirect based on user role
            switch ($user->Role) {
                case 'Admin':
                    redirect(base_url('index.php/Admin/index'));
                    break;
                case 'Pelanggan':
                    redirect(base_url('index.php/Home/index'));
                    break;
                case 'Owner':
                    redirect(base_url('index.php/Home/index'));
                    break;
                default:
                    // Redirect to a default page if the role is unknown
                    redirect('index.php/Verifikasidata');
                    break;
            }
        } else {
            // Login failed, set error message based on reason
            $data['error'] = 'Email atau password salah. Silakan coba lagi.';
            if (!$this->Auth_model->check_Email($Email)) {
                $data['error'] = 'Email tidak valid. Silakan coba lagi.';
            } elseif (!$this->Auth_model->check_password($Email, $Password)) {
                $data['error'] = 'Password salah. Silakan coba lagi.';
            }
            $this->load->view('Login', $data);
        }
    }
}

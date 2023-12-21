<?php

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function login($Email, $Password)
    {

        $this->db->where('Email', $Email);
        $this->db->where('Password', $Password);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function check_Email($Email)
    {
        $query = $this->db->get_where('user', array('Email' => $Email));
        return $query->num_rows() > 0;
    }
    public function check_password($Email, $Password)
    {
        $query = $this->db->get_where('user', array('Email' => $Email));

        if ($query->num_rows() === 1) {
            $user = $query->row();

            // Updated comparison of password
            if ($user->Password === $Password) {
                return true; // Password matches
            }
        }

        return false; // Password doesn't match
    }
    public function registerUser($data)
    {

        return $this->db->insert('user', $data);
    }
}

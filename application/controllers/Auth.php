<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('auth/home');
        $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_footer');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }
}

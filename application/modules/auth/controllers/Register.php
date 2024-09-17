<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('Auth_model', 'authModel');
  }

  public function index()
  {
    $data['title'] = 'Register';

    $this->load->view('templates/header/header', $data);
    $this->load->view('auth/register', $data);
    $this->load->view('templates/footer/footer', $data);
  }
}

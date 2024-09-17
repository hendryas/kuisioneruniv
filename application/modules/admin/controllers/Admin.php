<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('Admin_model', 'adminModel');
    $this->load->model('auth/Auth_model', 'authModel');
  }

  public function index()
  {
    $data['title'] = 'Admin Tracer Study';

    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $data['total_alumi'] = $this->adminModel->getDataCountAlumni()->result();
    $data['total_pengguna'] = $this->adminModel->getDataCountPengguna()->result();

    $this->load->view('templates/header/header', $data);
    $this->load->view('admin/admin', $data);
    $this->load->view('templates/footer/footer', $data);
  }
}

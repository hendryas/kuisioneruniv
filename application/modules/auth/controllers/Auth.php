<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('Auth_model', 'authModel');
  }

  public function index()
  {
    $data['title'] = 'Login Admin';

    $this->form_validation->set_rules('email', 'email', 'required|trim', [
      'required' => 'E-mail tidak boleh kosong'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim', [
      'required' => 'Password tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header/header', $data);
      $this->load->view('auth/login', $data);
      $this->load->view('templates/footer/footer', $data);
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->authModel->getDataUser($email)->row_array();

    if ($user) {
      if (password_verify($password, $user['password'])) {
        $data = [
          'id' => $user['id_user'],
          'email' => $user['email']
        ];
        $this->session->set_userdata($data);
        redirect('admin');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
        <strong>Password salah!</strong> Silahkan coba lagi.</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
      <strong>E-mail belum terdaftar!</strong></div>');
      redirect('auth');
    }
  }
}

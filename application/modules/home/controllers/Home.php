<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Tracer Study untuk Pengguna Alumni';

    $this->load->view('templates/headerhome/headerhome', $data);
    $this->load->view('home/home', $data);
    $this->load->view('templates/footerhome/footerhome');
  }
}

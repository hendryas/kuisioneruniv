<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
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
    $data['alumni'] = $this->adminModel->dataAlumni()->result_array();

    // Penguasaan
    $penguasaan = "SELECT sum(penguasaan) as penguasaan from alumni";
    $penguasaan2 = "SELECT sum(penguasaan2) as penguasaan2 from alumni";
    $penguasaan3 = "SELECT sum(penguasaan3) as penguasaan3 from alumni";
    $penguasaan4 = "SELECT sum(penguasaan4) as penguasaan4 from alumni";
    $penguasaan5 = "SELECT sum(penguasaan5) as penguasaan5 from alumni";
    $penguasaan6 = "SELECT sum(penguasaan6) as penguasaan6 from alumni";
    $penguasaan7 = "SELECT sum(penguasaan7) as penguasaan7 from alumni";
    $penguasaan8 = "SELECT sum(penguasaan8) as penguasaan8 from alumni";
    $penguasaan9 = "SELECT sum(penguasaan9) as penguasaan9 from alumni";
    $penguasaan10 = "SELECT sum(penguasaan10) as penguasaan10 from alumni";
    $penguasaan11 = "SELECT sum(penguasaan11) as penguasaan11 from alumni";
    $data['alumni_penguasaan'] = $this->db->query($penguasaan)->result_array();
    $data['alumni_penguasaan2'] = $this->db->query($penguasaan2)->result_array();
    $data['alumni_penguasaan3'] = $this->db->query($penguasaan3)->result_array();
    $data['alumni_penguasaan4'] = $this->db->query($penguasaan4)->result_array();
    $data['alumni_penguasaan5'] = $this->db->query($penguasaan5)->result_array();
    $data['alumni_penguasaan6'] = $this->db->query($penguasaan6)->result_array();
    $data['alumni_penguasaan7'] = $this->db->query($penguasaan7)->result_array();
    $data['alumni_penguasaan8'] = $this->db->query($penguasaan8)->result_array();
    $data['alumni_penguasaan9'] = $this->db->query($penguasaan9)->result_array();
    $data['alumni_penguasaan10'] = $this->db->query($penguasaan10)->result_array();
    $data['alumni_penguasaan11'] = $this->db->query($penguasaan11)->result_array();

    // Aspek
    $aspek = "SELECT sum(aspek) as aspek from pengguna";
    $aspek2 = "SELECT sum(aspek2) as aspek2 from pengguna";
    $aspek3 = "SELECT sum(aspek3) as aspek3 from pengguna";
    $aspek4 = "SELECT sum(aspek4) as aspek4 from pengguna";
    $aspek5 = "SELECT sum(aspek5) as aspek5 from pengguna";
    $aspek6 = "SELECT sum(aspek6) as aspek6 from pengguna";
    $aspek7 = "SELECT sum(aspek7) as aspek7 from pengguna";
    $aspek8 = "SELECT sum(aspek8) as aspek8 from pengguna";
    $aspek9 = "SELECT sum(aspek9) as aspek9 from pengguna";
    $aspek10 = "SELECT sum(aspek10) as aspek10 from pengguna";
    $aspek11 = "SELECT sum(aspek11) as aspek11 from pengguna";
    $data['pengguna_aspek'] = $this->db->query($aspek)->result_array();
    $data['pengguna_aspek2'] = $this->db->query($aspek2)->result_array();
    $data['pengguna_aspek3'] = $this->db->query($aspek3)->result_array();
    $data['pengguna_aspek4'] = $this->db->query($aspek4)->result_array();
    $data['pengguna_aspek5'] = $this->db->query($aspek5)->result_array();
    $data['pengguna_aspek6'] = $this->db->query($aspek6)->result_array();
    $data['pengguna_aspek7'] = $this->db->query($aspek7)->result_array();
    $data['pengguna_aspek8'] = $this->db->query($aspek8)->result_array();
    $data['pengguna_aspek9'] = $this->db->query($aspek9)->result_array();
    $data['pengguna_aspek10'] = $this->db->query($aspek10)->result_array();
    $data['pengguna_aspek11'] = $this->db->query($aspek11)->result_array();

    // Kepuasan
    $kepuasan = "SELECT sum(kepuasan) as kepuasan from pengguna";
    $kepuasan2 = "SELECT sum(kepuasan2) as kepuasan2 from pengguna";
    $kepuasan3 = "SELECT sum(kepuasan3) as kepuasan3 from pengguna";
    $kepuasan4 = "SELECT sum(kepuasan4) as kepuasan4 from pengguna";
    $kepuasan5 = "SELECT sum(kepuasan5) as kepuasan5 from pengguna";
    $kepuasan6 = "SELECT sum(kepuasan6) as kepuasan6 from pengguna";
    $kepuasan7 = "SELECT sum(kepuasan7) as kepuasan7 from pengguna";
    $data['pengguna_kepuasan'] = $this->db->query($kepuasan)->result_array();
    $data['pengguna_kepuasan2'] = $this->db->query($kepuasan2)->result_array();
    $data['pengguna_kepuasan3'] = $this->db->query($kepuasan3)->result_array();
    $data['pengguna_kepuasan4'] = $this->db->query($kepuasan4)->result_array();
    $data['pengguna_kepuasan5'] = $this->db->query($kepuasan5)->result_array();
    $data['pengguna_kepuasan6'] = $this->db->query($kepuasan6)->result_array();
    $data['pengguna_kepuasan7'] = $this->db->query($kepuasan7)->result_array();
    $this->load->view('templates/header/header', $data);
    $this->load->view('admin/chart', $data);
    $this->load->view('templates/footer/footer', $data);
  }
}

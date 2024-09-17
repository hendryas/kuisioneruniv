<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

class KuisionerAlumni extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('KuisionerAlumni_model', 'kuisionerAlumniModel');
  }

  public function index()
  {
    $data['title'] = 'Tracer Study untuk Pengguna Alumni';

    $this->load->view('templates/headerhome/headerhome', $data);
    $this->load->view('kuisioneralumni/kuisioneralumni', $data);
    $this->load->view('templates/footerhome/footerhome');
  }

  public function insert_data()
  {
    $name = htmlspecialchars($this->input->post('name'));
    $tempat = htmlspecialchars($this->input->post('tempat'));
    $tanggal = htmlspecialchars($this->input->post('tanggal'));
    $alamat = htmlspecialchars($this->input->post('alamat'));
    $phone = htmlspecialchars($this->input->post('phone'));
    $jk = htmlspecialchars($this->input->post('jk'));
    $sosmed = htmlspecialchars($this->input->post('sosmed'));
    $email = htmlspecialchars($this->input->post('email'));
    $tm = htmlspecialchars($this->input->post('tm'));
    $tl = htmlspecialchars($this->input->post('tl'));
    $lms = htmlspecialchars($this->input->post('lms'));
    $wt = htmlspecialchars($this->input->post('wt'));

    $penguasaan = (int)htmlspecialchars($this->input->post('penguasaan'));
    $penguasaan2 = (int)htmlspecialchars($this->input->post('penguasaan2'));
    $penguasaan3 = (int)htmlspecialchars($this->input->post('penguasaan3'));
    $penguasaan4 = (int)htmlspecialchars($this->input->post('penguasaan4'));
    $penguasaan5 = (int)htmlspecialchars($this->input->post('penguasaan5'));
    $penguasaan6 = (int)htmlspecialchars($this->input->post('penguasaan6'));
    $penguasaan7 = (int)htmlspecialchars($this->input->post('penguasaan7'));
    $penguasaan8 = (int)htmlspecialchars($this->input->post('penguasaan8'));
    $penguasaan9 = (int)htmlspecialchars($this->input->post('penguasaan9'));
    $penguasaan10 = (int)htmlspecialchars($this->input->post('penguasaan10'));
    $penguasaan11 = (int)htmlspecialchars($this->input->post('penguasaan11'));
    $totalpenguasaan = $penguasaan + $penguasaan2 + $penguasaan3 + $penguasaan4 + $penguasaan5 + $penguasaan6 + $penguasaan7 + $penguasaan8 + $penguasaan9 + $penguasaan10 + $penguasaan11;

    $data = [
      'name' => $name,
      'tempat' => $tempat,
      'tanggal' => $tanggal,
      'alamat' => $alamat,
      'phone' => $phone,
      'jk' => $jk,
      'sosmed' => $sosmed,
      'email' => $email,
      'tm' => $tm,
      'tl' => $tl,
      'lms' => $lms,
      'wt' => $wt,
      'penguasaan' => $penguasaan,
      'penguasaan2' => $penguasaan2,
      'penguasaan3' => $penguasaan3,
      'penguasaan4' => $penguasaan4,
      'penguasaan5' => $penguasaan5,
      'penguasaan6' => $penguasaan6,
      'penguasaan7' => $penguasaan7,
      'penguasaan8' => $penguasaan8,
      'penguasaan9' => $penguasaan9,
      'penguasaan10' => $penguasaan10,
      'penguasaan11' => $penguasaan11,
      'totalpenguasaan' => $totalpenguasaan
    ];

    $data2 = [
      'pengetahuan_umum' => $penguasaan,
      'bahasa_asing' => $penguasaan2,
      'iptek' => $penguasaan3,
      'metodelogi_penelitian' => $penguasaan4,
      'kerjasama_tim' => $penguasaan5,
      'keterampilan_komunikasi_lisan' => $penguasaan6,
      'keterampilan_komunikasi_tertulis' => $penguasaan7,
      'proses_pemberdaya_masyarakat' => $penguasaan8,
      'pengetahuan_teoritis_spesifik' => $penguasaan9,
      'manajemen_organisasi' => $penguasaan10,
      'kepemimpinan' => $penguasaan11,
      'total_penguasaan' => $totalpenguasaan
    ];

    $qryInsert = $this->kuisionerAlumniModel->insertData($data);
    $qryInsertPenguasaan = $this->kuisionerAlumniModel->insertDataPenguasaan($data2);

    $qryDataAlumni = $this->kuisionerAlumniModel->getDataAlumniDesc()->row_array();
    $idAlumni = $qryDataAlumni['id'];
    $totalPenguasaan = $qryDataAlumni['totalpenguasaan'];

    $totalPenguasaan = (int)$totalPenguasaan;

    // $total1 =  $totalAspek + $totalKepuasan;
    $total = ($totalPenguasaan / 44) * 100;

    $dataHasil = [
      'id_alumni' => $idAlumni,
      'rata_rata_penguasan' => $total
    ];

    $qryInsertDataHasil = $this->kuisionerAlumniModel->insertDataHasil($dataHasil);

    if ($qryInsert == 1 || $qryInsertPenguasaan == 1 || $qryInsertDataHasil == 1) {
      $status = "OK";
      $message = "Berhasil Insert Data!";
      $log = "";
    } else {
      $status = "ERROR";
      $message = "Query Gagal Insert Data!";
      $log = "";
    }

    $response = array(
      "status" => $status,
      "message" => $message,
      "log" => $log
    );
    echo json_encode($response);
  }

  private function _cetak()
  {
    $data['data_alumni'] = $this->kuisionerAlumniModel->getDataAlumniDesc()->row_array();
    $html = $this->load->view('kuisioneralumni/cetak_kuisioneralumni', $data, true);
    // $html = 'hei';
    $mpdf = new \Mpdf\Mpdf();
    // $mpdf->showImageErrors = true;
    $mpdf->WriteHTML($html);
    $mpdf->Output();
  }

  public function cetak_kuisioneralumni()
  {
    $this->_cetak();
    redirect('kuisioneralumni');
  }
}

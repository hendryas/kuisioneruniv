<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

class KuisionerPengguna extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('KuisionerPengguna_model', 'kuisionerModel');
  }

  public function index()
  {
    $data['title'] = 'Tracer Study untuk Pengguna Alumni';

    $this->load->view('templates/headerhome/headerhome', $data);
    $this->load->view('kuisionerpengguna/kuisionerpengguna', $data);
    $this->load->view('templates/footerhome/footerhome');
  }

  public function insert_data()
  {
    $inputNA = htmlspecialchars($this->input->post('inputNA'));
    $inputNP = htmlspecialchars($this->input->post('inputNP'));
    $inputNp = htmlspecialchars($this->input->post('inputNp'));
    $inputAddress = htmlspecialchars($this->input->post('inputAddress'));
    $inputPhone = htmlspecialchars($this->input->post('inputPhone'));
    $inputEmail = htmlspecialchars($this->input->post('inputEmail'));
    $inputJenis = htmlspecialchars($this->input->post('inputJenis'));
    $inputJumlah = htmlspecialchars($this->input->post('inputJumlah'));

    // Nilai Aspek Dalam Penerimaan Karyawan
    $aspek = (int)htmlspecialchars($this->input->post('aspek'));
    $aspek2 = (int)htmlspecialchars($this->input->post('aspek2'));
    $aspek3 = (int)htmlspecialchars($this->input->post('aspek3'));
    $aspek4 = (int)htmlspecialchars($this->input->post('aspek4'));
    $aspek5 = (int)htmlspecialchars($this->input->post('aspek5'));
    $aspek6 = (int)htmlspecialchars($this->input->post('aspek6'));
    $aspek7 = (int)htmlspecialchars($this->input->post('aspek7'));
    $aspek8 = (int)htmlspecialchars($this->input->post('aspek8'));
    $aspek9 = (int)htmlspecialchars($this->input->post('aspek9'));
    $aspek10 = (int)htmlspecialchars($this->input->post('aspek10'));
    $aspek11 = (int)htmlspecialchars($this->input->post('aspek11'));
    $totalaspek = $aspek + $aspek2 + $aspek3 + $aspek4 + $aspek5 + $aspek6 + $aspek7 + $aspek8 + $aspek9 + $aspek10 + $aspek11;

    // Kepuasan Pengguna Lulusan
    $kepuasan =  (int)htmlspecialchars($this->input->post('kepuasan'));
    $kepuasan2 = (int)htmlspecialchars($this->input->post('kepuasan2'));
    $kepuasan3 = (int)htmlspecialchars($this->input->post('kepuasan3'));
    $kepuasan4 = (int)htmlspecialchars($this->input->post('kepuasan4'));
    $kepuasan5 = (int)htmlspecialchars($this->input->post('kepuasan5'));
    $kepuasan6 = (int)htmlspecialchars($this->input->post('kepuasan6'));
    $kepuasan7 = (int)htmlspecialchars($this->input->post('kepuasan7'));
    $totalkepuasan = $kepuasan + $kepuasan2 + $kepuasan3 + $kepuasan4 + $kepuasan5 + $kepuasan6 + $kepuasan7;

    $kdans = htmlspecialchars($this->input->post('kdans'));

    $data = [
      'nama_alumni' => $inputNA,
      'nama_pengguna' => $inputNP,
      'nama_perusahaan' => $inputNp,
      'alamat' => $inputAddress,
      'phone' => $inputPhone,
      'email' => $inputEmail,
      'jenis_perusahaan' => $inputJenis,
      'jumlah_karyawan' => $inputJumlah,
      'aspek' => $aspek,
      'aspek2' => $aspek2,
      'aspek3' => $aspek3,
      'aspek4' => $aspek4,
      'aspek5' => $aspek5,
      'aspek6' => $aspek6,
      'aspek7' => $aspek7,
      'aspek8' => $aspek8,
      'aspek9' => $aspek9,
      'aspek10' => $aspek10,
      'aspek11' => $aspek11,
      'totalaspek' => $totalaspek,
      'kepuasan' => $kepuasan,
      'kepuasan2' => $kepuasan2,
      'kepuasan3' => $kepuasan3,
      'kepuasan4' => $kepuasan4,
      'kepuasan5' => $kepuasan5,
      'kepuasan6' => $kepuasan6,
      'kepuasan7' => $kepuasan7,
      'totalkepuasan' => $totalkepuasan,
      'kritik_saran' => $kdans,
    ];

    $data_aspek = [
      'keahlian' => $aspek,
      'prestasi_akademik' => $aspek2,
      'keterampilan_praktis_yg_diperoleh_selama_kuliah' => $aspek3,
      'reputasi_almameter' => $aspek4,
      'pengalaman_kerja' => $aspek5,
      'kemampuan_b_asing' => $aspek6,
      'ketrampilan_menggunakan_komputer' => $aspek7,
      'pengantar_pihak_ketiga' => $aspek8,
      'hasil_tes_penerimaan' => $aspek9,
      'penampilan_pd_saat_wawancara' => $aspek10,
      'daerah_asal' => $aspek11,
      'total_aspek' => $totalaspek,
    ];

    $data_kepuasan = [
      'kerjasama_tim' => $kepuasan,
      'keahlian_di_bidang_ti' => $kepuasan2,
      'kemampuan_b_asing' => $kepuasan3,
      'kemampuan_berkomunikasi' => $kepuasan4,
      'pengembangan_diri' => $kepuasan5,
      'kepemimpinan' => $kepuasan6,
      'etos_kerja' => $kepuasan7,
      'total_kepuasan' => $totalkepuasan,
    ];

    $qryInsert = $this->kuisionerModel->insertData($data);
    $qryInsertDataAspek = $this->kuisionerModel->insertDataAspek($data_aspek);
    $qryInsertDataKepuasaan = $this->kuisionerModel->insertDataKepuasan($data_kepuasan);

    $qryDataPengguna = $this->kuisionerModel->getDataPenggunaDesc()->row_array();
    $totalAspek = $qryDataPengguna['totalaspek'];
    $totalKepuasan = $qryDataPengguna['totalkepuasan'];
    $idPengguna = $qryDataPengguna['id_pengguna'];

    $totalAspek = (int)$totalAspek;
    $totalKepuasan = (int)$totalKepuasan;

    $total1 =  $totalAspek + $totalKepuasan;
    $total = ($total1 / 72) * 100;

    $dataHasil = [
      'id_pengguna' => $idPengguna,
      'rata_rata_aspek_kepuasan' => $total
    ];

    $qryInsertDataHasil = $this->kuisionerModel->insertDataHasil($dataHasil);

    if ($qryInsert == 1 || $qryInsertDataAspek == 1 || $qryInsertDataKepuasaan == 1 || $qryInsertDataHasil == 1) {
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
    $data['data_pengguna'] = $this->kuisionerModel->getDataPenggunaDesc()->row_array();
    $html = $this->load->view('kuisionerpengguna/cetak_kuisionerpengguna', $data, true);
    // $html = 'hei';
    $mpdf = new \Mpdf\Mpdf();
    // $mpdf->showImageErrors = true;
    $mpdf->WriteHTML($html);
    $mpdf->Output();
  }

  public function cetak_kuisionerpengguna()
  {
    $this->_cetak();
    redirect('kuisionerpengguna');
  }
}

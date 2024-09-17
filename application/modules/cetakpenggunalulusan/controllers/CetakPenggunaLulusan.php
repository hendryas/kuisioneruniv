<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

class CetakPenggunaLulusan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('kuisionerpengguna/KuisionerPengguna_model', 'kuisionerModel');
  }

  private function _cetak($id)
  {
    $data['data_pengguna'] = $this->kuisionerModel->getDataPenggunaById($id)->row_array();
    $html = $this->load->view('kuisionerpengguna/cetak_kuisionerpengguna', $data, true);
    // $html = 'hei';
    $mpdf = new \Mpdf\Mpdf();
    // $mpdf->showImageErrors = true;
    $mpdf->WriteHTML($html);
    $mpdf->Output();
  }

  public function cetak_kuisionerpengguna($id)
  {
    $this->_cetak($id);
    redirect('admin/penggunalulusan');
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

class CetakAlumni extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('kuisioneralumni/KuisionerAlumni_model', 'kuisionerAlumniModel');
  }

  private function _cetak($id)
  {
    $data['data_alumni'] = $this->kuisionerAlumniModel->getDataAlumniById($id)->row_array();
    $html = $this->load->view('kuisioneralumni/cetak_kuisioneralumni', $data, true);
    // $html = 'hei';
    $mpdf = new \Mpdf\Mpdf();
    // $mpdf->showImageErrors = true;
    $mpdf->WriteHTML($html);
    $mpdf->Output();
  }

  public function cetak_kuisioneralumni($id)
  {
    $this->_cetak($id);
    redirect('admin/alumni');
  }
}

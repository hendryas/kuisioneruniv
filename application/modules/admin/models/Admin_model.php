<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
  public function dataPengguna()
  {
    $this->db->select('a.*');
    $this->db->from('pengguna a');

    $query = $this->db->get();
    return $query;
  }

  public function dataAlumni()
  {
    $this->db->select('a.*');
    $this->db->from('alumni a');

    $query = $this->db->get();
    return $query;
  }

  public function getDataCountAlumni()
  {
    $this->db->select('a.*');
    $this->db->from('alumni a');

    $query = $this->db->get();
    return $query;
  }

  public function getDataCountPengguna()
  {
    $this->db->select('a.*');
    $this->db->from('pengguna a');

    $query = $this->db->get();
    return $query;
  }

  public function dataHasil()
  {
    $this->db->select('a.*,b.name,c.nama_pengguna');
    $this->db->from('hasil a');
    $this->db->join('alumni b', 'a.id_alumni = b.id', 'left');
    $this->db->join('pengguna c', 'a.id_pengguna = c.id_pengguna', 'left');

    $query = $this->db->get();
    return $query;
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KuisionerAlumni_model extends CI_Model
{
  public function insertData($data)
  {
    $this->db->insert('alumni', $data);

    $insert = $this->db->affected_rows();

    if ($insert == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function insertDataHasil($data)
  {
    $this->db->insert('hasil', $data);

    $insert = $this->db->affected_rows();

    if ($insert == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function getDataAlumniDesc()
  {
    $this->db->select('a.*');
    $this->db->from('alumni a');
    $this->db->order_by("a.id", "desc");

    $result = $this->db->get();
    return $result;
  }

  public function getDataAlumniById($id)
  {
    $this->db->select('a.*');
    $this->db->from('alumni a');
    $this->db->where('a.id', $id);
    $this->db->order_by("a.id", "desc");

    $result = $this->db->get();
    return $result;
  }

  public function insertDataPenguasaan($data)
  {
    $this->db->insert('penguasaan', $data);

    $insert = $this->db->affected_rows();

    if ($insert == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KuisionerPengguna_model extends CI_Model
{
  public function insertData($data)
  {
    $this->db->insert('pengguna', $data);

    $insert = $this->db->affected_rows();

    if ($insert == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function insertDataAspek($data)
  {
    $this->db->insert('aspek', $data);

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

  public function insertDataKepuasan($data)
  {
    $this->db->insert('kepuasan', $data);

    $insert = $this->db->affected_rows();

    if ($insert == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function getDataPenggunaDesc()
  {
    $this->db->select('a.*');
    $this->db->from('pengguna a');
    $this->db->order_by("a.id_pengguna", "desc");

    $result = $this->db->get();
    return $result;
  }

  public function getDataPenggunaById($id)
  {
    $this->db->select('a.*');
    $this->db->from('pengguna a');
    $this->db->where('a.id_pengguna', $id);
    $this->db->order_by("a.id_pengguna", "desc");

    $result = $this->db->get();
    return $result;
  }
}

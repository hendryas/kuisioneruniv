<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
  public function getDataUser($email)
  {
    $this->db->select('a.*');
    $this->db->from('user a');
    $this->db->where('email', $email);

    $result = $this->db->get();
    return $result;
  }
}

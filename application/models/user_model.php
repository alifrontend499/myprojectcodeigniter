<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

  public function delete_user($user_id)
  {
    $querydata = $this->db->delete("login_details", ["id"=> $user_id]);

    if(!$this->db->affected_rows()) {
      return false;
    } else {
      return true;
    }
  }
}

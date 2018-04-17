<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
  public function login_check($name, $email) {
    $query_data = $this->db->select("id, name, email")->where(["name"=>$name, "email"=> $email])->limit("1")->get("login_details");

    if($query_data->num_rows() == 1) {
      $result_data = [];
      foreach ($query_data->result_array() as $key => $value) {
        $result_data = $value;
      }

      return $result_data;
    } else {
      return false;
    }
  }
}

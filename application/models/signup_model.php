<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup_model extends CI_Model
{

  public function signup($name, $email)
  {

    $query_data = $this->db->select("id, name, email")->where(["name"=> $name, "email"=> $email])->get('login_details');

    if ($query_data->num_rows() >= 1) {
      return FALSE;
    } else {
      $this->db->trans_start();
        $this->db->insert("login_details", ["name"=> $name, "email"=> $email]);
      $this->db->trans_complete();

      $get_data = $this->db->select("id, name, email")->where(["name"=>$name, "email"=> $email])->limit("1")->get("login_details");

      if($this->db->trans_status() == FALSE) {
        return FALSE;
      } else {
        $result_data = [];
        foreach ($get_data->result_array() as $key => $value) {
          $result_data = $value;
        }
        return $result_data;
      }
    }

  }
}

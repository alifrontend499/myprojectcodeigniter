<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
  public function login_check($email, $pass) {
    $check_password = $this->db->select("pass")->where(["email"=> $email])->limit("1")->get("login_details");

    $fetched_pass = $check_password->row();
    $new_pass = '';

    if (isset($fetched_pass)) {
      $new_pass = $fetched_pass->pass;
    }
    $passwordVerify = password_verify($pass, $new_pass);

    if($passwordVerify) {
       $query_data = $this->db->select("id, name, email")->where(["email"=> $email])->limit("1")->get("login_details");

       if($query_data->num_rows() == 1) {
         $result_data = [];
         foreach ($query_data->result_array() as $key => $value) {
           $result_data = $value;
         }
         return $result_data;
       }
    } else {
      return FALSE;
    }

  }
}

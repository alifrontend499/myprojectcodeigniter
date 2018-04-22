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

  public function change_username($user_id, $newusername, $password)
  {
    $getting_password = $this->db->select("pass")->where(["id"=>"$user_id"])->get("login_details");
    $userPass = $getting_password->row()->pass;
    $password_verify = password_verify($password, $userPass);

    if($password_verify) {
      $this->db->where(["id"=>$user_id])->update("login_details", ["name"=>$newusername]);
      return TRUE;
    } else {
      return FALSE;
    }
  }
}

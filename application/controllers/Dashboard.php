<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata("name")) {
      redirect("login");
    }
  }

  public function index()
  {
    $this->load->view("myviews/dashboard");
  }

  public function logout()
  {
    $this->session->unset_userdata(["name", "email"]);

    $this->session->set_flashdata("userLoggerout", "You have succesfully logged out");

    redirect("login");
  }

  public function deleteUser()
  {
      $this->load->model("user_model");
      $user_id = $this->input->post("userId");

      if(isset($user_id)) {
        $user_check = $this->user_model->delete_user($user_id);
        if($user_check) {
          // session_destroy();
          $this->session->unset_userdata(["name", "email"]);
          
          $this->session->set_flashdata("userDeleted", "You have been deleted from our database :( see you soon.");
          redirect("login");
        }
      } else {
        redirect("dashboard");
      }

  }
}

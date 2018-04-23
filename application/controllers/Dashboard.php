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

    $this->load->model("user_model");
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

  public function changeusername()
  {
    $this->load->view('myviews/change-username');
  }

  public function changeusernamedata()
  {
    $newusername = $this->input->post("new_username");
    $password = $this->input->post("pass");
    $user_id = $this->session->userdata("user_id");

    $this->form_validation->set_rules("new_username", 'New Username', "required|alpha");
    $this->form_validation->set_rules("pass", 'Password', "required");

    if($this->form_validation->run() == FALSE) {
      $this->load->view('myviews/change-username');
    } else {
      $update_username = $this->user_model->change_username($user_id, $newusername, $password);
      if($update_username) {
        $this->session->set_userdata("name", $newusername);
        $this->session->set_flashdata("update_success", "Username has been updated :)");
        redirect("dashboard/changeusername");
      } else {
        $this->session->set_flashdata("pass_notmatched", "Password is incorrect");
        redirect("dashboard/changeusername");
      }
    }

  }
}

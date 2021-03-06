<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if($this->session->userdata("name")) {
      redirect("dashboard");
    }
  }

  public function index()  {
    $this->load->view('myviews/login');
  }

  public function user_login() {
    $this->load->model("login_model");

    $email = $this->input->post("email");
    $password = $this->input->post("pass");

    // validations
    $this->form_validation->set_rules("email", 'Email', "required|valid_email");
    $this->form_validation->set_rules("pass", 'Password', "required");

    if($this->form_validation->run() == FALSE) {
      $this->load->view("myviews/login");
    } else {
      $login_check = $this->login_model->login_check($email, $password);

      if($login_check) {

        $this->session->set_userdata('name', $login_check["name"]);
        $this->session->set_userdata('user_id', $login_check["id"]);
        redirect("dashboard");

      } else {
        // $this->session->set_userdata("not_found", "Please enter right username and email or Signup");
        $this->session->set_flashdata("not_found", "Your username or password is incorrect");
        redirect("login");;
      }
    }

  }

}

 ?>

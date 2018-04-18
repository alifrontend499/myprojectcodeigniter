<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if($this->session->userdata("name")) {
      redirect("dashboard");
    }
  }

  public function index()  {
    $this->load->view('myviews/signup');
  }

  public function user_signup()
  {
    $this->load->model("signup_model");

    $username = $this->input->post("name");
    $email = $this->input->post("email");
    $password = $this->input->post("pass");


    // form validations
    $this->form_validation->set_rules("name", "Username", "trim|required");
    $this->form_validation->set_rules("email", "Email", "required|valid_email");
    $this->form_validation->set_rules("pass", "Password", "required");
    $this->form_validation->set_rules("confirm_pass", "Confirm Password", "required|matches[pass]");
    if($this->form_validation->run() == FALSE) {
      $this->load->view("myviews/signup");
    } else {
      e($username, 1);
      e($email, 1);
      e($password, 1);
    }

    // if($this->form_validation->run() == FALSE) {
    //   $this->load->view("myviews/signup");
    // } else {
    //   $signup_check = $this->signup_model->signup($username, $email);
    //
    //   if($signup_check) {
    //     $this->session->set_userdata('name', $signup_check["name"]);
    //     $this->session->set_userdata('user_id', $signup_check["id"]);
    //
    //     redirect("dashboard");
    //   } else {
    //     $this->session->set_flashdata("already_exist", "You are already registered with us please try to login.");
    //     redirect("signup");
    //   }
    // }

  }
}

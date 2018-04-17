<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function index()  {
    $this->load->helper('url');

    $name = array(
      "name1" => "ali",
      "name2" => "Jaskaran"
    );
    // echo "<pre>";
    // print_r($name);

    $this->load->view('login', $name);
  }
}

 ?>

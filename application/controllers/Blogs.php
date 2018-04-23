<?php
class Blogs extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("blogs/blog_view");
  }
}

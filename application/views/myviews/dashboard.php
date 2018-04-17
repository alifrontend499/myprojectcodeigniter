<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">
        Hello
        <span>
          <?php
            $name = $this->session->userdata("name");
            if(isset($name)) {
              echo ucfirst($name);
            }
          ?>
        </span>
      </a>

      <div class="navbar p-0 d-block w-100 text-right" id="navbarColor01">
        <ul class="navbar-nav mr-auto d-inline-block m-0">
          <li class="nav-item d-inline-block dropdown">
            <a href="#" class="nav-link">Account</a>
            <ul class="dropdown-menu">
              <li>
                <?php echo form_open("dashboard/deleteUser", ["id"=> "deleteuserform"], ["userId"=> $this->session->userdata('user_id')]) ?>
                  <a class="nav-link deleteUser text-danger">Delete Account</span></a>
                </form>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>dashboard/changeusername" class="nav-link">Change username</a>
              </li>
            </ul>
          </li>
          <li class="nav-item d-inline-block active">
            <a class="nav-link" href="<?php echo base_url(); ?>dashboard/logout">Logout</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="jumbotron">
      <h1 class="display-3">
        <span class="elem" data-attr="
          <?php
            $name = $this->session->userdata("name");
            if(isset($name)) {
              echo "Hello, " . ucfirst($name);
            }
          ?>
        "></span>
      </h1>
      <p class="lead">
        Welcome to your dashboard.
      </p>
      <hr class="my-4">
      <p>
        Click below to read our latest blogs.
      </p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Blogs</a>
      </p>
    </div>

  </body>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

</html>

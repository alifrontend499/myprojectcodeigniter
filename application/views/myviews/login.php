<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  </head>
  <body>
    <div class="login-outer">
      <h1 class="head">Login</h1>
      <div class="login-inner">
        <!-- <form class="" action="" method="post"> -->
        <!-- erro_msgs -->
        <?php
          $validations_errors = validation_errors();
          $err = $this->session->flashdata("not_found");
          if($validations_errors) {
            echo "<div class='alert alert-danger text-center'>" . $validations_errors . "</div>";
          }
          if($err) {
            echo "<div class='alert alert-danger text-center'>" . $err . "</div>";
          }
        ?>
        <?php
          $userDeleted = $this->session->flashdata("userDeleted");
          $LoggedOut = $this->session->flashdata("userLoggerout");

          if($userDeleted) {
            echo "<div class='alert alert-success text-center'>" . $userDeleted . "</div>";
          }
          if($LoggedOut) {
            echo "<div class='alert alert-success text-center'>" . $LoggedOut . "</div>";
          }
        ?>
        <!-- erro_msgs finish-->
        <?php echo form_open('login/user_login', ["class" => "login-form"]); ?>
          <!-- <div class="form-group">
            <label>Name</label>
            <?php //echo form_input(["name" => "name", "class" => "form-input", "placeholder" => "Username", "value"=> set_value('name')]) ?>
          </div> -->

          <div class="form-group">
            <label>Email or Username</label>
            <?php echo form_input(["name" => "email", "type"=> "email", "class" => "form-input", "placeholder" => "Email or Username", "value"=> set_value('email')]) ?>
          </div>

          <div class="form-group">
            <label>Password</label>
            <?php echo form_input(["name" => "name", "class" => "form-input", "placeholder" => "Password", "value"=> set_value('name')]) ?>
          </div>

          <a href="<?php echo base_url(); ?>signup" class="newa">Dont have an account? click to Signup</a>
          <button type="submit" name="submit" class="btn btn-secondry text-uppercase">Submit</button>
        </form>
      </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  </body>
</html>

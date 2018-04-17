<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  </head>
  <body>
    <div class="login-outer">
      <h1 class="head">Sign up</h1>
      <div class="login-inner">
        <div class="error_div" style="color: red;">
          <?php echo validation_errors(); ?>
        </div>

        <?php
          $validations_errors = validation_errors();
          $already_exist = $this->session->flashdata("already_exist");
          if($validations_errors) {
            echo "<div class='alert alert-danger text-center'>" . $validations_errors . "</div>";
          }
          if($already_exist) {
            echo "<div class='alert alert-success text-center'>" . $already_exist . "</div>";
          }
        ?>
        <!-- <form class="" action="action.php" method="post"> -->
        <?php echo form_open('signup/user_signup', ["class" => "signup-form"]) ?>
          <div class="form-group">
            <label>Name</label>
            <?php echo form_input(["name" => "name", "class" => "form-input", "placeholder" => "Username", "value"=> set_value('name')]) ?>
          </div>
          <div class="form-group">
            <label>Email</label>
            <?php echo form_input(["name" => "email", "type"=> "email", "class" => "form-input", "placeholder" => "Email", "value"=> set_value('email')]) ?>
          </div>

          <a href="login" class="newa">already have an account? click to Login</a>
          <button type="submit" name="submit">Submit</button>
        </form>
      </div>
    </div>


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  </body>

</html>

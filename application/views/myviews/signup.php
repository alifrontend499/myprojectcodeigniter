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
        <?php echo form_open('signup/user_signup', ["class" => "signup-form"]) ?>
          <div class="form-group">
            <label>Name</label>
            <?php echo form_input(["name" => "name", "class" => "form-input", "placeholder" => "Username", "value"=> set_value('name')]) ?>
          </div>

          <div class="form-group">
            <label>Email</label>
            <?php echo form_input(["name" => "email", "type"=> "email", "class" => "form-input", "placeholder" => "Email", "value"=> set_value('email')]) ?>
          </div>

          <div class="form-group">
            <label>Password</label>
            <!-- <input type="text" name="name" value="" required> -->
            <?php echo form_password(["name" => "pass", "class" => "form-input", "placeholder" => "Password"]) ?>
          </div>

          <div class="form-group">
            <label>Confirm Password</label>
            <!-- <input type="text" name="name" value="" required> -->
            <?php echo form_password(["name" => "confirm_pass", "class" => "form-input", "placeholder" => "Confrim password"]) ?>
          </div>

          <a href="<?php echo base_url(); ?>login" class="newa">already have an account? click to Login</a>
          <button type="submit" name="submit" class="btn btn-secondry text-uppercase">Submit</button>
        </form>
      </div>
    </div>


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  </body>

</html>

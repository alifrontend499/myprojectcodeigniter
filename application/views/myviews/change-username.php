<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <?php include 'includes/inc-css.php' ?>
  </head>
  <body>

    <?php require 'includes/inc-menu.php' ?>

    <div class="change-username">
      <div class="login-outer">
        <h3 class="head">Change username</h3>
        <div class="login-inner">
        <?php
          // $validations_errors = validation_errors();
          // if($validations_errors) {
          //   echo "<div class='alert alert-danger text-center'>" . $validations_errors . "</div>";
          // }
        ?>
        <!-- erro_msgs finish-->
        <?php echo form_open('login/user_login', ["class" => "login-form"]); ?>
          <div class="form-group">
            <label>New username</label>
            <?php echo form_input(["name" => "new_username", "class" => "form-input", "placeholder" => "New username", "value"=> set_value('new_username')]) ?>
          </div>

          <div class="form-group">
            <label>Password</label>
            <?php echo form_password(["name" => "pass", "class" => "form-input", "placeholder" => "Password"]) ?>
          </div>

          <button type="submit" name="submit" class="btn btn-secondry text-uppercase">Submit</button>
        </form>
      </div>
      </div>
    </div>

    <?php include 'includes/inc-js.php' ?>
  </body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
  </head>
  <body>
    <div class="login-outer">
      <h1 class="head">Login</h1>
      <div class="login-inner">
        <form class="" action="action.php" method="post">
          <label>Name</label>
          <input type="text" name="name" value="" required>

          <label>Email</label>
          <input type="email" name="email" value="" required>

          <button type="submit" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </body>
</html>

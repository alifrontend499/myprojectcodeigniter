<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <?php include 'includes/inc-css.php' ?>
  </head>
  <body>

    <?php require 'includes/inc-menu.php' ?>

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

    <?php include 'includes/inc-js.php' ?>
  </body>
</html>

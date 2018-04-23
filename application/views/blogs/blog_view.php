<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blogs</title>
    <?php include("includes/inc-css.php") ?>
  </head>
  <body>

    <header>
      <?php include("includes/header.php") ?>
    </header>

    <section id="blogs_sec" class="mt-5">
      <div class="container">
        <div class="blogs_sec-inner">
          <h2 class="mb-3">Blogs</h2>
          <div class="blog d-flex border border-secondary mb-3">
            <div class="col-sm-2 pt-3 pb-3 img-sec">
              <img src="<?php echo base_url(); ?>assets/images/blog-default-img.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-sm-10 pt-3 pb-3 text-sec">
              <h3 class="heading">My first blog</h3>
              <p class="text">
                This is my first blog and i am going to get u there.This is my first blog and i am going to get u there.
                This is my first blog and i am going to get u there.This is my first blog and i am going to get u there.
                This is my first blog and i am going to get u there.This is my first blog and i am going to get u there.
                This is my first blog and i am going to get u there.This is my first blog and i am going to get u there.
                This is my first blog and i am going to get u there.This is my first blog and i am going to get u there.
                This is my first blog and i am going to get u there.This is my first blog and i am going to get u there.
                This is my first blog and i am going to get u there.This is my first blog and i am going to get u there.
                This is my first blog and i am going to get u there.This is my first blog and i am going to get u there.
                This is my first blog and i am going to get u there.This is my first blog and i am going to get u there.
              </p>
            </div>
          </div>
          <a type="button" href="" name="button" class="btn btn-primary mw-15 gobackbtn" style="color: #fff;"><- Go back</a>
        </div>

      </div>
    </section>

    <?php include("includes/inc-js.php") ?>

    <script type="text/javascript">
      (function() {
        $('.gobackbtn').click(function () {
          window.history.back();
        });
      })();
    </script>
  </body>
</html>

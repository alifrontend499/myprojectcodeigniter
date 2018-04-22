<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo base_url(); ?>dashboard">
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

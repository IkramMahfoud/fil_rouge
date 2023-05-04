<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>


<!-- user and admin logout -->

<div class="container mise_en_page" method="POST">
<div class="alert alert-danger d-flex align-items-center" role="alert">

  <div class ="text-center " style="padding: 50px 100px;">

  <div class="pb-4 fs-4" >
    Are you sure for Logout!
  </div>
  <div>
  <a type="button" class="btn btn-light fs-6 " href="<?=URLROOT?>userController/logout">Logout</a>
  </div>

  </div>
</div>
</div>

<?php
include_once APPROOT . '/views/includes/footer.php';
?>

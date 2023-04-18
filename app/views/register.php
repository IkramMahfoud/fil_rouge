<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>


<!-- new user will register -->
<form class="container mise_en_page" method="POST" action="<?=URLROOT?>userController/register">
  <div class="row align-items-start border border-primary p-2 border-opacity-25 w-50 mx-auto rounded-3 m-5">
    <div class="modal-header ">
      <h5 class="modal-title  mb-4 mx-auto"><b>Register</b></h5>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input required type="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input required type="password" class="form-control w-50" id="exampleInputPassword1" name="Password">
    </div>
    <button type="submit" class="btn btn-primary" style="width: 200px;">Submit</button>
  </div>
</form>


<?php
    include_once APPROOT.'/views/includes/footer.php';
?>








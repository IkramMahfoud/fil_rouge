<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>



<!-- id kayji hnaya -->
<form method="POST" action="<?= URLROOT . 'signalsController/add_signal' ?>">

  <div class="container h-100 " style="margin-top:100px; margin-bottom: 200px;">
    <div class="alert alert-info alert-dismissible fade show fs-6 mt-2">
      <strong class="fs-3">Info!</strong><br> please provide a clear and detailed description of why you are reporting it. This helps us to quickly and accurately investigate any concerns and take appropriate action. Thank you for helping us
    </div>
    <div class="col-md-5 w-50 mt-5">
      <div class="row mt-5 ">
        <div class="col-md-12">
          <label class="labels fs-3">Description</label>
          <input required type="text" class="form-control fs-4" placeholder="Your Report Here" value="" name="report">
        </div>
      </div>
      <div>
        <input type="hidden" value="<?= $data['artwork_id'] ?>" name="artwork_id">
      </div>
      <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" value="submit">Report Now</button></div>
    </div>
  </div>

</form>








<?php
include_once APPROOT . '/views/includes/footer.php';
?>
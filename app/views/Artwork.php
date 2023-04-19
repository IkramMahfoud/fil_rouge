<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>



<div class="container mise_en_page margn">
  <div class="row m-0 formm " >
    <div class="col-lg-7 pb-5 pe-lg-5">
      <div class="row">
        <div class="col-12 p-5">
          <img class="h-auto heightt" src="<?=URLROOT .'img/'.$data['artwork']->image?>" alt="">
        </div>

      </div>
    </div>
    <div class="col-lg-5 p-0 ps-lg-4">
      <div class="row m-0">
        <div class="col-12 px-4">
          <div class="d-flex align-items-end mt-4 mb-2">
            <p class="h4 m-0"><span class="pe-1">ZAZ</span><span class="pe-1">966</span><span class="pe-1">B</span></p>
            <P class="ps-3 textmuted">1L</P>
          </div>
          <div class="d-flex justify-content-between mb-2">
            <p class="textmuted">Qty</p>
            <p class="fs-14 fw-bold">1</p>
          </div>
          <div class="d-flex justify-content-between mb-2">
            <p class="textmuted">Subtotal</p>
            <p class="fs-14 fw-bold"><span class="fas fa-dollar-sign pe-1"></span>1,450</p>
          </div>
          <div class="d-flex justify-content-between mb-2">
            <p class="textmuted">Shipping</p>
            <p class="fs-14 fw-bold">Free</p>
          </div>
          <div class="d-flex justify-content-between mb-2">
            <p class="textmuted">Promo code</p>
            <p class="fs-14 fw-bold">-<span class="fas fa-dollar-sign px-1"></span>100</p>
          </div>
          <div class="d-flex justify-content-between mb-3">
            <p class="textmuted fw-bold">Total</p>
            <div class="">
              <span class="fas fa-dollar-sign mt-1 pe-1 fs-14 "></span><span class="h4">1,350</span>
            </div>
          </div>
        </div>
        <div class="row col-12 px-0 my-5">
          <div class="col-12  mb-4 p-0">
            <div class="btn btn-primary">Purchase<span class="fas fa-arrow-right ps-2"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
include_once APPROOT . '/views/includes/footer.php';
?>
<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';

?>



<div class="container  h-25 " >
  <div class="row m-0 formm ">
    <div class="col-lg-7 pb-5 pe-lg-5">
      <div class="row">
        <div class="col-12 p-5">
          <img class="h-auto heightt" src="<?= URLROOT . 'img/' . $data['artwork']->image ?>" alt="">
        </div>

      </div>
    </div>
    <div class="col-lg-5 p-0 ps-lg-4">
      <div class="row m-0">
        <div class="col-12 px-4">
          <div class="d-flex align-items-end mt-4 mb-5">
            <p class="h4 m-0"><span class="pe-1"><?= $data['artwork']->title ?></span></p>
            <P class="ps-3 textmuted"><?= $data['artwork']->name ?></P>
          </div>

          <div class="d-flex justify-content-between mb-2">
            <p class="textmuted">Shipping</p>
            <p class="fs-14 fw-bold">Free</p>
          </div>

          <div class="d-flex justify-content-between mb-2">
            <p class="textmuted">Artwork descripton</p>
            <p class="fs-14 fw-bold">-<span class="px-1"><?= $data['artwork']->descreption ?></span></p>
          </div>

          <div class="d-flex justify-content-between mb-3">
            <p class="textmuted fw-bold">Total</p>
            <div class="">
              <span class="mt-1 pe-1 fs-14 "></span><span class="h4"><?= $data['artwork']->price ?> DH</span>
            </div>

          </div>
        </div>

        <div class="row col-12 px-0 my-5">

          <div class="col-12  mb-4 p-0">
            <div id="done" class="btn btn-primary">Contact Artist<span class="fas fa-arrow-right ps-2"></span>
            </div>
          </div>

          <a href="<?= URLROOT . 'signalsController/signal/' . $data['artwork']->artwork_id ?>"class="btn btn-primary shi mb-1 text-center" > Report </a>

        </div>

      </div>
    </div>
  </div>
  <p id="contact"  class="visually-hidden" >Contact This artist : <?= $data['artwork']->email?> </p>
</div>



<?php
include_once APPROOT . '/views/includes/footer.php';
?>

<script>

const done = document.getElementById('done');
const contact = document.getElementById('contact');

done.addEventListener("click",myFunction);

function myFunction() {
  alert( contact.textContent );
  window.location.replace('<?= URLROOT . 'artworkController/artworks' ?>');
}

</script>
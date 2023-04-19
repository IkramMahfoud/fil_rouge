<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>



<div class="row py-5 px-4">
  <div class="">

    <!-- Profile widget -->
    <div class="bg-white shadow rounded overflow-hidden">
      <div class="py-4 px-4">

        <div class="row mb-5">
          <?php foreach ($data['artworks'] as $artwork) : ?>
            <a href="<?=URLROOT?>artworkController/artwork/<?= $artwork->artwork_id?>" class="rowartworks">
              <div class="col-lg-3 mb-2 pr-lg-1 divImageArtWork mt-5 mx-4">
                <img src="<?= URLROOT ?>img/<?= $artwork->image ?>" alt="" class="img-fluid  shadow-sm p_i">
                <!-- TITLE -->
                <!-- PRICE HERE -->
                <!-- CATEGORY -->
                <div class="widget-49-meeting-info mt-3">
                  <span class="widget-49-pro-title mt-5">By- <?= $artwork->name ?></span><br>
                  <span class="widget-49-pro-title ">Named- <?= $artwork->title ?></span><br>
                  <span class="widget-49-pro-title "><?= $artwork->price . 'DH' ?></span><br>
                </div>

              </div>
            </a>
          <?php endforeach ?>
        </div>
        <div class="py-4 mt-5">
          <h5 class="mb-3">Recent posts</h5>
          <div class="p-4 bg-light rounded shadow-sm">
            <p class="font-italic mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <ul class="list-inline small text-muted mt-3 mb-0">
              <li class="list-inline-item"><i class="fa fa-comment-o mr-2"></i>12 Comments</li>
              <li class="list-inline-item"><i class="fa fa-heart-o mr-2"></i>200 Likes</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<?php
include_once APPROOT . '/views/includes/footer.php';
?>
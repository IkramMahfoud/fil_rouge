<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>


<link rel="stylesheet" href="<?= URLROOT ?>css/artist.css">




<div class="row py-5 px-4">
  <div class="">

    <!-- Profile widget -->

    <div class="py-4 px-4">

      <div class="row mb-5">


        <!-- carte section -->

        <?php foreach ($data as $artist) : ?>
          <div class="card">
            <div class="upper background"></div>

            <div class="user text-center">

              <div class="profile">
                <!-- image here from database -->
                <img src="<?= URLROOT . 'img/' . $artist->avatar ?>" class="rounded-circle" width="80">

              </div>

            </div>


            <div class="mt-5 text-center">

              <!-- Surname here from database -->
              <h4 class="mb-0"><?= $artist->name ?></h4>
              <span class="text-muted d-block mb-2">Morroco</span>

              <form method="POST" action="<?= URLROOT . 'portfolioController/Became_an_artist' ?>">
                <div>
                  <input type="hidden" value="<?= $artist->user_id ?>" name="artist_id">
                </div>
                <button type="submit" value="submit" class="btn btn-primary btn-sm follow">Check Portfolio</button>
              </form>

              <div class="d-flex justify-content-between align-items-center mt-4 px-4">





              </div>
            </div>
          </div>
        <?php endforeach ?>



















      </div>



    </div>

  </div>
</div>
</div>




<?php
include_once APPROOT . '/views/includes/footer.php';
?>




<!--
<div class="py-4 px-4">

</div> -->
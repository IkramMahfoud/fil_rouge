<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>

<div class="row py-5 px-4">
    <div class="">

        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-5 pb-1 background">
                <div class="media align-items-end profile-header">
                    <div class="profile mr-3"><img src="<?= URLROOT . 'img/' . $data['info']->avatar ?>" width="130" class="rounded mb-2 img-thumbnail"><a href="<?= URLROOT ?>portfolioController/edit_profile" class="btn btn-dark btn-sm btn-block">Edit profile</a></div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0"><?= $data['info']->name ?> <?= $data['info']->surname ?></h4>
                    </div>
                </div>
            </div>

            <div class="bg-light p-5 d-flex justify-content-end text-center position-relative">
                <p class="position-absolute top-0 start-0 mt-2 mx-4"><b>About</b></p>
                <p class="position-absolute top-0 start-0 mt-5 mx-4"><?= $data['info']->descreption ?></p>
            </div>

            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3 text-text">
                    <h5 class="mb-0"><b>Create Portfolio</b></h5>
                    <a href="<?= URLROOT ?>artworkController/add_artwork" class="btn btn-link text-muted">add from here</a>
                </div>

                <div class="row mb-5">
                    <?php foreach ($data['artworks'] as $artwork) : ?>
                        <div class="col-lg-3 mb-2 pr-lg-1 divImageArtWork mt-5 mx-4">
                            <img src="  <?= URLROOT ?>img/<?= $artwork->image ?>" alt="" class="img-fluid  shadow-sm p_i">
                            <!-- TITLE -->
                            <!-- PRICE HERE -->
                            <!-- CATEGORY -->
                            <div class="widget-49-meeting-info mt-3">
                                <span class="widget-49-pro-title mt-5">By- <?= $artwork->name ?></span><br>
                                <span class="widget-49-pro-title ">Named- <?= $artwork->title ?></span><br>
                                <span class="widget-49-pro-title "><?= $artwork->price.'DH' ?></span><br>
                            </div>
                            <div class="btnActionArtWork">
                                <a href="<?= URLROOT ?>artworkController/edit_artwork_db/<?= $artwork->artwork_id ?>">
                                    <button type="button" class="btn btn-ligh editW"><i class="fa fa-edit"></i></button>
                                </a>
                                <a href="<?= URLROOT ?>artworkController/delete_artwork_db/<?= $artwork->artwork_id ?>">
                                    <button type="button" class="btn btn-light closeW"><i class="fa fa-close"></i></button>
                                </a>
                            </div>
                        </div>
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
        <!-- End profile widget -->

    </div>
</div>


<?php
include_once APPROOT . '/views/includes/footer.php';
?>
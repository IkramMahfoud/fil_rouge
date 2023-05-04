<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
// var_dump($data);
// exit;
?>

<div class="container rounded bg-white mt-5 mb-5 mise_en_page">
    
    <form method="POST" action="<?= URLROOT . 'portfolioController/add_update_portfolio' ?>">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="input-group  d-flex flex-column align-items-center justify-content-center text-center p-3 py-5 inputdiv">
                    <a href="#" class="imageHover d-flex flex-column align-items-center justify-content-center">
                        <!--uplaod image and push it into database-->
                        <input  type="file" style=" height: 100%;" class="form-control inputimage" name="avatar" id="inputGroupFile01">
                        <i class="fa fa-image "></i>

                    </a>
                    <img class="rounded-circle mt-5" style=" height: 100%;" width="150px" src="<?= URLROOT . 'img/1.png' ?>">New Artist <br><?= $_SESSION['email'] ?></span>
                </div>
            </div>
            <div class="col-md-5 border-right">

                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>

                    <?php if (!empty($_SESSION['role']) && $_SESSION['role'] == 2) : ?>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Name</label>
                                <input required type="text" class="form-control" placeholder="first name" value="<?= $data['info']->name ?>" name="name">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Surname</label>
                                <input required type="text" class="form-control" value="<?= $data['info']->surname ?>" placeholder="surname" name="surname">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Description</label>
                                <input required type="text" class="form-control" placeholder="enter your bio" value="<?= $data['info']->descreption ?>" name="description">
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Name</label>
                                <input required type="text" class="form-control" placeholder="first name" value="" name="name">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Surname</label>
                                <input required type="text" class="form-control" value="" placeholder="surname" name="surname">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Description</label>
                                <input required type="text" class="form-control" placeholder="enter your bio" value="" name="description">
                            </div>
                        </div>

                    <?php endif ?>

                    <div>
                        <input required type="hidden" value="<?= $_SESSION['user_id'] ?>" name="user_id">
                    </div>


                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" value="submit">Save Profile</button></div>
                </div>

            </div>



            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <a href="<?= URLROOT ?>home">
                            <span class="border px-3 p-1 cancel">Cancel</span>
                        </a>

                        <?php if (!empty($_SESSION['role']) && $_SESSION['role'] == 2) : ?>
                        <a href="<?= URLROOT ?>portfolioController/deleteportfolio/<?= $_SESSION['user_id'] ?>/<?= $data['info']->portfolio_id ?>">
                            <span class="border px-3 p-1 cancel">Delete</span>
                        </a>
                        <?php endif ?>

                    </div><br>
                </div>
            </div>
        </div>
    </form>

</div>



<?php
include_once APPROOT . '/views/includes/footer.php';
?>
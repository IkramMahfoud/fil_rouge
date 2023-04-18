<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>


<div class="col-md-6 offset-md-3 mt-5">
  <br>
  <h1>Edit Your Portfolio's Works</h1>
  <form accept-charset="UTF-8" action="<?= URLROOT ?>artworkController/edit_artwork_db/<?=$data['artworks'][0]->artwork_id?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputName">Name of artwork</label>
      <input required type="text" name="title" class="form-control" value="<?=$data['artworks'][0]->title?>" placeholder="Enter name of the artwork" required="required">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" required="required">Price of artwork</label>
      <input required type="number" name="price" class="form-control" value="<?=$data['artworks'][0]->price?>" placeholder="Enter price">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Category</label>
      <select class="form-control" name="category" required="required">
        <option value="0" selected style="color:gray;">categories from here</option>

        <?php foreach ($data['categorirow'] as $categori) : ?>
          <option <?php if($categori->catg_id == $data['artworks'][0]->category_id){echo 'selected';} ?> value="<?= $categori->catg_id ?>"><?= $categori->name ?></option>
        <?php endforeach ?>

      </select>
    </div>
    <hr>
    <div class="form-group mt-3">
      <label class="mr-2">Upload your artwork:</label>
      <input required type="file" accept="image/*" name="file">
    </div>
    <div>
      <input required type="hidden" value="<?= $_SESSION['user_id'] ?>" name="user_id">
    </div>
    <hr>
    <button type="submit" class="bttn">Submit
      <span class="first"></span>
      <span class="second"></span>
      <span class="third"></span>
      <span class="fourth"></span>
    </button>
  </form>
</div>
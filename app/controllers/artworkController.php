<?php

class  artworkController extends Controller
{
  public $artwokModel;

  public function __construct()
  {
    ob_start();
    $this->artwokModel = $this->model('Artworks');
  }

  public function add_artwork()
  {
    if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
      header('location:' . URLROOT . 'usercontroller/login');
    } else {
      $categoriarray = $this->artwokModel->get_categories();
      $data =
        [
          'categorirow' => $categoriarray,
        ];
      $this->view('add_artworks', $data);
    }
  }


  public function add_artwork_db()
  {
    if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
      header('location:' . URLROOT . 'usercontroller/login');
    } else {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_POST = filter_input_array(INPUT_POST);
        $id = $_POST['user_id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $file = $_FILES['file']['name'];
        $this->artwokModel->add_artwork_db($id, $title, $price, $category, $file);

        header('location:' . URLROOT . 'portfolioController/Became_an_artist');
      } else {
        $this->view('add_artworks');
      }
    }
  }



  public function edit_artwork($id)
  {
    $artworks = $this->model('Artwork')->get_artworks_db($id);
    $data = $artworks;
    $this->view('edit_artwork', $data);
  }
  public function show_arts_db($id)
  {
    $artworks = $this->model('Artwork')->get_artworks_db($id);
    $data = $artworks;
    $this->view('edit_artwork', $data);
  }







  public function edit_artwork_db($id)
  {
    if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
      header('location:' . URLROOT . 'usercontroller/login');
    } else {
      $artwokrs_array = $this->artwokModel->get_artworks_db($id);
      $categorirow = $this->artwokModel->get_categories();
      $data = [
        'artworks'  =>  $artwokrs_array,
        'categorirow' => $categorirow
      ];
        $this->view('edit_artworks', $data);


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $_POST = filter_input_array(INPUT_POST);
          $title = $_POST['title'];
          $price = $_POST['price'];
          $category = $_POST['category'];
          $file = $_FILES['file']['name'];
          $this->artwokModel->edit_artwork_db($id, $title, $price, $category, $file);
          header('location:' . URLROOT . 'portfolioController/Became_an_artist');
        }
      }
    }



  public function delete_artwork_db($id)
  {
    $this->model('Artworks')->delete_artwork_db($id);
    header('location:' . URLROOT . 'portfolioController/Became_an_artist');
  }



  public function artworks()
  {
    $artworks = $this->artwokModel->artworks();
    $data=[
      'artworks' => $artworks
    ];
    $this->view('Artworks',$data);
  }

  public function artwork($id)
  {
    $artwork = $this->artwokModel->get_artwork_db($id);
    $data=[
      'artwork' => $artwork
    ];
    $this->view('Artwork',$data);
  }

  
}

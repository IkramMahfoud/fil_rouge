<?php

class portfolioController extends Controller
{

  public $userModel;
  public $portfolioModel;
  public $artwokModel;

  public function __construct()
  {
    $this->userModel = $this->model('User');
    $this->artwokModel = $this->model('Artworks');
    $this->portfolioModel = $this->model('Portfolio');
  }

  public function Become_an_artist()
  {
    if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
      header('location:' . URLROOT . 'usercontroller/login');
    } else {
      if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
        header('location:' . URLROOT . 'userController/login');
      } else {
        $this->view('portfolio_edit');
      }
    }
  }


  public function edit_profile()
  {
    if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
      header('location:' . URLROOT . 'usercontroller/login');
    } else {
      $id = $_SESSION['user_id'];
      $info = $this->portfolioModel->get_artist_info($id);
      $data = [
        'info' => $info
      ];
      $this->view('portfolio_edit', $data);
    }
  }


  public function Became_an_artist()
  {
    if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
      header('location:' . URLROOT . 'usercontroller/login');
    } else {
      $id = $_SESSION['user_id'];
      $info = $this->portfolioModel->get_artist_info($id);

      $artwokrs_array = $this->artwokModel->get_artworks_dbByIdUser($id);
    // creation array's artwok data:
    $data = [
      'info' => $info,
      'artworks'  =>  $artwokrs_array,
    ];
      $this->view('portfolio_main', $data);
    }
  }


  public function add_update_portfolio()
  {
    if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
      header('location:' . URLROOT . 'userController/login');
    } else {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['user_id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $description = $_POST['description'];

        //update avatar if only existe:
        $avatar = $_POST['avatar'];
        if ($avatar != '' && !empty($avatar)) {
          $this->userModel->upload_avatar($avatar, $_SESSION['user_id']);
        }

        $check_info = $this->portfolioModel->check_if_exist_portfolio($id);
        $_SESSION['role'] = 2;

        if ($check_info == false) {

          // translate a normal user to an artist:
          $this->userModel->userToArtist($id);
          $action = $this->portfolioModel->add_portfolio($id, $name, $surname, $description);

          if ($action == 1) {

            // redirect to portfolio_main:
            header('location:' . URLROOT . 'portfolioController/Became_an_artist');
          } else {
            //redirect to home
            header('location:' . URLROOT . 'portfolioController/Become_an_artist');
          }
        } else {
          $portfolio_id = $check_info->portfolio_id;

          $action = $this->portfolioModel->update_portfolio($portfolio_id, $name, $surname, $description);

          if ($action == 1) {
            // redirect to portfolio_main:
            header('location:' . URLROOT . 'portfolioController/Became_an_artist');
          } else {
            //redirect to home
            header('location:' . URLROOT . 'portfolioController/Become_an_artist');
          }
        }
      }
    }
  }


  public function portfolio_info()
  {
    if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
      header('location:' . URLROOT . 'usercontroller/login');
    } else {
      $id = $_SESSION['user_id'];
      $info = $this->portfolioModel->get_artist_info($id);
      $data = [
        'info' => $info
      ];
      $this->view('portfolio_main', $data);
    }
  }

}

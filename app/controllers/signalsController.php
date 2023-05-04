<?php

class signalsController extends Controller
{
  public $signalsModel;
  public function __construct()
  {
    $this->signalsModel = $this->model('Signals');
  }

  public function getSignals()

  {if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
    header('location:' . URLROOT . 'userController/login');
  } else {
    $signalsModel = $this->signalsModel->signals_artwork();
    $data =
      [
        'signal'    => $signalsModel
      ];
    $this->view('Admin_dashboard', $data);
  }}



  public function cancel($id)

  {
    if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
      header('location:' . URLROOT . 'userController/login');
    } else {
      $this->model('Signals')->delete($id);
      header('location:' . URLROOT . 'signalsController/getSignals');
    }
  }


  public function confirm($id_artwork, $id_signal)

  {
    if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
      header('location:' . URLROOT . 'userController/login');
    } else {
      $this->model('Artworks')->delete_artwork_db($id_artwork);
      $this->model('Signals')->delete($id_signal);
      header('location:' . URLROOT . 'signalsController/getSignals');
    }
  }


  // pour affiche le view `add_report`
  public function signal($id)
  {
    if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
      header('location:' . URLROOT . 'userController/login');
    } else {
      $data = [
        'artwork_id' => $id
      ];
      $this->view('add_report', $data);
    }
  }




  public function add_signal()
  {
    if ($_SESSION['user_id'] == 'null' || empty($_SESSION['user_id'])) {
      header('location:' . URLROOT . 'userController/login');
    } else {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_artwork = $_POST['artwork_id'];
        $report = $_POST['report'];
        $this->signalsModel->add_signal($id_artwork, $report);

        header('location:' . URLROOT . 'artworkController/artworks');
      }
    }
  }
}

<?php

class ArtistContorller extends Controller
{
    public $userModel;
    public $artistModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->artistModel = $this->model('Artists');
    }

    // login method
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST);
            $data =
                [
                    'email'    => $_POST['Email'],
                    'password' => $_POST['Password']
                ];

            $user = $this->userModel->loginArtist($data['email'], $data['password']);
            if ($user) {

                // Set The sessions
                $_SESSION['user_id'] = $user->user_id;
                $_SESSION['email'] = $user->email;
                header('location:' . URLROOT . '');
            } else {
                // Return login:
                $this->view('login', []);
            }
        } else {
            $this->view('login', []);
        }
    }



    // logout method:
    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['email']);
        session_destroy();
        $this->view('homepage');
    }


    public function confirmLogout()
    {
        $this->view('logout');
    }



    // redirect method:
    public function artists()
    {
        $this->artistModel->artists_db();
        header('location:' . URLROOT . 'artistContorller/artists_db');
    }

    // get artists and show the view
    public function artists_db()
    {
        $artists = $this->model('Artists')->artists_db();
        $data = $artists;
        $this->view('Artists', $data);
    }


   
}

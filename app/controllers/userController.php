<?php

class userController extends Controller
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
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

            $user = $this->userModel->login($data['email'], $data['password']);
            if ($user) {

                // Set The sessions
                $_SESSION['user_id'] = $user->user_id;
                $_SESSION['email'] = $user->email;
                $_SESSION['role'] = $user->role;

                // Go to home:
                if ($user->role == 0) {
                    header('location:' . URLROOT . 'home');
                } elseif ($user->role == 1) {
                    header('location:' . URLROOT . 'gallery');
                } elseif ($user->role == 2) {
                    header('location:' . URLROOT . 'home');
                }
            } else {
                // Return login:
                $this->view('login', []);
            }
        } else {
            $this->view('login', []);
        }
    }


    //register method
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST);

            $email = $_POST['Email'];
            $password = $_POST['Password'];


            $hash_pass = md5($password);


            if ($this->userModel->register($email, $hash_pass)) {
                $user = $this->userModel->login($email, $password);
                // Set The sessions
                $_SESSION['user_id'] = $user->user_id;
                $_SESSION['email'] = $user->email;

                // Go to home:
                header('location:' . URLROOT . 'home');
            } else {
                $this->view('register', []);
            }
        } else {
            $this->view('register', []);
        }
    }


    // logout method
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

    
}

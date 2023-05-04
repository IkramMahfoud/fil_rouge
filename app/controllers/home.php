<?php

class Home extends Controller
{
    public $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');;
    }


    public function index()
    {
        $data = [
        ];
        $this->view('homepage',$data);
    }

}
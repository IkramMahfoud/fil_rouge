<?php

class Home extends Controller
{
    public $userModel;
    public $galleryModel;
    public $roomTypeModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->galleryModel = $this->model('Ports');
        $this->roomTypeModel = $this->model('RoomType');
    }


    public function index()
    {
        $data = [
            "ports" => $this->galleryModel->getall(),
            "roomtypes" => $this->roomTypeModel->getall()
        ];
        $this->view('homepage',$data);
    }

}
<?php

class User
{
    public $database;
    public function __construct()
    {
        $this-> database = new Database;
    }

    //login method
    public function login($email,$password)
    {
        $this-> database-> query("SELECT * FROM user WHERE email = :email");
        $this-> database-> bind(":email",$email);
        $row = $this-> database-> fetch();
        $hash_pass=$row->pass;
        $hash_pass2 = md5($password);

        if ($hash_pass == $hash_pass2) {
           return  $row;
        } else {
            return false;
        }
    }


   //register method
    public function register($email,$password)
    {
        $avatar = '1.png';
        
        $this-> database-> query("INSERT INTO user (email,pass,avatar) VALUES (:email,:password,:avatar)");
        $this-> database-> bind(":email",$email);
        $this-> database-> bind(":password",$password);
        $this-> database-> bind(":avatar",$avatar);
        if ($this->database-> execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function userToArtist($id)
    {
        $this-> database-> query("UPDATE `user` SET `role`= 2 WHERE `user_id` = :id");
        $this-> database-> bind(":id",$id);
        if ($this->database-> execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function upload_avatar($avatar,$id)
    {
        $this-> database-> query("UPDATE `user` SET `avatar` = :avatar WHERE `user_id` = :id");
        $this-> database-> bind(":avatar",$avatar);
        $this-> database-> bind(":id",$id);
        if ($this->database-> execute()) {
            return true;
        } else {
            return false;
        }
    }


}
<?php

class Artists{

  public $database;

  public function __construct()
  {
    $this->database=new Database;
  }

  public function artists_db()
  {
    $this->database->query('SELECT * FROM `user` us , `portfolio` pf WHERE us.user_id = pf.user_id' );
    $this->database->execute();
    return $this->database->fetchAll();

  }



  // public function insert()
  // {
  //   $this->database->query('INSERT INTO `Artist` ')  }



}

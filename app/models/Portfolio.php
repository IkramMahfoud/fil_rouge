<?php

class Portfolio
{
  public $database;
  public function __construct()
  {
    $this->database = new Database;
  }

  public function add_portfolio($id, $name, $surname, $description)
  {
    $this->database->query("INSERT INTO `portfolio` (`user_id`,`name`,`surname`,`descreption`) VALUES (:id,:name,:surname,:description)");
    $this->database->bind(":id", $id);
    $this->database->bind(":name", $name);
    $this->database->bind(":surname", $surname);
    $this->database->bind(":description", $description);
    if ($this->database->execute()) {
      return 1;
    } else {
      return 0;
    }
  }

  public function update_portfolio($id, $name, $surname, $description)
  {
    $this->database->query("UPDATE `portfolio` SET`name`=:name,`surname`=:surname,`descreption`=:description WHERE `portfolio_id` = :id");
    $this->database->bind(":id", $id);
    $this->database->bind(":name", $name);
    $this->database->bind(":surname", $surname);
    $this->database->bind(":description", $description);
    if ($this->database->execute()) {
      return 1;
    } else {
      return 0;
    }
  }

  public function check_if_exist_portfolio($id)
  {
    $this->database->query("SELECT * FROM portfolio p, user u WHERE p.`user_id` = u.`user_id` AND p.`user_id` = :id");
    $this->database->bind(":id", $id);
    return $this->database->fetch();
  }

  public function get_artist_info($id)
  {
    $this->database->query("SELECT * FROM portfolio p, user u WHERE p.`user_id` = u.`user_id` AND p.`user_id` = :id");
    $this->database->bind(":id", $id);
    return $this->database->fetch();
  }
}

<?php

class Artworks{
  public $database;
  public function __construct()
  {
    $this->database=new Database;
  }

  public function get_categories()
  {
    $this->database-> query("SELECT * FROM `categories`");
    $this->database-> execute();
    return $data = $this->database->fetchAll();
  }

  public function get_artworks_db($id)
  {

    $this->database->query("SELECT * FROM `artworks` WHERE artwork_id = :id");
    $this->database->bind(":id",$id);
    $this->database->execute();
    return $this->database->fetchAll();
  }

  public function get_artwork_db($id)
  {
    $this->database->query("SELECT * FROM portfolio p, artworks ar WHERE p.user_id = ar.artist_id AND artwork_id = :id");
    $this->database->bind(":id",$id);
    $this->database->execute();
    return $this->database->fetch();
  }



  public function artworks()
  {
    $this->database->query("SELECT * FROM portfolio p, artworks ar WHERE p.user_id = ar.artist_id");
    $this->database->execute();
    return $this->database->fetchAll();
  }


  public function get_artworks_dbByIdUser($id)
  {

    $this->database->query("SELECT * FROM portfolio p, artworks ar WHERE p.user_id = ar.artist_id AND ar.artist_id = :id");
    $this->database->bind(":id",$id);
    $this->database->execute();
    return $this->database->fetchAll();
  }


  public function add_artwork_db($id,$title,$price,$category,$file)
  {

    $this->database->query("INSERT INTO `artworks` (`artist_id`,`title`,`price`,`category_id`,`image`) VALUES (:id,:title,:price,:category,:file)");
    $this->database->bind(":id" , $id);
    $this->database->bind(":title" , $title);
    $this->database->bind(":price" , $price);
    $this->database->bind(":category" , $category);
    $this->database->bind(":file" , $file);
    $this->database->execute();
  }





  public function edit_artwork_db($id, $title, $price, $category, $file)
  {
      $this->database->query('UPDATE `artworks` SET title= :title, price= :price, category_id= :category, image= :file WHERE artwork_id=:id');
      $this->database->bind(":id", $id);
      $this->database->bind(":title", $title);
      $this->database->bind(":price", $price);
      $this->database->bind(":category", $category);
      $this->database->bind(":file", $file);
      return $this->database->execute();

  }




  //DELETE QUERY:
  public function delete_artwork_db($id)
  {
          //delete query for row with artwork_id:
          $this->database->query("DELETE FROM `artworks` WHERE artwork_id = :id");
          $this->database->bind(':id',$id);
          $this->database->execute();
  }

}
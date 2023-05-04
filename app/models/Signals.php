<?php
class Signals
{

  public $DB;
  public function __construct()
  {
    $this->DB = new Database;
  }



  public function signals_artwork()
  {
    $this->DB->query(" SELECT * FROM `signal` s , `artworks` a WHERE s.artwork_id = a.artwork_id ");
    $this->DB->execute();
    return $rows = $this->DB->fetchall();
  }


  public function delete($id)
{
  $this->DB->query("DELETE FROM `signal` WHERE signal_id = :id");
  $this->DB->bind(':id', $id);
  $this->DB->execute();
}




  public function add_signal($artwork_id, $report)
{
  $this->DB->query("INSERT INTO `signal`(`descreption`,`artwork_id`) VALUES (:report,:artwork_id)");
  $this->DB->bind(':artwork_id', $artwork_id);
  $this->DB->bind(':report', $report);
  $this->DB->execute();
}

}

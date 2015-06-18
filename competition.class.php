<?php

class Competition
{
  public id;
  public title;
  public startDate;
  public details;
  public length;

  function __construct($id)
  {
    $stmt = $dbo->prepare("SELECT * FROM competition WHERE id=:id");
    $stmt->execute(array(':id'=>$id));
    $rowCount = $stmt->rowCount();
    if($rowCount > 0)
    {
      $data = $stmt->fetch(PDO::FETCH_ASSOC);
      $this->id = $id;
      $this->title = $data['title'];
      $this->startDate = $data['startDate'];
      $this->details = $data['details'];
      $this->length = $data['length'];
    }
    else
    {
     return "no compeition exists!";
    }
  }

  public function modifyCompeition($id, $title, $data, $startDate, $length)
  {
    //modify data
  }
  public function deleteCompeition($id, $title, $data, $startDate, $length)
  {
    // delete data
  }

}

?>

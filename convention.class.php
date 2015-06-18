<?php

class Convention
{
  public id;
  public title;
  public startDate;
  public details;

  function __construct($id)
  {
    $stmt = $dbo->prepare("SELECT * FROM convention WHERE id=:id");
    $stmt->execute(array(':id'=>$id));
    $rowCount = $stmt->rowCount();
    if($rowCount > 0)
    {
      $data = $stmt->fetch(PDO::FETCH_ASSOC);
      $this->id = $id;
      $this->title = $data['title'];
      $this->startDate = $data['startDate'];
      $this->details = $data['details'];
    }
    else
    {
     return "no convention exists!";
    }
  }

  public function modifyConvention($id, $title, $data, $startDate)
  {
    //modify data
  }
  public function deleteConvention($id, $title, $data, $startDate)
  {
    // delete data
  }

}

?>

<?php
$type = $_POST['type'];
$title = $_POST['CompetitionTitle'];
$data = $_POST['CompetitionDescription'];
$startDate = $_POST['CompetitionStart'];
$endDate = $_POST['CompetitionEnd'];


function addCompetition($title, $data, $time, $length)
{
	$user = "root";
	$pass = "";

	 global $db;
	 $db = new PDO("mysql:host=localhost;dbname=indiegamecentral;", $user, $pass);
	$stmt = $db->prepare("INSERT INTO competition (title,data, startDate, length) VALUES (:title, :details, :startDate, :length)");
	$rows_affected = $stmt->execute(array(':title'=> $title, ':details'=> $data, ':startDate' => $time, ':length'=>$length));
	if($rows_affected)
	{
		// success
		return true;
	}
	else
	{
		//error
		 var_dump($stmt->errorInfo());
		return false;
	}

}

function modifyCompetition($title, $data, $time, $length)
{
	$user = "root";
	$pass = "";

	 global $db;
	 $db = new PDO("mysql:host=localhost;dbname=indiegamecentral;", $user, $pass);
	$stmt = $db->prepare("UPDATE competition SET title=:title, data=:details, startDate=:startDate, length=:length");
	$rows_affected = $stmt->execute(array(':title'=>$title, ':details'=>$data, ':startDate' => $time, ':length'=>$length));
	if($rows_affected)
	{
		// success
		return true;
	}
	else
	{
		//error

		return false;
	}
}

// Check for which function
if($type == "add")
{
	if(addCompetition($title, $data, $startDate, $endDate))
	{
		echo "Competition Added";
	}
	else
	{
		echo "Error! Competition could not be added.";
	}
}
else if($type == "modify")
{
	if(modifyCompetition($title, $data, $startDate, $endDate))
	{
		echo "Competition Modified.";
	}
	else
	{
		echo "Error! Competition could not be modified.";
	}
}
?>

<?php

$type = $_POST['type'];
$title = $_POST['ConventionTitle'];
$data = $_POST['ConventionDescription'];
$StartDate = $_POST['ConventionStart'];
$EndDate = $_POST['ConventionEnd'];

function addConvention($title, $data, $Startdate, $EndDate)
{
	$user = "indiegamecentral";
	$pass = "Asdf72389adlkjp!";

	 global $db;
	 $db = new PDO("mysql:host=indiegamecentralcom.ipagemysql.com;dbname=indie_central_2015;", $user, $pass);
	$stmt = $db->prepare("INSERT INTO convention (title,details, startDate, endDate) VALUES (:title, :details, :startDate, :endDate)");
	$rows_affected = $stmt->execute(array(':title'=> $title, ':details'=> $data, ':startDate' => $Startdate, ':endDate' => $EndDate));
	if($rows_affected)
	{
		// success
		return true;
	}
	else
	{
		var_dump($stmt->errorInfo());
		//error
		return false;
	}

}

function modifyConvention($title, $data, $startDate, $endDate)
{
	$user = "root";
	$pass = "";

	 global $db;
	 $db = new PDO("mysql:host=localhost;dbname=indiegamecentral;", $user, $pass);
	$stmt = $db->prepare("UPDATE convention SET title=:title, details=:details, startDate=:startDate, endDate=:endDate");
	$rows_affected = $stmt->execute(array(':title'=>$title, ':details'=>$data, ':startDate' => $startDate, $endDate));
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

if($type == "add")
{
	if(addConvention($title, $data, $StartDate, $EndDate))
	{
		echo "Convention Added";
	}
	else
	{
		echo "Error! Convention not added.";
	}
}
else if($type == "modify")
{
	if(modifyConvention($title, $data, $StartDate, $EndDate))
	{
		echo "Convention Modified";
	}
	else
	{
		echo "Error! Not Modified.";
	}
}

?>

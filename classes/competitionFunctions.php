<?php

function addCompetition($title, $data, $time, $length)
{
	$stmt = $db->prepare(INSERT INTO competiton (title,details, startDate, length) VALUES (:title, :details, :startDate, :length));
	$rows_affected = $stmt->execute(array(':title'=> $title, ':details'=> $details, ':startDate' => $time, ':length'=>$length));
	if($rows_affected >= 0)
	{
		// success
	}
	else
	{
		//error
		return "Not saved";
	}
		
}

function addCompetition($title, $data, $time, $length)
{
	$stmt = $db->prepare("UPDATE competition SET title=:title, details=:details, startDate=:startDate, length=:length");
	$rows_affected = $stmt->execute(array(':title'=>$title, ':details'=>$details, ':startDate' => $time, ':length'=>$length));
	if($rows_affected >= 0)
	{
		// success
	}
	else
	{
		//error
		return "Not Edited";
	}
}
?>
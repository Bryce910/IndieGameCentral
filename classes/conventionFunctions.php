<?php

function addConvention($title, $data, $time)
{
	$stmt = $db->prepare(INSERT INTO conventions (title,details, startDate) VALUES (:title, :details, :startDate));
	$rows_affected = $stmt->execute(array(':title'=> $title, ':details'=> $details, ':startDate' => $time));
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

function modifyConvention($title, $data, $time)
{
	$stmt = $db->prepare("UPDATE conventions SET title=:title, details=:details, startDate=:startDate");
	$rows_affected = $stmt->execute(array(':title'=>$title, ':details'=>$details, ':startDate' => $time));
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
<?php

function verifyAuthenic()
{
	if(!isset($_SESSION['user']))
	{
		// no way!
		header("location: index.php");
	}
	else 
	{
		// do nothing... cause you are good to go!
	}
}

function loadView()
{
	
}
?>

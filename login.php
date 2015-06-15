<?php
           session_start();
function check_login($userName, $password)
{
	$stmt = $db->prepare("SELECT * FROM user WHERE userName = :user AND password = :pass");
	$stmt->execute(array(':user'=>$userName, ':pass'=>$password));
	$userValid = $stmt->rowCount();
	$user = $stmt->fetch(PDO::FETCH_OBJ);
	
	if($userValid == 1)
	{
		// set session OR cookie
		$_SESSION['user'] = $user[0]['id'];
	}
	else 
	{
		// no user... return "false";
		return "Invalid User";
	}
}
?>
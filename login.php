<?php
session_start();
include(classes/dbc.php);
function check_login($userName, $password)
{
	$stmt = $dbo->prepare("SELECT * FROM user WHERE userName = :user AND password = :pass");
	$userValid = $stmt->execute(array(':user'=>$userName, ':pass'=>$password));
	$user = $stmt->fetch(PDO::FETCH_OBJ);

	if($userValid)
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

function register_user($email, $password)
{
	//lets add some code to register user
	$stmt = $db->prepare("INSERT INTO user (email, password) VALUES (:email, :password)");
	$stmt->execute(array(':email'=> $email, ':password'=> $pasword));
	$rowCount  = $stmt->rowCount();
	if($rowCount)
	{
		// Success
		//	set session data and etc.
    return "";
	}
	else
	{
		//Failed
		return "Error, please try again!";
	}
}
?>

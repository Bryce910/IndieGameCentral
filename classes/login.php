<?php
include("/dbc.php");
session_start();
$user = "root";
$pass = "";

 $db = new PDO("mysql:host=localhost;dbname=indiegamecentral;", $user, $pass);
/* Grab Variables */
$type = $_POST['type'];

/* Function Definitions */
  function check_login($userName, $password)
  {
    global $db;
  	$stmt = $db->prepare("SELECT * FROM user WHERE email = :user AND password = :pass");
  	$userValid = $stmt->execute(array(':user'=>$userName, ':pass'=>$password));
  	$user = $stmt->fetch(PDO::FETCH_OBJ);

  	if($userValid)
  	{
  		// set session OR cookie
  		$_SESSION['user'] = $user->id;
      return true;
  	}
  	else
  	{
  		// no user... return "false";
  		return false;
  	}
  }

  function register_user($email, $password)
  {
    global $db;
  	//lets add some code to register user
  	$stmt = $db->prepare("INSERT INTO user (email, password, role, banned) VALUES (:email, :password, 'level1', 'N')");
      $isSuccess = $stmt->execute(array(':email'=> $email, ':password'=> $password));
      echo var_dump($stmt->errorInfo());
	  if($isSuccess)
 	  {
  		// Success
    //  check_login($email, $password);
  		//	set session data and etc.
      return true;
  	}
  	else
  	{
  	//	Failed
  		return false;
  	}
  }

  /* Perform Correct Function */
  if($type == "login")
  {
    $email = $_POST['LoginEmail'];
    $password = $_POST['LoginPassword'];
    if(check_login($email, $password))
    {
      echo "true";
    }
    else
    {
      echo "false";
    }

  }
  else if($type == "register")
  {
    $email = $_POST['RegisterEmail'];
    $password = $_POST['RegisterPassword'];
    if(register_user($email, $password))
    {
      echo "true";
    }
    else
    {
      echo "false";
    }
  }
?>

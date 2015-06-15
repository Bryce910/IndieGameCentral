<?php
//db connected 
require "dbc.php";
require "generalFunctions.php";
require "user.class.php";

 $user = new User($_SESSION['user']);
 
 loadView("header");
 
 if($user->role == "admin")
 {
	 loadView("admin")
 }
 else if($user->role == "level1")
 {
	 loadView("level1");
 }

loadView("footer");

?>



<?php
//db connected
require "dbc.php";
require "generalFunctions.php";
require "user.class.php";
require "convention.class.php";
require "competition.class.php";
 $user = new User($_SESSION['user']);

 loadView("header.php");

 if($user->role == "admin")
 {
	 loadView("admin")
 }
 else if($user->role == "level1")
 {
	 loadView("level1");
 }

loadView("footer.view.php");

?>

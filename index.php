<?php
//db connected 
require "dbc.php";
require "generalFunctions.php";
require "user.class.php";

 $user = new User($_SESSION['user']);
 
 loadView("header.view.php");
 
 if($user->role == "admin")
 {
	 loadView("admin.view.php")
 }
 else if($user->role == "level1")
 {
	 loadView("level1.view.php");
 }

loadView("footer.view.php");

?>



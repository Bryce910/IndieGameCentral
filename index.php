<?php
session_start();
//db connected
require "classes/dbc.php";
require "classes/generalFunctions.php";
require "classes/user.class.php";


 loadView("header");
 if(isset($_SESSION['user']))
 {
    $user = new User($_SESSION['user']);
   if($user->type == "admin")
   {
  	 loadView("admin");
   }
   else if($user->type == "level1")
   {
  	 loadView("level1");
   }
 }
 else
 {
   loadView("guest");
 }

loadView("footer");

?>

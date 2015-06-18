<?php
$user = "root";
$pass = "";

 global $db;
 $db = new PDO("mysql:host=localhost;dbname=indiegamecentral;", $user, $pass);
?>

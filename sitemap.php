<?php
session_start();
//db connected
require "classes/dbc.php";
require "classes/generalFunctions.php";
require "classes/user.class.php";
loadView("header");


?>

<body>
<style>
li {
	list-style-type: none;
}
</style>
<br><br>
<ul>
	<li>
		<h2><a href="index.php">Main Page</a></h2>
	</li>
	<li>
		<h2><a href="sitemap.php">SiteMap</a> </h2>
	</li>
	<li>
		<h2>	<a href="legal.php">Legal</a> </h2>
	</li>
	<li>
		<h2><a href="indieresource.php">Indie Resources </a> </h2>
	</li>
</li>
<ul>

</body>


<?php

loadView("footer");

?>
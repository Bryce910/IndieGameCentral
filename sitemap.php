<?php
session_start();
//db connected
require "classes/dbc.php";
require "classes/generalFunctions.php";
require "classes/user.class.php";
loadView("header");


?>

<body>

<ul>
	<li>
		<a href="index.php">Main Page</a>
	</li>
	<li>
		<a href="sitemap.php">SiteMap</a>
	</li>
	<li>
		<a href="legal.php">Legal</a>
	</li>
	<li>
		<a href="indieresource.php">Indie Resources </a>
	</li>
</li>
<ul>

</body>


<?php

loadView("footer");

?>
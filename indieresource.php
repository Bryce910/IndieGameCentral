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
	<a href="http://indiedb.com"><h2 class="title">Indiedb</h2></a>
		
	</li>
		<li>
	
	<a href="http://gamedev.net"><h2 class="title">GameDev</h2></a>
	</li>
		<li>
	
	<a href="https://www.gamedevmarket.net""><h2 class="title">Game Assets</h2></a>
	</li>
		<li>
	
	<a href="http://tigsource.com"><h2 class="title">TigSource</h2></a>
	</li>
			<li>
	
	<a href="http://indiegamer.com"><h2 class="title">IndieGamer</h2></a>
	</li>
			<li>
	
	<a href="http://pixelprospector.com"><h2 class="title">Pixel Prospector</h2></a>
	</li>
<ul>

</body>


<?php

loadView("footer");

?>
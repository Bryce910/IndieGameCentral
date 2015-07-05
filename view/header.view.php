<!DOCTYPE html>
<!-- Joystick
<div>Icons made by <a href="http://www.flaticon.com/authors/tutsplus" title="TutsPlus">TutsPlus</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
-->
<html>
<head>
<title>IndieGameCentral</title>
<meta name="description" content="Indie Game conventions and competitions">
<meta name="keywords" content="indie game, game conventions, game competitions, indie game competitions, indie game conventions, indie, games">
<meta name="author" content="RadLab - Bryce Moral">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="js/main.js"></script>
</head>
<header>
<!-- Navigation menu -->
	<nav>
		<ul>
			<li><a href="#" class="menu" id="logo"><img src="images/logo.png" alt="logo"></a>
			<?php if(isset($_SESSION['user']))
			 		{ ?>
				<li><a href="convention.php" class="menu">Conventions</a> </li>
				<li><a href="competition.php" class="menu">Competitions</a> </li>
				<li><a href="quality.php" class="menu">QA</a> </li>
				<li><a href="javascript:{}" class="menu" id="account">Account</a></li>
				<li><a href="logout.php" class="menu" id="logout">Logout</a></li>
		<?php  }
			else { ?>
				<li><a href="#conventions" class="menu">Conventions</a> </li>
				<li><a href="#competitionTitle" class="menu">Competitions</a> </li>
				<li><a href="#QA" class="menu">QA</a> </li>
				<li><a href="#about" class="menu">About</a> </li>
				<li><a href="#ex" class="menu" id="contact">Contact</a> </li>
				<a href="indieresource.php">Resources</a>
				<li><a href="javascript:{}" class="menu" id="login">Login</a></li>
				<li><a href="javascript:{}" class="menu" id="register">Register</a></li>
	<?php 	} ?>
		</ul>
	</nav>
</header>

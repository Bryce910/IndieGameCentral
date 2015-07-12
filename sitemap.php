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
table{
	margin:auto;
	display:block;
	float:left;
	width:80%;
	position: absolute;
	left: 550px;
}
td {
	border-style: solid;
	border-width: 2px;
	border-color: black;
	background-color: grey;
}
th
{
	font-size: 24px;
	font-color:black;
	background:white;
}
</style>
<br><br>
<table>
<tr>
<th>Public </th> <th>Registered </th>
</tr>
<tr>
<td>
		<h2><a href="index.php">Main Page</a></h2>
		</td>
		<td>
		<h2><a href="">Convetions</a></h2>
		</td>
		<tr>
		<td>
			<h2><a href="sitemap.php">SiteMap</a> </h2>
		</td>
		<td>
			<h2><a href="">Competitions</a></h2>
		</td>
		</tr>
		<tr>
		<td>
			<h2>	<a href="legal.php">Legal</a> </h2> </td>
		<td>
			<h2><a href="">DashBoard</a></h2>
		</td>
		</tr>
		<tr>
		<td>
			<h2><a href="indieresource.php">Indie Resources </a> </h2> </td>
		<td>
			<h2><a href="">QA</a></h2>
		</td>
</tr>
</table>

</body>


<?php

loadView("footer");

?>
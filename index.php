<!DOCTYPE HTML>
<html>
<head>
	<title>The League</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>

<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
 ?>
<body class="loading">
<div id="wrapper">
	<div id="bg"></div>
	<div id="overlay"></div>
	<div id="main">
		<header id="header">
			<a href="/"><h1>The<br>League</h1></a>
			<br>
			<form method="post" action="searched.php">
			<input class="search" type="text" name="search" placeholder="Summoner Name"/>
			<button class="btn-search" type="submit">Summon!</button>
			</form>
		</header>
		<footer id="footer">
			<span class="copyright">Created by Kyle &starf;, enjoy. :)</span>
		</footer>
	</div>
</div>
</body>
</html>
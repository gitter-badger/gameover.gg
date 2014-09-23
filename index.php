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
<!-- php includes -->
<?php require('inc/riot-api.php'); ?>
<?php include('inc/sum-search.php'); ?>
<body class="loading">
<div id="wrapper">
	<div id="bg"></div>
	<div id="overlay"></div>
	<div id="main">
		<header id="header">
			<h1>&mdash; The League &mdash;</h1>
			<br>
			<form method="post">
			<input type="text" name="search" />
			<button type="submit">Search</button>
			</form>
			<p>
				Summoner Name: <?php echo $summoner_name; ?><br>
				Summoner ID: <?php echo $summoner_id; ?><br>
				Summoner Level: <?php echo $summoner_level; ?><br>
				Summner Icon: <?php echo $summoner_icon; ?><br><br><br>
			</p>
		</header>
		<footer id="footer">
			<span class="copyright">owned by kyle littlestar, all rights reserved.</span>
		</footer>
	</div>
</div>
</body>
</html>
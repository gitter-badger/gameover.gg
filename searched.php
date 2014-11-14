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
	<div class="logo">
		<a href="/"><h1>The<br>League</h1></a>
	</div>
	<form class="dat-search" method="post">
	<input class="search" type="text" name="search" placeholder="Summoner Name"/>
	<button class="btn-search" type="submit">Search</button>
	</form>
	<div id="main2">
		<div class="smn-info">
			<img src="/database/dragontail-4.17.1/4.17.1/img/profileicon/<?php echo $summoner_icon; ?>.png" alt="">
			<h2 class="smn-name"><?php echo $summoner_name; ?></h2>
			<div class="recent-matches">
				<h3>Recent Matches:</h3>
				<div class="matches">
					<section>	
						<?php $last = count($getGame['games']) - 1; ?>
						<?php foreach ($getGame['games'] as $key => $game):
							$kda		=		$game['stats']['championsKilled'] . '/' . $game['stats']['numDeaths'] . '/' . $game['stats']['assists'];
						?>
						<div class="match">
							<div class="top-bar-info">
								<p class="gameType"><?php echo $game['gameMode']; ?></p>
								<p class="gameTime">Match Duration: &nbsp; <?php echo gmdate("H:i:s", $game['stats']['timePlayed']); ?></p>
							</div>
							<div class="match-stats">
								<div class="champ-portrait">
									<img src="/database/dragontail-4.17.1/4.17.1/img/champion/<?php echo $game['championId']; ?>.png" alt="">
									<p class="champ-lv"><span class="sm-txt">Lv</span><?php echo $game['stats']['level']; ?></p>
								</div>
								<div class="items-bought">
									<ul class="items">
										<li class="i1">
											<img src="/database/dragontail-4.17.1/4.17.1/img/item/<?php echo $game['stats']['item0']; ?>.png">
										</li>
										<li class="i2">
											<img src="/database/dragontail-4.17.1/4.17.1/img/item/<?php echo $game['stats']['item1']; ?>.png">
										</li>
										<li class="i3">
											<img src="/database/dragontail-4.17.1/4.17.1/img/item/<?php echo $game['stats']['item2']; ?>.png">
										</li>
									</ul>
									<ul class="items">
										<li class="i4">
											<img src="/database/dragontail-4.17.1/4.17.1/img/item/<?php echo $game['stats']['item3']; ?>.png">
										</li>
										<li class="i5">
											<img src="/database/dragontail-4.17.1/4.17.1/img/item/<?php echo $game['stats']['item4']; ?>.png">
										</li>
										<li class="i6">
											<img src="/database/dragontail-4.17.1/4.17.1/img/item/<?php echo $game['stats']['item5']; ?>.png">
										</li>
									</ul>
								</div>
								<div class="teams">
									<div class="team1">
										<ul>
										
										</ul>
									</div>
									<div class="team2">
										<ul>
										
										</ul>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</section>
						
					
					
				</div>
			</div>
		</div>
	</div>
	<footer id="footer">
			<span class="copyright">Created by Kyle &starf;, enjoy. :)</span>
	</footer>
</div>
</body>
</html>

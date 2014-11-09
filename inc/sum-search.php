<?php
	$riot 					= 	new riotapi('na');
	$search 				=	$_POST["search"];
?>
<?php
	$get_summoner			=	array_shift($riot->getSummonerByName($search));
	$summoner_id			=	$get_summoner['id'];
	$summoner_name			=	$get_summoner['name'];
	$summoner_level			=	$get_summoner['summonerLevel'];
	$summoner_icon			=	$get_summoner['profileIconId'];
	$getMatchHistory		=	array_shift($riot->getMatchHistory($summoner_id));
	$getGame				=	$riot->getGame($summoner_id);


?>
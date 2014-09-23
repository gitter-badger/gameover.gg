<?php
	$riot 					= 	new riotapi('na');
	$search 				=	$_POST["search"];
?>
<?php
	$get_summoner			=	array_shift($riot->getSummonerByName($search));
	$getMatchHistory		=	array_shift($riot->getMatchHistory($summoner_id));
	$summoner_id			=	$get_summoner['id'];
	$summoner_name			=	$get_summoner['name'];
	$summoner_level			=	$get_summoner['summonerLevel'];
	$summoner_icon			=	$get_summoner['profileIconId'];
	$getGame				=	$riot->getGame($summoner_id);
	$gameMode				=	$getGame['games']['0']['gameMode'];
	$gameType				=	$getGame['games']['0']['gameType'];
	$subType				=	$getGame['games']['0']['subType'];
	
	$fellow0Id				=	$getGame['games']['0']['fellowPlayers']['0']['summonerId'];
	$fellow1Id				=	$getGame['games']['0']['fellowPlayers']['1']['summonerId'];
	$fellow2Id				=	$getGame['games']['0']['fellowPlayers']['2']['summonerId'];
	$fellow3Id				=	$getGame['games']['0']['fellowPlayers']['3']['summonerId'];
	$fellow4Id				=	$getGame['games']['0']['fellowPlayers']['4']['summonerId'];
	$fellow5Id				=	$getGame['games']['0']['fellowPlayers']['5']['summonerId'];
	$fellow6Id				=	$getGame['games']['0']['fellowPlayers']['6']['summonerId'];
	$fellow7Id				=	$getGame['games']['0']['fellowPlayers']['7']['summonerId'];
	$fellow8Id				=	$getGame['games']['0']['fellowPlayers']['8']['summonerId'];

	$fellow0 				=	array_shift($riot->getSummoner($fellow0Id));
	$fellow1 				=	array_shift($riot->getSummoner($fellow1Id));
	$fellow2 				=	array_shift($riot->getSummoner($fellow2Id));
	$fellow3 				=	array_shift($riot->getSummoner($fellow3Id));
	$fellow4 				=	array_shift($riot->getSummoner($fellow4Id));
	$fellow5 				=	array_shift($riot->getSummoner($fellow5Id));
	$fellow6 				=	array_shift($riot->getSummoner($fellow6Id));
	$fellow7 				=	array_shift($riot->getSummoner($fellow7Id));
	$fellow8 				=	array_shift($riot->getSummoner($fellow8Id));
?>
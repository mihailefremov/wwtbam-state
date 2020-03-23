<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: *");

try {
	
	if (!isset($_REQUEST["ContestantPosition"])){
		echo "Contestant Position is not set!";
		return;
	} else {
		$position = $_REQUEST["ContestantPosition"];
		
		if (!is_numeric($position)){
			echo "Contestant Position is not a number!";
			return;
		}
	}
	
	$xml = new DOMDocument();
	$xml->load('fff-data/wwtbam-fff'.$position.'-play-data.xml');

	if (isset($_REQUEST["GivenAnswer"])){
		$givenanswer = $_REQUEST["GivenAnswer"];
		$nodes = $xml->getElementsByTagName('GIVENANSWER') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$givenanswer;
		}
	}

	if (isset($_REQUEST["TimeOfAnswer"])){
		$timeofanswer = $_REQUEST["TimeOfAnswer"];
		$nodes = $xml->getElementsByTagName('TIMEOFANSWER') ;
		$timeofanswer = str_replace(",",".",$timeofanswer); //zameni zapirka so tocka
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$timeofanswer;
		}
	}

	if (isset($_REQUEST["ContestantName"])){
		$contestantname = $_REQUEST["ContestantName"];
		$nodes = $xml->getElementsByTagName('CONTESTANTNAME') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$contestantname;
		}
	}

	if (isset($_REQUEST["ContestantTown"])){
		$contestanttown = $_REQUEST["ContestantTown"];
		$nodes = $xml->getElementsByTagName('CONTESTANTTOWN') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$contestanttown;
		}
	}
	
	$nodes = $xml->getElementsByTagName('UPDATETIMESTAMP') ;
	if ($nodes->length > 0) {
	   $nodes->item(0)->nodeValue=mt_rand() . "" . date("sihd") . "" . mt_rand(0,20); //microtime()
	}
	
	//re-save
	$xml->save('fff-data/wwtbam-fff'.$position.'-play-data.xml');	

	echo "FFFPlayData is saved!";
	
} catch(Exception $e) {
	echo 'Message: ' .$e->getMessage();
}

?>
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: *");

try {
	
	$xml = new DOMDocument('1.0', 'utf-8');
	$xml->appendChild($xml->createElement('root'));
	$xml->load('playstate-data/wwtbam-fffplay-state.xml');

	if (isset($_REQUEST["FFFPlayState"])){
		$fffplaystate = $_REQUEST["FFFPlayState"];
		$nodes = $xml->getElementsByTagName('FFFPLAYSTATE') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$fffplaystate;
		}
	}

	if (isset($_REQUEST["QuestionText"])){
		$questiontext = $_REQUEST["QuestionText"];
		$nodes = $xml->getElementsByTagName('QUESTIONTEXT') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$questiontext;
		}
	}

	if (isset($_REQUEST["Answer1Text"])){
		$answer1text = $_REQUEST["Answer1Text"];
		$nodes = $xml->getElementsByTagName('ANSWER1TEXT') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$answer1text;
		}
	}

	if (isset($_REQUEST["Answer2Text"])){
		$answer2text = $_REQUEST["Answer2Text"];
		$nodes = $xml->getElementsByTagName('ANSWER2TEXT') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$answer2text;
		}
	}

	if (isset($_REQUEST["Answer3Text"])){
		$answer3text = $_REQUEST["Answer3Text"];
		$nodes = $xml->getElementsByTagName('ANSWER3TEXT') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$answer3text;
		}
	}

	if (isset($_REQUEST["Answer4Text"])){
		$answer4text = $_REQUEST["Answer4Text"];
		$nodes = $xml->getElementsByTagName('ANSWER4TEXT') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$answer4text;
		}
	}
	
	$nodes = $xml->getElementsByTagName('STATEID') ;
	if ($nodes->length > 0) {
	   $nodes->item(0)->nodeValue=mt_rand() . "" . date("sihd") . "" . mt_rand(0,20); //microtime()
	}
	
	//re-save
	$xml->save('playstate-data/wwtbam-fffplay-state.xml');	

	echo "FFFPlayState is saved!";
	
} catch(Exception $e) {
	echo 'Message: ' .$e->getMessage();
}

?>
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: *");

try {
	
	$xml = new DOMDocument('1.0', 'utf-8');
	$xml->appendChild($xml->createElement('root'));
	$xml->load('wwtbam-configuration-data.xml');

	if (isset($_REQUEST["Lifeline1"])){
		$LIFELINE1 = $_REQUEST["Lifeline1"];
		$nodes = $xml->getElementsByTagName('LIFELINE1') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$LIFELINE1;
		}
	}

	if (isset($_REQUEST["Lifeline2"])){
		$LIFELINE2 = $_REQUEST["Lifeline2"];
		$nodes = $xml->getElementsByTagName('LIFELINE2') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$LIFELINE2;
		}
	}

	if (isset($_REQUEST["Lifeline3"])){
		$LIFELINE3 = $_REQUEST["Lifeline3"];
		$nodes = $xml->getElementsByTagName('LIFELINE3') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$LIFELINE3;
		}
	}

	if (isset($_REQUEST["Lifeline4"])){
		$LIFELINE4 = $_REQUEST["Lifeline4"];
		$nodes = $xml->getElementsByTagName('LIFELINE4') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$LIFELINE4;
		}
	}

	if (isset($_REQUEST["Lifeline5"])){
		$LIFELINE5 = $_REQUEST["Lifeline5"];
		$nodes = $xml->getElementsByTagName('LIFELINE5') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$LIFELINE5;
		}
	}

	
	$nodes = $xml->getElementsByTagName('STATEID') ;
	if ($nodes->length > 0) {
	   $nodes->item(0)->nodeValue=mt_rand() . "" . date("sihd") . "" . mt_rand(0,20); //microtime()
	}
	
	//re-save
	$xml->save('wwtbam-configuration-data.xml');	

	echo "Configuration is saved!";
	
} catch(Exception $e) {
	echo 'Message: ' .$e->getMessage();
}

?>
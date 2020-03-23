<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: *");

try {
	
	$xml = new DOMDocument('1.0', 'utf-8');
	$xml->appendChild($xml->createElement('root'));
	$xml->load('playstate-data/wwtbam-producerchat-state.xml');

	if (isset($_REQUEST["ProducerChatState"])){
		$producerchatstate = $_REQUEST["ProducerChatState"];
		$nodes = $xml->getElementsByTagName('PRODUCERCHATSTATE') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=htmlspecialchars($producerchatstate);
		}
	}

	if (isset($_REQUEST["ProducerChatText"])){
		$producerchattext = $_REQUEST["ProducerChatText"];
		$nodes = $xml->getElementsByTagName('PRODUCERCHATTEXT') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=htmlspecialchars($producerchattext);
		}
	}

	$nodes = $xml->getElementsByTagName('STATEID') ;
	if ($nodes->length > 0) {
	   $nodes->item(0)->nodeValue=mt_rand() . "" . date("sihd") . "" . mt_rand(0,20); //microtime()
	}
	
	//re-save
	$xml->save('playstate-data/wwtbam-producerchat-state.xml');	

	echo "ProducerChatState is saved!";
	
} catch(Exception $e) {
	echo 'Message: ' .$e->getMessage();
}

?>
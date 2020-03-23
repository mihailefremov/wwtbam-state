<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: *");

try {
    
    $messageType = "";
    
    if (!isset($_REQUEST["MessageType"])) {
        return;
    } else {
        $messageType = strtoupper($_REQUEST["MessageType"]);
    }
	
	$messageState = strtoupper($_REQUEST["State"]);
    
    $xml = new DOMDocument();
    $xml->load('playstate-data/wwtbam-onetime-messages-gameplay.xml');
    
	$laststateid=mt_rand() . "" . date("sihd") . "" . mt_rand(0, 20); //microtime();
	$xml->getElementsByTagName('STATEID')->item(0)->nodeValue = $laststateid;
	
    $nodes = $xml->getElementsByTagName($messageType);
	
    if ($nodes->length > 0) {
		$nodes->item(0)->getElementsByTagName('LASTCHANGE')->item(0)->nodeValue = $laststateid;
        $nodes->item(0)->getElementsByTagName('STATE')->item(0)->nodeValue = $messageState;
        $nodes->item(0)->getElementsByTagName('EXECUTED')->item(0)->nodeValue = "NO";		
    }
    
    //re-save
    $xml->save('playstate-data/wwtbam-onetime-messages-gameplay.xml');
    
    echo "OneTimeMessage State Is Set!";
    
}
catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}

?>
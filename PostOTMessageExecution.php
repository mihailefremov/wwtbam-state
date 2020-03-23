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
    
    //echo $messageType;    
    $xml = new DOMDocument();
    $xml->load('playstate-data/wwtbam-onetime-messages-gameplay.xml');
    
    $nodes = $xml->getElementsByTagName($messageType);
    //$nodes2 = $nodes->item(0)->getElementsByTagName('EXECUTED')->item(0)->nodeValue;
    
    if ($nodes->length > 0) {
        $nodes->item(0)->getElementsByTagName('EXECUTED')->item(0)->nodeValue = "YES";
    }
    
    //re-save
    $xml->save('playstate-data/wwtbam-onetime-messages-gameplay.xml');
    
    echo "OneTimeMessage Execution Is Set!";
    
}
catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}

?>
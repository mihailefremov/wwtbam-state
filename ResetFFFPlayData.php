<?php

$ResetEverything = "";

if (isset($_REQUEST["ResetEverything"])) {
    $ResetEverything = true;
} else {
    $ResetEverything = false;
}

for ($x = 1; $x <= 10; $x++) {
	
    try {
    
		$position = $x;
        
        $xml = new DOMDocument();
        $xml->load('fff-data/wwtbam-fff' . $position . '-play-data.xml');
        
        if ($ResetEverything) {
            $nodes = $xml->getElementsByTagName('CONTESTANTNAME');
            if ($nodes->length > 0) {
                $nodes->item(0)->nodeValue = "";
            }
            $nodes = $xml->getElementsByTagName('CONTESTANTTOWN');
            if ($nodes->length > 0) {
                $nodes->item(0)->nodeValue = "";
            }
        }
        
        $nodes = $xml->getElementsByTagName('GIVENANSWER');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = "";
        }
        
        $nodes = $xml->getElementsByTagName('TIMEOFANSWER');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = "";
        }
        
        $nodes = $xml->getElementsByTagName('UPDATETIMESTAMP');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = mt_rand() . "" . date("sihd") . "" . mt_rand(0, 20); //microtime()
        }
        
        //re-save
        $xml->save('fff-data/wwtbam-fff' . $position . '-play-data.xml');
		
    }
	
    catch (Exception $e) {
        echo $e->Message;
    }
	
}

?>
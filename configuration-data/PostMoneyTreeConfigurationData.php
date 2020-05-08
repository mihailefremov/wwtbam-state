<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: *");

try {
	
	$xml = new DOMDocument('1.0', 'utf-8');
	$xml->appendChild($xml->createElement('root'));
	$xml->load('wwtbam-configuration-data.xml');

	if (isset($_REQUEST["Q1"])){
		$Q1 = $_REQUEST["Q1"];
		$nodes = $xml->getElementsByTagName('Q1') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q1;
		}
	}

	if (isset($_REQUEST["Q2"])){
		$Q2 = $_REQUEST["Q2"];
		$nodes = $xml->getElementsByTagName('Q2') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q2;
		}
	}

	if (isset($_REQUEST["Q3"])){
		$Q3 = $_REQUEST["Q3"];
		$nodes = $xml->getElementsByTagName('Q3') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q3;
		}
	}

	if (isset($_REQUEST["Q4"])){
		$Q4 = $_REQUEST["Q4"];
		$nodes = $xml->getElementsByTagName('Q4') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q4;
		}
	}

	if (isset($_REQUEST["Q5"])){
		$Q5 = $_REQUEST["Q5"];
		$nodes = $xml->getElementsByTagName('Q5') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q5;
		}
	}

	if (isset($_REQUEST["Q6"])){
		$Q6 = $_REQUEST["Q6"];
		$nodes = $xml->getElementsByTagName('Q6') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q6;
		}
	}

	if (isset($_REQUEST["Q7"])){
		$Q7 = $_REQUEST["Q7"];
		$nodes = $xml->getElementsByTagName('Q7') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q7;
		}
	}	

	if (isset($_REQUEST["Q8"])){
		$Q8 = $_REQUEST["Q8"];
		$nodes = $xml->getElementsByTagName('Q8') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q8;
		}
	}		

	if (isset($_REQUEST["Q9"])){
		$Q9 = $_REQUEST["Q9"];
		$nodes = $xml->getElementsByTagName('Q9') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q9;
		}
	}		
	
	if (isset($_REQUEST["Q10"])){
		$Q10 = $_REQUEST["Q10"];
		$nodes = $xml->getElementsByTagName('Q10') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q10;
		}
	}
	
	if (isset($_REQUEST["Q11"])){
		$Q11 = $_REQUEST["Q11"];
		$nodes = $xml->getElementsByTagName('Q11') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q11;
		}
	}

	if (isset($_REQUEST["Q12"])){
		$Q12 = $_REQUEST["Q12"];
		$nodes = $xml->getElementsByTagName('Q12') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q12;
		}
	}

	if (isset($_REQUEST["Q13"])){
		$Q13 = $_REQUEST["Q13"];
		$nodes = $xml->getElementsByTagName('Q13') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q13;
		}
	}

	if (isset($_REQUEST["Q14"])){
		$Q14 = $_REQUEST["Q14"];
		$nodes = $xml->getElementsByTagName('Q14') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q14;
		}
	}

	if (isset($_REQUEST["Q15"])){
		$Q15 = $_REQUEST["Q15"];
		$nodes = $xml->getElementsByTagName('Q15') ;
		if ($nodes->length > 0) {
			$nodes->item(0)->nodeValue=$Q15;
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
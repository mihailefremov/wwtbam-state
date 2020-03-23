<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: *");

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

header("Content-type: text/xml");

$myfile = fopen("fff-data/wwtbam-fff".$position."-play-data.xml", "r") or die("Unable to open file!");
echo fread($myfile,filesize("fff-data/wwtbam-fff".$position."-play-data.xml"));
fclose($myfile);
?>
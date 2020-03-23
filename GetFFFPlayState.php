<?php
header("Content-type: text/xml");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: *");

$myfile = fopen("playstate-data/wwtbam-fffplay-state.xml", "r") or die("Unable to open file!");
echo fread($myfile,filesize("playstate-data/wwtbam-fffplay-state.xml"));
fclose($myfile);
?>
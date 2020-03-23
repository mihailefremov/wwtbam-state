<?php
header("Content-type: text/xml");

$myfile = fopen("playstate-data/wwtbam-onetime-messages-gameplay.xml", "r") or die("Unable to open file!");
echo fread($myfile,filesize("playstate-data/wwtbam-onetime-messages-gameplay.xml"));
fclose($myfile);
?>
<?php
header("Content-type: text/xml");

$myfile = fopen("playstate-data/wwtbam-main-gameplay-state.xml", "r") or die("Unable to open file!");
echo fread($myfile,filesize("playstate-data/wwtbam-main-gameplay-state.xml"));
fclose($myfile);
?>
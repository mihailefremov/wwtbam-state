<?php
header("Content-type: text/xml");

$myfile = fopen("playstate-data/wwtbam-last-gameplaystate-change.xml", "r") or die("Unable to open file!");
echo fread($myfile,filesize("playstate-data/wwtbam-last-gameplaystate-change.xml"));
fclose($myfile);
?>
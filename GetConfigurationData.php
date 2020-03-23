<?php
header("Content-type: text/xml");

$myfile = fopen("configuration-data/wwtbam-configuration-data.xml", "r") or die("Unable to open file!");
echo fread($myfile,filesize("configuration-data/wwtbam-configuration-data.xml"));
fclose($myfile);
?>
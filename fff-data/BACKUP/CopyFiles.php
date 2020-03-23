<?php

$fileToCopy = "wwtbam-fff1-play-data.xml";
$numberOfCopies = 10;

if (!isset($_REQUEST["FileToCopy"])) {
    echo "FileToCopy IS NOT SET <br>";
} else {
    $fileToCopy = $_REQUEST["FileToCopy"];
}

if (!isset($_REQUEST["NumberOfCopies"])) {
    echo "NumberOfCopies IS NOT SET <br>";
} else {
    $numberOfCopies = $_REQUEST["NumberOfCopies"];
}

try {
    for ($i = 1; $i <= $numberOfCopies; $i++) {
        copy($fileToCopy, "wwtbam-fff" . $i . "-play-data.xml");
    }
}
catch (Exception $e) {
    echo $e->getMessage();
}

?>
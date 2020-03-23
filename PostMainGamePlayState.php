<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: *");
try {
    $xml = new DOMDocument('1.0', 'utf-8');
    $xml->appendChild($xml->createElement('root'));
    $xml->load('playstate-data/wwtbam-main-gameplay-state.xml');
    if (isset($_REQUEST["QuestionAnswersState"])) {
        $questionanswersstate = $_REQUEST["QuestionAnswersState"];
        $nodes                = $xml->getElementsByTagName('QUESTIONANSWERSSTATE');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($questionanswersstate);
        }
    }
    if (isset($_REQUEST["QuestionText"])) {
        $questiontext = $_REQUEST["QuestionText"];
        $nodes        = $xml->getElementsByTagName('QUESTIONTEXT');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($questiontext);
        }
    }
    if (isset($_REQUEST["Answer1Text"])) {
        $answer1text = $_REQUEST["Answer1Text"];
        $nodes       = $xml->getElementsByTagName('ANSWER1TEXT');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($answer1text);
        }
    }
    if (isset($_REQUEST["Answer2Text"])) {
        $answer2text = $_REQUEST["Answer2Text"];
        $nodes       = $xml->getElementsByTagName('ANSWER2TEXT');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($answer2text);
        }
    }
    if (isset($_REQUEST["Answer3Text"])) {
        $answer3text = $_REQUEST["Answer3Text"];
        $nodes       = $xml->getElementsByTagName('ANSWER3TEXT');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($answer3text);
        }
    }
    if (isset($_REQUEST["Answer4Text"])) {
        $answer4text = $_REQUEST["Answer4Text"];
        $nodes       = $xml->getElementsByTagName('ANSWER4TEXT');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($answer4text);
        }
    }
    if (isset($_REQUEST["FinalAnswer"])) {
        $finalanswer = $_REQUEST["FinalAnswer"];
        $nodes       = $xml->getElementsByTagName('FINALANSWER');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($finalanswer);
        }
    }
    if (isset($_REQUEST["CorrectAnswer"])) {
        $correctanswer = $_REQUEST["CorrectAnswer"];
        $nodes         = $xml->getElementsByTagName('CORRECTANSWER');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($correctanswer);
        }
    }
    if (isset($_REQUEST["ExplanationState"])) {
        $explanationstate = $_REQUEST["ExplanationState"];
        $nodes            = $xml->getElementsByTagName('EXPLANATIONSTATE');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($explanationstate);
        }
    }
    if (isset($_REQUEST["ExplanationText"])) {
        $explanationtext = $_REQUEST["ExplanationText"];
        $nodes           = $xml->getElementsByTagName('EXPLANATIONTEXT');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($explanationtext);
        }
    }
    if (isset($_REQUEST["PronunciationState"])) {
        $pronunciationstate = $_REQUEST["PronunciationState"];
        $nodes              = $xml->getElementsByTagName('PRONUNCIATIONSTATE');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($pronunciationstate);
        }
    }
    if (isset($_REQUEST["PronunciationText"])) {
        $pronunciationtext = $_REQUEST["PronunciationText"];
        $nodes             = $xml->getElementsByTagName('PRONUNCIATIONTEXT');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($pronunciationtext);
        }
    }
    if (isset($_REQUEST["ActiveLifelines"])) {
        $activelifelines = $_REQUEST["ActiveLifelines"];
        $nodes           = $xml->getElementsByTagName('ACTIVELIFELINES');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($activelifelines);
        }
    }
    if (isset($_REQUEST["LifelinesState"])) {
        $lifelinesstate = $_REQUEST["LifelinesState"];
        $nodes          = $xml->getElementsByTagName('LIFELINESSTATE');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($lifelinesstate);
        }
    }
    if (isset($_REQUEST["LifelineRemind"])) {
        $lifelineremind = $_REQUEST["LifelineRemind"];
        $nodes          = $xml->getElementsByTagName('LIFELINEREMIND');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = $lifelineremind;
        }
    }
    if (isset($_REQUEST["FiftyFifty"])) {
        $fiftyfifty = $_REQUEST["FiftyFifty"];
        $nodes      = $xml->getElementsByTagName('FIFTYFIFTY');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = $fiftyfifty;
        }
    }
    if (isset($_REQUEST["Paf"])) {
        $paf   = $_REQUEST["Paf"];
        $nodes = $xml->getElementsByTagName('PAF');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = $paf;
        }
    }
    if (isset($_REQUEST["AtaState"])) {
        $atastate = $_REQUEST["AtaState"];
        $nodes    = $xml->getElementsByTagName('ATASTATE');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = $atastate;
        }
    }
    if (isset($_REQUEST["AtaPercents"])) {
        $atapercents = $_REQUEST["AtaPercents"];
        $nodes       = $xml->getElementsByTagName('ATAPERCENTS');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = $atapercents;
        }
    }
    if (isset($_REQUEST["StqState"])) {
        $stqstate = $_REQUEST["StqState"];
        $nodes    = $xml->getElementsByTagName('STQSTATE');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = $stqstate;
        }
    }
    if (isset($_REQUEST["DoubleDipState"])) {
        $doubledipstate = $_REQUEST["DoubleDipState"];
        $nodes    = $xml->getElementsByTagName('DOUBLEDIPSTATE');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = $doubledipstate;
        }
    }	
    if (isset($_REQUEST["DoubleDipFirstAnswer"])) {
        $doubledipfirstanswer = $_REQUEST["DoubleDipFirstAnswer"];
        $nodes    = $xml->getElementsByTagName('DOUBLEDIPFIRSTANSWER');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = $doubledipfirstanswer;
        }
    }		
    if (isset($_REQUEST["ContestantNameCity"])) {
        $contestantnamecity = $_REQUEST["ContestantNameCity"];
        $nodes              = $xml->getElementsByTagName('CONTESTANTNAMECITY');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($contestantnamecity);
        }
    }
    if (isset($_REQUEST["PartnerName"])) {
        $partnername = $_REQUEST["PartnerName"];
        $nodes       = $xml->getElementsByTagName('PARTNERNAME');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = htmlspecialchars($partnername);
        }
    }
    if (isset($_REQUEST["BankDropIfCorrectIfWrong"])) {
        $bankdropifcorrectifwrong = $_REQUEST["BankDropIfCorrectIfWrong"];
        $nodes                    = $xml->getElementsByTagName('BANKDROPIFCORRECTIFWRONG');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = $bankdropifcorrectifwrong;
        }
    }
    if (isset($_REQUEST["QLevel"])) {
        $qlevel = $_REQUEST["QLevel"];
        $nodes  = $xml->getElementsByTagName('QLEVEL');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = $qlevel;
        }
    }
    if (isset($_REQUEST["SecondMilestoneAt"])) {
        $secondmilestoneat = $_REQUEST["SecondMilestoneAt"];
        $nodes             = $xml->getElementsByTagName('SECONDMILESTONEAT');
        if ($nodes->length > 0) {
            $nodes->item(0)->nodeValue = $secondmilestoneat;
        }
    }

    $laststateid=mt_rand() . "" . date("sihd") . "" . mt_rand(0, 20); //microtime();
    $nodes = $xml->getElementsByTagName('STATEID');
    if ($nodes->length > 0) {
        $nodes->item(0)->nodeValue = $laststateid;
    }

    //re-save
    $xml->save('playstate-data/wwtbam-main-gameplay-state.xml');  
	
    $xmlStateId = new DOMDocument('1.0', 'utf-8');
    $xmlStateId->appendChild($xmlStateId->createElement('root'));
    $xmlStateId->load('playstate-data/wwtbam-last-gameplaystate-change.xml');
	$nodes = $xmlStateId->getElementsByTagName('STATEID');
    if ($nodes->length > 0) {
        $nodes->item(0)->nodeValue = $laststateid;
    }

    //re-save
    $xmlStateId->save('playstate-data/wwtbam-last-gameplaystate-change.xml');    

    echo "MainGamePlayState is saved!";
}
catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
?>
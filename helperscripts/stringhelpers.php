<?php
header("Content-type: text/xml");

//https://www.xponentsoftware.com/articles/removing_illegal_characters.aspx

function replaceallunicodes($subjectVal) {
	return str_replace('&\\#13;','\r\n',$subjectVal);
	//return $subjectVal;
}
?>
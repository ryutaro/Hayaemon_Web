<?php
include('./include/header.php');
if($GLOBALS['debug']) {

	$data = file_get_contents('php://input');
	$decode = json_decode($data, TRUE);
	//var_dump($decode);
	$url = $decode['csp-report']['blocked-uri'];
	$type = $decode['csp-report']['effective-directive'];
	$text = <<< EOL
	${url}
	${type}
--------------------

EOL;
	file_put_contents('./_csp_report.f55b315e6821', $text, FILE_APPEND);
}
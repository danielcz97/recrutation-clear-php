<?php

$today = date("Y-m-d");
$yearEnd = date('Y-m-d', strtotime('12/31'));
date_range("$today", "$yearEnd", "+1 day", "m/d/Y");

function date_range($first, $last, $step = '+1 day', $output_format = 'd/m/Y' ) {

	$dates = array();
	$current = strtotime($first);
	$last = strtotime($last);

	while( $current <= $last ) {

		$dates[] = date($output_format, $current);
		$current = strtotime($step, $current);
	}

	foreach($dates as $date)
	{
		echo $date."<br>";
	}
}
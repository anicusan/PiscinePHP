#!/usr/bin/php
<?php 
function epur_str($in)
{
	$arr = array_filter(explode(" ", $in));
	$str = "";
	foreach ($arr as $temp)
		$str = $str . $temp . " ";
	return (trim($str));
}
unset ($argv[0]);
$fin_arr = array();
foreach ($argv as $i)
{
	$temp_arr = array_filter(explode(" ", epur_str($i)));
	$fin_arr = array_merge($fin_arr, $temp_arr);
}
sort($fin_arr);
foreach ($fin_arr as $i)
	echo $i . "\n";
?>
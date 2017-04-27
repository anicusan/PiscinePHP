#!/usr/bin/php
<?php 
if ($argv[1])
{
	$arr = array_values(array_filter(explode(" ", $argv[1])));
	$arr[count($arr)] = $arr[0];
	unset($arr[0]);
	$fin = "";
	foreach ($arr as $i)
		$fin = $fin . $i . " ";
	echo trim($fin) . "\n";
}
?>
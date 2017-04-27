#!/usr/bin/php
<?php

function uppz($m)
{
	return '>'.strtoupper($m[1]).'<';
}

function tuppz($m)
{
	return 'title="'.strtoupper($m[1]).'"';
}

function regz($m)
{
	$m[0] = preg_replace_callback('/>(.+?)</', "uppz", $m[0]);
	$m[0] = preg_replace_callback('/title="(.+?)"/', "tuppz", $m[0]);
	return $m[0];
}

	if ($argc < 2 || !file_exists($argv[1]))
		exit();
	$read = fopen($argv[1], 'r');
	$page = "";
	while ($read && !feof($read))
		$page .= fgets($read);

	$reg1 = '/<a.*>(.+?)<\/a>/';

	$page = preg_replace_callback($reg1, "regz", $page);
	echo $page;
?>
#!/usr/bin/php
<?php
if ($argc < 3)
	exit();
$search = $argv[1];
unset($argv[0]);
unset($argv[1]);
$argv = array_reverse($argv);
foreach ($argv as $i)
{
	$temp = explode(":", $i);
	if ($temp[0] === $search)
	{
		echo $temp[1] . "\n";
		exit();
	}
}
?>
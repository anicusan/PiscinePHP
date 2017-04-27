#!/usr/bin/php
<?php
	if ($argc != 3)
		exit();
	$file = fopen($argv[1], 'r');
	$head = fgetcsv($file, 0, ';');
	$row = fgetcsv($file, 0, ';');
	$rl = array();
	while ($row)
	{
		$rl[] = $row;
		$row = fgetcsv($file, 0, ';');
	}
	$name = array();
	$row = array_search($argv[2], $head);
	foreach ($rl as $r)
	{
		$nom[$r[$row]] = $r[0];
		$prenom[$r[$row]] = $r[1];
		$mail[$r[$row]] = $r[2];
		$IP[$r[$row]] = $r[3];
		$pseudo[$r[$row]] = $r[4];
	}
	echo "Enter your command: ";
	while (($f = fgets(STDIN)) && $f != feof)
	{
		eval($f);
		echo "Enter your command: ";
	}
	echo "\n";
?>
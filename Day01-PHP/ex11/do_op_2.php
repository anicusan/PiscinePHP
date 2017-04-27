#!/usr/bin/php
<?php
	if ($argc != 2)
	{
		echo "Incorrect Parameters\n";
		exit();
	}
	$str = str_replace(" ", "", $argv[1]);
    $nb1 = intval($str);
    $op = substr(substr($str, strlen((string)$nb1)), 0, 1);
    $nb2 = substr(substr($str, strlen((string)$nb1)), 1);
    if (!is_numeric($nb1) || !is_numeric($nb2)){
        echo "Syntax Error\n";
        exit();
    }
	if ($op == "+")
		echo $nb1 + $nb2;
	else if ($op == "-")
		echo $nb1 - $nb2;
	else if ($op == "/")
	{
		if ($nb2 == 0)
        	echo "Syntax Error";
        else
			echo $nb1 / $nb2;
	}
	else if ($op == "*")
		echo $nb1 * $nb2;
	else if ($op == "%")
	{
		if ($nb2 == 0)
        	echo "Syntax Error";
        else
			echo $nb1 % $nb2;
	}
	echo "\n";
?>
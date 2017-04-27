#!/usr/bin/php
<?php
function name_compare($a, $b)
{
	return (strcmp($a[0], $b[0]));
}
	if ($argc != 2)
		exit();
	$arr = array();
	$usr = array();
    $stdin = fopen('php://stdin', 'r');
    fgets($stdin);
    while ($stdin && !feof($stdin))
    {
    	$line = explode(";", fgets($stdin));
    	if (count($line) == 4)
    	{
    		$arr[] = $line;
    		
    	}
	}
	usort($arr, "name_compare");
	if ($argv[1] === "moyenne")
	{
		$count = 0;
		$total = 0;
		foreach ($arr as $i)
		{
			if ($i[1] !== "" && $i[2] !== "moulinette")
			{
				$count++;
				$total += $i[1];
			}
		}
		if ($count)
			echo $total / $count . "\n";
		else
			echo "0\n";
	}
	else if ($argv[1] === "moyenne_user" || $argv[1] === "ecart_moulinette")
	{

	}
?>
#!/usr/bin/php
<?php
if ($argc != 2)
	exit();
date_default_timezone_set("Europe/Paris");

function check_format($str)
{
	if ((preg_match("/(^[L|l]undi|^[M|m]ardi|^[M|m]ercredi|^[J|j]eudi|^[V|v]endredi|^[S|s]amedi|^[D|d]imanche) {1}([0-9]{1,2}) {1}([J|j]anvier|[F|f][e|é]vrier|[M|m]ars|[A|a]vril|[M|m]ai|[J|j]uin|[J|j]uillet|[A|a]o[u|û]t|[S|s]eptembre|[O|o]ctobre|[N|n]ovembre|[D|d][e|é]cembre) {1}[0-9]{4} {1}[0-9]{2}:[0-9]{2}:[0-9]{2}$/", $str)) != 0)
		return (TRUE);
	return (FALSE);
}
function tmonth($str)
{
	if (preg_match("/[J|j]anvier/", $str))
		return ("Jan");
	else if (preg_match("/[F|f][e|é]vrier/", $str))
		return ("Feb");
	else if (preg_match("/[M|m]ars/", $str))
		return ("Mar");
	else if (preg_match("/[A|a]vril/", $str))
		return ("Apr");
	else if (preg_match("/[M|m]ai/", $str))
		return ("May");
	else if (preg_match("/[J|j]uin/", $str))
		return ("Jun");
	else if (preg_match("/[J|j]uillet/", $str))
		return ("Jul");
	else if (preg_match("/[A|a]o[u|û]t/", $str))
		return ("Aug");
	else if (preg_match("/[S|s]eptembre/", $str))
		return ("Sep");
	else if (preg_match("/[O|o]ctobre/", $str))
		return ("Oct");
	else if (preg_match("/[N|n]ovembre/", $str))
		return ("Nov");
	else if (preg_match("/[D|d][e|é]cembre/", $str))
		return ("Dec");
}
if (check_format($argv[1]) == FALSE)
{
	echo "Wrong Format\n";
	exit ();
}
$stm = explode(" ", $argv[1]);
echo strtotime($stm[1] . " " . tmonth($stm[2]) . " " . $stm[3] . " " . $stm[4]) . "\n";
?>
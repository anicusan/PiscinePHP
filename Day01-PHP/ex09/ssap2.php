#!/usr/bin/php
<?php
function ft_print_arr($tab)
{
	foreach ($tab as $i)
		echo $i . "\n";
}
$arr = array();
$arr_str = array();
$arr_num = array();
$arr_oth = array();
unset($argv[0]);
foreach ($argv as $i)
	$arr = array_merge($arr, array_values(array_filter(explode(" ", $i))));
foreach ($arr as $i)
{
	if (ctype_alpha($i))
		$arr_str[] = $i;
	else if (ctype_digit($i))
		$arr_num[] = $i;
	else
		$arr_oth[] = $i;
}
usort($arr_str, 'strnatcasecmp');
sort($arr_num);
usort($arr_oth, 'strnatcasecmp');
ft_print_arr($arr_str);
ft_print_arr($arr_num);
ft_print_arr($arr_oth);
?>
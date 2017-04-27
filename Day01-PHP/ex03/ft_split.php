#!/usr/bin/
<?php
function ft_split($str)
{
	$arr = array_filter(explode(' ', $str));
	if (sort($arr))
		return ($arr);
	return null;
}
?>
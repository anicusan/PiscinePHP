<?php
function ft_is_sort($tab)
{
	$temp = $tab;
	sort($temp);
	if (array_diff_assoc($tab, $temp) == NULL)
		return true;
	return false;
}
?>
<?php
function auth($login, $passwd)
{
	$exist = FALSE;
	$pass = hash('whirlpool', $passwd);
	$str = file_get_contents('../private/passwd');
	$temp = unserialize($str);
	foreach ($temp as $i)
		if ($i['login'] === $login && $i['passwd'] === $pass)
			$exist = TRUE;
	if ($exist == TRUE)
		return (TRUE);
	return (FALSE);
}
?>
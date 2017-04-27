<?php
if ($_POST['login'] != "" && $_POST['passwd'] != "")
{
	if ($_POST['submit'] == "OK")
	{
		$pass = hash('whirlpool', $_POST['passwd']);
		if (file_exists("../private") == FALSE)
			mkdir("../private", 0777, true);
		if (file_exists("../private/passwd") == FALSE)
		{
			$arr = array(array('login' => $_POST['login'], 'passwd' => $pass));
			$ser = serialize($arr);
			file_put_contents("../private/passwd", $ser);
//			echo "OK";
		}
		else
		{
			$exist = FALSE;
			$arr = file_get_contents("../private/passwd");
			$temp = unserialize($arr);
			foreach ($temp as $i)
				if ($i['login'] == $_POST['login'])
					$exist = TRUE;
		}
		if ($exist == FALSE)
		{
			$temp[] = array('login' => $_POST['login'], 'passwd' => $pass);
			$ser2 = serialize($temp);
			file_put_contents("../private/passwd", $ser2);
			echo "OK";
		}
		else
			echo "ERROR";
	}
	else
		echo "ERROR";
}
else
	echo "ERROR";
echo "\n";
?>
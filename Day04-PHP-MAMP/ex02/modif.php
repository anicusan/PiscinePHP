<?php
if ($_POST['login'] != "" && $_POST['oldpw'] != ""
	&& $_POST['newpw'] != "" && $_POST['submit'] == "OK")
{
		$pass = hash('whirlpool', $_POST['oldpw']);
		if (file_exists("../private") == FALSE)
			echo "ERROR";
		else if (file_exists("../private/passwd") == FALSE)
			echo "ERROR";
		else
		{
			$exist = FALSE;
			$arr = file_get_contents("../private/passwd");
			$temp = unserialize($arr);
			foreach ($temp as $key => $i)
				if ($i['login'] == $_POST['login'])
				{
					$exist = TRUE;
					$usrkey = $key;
				}
			if ($exist == TRUE)
			{
				$exist = TRUE;
				if ($pass != $temp[$usrkey]['passwd'])
					echo "ERROR";
				else
				{
					$temp[$usrkey]['passwd'] = hash('whirlpool', $_POST['newpw']);
					$ser2 = serialize($temp);
					file_put_contents("../private/passwd", $ser2);
					echo "OK";
				}
			}
			else
				echo "ERROR";
		}
}
else
	echo "ERROR";
echo "\n";
?>
#!/usr/bin/php
<?php
if ($argc > 1)
	echo trim(preg_replace("/[ \t]{2,}/", ' ', $argv[1])) . "\n";
?>
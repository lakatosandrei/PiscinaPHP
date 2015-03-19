#!/usr/bin/php
<?php
	for ($i = 0;$i < 1000; $i++)
	{
		if ($i > 0 && $i % 100 == 0) {
			echo "\n";
		}
		echo "X";
	}
	echo "\n"
?>

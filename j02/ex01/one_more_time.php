#!/usr/bin/php
<?php
	function ft_split ($string) {
		$array = array();
		$mat = explode(" ", $string);
		foreach ($mat as &$word) {
			if ($word != "")
				array_push($array, $word);
		}
		return ($array);
	}
	if ($argc >= 2) {
		setlocale(LC_ALL, 'fr_FR'); 
		$format = '%D %d $M %y %h:%m:%s';
		$strf = strftime($format);
		print_r($strf);
		print_r(strptime($strf, $format));
		echo date('l jS \of F Y h:i:s A');
	}
?>

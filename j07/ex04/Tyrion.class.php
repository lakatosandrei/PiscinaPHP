<?php
	class	Tyrion extends Lannister {
		public	function	sleepWith( $with ) {
			if( get_class($with) == "Jaime" )
				print "Not even if i'm drunk !" . PHP_EOL;
			elseif( get_class($with) == "Sansa" )
				print "Let's do this." . PHP_EOL;
			elseif( get_class($with) == "Cersei" )
				print "Not even if i'm drunk !" . PHP_EOL;
		}
	}
?>

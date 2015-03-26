<?php
	class	Jaime extends Lannister {
		public	function	sleepWith( $with ) {
			if( get_class($with) == "Tyrion" )
				print "Not even if i'm drunk !" . PHP_EOL;
			elseif( get_class($with) == "Sansa" )
				print "Let's do this." . PHP_EOL;
			elseif( get_class($with) == "Cersei" )
				print "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
		}
	}
?>

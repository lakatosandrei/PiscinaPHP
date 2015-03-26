<?php
	class Targaryen {

		public	function	__construct() {
			return ;
		}

		public	function	__destruct() {
			return ;
		}

		public	function	getBurned() {
			if( static::resistsFire() == True )
				return "merges naked but unharmed";
			else
				return "burns alive";
		}

		public	function	__call($name, $arguments) {
			return False;
		}
	}
?>

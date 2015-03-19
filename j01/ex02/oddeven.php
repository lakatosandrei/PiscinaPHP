#!/usr/bin/php
<?php
	do {
		echo "Entrez un nombre: ";
		$pruna = fgets(STDIN);
		$pruna = trim($pruna);
		if (!feof(STDIN))
		{
			if (!is_numeric(trim($pruna)))
				echo "'$pruna' n'est pais un chiffre\n";
			else if ($pruna % 2 == 0)
				echo "Le chiffre $pruna est Pair\n";
			else
				echo "Le chiffre $pruna est Impair\n";
		}
		else
			echo "^D\n";
	} while(!feof(STDIN));
?>

<?php
	// devolve se o numero eh primo ou nao
	function primo ($num) {
		// caso o número seja menor que 1
		if ($num <= 1) {
			echo "$num não é primo\n";
			return false;
		}
		
		// se existir algum divisor não é primo
		for ($i = 2; $i < $num; $i++) {
			if ( ($num % $i) == 0) {
				echo "$num não é primo\n";
				return false;
			}
		}
		
		// é primo
		echo "$num é primo\n";
		return true;
	}
?>

<?php
	// calcula o modulo de um numero
	function modulo ($num) {
		if ($num < 0) {
			return $num * -1;
		}
		
		return $num;
	}
	
	// verifica se o triangulo eh possivel
	function triangulo ($a, $b, $c) {
		if ( !(($a > modulo ($b - $c)) && ($a < ($b + $c))) ) {
			echo "Não é um triângulo possível\n";
			return false;
		}

		if ( !(($b > modulo ($c - $a)) && ($b < ($c + $a))) ) {
			echo "Não é um triângulo possível\n";
			return false;
		}

		if ( !(($c > modulo ($a - $b)) && ($c < ($b + $a))) ) {
			echo "Não é um triângulo possível\n";
			return false;
		}

		echo "É um triângulo possível\n";
		return true;
	}
?>

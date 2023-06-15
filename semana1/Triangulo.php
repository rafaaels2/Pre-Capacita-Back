<?php
	function modulo (int $num): int {
		if ($num < 0) {
			return $num * -1;
		
		return $num;
	}
	
	function Triangulo (int $a, int $b, int $c): bool {
		if ( !(($a > modulo ($b - $c)) && ($a > ($b + $c))) ) {
			echo "Não é um triângulo válido";
			return false;
		}
	}
?>

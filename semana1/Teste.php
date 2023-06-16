<?php
	require "Primo.php";
	require "Triangulo.php";
	require "OitoLetras.php";
	require "ArrayQuadrado.php";
	require "DiasDaSemana.php";
	
	$numeros = [1, 2, 3, 4, 5];
	$vetorTam = count ($numeros, 0);
	$pokemons = [
		'Bulbasaur',
		'Charizard',
		'Pikachu',
		'Squirtle',
		'Jigglypuff',
		'Mewtwo',
		'Gyarados',
		'Eevee',
		'Snorlax',
		'Mew',
		'Articuno',
		'Zapdos',
		'Moltres',
		'Dragonite',
		'Mewtwo',
		'Mew',
		'Raikou',
		'Entei',
		'Suicune',
		'Lugia',
		'Ho-Oh',
		'Celebi',
		'Regirock',
		'Regice',
		'Registeel',
		'Latias',
		'Latios',
		'Kyogre',
		'Groudon',
		'Rayquaza',
	];

	// ex1
	echo "# Verifica se um número é primo\n";
	for ($i = 0; $i < $vetorTam; $i++) {
		primo ($numeros[$i]);
	} 
	echo"\n\n";
	
	// ex2 
	echo "# Triângulo válido\n";
	triangulo (5, 10, 9);
	echo"\n\n";

	// ex3
	echo "# String de 8 letras\n";
	oitoLetras ($pokemons);
	echo"\n\n";

	// ex4
	echo "# Dias da Semana\n";
	diasDaSemana (3);
	echo"\n\n";

	// ex5
	echo "# Array ao quadrado\n";
	arrayQuadrado ($numeros);
	for ($i = 0; $i < $vetorTam; $i++) {
		echo "$numeros[$i]\n";
	}
?>

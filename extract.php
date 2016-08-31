<?php

$nome = "Pedro Paulo";
$sobrenome = " Silva Amaral";

function imprimir()
{
	$variaveis = [
		"nome" 		=> "TreinaWeb",
		"sobrenome" => "Cursos"
	];

	extract($variaveis);
}

imprimir();

echo $nome . $sobrenome;

echo "<hr>";
echo "<hr>";

$variaveis2 = [
		"nome" => "Pedro",
		"sobrenome" => "Amaral",
		"empresa" => [
			"nome" => "Treina Web",
			"Cursos" => "Cursos"
		],
];
extract($variaveis2);

//Imprime o resultado
echo $empresa["nome"];
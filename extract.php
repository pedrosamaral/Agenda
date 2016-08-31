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
<?php

header("Content-Type: text/html; charset=utf-8");

require_once 'library/AtributosDinamicos.php'; 
require_once 'library/MetodosDinamico.php'; 

//registra funções de autoloads
spl_autoload_register();

$atributos = new AtributosDinamicos();

$atributos->nome = 'Pedro';
$atributos->sobrenome = 'Amaral';
$atributos->telefone = '21 984375775';

echo "{$atributos->nome} {$atributos->sobrenome} {$atributos->telefone}";

echo '<hr>';

$metodos = new MetodosDinamicos();

$metodos->setNome('Paulo');
$metodos->setSobrenome('Silva');

echo "{$metodos->getNome()} {$metodos->getSobrenome()}";



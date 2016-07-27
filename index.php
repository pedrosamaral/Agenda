<?php

header("Content-Type: text/html; charset=utf-8");

require_once 'library/AtributosDinamicos.php'; 
require_once 'library/MetodosDinamico.php'; 

//Nomenclatura Pear - Pasta do projeto - vasculha
set_include_path(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library' . PATH_SEPARATOR . get_include_path());

//registra funções de autoloads
require_once 'Autoloader.php';



$loader = new Autoloader();
//$loader->diretorios = array('library');
$loader->register();

$atributos = new AtributosDinamicos();

$atributos->nome = 'Pedro';
$atributos->sobrenome = 'Amaral';
$atributos->telefone = '21 984375775';

echo "{$atributos->nome} {$atributos->sobrenome} {$atributos->telefone}";

echo '<hr>';

$metodos = new MetodosDinamicos();

$metodos->setNome('Paulo');
$metodos->setSobrenome('Amaral');

echo "{$metodos->getNome()} {$metodos->getSobrenome()}";
//===========        Alguns Testes            =================
echo '<hr>';

$dados = ["Pedro","24"];

echo "Nome: " . $dados[0] . "<br>";
echo "Idade: " . $dados[1] . "<br>";

echo '<hr>';

//Array associativo que usa o =>
$dados2 = [
    "nome" => "Pedro",
    "idade" => "24"
];

echo "Nome: " . $dados2["nome"] . "<br>";
echo "Idade: " . $dados2["idade"];

echo '<hr>';

$dados3 = [
    "nome" => "Pedro",
    "idade" => "24"
];

foreach ($dados3 as $chave => $valor){
    echo $chave . ":" . $valor . "<br>";
}
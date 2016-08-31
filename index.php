<?php

header("Content-Type: text/html; charset=utf-8");

//require_once 'library/AtributosDinamicos.php'; 
//require_once 'library/MetodosDinamico.php'; 

//Nomenclatura Pear - Pasta do projeto - vasculha
set_include_path(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library' . PATH_SEPARATOR . get_include_path());

//registra funções de autoloads
require_once 'Autoloader.php';


$loader = new Autoloader();
$loader->register();

//Posso também separar por virgula(,)
use TreinaWeb\AtributosDinamicos;
use TreinaWeb\MetodosDinamicos;

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

echo '<hr>';

$controller = new TreinaWeb\controller\Action();

echo '<hr>';

$var = "algumacoisa";
$$var = "Treina Web";

echo $algumacoisa;

echo '<hr>';

//O array dos dados
$dados = [
			'nome' 		=> 'Pedro Amaral',
			'email' 	=> 'pedrosamaral@outlook.com',
			'telefone' 	=> '(21) 98437-5775',
			'site' 		=> 'http://www.treinaweb.com.br'
			];


//Definimos as propriedades do objeto contato
$contato->nome = $dados["nome"];
$contato->email = $dados["email"];
$contato->telefone = $dados["telefone"];
$contato->site = $dados["site"];

//Criamos um objeto generico
$contato = new stdClass();

foreach ($dados as $chave => $valor) {
	//criar a propriedade
	$contato->$chave = $valor
}

//Impressão do projeto
print_r($contato);
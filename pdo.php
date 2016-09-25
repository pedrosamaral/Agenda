<?php

// Tenta estabelecer a conexão
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=agenda;charset=utf8', 'root', '');
}
catch(PDOException $e)
{
    die("Não foi possível estabelecer a conexão com o banco de dados.");
}

// Prepara a Query
$sth = $pdo->prepare("SELECT * FROM agenda");

// Executa a consulta
$sth->execute();

// Retorno do array associativo chave=>valor
$data = $sth->fetchAll(PDO::FETCH_ASSOC);

//Estou pegando somento o nome da tabela.
foreach ($data as $contato) {
    echo $contato["nome"]. "<br>";
}

//// Imprimindo o Array retornado
//print_r($data);
//print_r($data);
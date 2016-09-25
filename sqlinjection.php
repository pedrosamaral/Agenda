<?php

//Tenta fazer a conexão com o banco de dados
try {
    $pdo = new PDO('mysql:host=localhost;dbname=agenda;charset=utf8', 'root', '');
} catch (Exception $ex) {
    die("Não foi possivel se conectar ao banco. Verifique a sua conexão com o banco de dados");
}

//Recebe o dado
/* @var $id type */
$id = $_GET["id"];

$sth = $pdo->prepare("SELECT * FROM agenda WHERE id= {$id}");

//Executa a query
$sth->execute();

//Retorna o valor 
$data = $sth->fetchAll(PDO::FETCH_ASSOC);

print_r($data);


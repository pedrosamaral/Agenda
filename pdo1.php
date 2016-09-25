<?php

//Tentando a conexão
try {
    $pdo = new PDO('mysql:host=localhost;dbname=agenda;charset=utf8', 'root', '');
} catch (Exception $ex) {
    die("Não foi possivel se conectar ao banco. Verifique a sua conexão com o banco de dados");
}

//Preparando a conexão
$sth = $pdo->prepare('SELECT * FROM agenda WHERE id= :id');

//Definindo o valor do id para substituir a string :id
$sth->bindValue(':id',3, PDO::PARAM_INT);

//Executando a query
$sth->execute();

//Retorna o valor
$data = $sth->fetch(PDO::FETCH_ASSOC);

//Imprimindo os valore
print_r($data);


<?php

// O array dos dados
$dados = [
            'nome' => 'TreinaWeb',
            'email' => 'treinaweb@treinaweb.com.br',
            'telefone' => '99-9999-9999',
            'site' => 'http://www.treinaweb.com.br'
        ];

// Criamos um objeto genérico
//$contato = new stdClass();

// Definimos as propriedades do objeto contato, de forma dinâmica
foreach( $dados as $chave => $valor )
{
    // Cria a propriedade
    // Criar a variavel dinamica com o nome da respectiva chave array
    $$chave = $valor;
}

// Acessa as variaveis dinamicamente
echo $nome . "<br>";
echo $email . "<br>";
echo $telefone . "<br>";
echo $site;

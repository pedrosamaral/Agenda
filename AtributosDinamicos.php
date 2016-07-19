<?php

class AtributosDinamicos 
{
    protected $data = [];
    
    public $telefone = '333 333 333 333';

    public function __set($nome, $valor) 
    {
        $this->data[$nome] = $valor;
    }
    
    public function __get($nome) 
    {
        if (isset($this->data[$nome]))
        {
            return $this->data[$nome];
        }
    }
}


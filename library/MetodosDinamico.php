<?php

class MetodosDinamicos
{
    protected $data = [];
    
    public function __call($nome, $argumentos) 
    {
        $prefix = substr($nome, 0, 3);
        $sufix = substr($nome, 2);
        
        if ($prefix == 'set')
        {
            $this->data[$sufix] = current($argumentos);
        }
        
        if ($prefix == 'get') 
        {
            if(isset($this->data[$sufix]))
            {
                return $this->data[$sufix];
            }
        }
        
    }
    
    public function getNome()
    {
        return 'Pedro Paulo Silva';
    }
}
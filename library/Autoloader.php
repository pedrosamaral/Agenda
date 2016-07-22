<?php

class Autoloader
{
    //diretorios = pastas
    public $diretorios = [];
    
    public function register()
    {
        spl_autoload_register(array($this,'loader'));
    }
    
    //toda vez que ele percorrer pela class
    private function loader($class)
    {
        
    }
}
<?php

class Autoloader
{
    //diretorios = pastas
    public $diretorios = [];
    
    public function register()
    {
        //Metodo que eu quero chamar - O proprio objeto
        spl_autoload_register(array($this,'loader'));
    }
    
    //toda vez que ele percorrer pela class
    private function loader($className)
    {
        $class = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
        
        if(!empty($this->diretorios))
        {
            foreach ($this->diretorios as $diretorio){
                $classPath = rtrim($diretorio, '/') . DIRECTORY_SEPARATOR . $class;
                if (file_exists($classPath)){}
            }
        }
    }
}
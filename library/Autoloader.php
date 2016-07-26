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
        //Separação de diretorio substituindo _
        $class = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
        
        if(!empty($this->diretorios))
        {
            //Vasculha o diretorio
            foreach ($this->diretorios as $diretorio){
                
                //Carregando o arquivo
                $classPath = rtrim($diretorio, '/') . DIRECTORY_SEPARATOR . $class;
                
                //Verifica se o arquivo existe dentro desse diretorio
                if (file_exists($classPath)){
                    return include_once $classPath;
                }
            }
        }
        if (file_exists($class)){
            return include_once $class;
        }
    }
}
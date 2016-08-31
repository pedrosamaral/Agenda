<?php

namespace TreinaWeb;

class Controller
{
    public function __construct(){
        echo "Controller";
        fopen('<br>Fopen!<br>');
        //\fopen();
    }
}

function fopen($nome)
{
	echo $nome;
}
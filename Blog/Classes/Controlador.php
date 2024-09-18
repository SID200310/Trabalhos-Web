<?php

namespace Blog\Classes;

class Controlador
{


    #pagina inicial
    function inicial()
    {
        #definir qual a pagina
        $page = 'inicial';

        #incorporar o template
        require 'template/template1.php';
    }
}

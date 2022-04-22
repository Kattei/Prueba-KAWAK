<?php

spl_autoload_register(function ($nombre_clase) {
    if(file_exists(DIRECCION."/includes/".$nombre_clase . '.php')){
        include DIRECCION."/includes/".$nombre_clase . '.php';
    }else{
        include DIRECCION."/includes/clases/".$nombre_clase . '.php';
    }
    
    
});
<?php 

//cargamos librerias
require 'configuracion/configurar.php';

require_once 'Hallpers/Url_hallpers.php';

//require 'librerias/baseDatos.php';
//require 'librerias/controlador.php';
//require 'librerias/core.php';

//autoload php

spl_autoload_register(function($nombreClase){
    
    require_once 'librerias/'.$nombreClase.'.php';

});




 ?>
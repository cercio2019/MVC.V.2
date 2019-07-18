<?php 

 // clase controlador principal es la encargada de cargar los modelos y las vistas 
  
 class Controlador
 {
 	public function modelo($modelo)
 	{
 		//cargamos 
 		require_once '../app/modelos/'.$modelo.'.php';

 		//instanciamos el modelo

 		return new $modelo();
 	}

 	public function vista($vista, $datos=[])
 	{
 		//chequar si el archivo vista existe
 		if (file_exists('../app/vistas/'.$vista.'.php')) {
 			require_once '../app/vistas/'.$vista.'.php';

 		}else{

 			//si el archivo no existe
 			die('la vista no existe ');
 		}
 	}
 }

 ?>
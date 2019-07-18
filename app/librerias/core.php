<?php 

/*
mapear la url ingresada en el navegador
1-controlador
2-metodo
3-parametro
ejemplo: /articulo/actualizar/4
*/
class Core
{

   protected $controladorActual = 'paginas';
   protected $metodoActual = 'index';
   protected $parametros = [];
	
	public function __construct()
	{
		//print_r($this->geturl());
		$url = $this->geturl();
         
         //buscar el controlador si este existe
		if (file_exists('../app/controladores/'.$url[0].'.php')) {
			
			//si existe el controlador se setea por defecto
			$this->controladorActual = $url[0];
			//unset indice
			unset($url[0]);
		}

		// requerir el controlador
		require_once '../app/controladores/'.$this->controladorActual.'.php';
		$this->controladorActual= new $this->controladorActual;

		//chequear la segunda parte de la url que seria el metodo
        if (isset($url[1])) {
        	if (method_exists($this->controladorActual, $url[1])) {
        	//chequeamos el metodo
        	$this->metodoActual = $url[1];
        	//unset indice
			unset($url[1]);
           }
        }

        //echo $this->metodoActual;

        //obtner los parametros
        $this->parametros = $url ? array_values($url) : [];

        //llamar callback con parametro actual
        call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
	}
	
   public function geturl()
   {
   	  // echo $_GET['url'];

   	if (isset($_GET['url'])) {
   		$url= rtrim($_GET['url'], '/');
   		$url= filter_var($url, FILTER_SANITIZE_URL);
   		$url= explode('/', $url);
   		return $url;
   	}
   }

}

 ?>
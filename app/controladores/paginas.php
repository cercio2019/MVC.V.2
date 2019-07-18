<?php 
 class Paginas extends Controlador
 {
 	
 	function __construct()
 	{
 		$this->usuarioModelo = $this->modelo('usuario');
 	}

 	public function index()
 	{
       //obtener usuarios
 		$usuarios=$this->usuarioModelo->obtenerUsuario();

 		$datos=[
          'usuarios'=> $usuarios
 		];

 		$this->vista('paginas/inicio', $datos);
 	}

 	public function agregar()
 	{       
 		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 			$datos=[	
          'nombre' => trim($_POST['nombre']),
          'email' => trim($_POST['email']),
          'telefono' => trim($_POST['telefono']),
       ];
       if ($this->usuarioModelo->agregarUsuario($datos)) {
       	Redireccionar('/paginas');
       }else{
       	die('Algo salio mal');
       }
 		}else{

 		  $datos=[
          'nombre' => '',
          'email' => '',
          'telefono' => ''
       ];
       $this->vista('paginas/agregar', $datos );

 		}
    }

    public function editar($id)
    {
    	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 			$datos=[
 			'id'=> $id,	
          'nombre' => trim($_POST['nombre']),
          'email' => trim($_POST['email']),
          'telefono' => trim($_POST['telefono']),
       ];
       if ($this->usuarioModelo->actualizarUsuario($datos)) {
       	Redireccionar('/paginas');
       }else{
       	die('Algo salio mal');
       }

 		}else{
            $usuario= $this->usuarioModelo->obtenerUsuarioId($id);
 
 		  $datos=[
 		  	'id'=> $usuario->id,
          'nombre' => $usuario->nombre,
          'email' => $usuario->email,
          'telefono' => $usuario->telefono
       ];

       $this->vista('paginas/editar', $datos );
 		}
    }

     public function borrar($id)
    {
       $usuario= $this->usuarioModelo->obtenerUsuarioId($id);
 		  $datos=[
 		  'id'=> $usuario->id,
          'nombre' => $usuario->nombre,
          'email' => $usuario->email,
          'telefono' => $usuario->telefono
       ];

    	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 			$datos=[
 			'id'=> $id	          
       ];
       if ($this->usuarioModelo->borrarUsuario($datos)) {
       	Redireccionar('/paginas');
       }else{
       	die('Algo salio mal');
       }
 	}           
       $this->vista('paginas/borrar', $datos );
    }
}
?>
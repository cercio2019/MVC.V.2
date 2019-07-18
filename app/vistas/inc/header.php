<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/css/bootstrap.css">
	<title><?php echo NOMBRESITIO; ?></title>
</head>
<body>

<div class="container-fluid bg-dark">
	<div class="row">
	<div class="col-12  bg-dark text-white">
           <h1 class="p-1 "><?php echo NOMBRESITIO; ?></h1>
	</div>
</div>
</div>

<div class="container-fluid">
	<div class="row">
      <div class="col-2 bg-dark" style="height: 660px;">
	    <div id="acordeon" class="mt-5">
			<div class="card ">
				<a href="#uno" class="btn bg-dark text-white" data-toggle="collapse" data-parent="#acordeon">registro</a>
				<div class="collapse" id="uno">
					<a href="paginas/agregar" class="list-group-item bg-dark text-white">Insertar</a>
					<a href="paginas/agregar" class="list-group-item bg-dark text-white">Modificar</a>					
					<a href="paginas/agregar" class="list-group-item bg-dark text-white">Eliminar</a>					
				</div>
			</div>
            
			<div class="card ">
				<a href="#dos" class="btn bg-dark text-white" data-toggle="collapse" data-parent="#acordeon">usuarios</a>
				<div class="collapse" id="dos">
					<a href="paginas/agregar" class="list-group-item bg-dark text-white">Insertar</a>
					<a href="paginas/agregar" class="list-group-item bg-dark text-white">Modificar</a>					
					<a href="paginas/agregar" class="list-group-item bg-dark text-white">Eliminar</a>					
				</div>
			</div>
		</div>     
   </div>		
	



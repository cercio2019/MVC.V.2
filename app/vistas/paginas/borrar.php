<?php require RUTA_APP.'/vistas/inc/header.php'; ?>
<div class="col-10">
<h1 class="text-center mt-2">ELIMINAR USUARIO</h1>
<br>
<form action="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $datos['id']; ?>" method="POST">
	<div class="form-group">
		<label for="nombre">Nombre:<sup>*</sup></label>
		<input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre']; ?>">
	</div>
	<div class="form-group">
		<label for="email">Email:<sup>*</sup></label>
		<input type="email" name="email" class="form-control form-control-lg" value="<?php echo $datos['email']; ?>">
	</div>
	<div class="form-group">
		<label for="telefono">Telefono:<sup>*</sup></label>
		<input type="text" name="telefono" class="form-control form-control-lg" value="<?php echo $datos['telefono']; ?>">
	</div>
	<input type="submit" class="btn btn-dark" value="eliminar usuario">

</form>
</div>
<?php require RUTA_APP.'/vistas/inc/footer.php'; ?>
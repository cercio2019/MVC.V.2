<?php require RUTA_APP.'/vistas/inc/header.php'; ?>
<div class="col-10">
<h1 class="text-center mt-2">REGISTRAR USUARIOS</h1>
<br>
<form action="<?php echo RUTA_URL; ?>/paginas/agregar" method="POST">
	<div class="form-group">
		<label for="nombre">Nombre:<sup>*</sup></label>
		<input type="text" name="nombre" class="form-control form-control-lg">
	</div>
	<div class="form-group">
		<label for="email">Email:<sup>*</sup></label>
		<input type="email" name="email" class="form-control form-control-lg">
	</div>
	<div class="form-group">
		<label for="telefono">Telefono:<sup>*</sup></label>
		<input type="text" name="telefono" class="form-control form-control-lg">
	</div>
	<input type="submit" class="btn btn-dark" value="registrar usuario">

</form>
</div>
<?php require RUTA_APP.'/vistas/inc/footer.php'; ?>
<?php require RUTA_APP.'/vistas/inc/header.php'; ?>
<div class="col-10">
<h1 class="text-center mt-2">pagina de inicio</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>EMAIL</th>
			<th>TELEFONO</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
        <?php foreach ($datos['usuarios'] as $usuarios): ?>
		<tr>
			<td><?php echo $usuarios->id; ?></td>
			<td><?php echo $usuarios->nombre; ?></td>
			<td><?php echo $usuarios->email; ?></td>
			<td><?php echo $usuarios->telefono; ?></td>
			<td><a href="<?php echo RUTA_URL; ?>/paginas/editar/<?php echo $usuarios->id; ?>" class="btn btn-primary">editar</a></td>
			<td><a href="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $usuarios->id; ?>"  class="btn btn-danger">eliminar</a></td>
		</tr>
        <?php endforeach; ?>
	</tbody>

</table>

</div>
<?php require RUTA_APP.'/vistas/inc/footer.php'; ?>
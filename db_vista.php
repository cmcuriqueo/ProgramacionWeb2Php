<?php require __DIR__ . '/header.php';?>

<?php if (!isset($control)): ?>
    <h2>ERROR de ACCESO</h2>
    <?php die(); ?>
<?php endif; ?>
<div class="container">
	<div class="row-flow">
	<h1>Clientes mayores de <?php echo $edad_cliente; ?> años </h1>
	  	<div class="col-sm-6">
			<div class="table-responsive">
				<table class="table">
					<tr>
		  				<td><strong>Apellido</strong></td>
		  				<td><strong>Nombre</strong></td>
		  				<td><strong>Edad</strong></td>
		  			</tr>
					<?php foreach ($results as $fila): ?>
						<tr>
							<td><?php echo $fila['apellido']; ?></td>
							<td><?php echo $fila['nombre']; ?></td>
							<td><?php echo $fila['edad']; ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</div>
<?php require __DIR__ . '/footer.php';
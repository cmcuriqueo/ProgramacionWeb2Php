<?php if (!isset($control)): ?>
    <h2>ERROR de ACCESO</h2>
    <?php die(); ?>
<?php endif; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require __DIR__ . '/header.php'; ?>
<div class="container">
	<p class="text-center">
	    <div class="row">
	        <div class="col-xs-6 col-md-4">
	            <p>Nombre : <?php echo $nombre; ?></p>
	            <p>Edad : <?php echo $edad; ?></p>
	            <p>Localidad : <?php echo $localidad_select; ?></p>
	        </div>
	    </div>
	    <div class="row">
	    	<a class="btn btn-default" href="index.php">Formulario</a>
	    </div>
	</p>
</div>
<?php
require __DIR__ . '/footer.php';

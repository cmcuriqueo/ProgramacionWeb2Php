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
    <div class="row-flow">
        <div class="span6">

            <p>Nombre ingresado <?php echo $nombre; ?></p>
            <p>Edad ingresada <?php echo $edad; ?></p>
            <p>Localidad ingresada <?php echo $localidad_select; ?></p>
            
        </div>
    </div>
</div>
<?php
require __DIR__ . '/footer.php';

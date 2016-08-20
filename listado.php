<?php
    
    //declaracion de variables
    $control = true;//acceso ordenado
    $nombre = $_POST["nombre"];
    $edad   = (int)$_POST["edad"];
    $localidad_select = $_POST['localidad'];
    
    //include                           //Warning
    if(isset($procesada)){
  		require 'index.php';
	} else{
	    require 'formulario_vista.php';
	}
    
    
    


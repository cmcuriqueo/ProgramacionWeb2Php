<?php
    
    //declaracion de variables
	if(empty($_POST)){
		require 'index.php';
		die();
	}
	else
	{

	    $control = true;//acceso ordenado
	    $nombre = $_POST["nombre"];
	    $edad   = (int)$_POST["edad"];
	    $localidad_select = $_POST['localidad'];
		$errores = [];
	    if (strlen($nombre) == 0) {
	    	$errores["nombre"] = "El nombre es requerido";
	    }
	    if ($edad < 10){
	    	$errores["edad"] = "La edad no es valida";
	    }
	    if (strcmp($localidad_select, "0") == 0){
	    	$errores["localidad"] = "La localidad es requerida";
	    }

	    //include                           //Warning
	    if(count($errores) > 0){
	  		require 'index.php';
		} else{
		    require 'formulario_vista.php';
		}

    }
    
    


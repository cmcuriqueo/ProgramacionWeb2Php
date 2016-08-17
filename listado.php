<?php
    
    //declaracion de variables
    $control = true;//acceso ordenado
    $nombre = $_POST["nombre"];
    $edad   = (int)$_POST["edad"];
    $localidad_select = $_POST['localidad_select'];
    
    //include                           //Warning
    require 'index.php';
    require 'formulario_vista.php';
    
    
    


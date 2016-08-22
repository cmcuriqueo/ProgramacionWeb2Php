<html>
    <head>
        <meta charset="UTF-8">
        <title>listado lista Model2</title>            
        <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="bower_components/jquery-validation/dist/jquery.validate.js"></script>
        <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
		<style type="text/css">
	        label.error {color: red;	        }
	    </style>
        <!--<script type="text/javascript">
	

        	$().ready(function(){

				jQuery.validator.addMethod('selectcheck', function (value) {
			        return (value != '0');
				}, "Localidad requerida");

        		$("#formulario_index").validate({
        			rules: {
        				nombre: {
	                        required: true,
	                        minlength: 3,
	                        maxlength: 20
        				},
        				localidad: { 
        					selectcheck: true
        				},
        				edad: {
	                        number: true,
	                        required: true,
	                        min: 10
        				}
        			},
        			messages: {
	                    nombre: {
	                       required: "Campo obligatorio",
	                       minlength: "Longitud minima 3 carácteres",
	                       maxlength: "Longitud maxima 20 carácteres"
	                    },
	                    edad: {
	                        number: "Ingrese un numero",
	                        required: "Campo obligatorio",
	                        min: "Minimo valor 10"
	                    }
        			}
           		});
        	});
        </script>
        -->
    </head>
    <body> 

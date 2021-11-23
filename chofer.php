<?php 

include("con_db.php");

if (isset($_POST['chofer'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['edad']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $apellido = trim($_POST['apellido']);
	    $telefono = trim($_POST['telefono']);
	    $edad = trim($_POST['edad']);
	    $consulta = "INSERT INTO chofer(nombre, apellido, telefono, edad) VALUES ('$nombre','$apellido','$telefono','$edad')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
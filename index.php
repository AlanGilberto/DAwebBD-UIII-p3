<!DOCTYPE html>
<html>
<head>
	<title>Act3 Gilberto Reyes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="POST">
    	<h1>Registro choferes</h1>
    	<input type="text" name="nombre" placeholder="nombre">
    	<input type="text" name="apellido" placeholder="apellidos">
    	<input type="text" name="telefono" placeholder="telefono">
    	<input type="text" name="edad" placeholder="edad">
    	<input type="submit" name="chofer">
    </form>
        <?php 
        include("chofer.php");
        ?>
</body>
</html>
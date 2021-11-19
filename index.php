<!DOCTYPE html>
<html>
<head>
	<title>Registro de articulos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="POST">
    	<h1>Formato de Facturación</h1>
    	<input type="text" name="Nombre" placeholder="Nombre Completo">
    	<input type="date" name="Fecha" placeholder="Fecha de Facturación">
    	<input type="text" name="RFC" placeholder="RFC">
    	<input type="text" name="Razon" placeholder="Razón">
    	<input type="text" name="DCE" placeholder="Dirección de Correo Electrónico">
		<input type="submit" name="reg" value="Enviar">
	</form>
        <?php 
        include("factura.php");
        ?>
</body>
</html
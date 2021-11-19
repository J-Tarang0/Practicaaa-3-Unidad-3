<?php 

include("con_db.php");

if (isset($_POST['reg'])) {

    if (strlen($_POST['Nombre']) >= 1 &&
	 	strlen($_POST['Fecha']) >= 1 &&
	 	strlen($_POST['RFC']) >= 1 &&
	    strlen($_POST['Razon']) >= 1  &&
		strlen($_POST['DCE']) >= 1)
		{

	    $nombre = trim($_POST['Nombre']);
	    $fecha = trim($_POST['Fecha']);
	    $rfc = trim($_POST['RFC']);
	    $razon = trim($_POST['Razon']);
	    $dce = trim($_POST['DCE']);

	    $consulta = "INSERT INTO factura(Nombre, Fecha, RFC, Razon, DCE) VALUES (`Nombre`, `Fecha`, `RFC`, `Razon`, `DCE`)";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">Registro completo, en un momento recibirás unaa confirmación a tu correo electronico</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">Ups ha ocurrido un error</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">Por favor completa los campos</h3>
           <?php
    }
}

?>
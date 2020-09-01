<?php 
	$name = $_POST['name'];
	$telefono = $_POST['tele'];
	$email = $_POST['email'];
	$detalles = $_POST['detalles']
	$datalles = $_POST['domicilio'];

	//Datos
	$destino = "sistemas@escalasdelbajio.com";
	$asunto = "Cotización Web";
	$correo = "De: $name \n";
	$correo .= "Correo: $email \n";
	$correo .= "Teléfono: $telefono \n";
	$correo .= "Detalles: $detalles";

	//Enviar
	mail($destino, $asunto, $correo);
	if (mail) {
		echo "<h4> Cotización enviada, mas tarde te aremos llegar la información del producto o servicio </h4>";
		$alert = "<h4> Cotización enviada, mas tarde te aremos llegar la información del producto o servicio </h4>";
		header('location: lista_productos.php');
	}
?>
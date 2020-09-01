<?php 
	include"conexion.php";
?>
<!DOCYPE htm>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<!--ESTILOS-->
		<link rel="stylesheet" href="css/style.css">
		<!--SLIDDER-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  		<!--ICONOS-->
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body>
		<div id="wrapper">
			<div id="banner-wrapper">	
				<?php include('headerinicio.php') ?>


			<main class="main">
						<div id="wrapper" class="container">
						<h3>Solicitar Cotización</h3><br><br>
						<form class="cotizar" method="post" action="correo.php">	
							<input type="text" placeholder="Nombre*" name="name" required>
							<input type="number" placeholder="Telefono" name="tel">
							<input type="email" placeholder="example@gmail.com*" name="email" required>
							<textarea type="text" placeholder="Cambios o especificaciones..." name="detalles"></textarea>
							<input type="text" placeholder="Domicilio" name="domicilio">
							<input type="submit" name="enviar" id="enviar">
						</form>
					</div>
				</main>
			<div class="clearfix-padding"></div>
			<!--footer-->
			<footer id="contacto">
				<div class="icon-text-text">
					<div id="colum1">
						<h3>Ubicación</h3>
						<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.2289012028727!2d-101.67452748559074!3d21.143286989235747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbf22d2dc701f%3A0xd466f0754e490e6!2sIgnacio%20P%C3%A9rez%20127%2C%20Hidalgo%2C%2037220%20Le%C3%B3n%2C%20Gto.!5e0!3m2!1ses-419!2smx!4v1594061956898!5m2!1ses-419!2smx" ></iframe><br><br><br><br><br><br>
					</div>
					<div id="colum2">
						<!--<h4 class="footer-second"><i class="fa fa-map-marker"></i>  Ignacio Pérez # 127-A <br>Fraccionamiento Hidalgo León, Gto.</h4><br><br>-->
						<h3>Contacto</h3>
								

						<ul class="social">	
							<li>	
								<h4 class="footer-second"><i class="fa fa-whatsapp"></i>  477 7 11 06 22 </h4>
							</li>
							<li>	
								<h4 class="footer-second"><i class="fa fa-phone"></i>  477 7 54 68 02</h4>
							</li>
							<li>	
								<a href="mailto:refrigeracion@escalasdelbajio.com"	target="_blank">
								<h4 class="footer-second"><i class="fa fa-envelope-o"> refrigeracion@escalasdelbajio.com</i></h4>
								</a>
							</li>
							<li>	
								<a href="https://www.facebook.com/escalasdelbajioleon/" target="_blank">
								<h4 class="footer-second"><i class="fa fa-facebook"> Escalas del bajio</i></h4>
								</a>
							</li>
							<li>	
								<a href="https://www.instagram.com/escalasdelbajio/" target="_blank">
								<h4 class="footer-second"><i class="fa fa-instagram"> escalasdelbajio</i></h4>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</footer>
		
		<script src="menu-icon.js"></script>
	</body>
</html>

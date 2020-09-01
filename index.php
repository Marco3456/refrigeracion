<?php 
	session_start();
	include"conexion.php";
?>
<!DOCYPE htm>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<!--ESTILOS-->
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="js/functionsesion.js"></script>
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
		<main class="main">			
					<!--SLIDER-->
					<div id="slide-wrap">
					<section class="slider">	
						<ul class="slider1">	
							<li><img src="img/slider/slider1.jpg" alt="Slider uno"></li>
							<li><img src="img/slider/slider4.jpg" alt="Slider uno"></li>
							<li><img src="img/slider/slider5.jpg" alt="Slider uno"></li>
						</ul>
					</section>
					</div>	
				</div>
				<!--<header>	
					<div id="header-inner">	
						<a href="index.php" id="logo">
							<img src="img/pics/logo EB.png" alt="">
						</a>

						<!--https://www.youtube.com/watch?v=5-4FzEqV6N4-->
						<!--https://www.youtube.com/watch?v=ys2kaK8HgnA-->
						<!--NAVEGADOR
						<nav>
							<a href="#" id="menu-icon">	
								<i class="fa fa-bars"></i>
							</a>
							<ul>	
								<li>	
									<a href="index.php" class="current">INICIO</a>
								</li>
								<li>	
									<a href="lista_productos.php">SERVICIOS</a>
								</li>
								<li>	
									<a href="#nosotros">NOSOTROS</a>
								</li>
								<li>	
									<a href="#contacto">CONTACTO</a>
								</li>
								<li>	
									<a href="back/sesion.php">LOGIN</a>
								</li>
							</ul>
						</nav>
					</div>
				</header>-->
				<!--ICONOS-->

				<?php include('headerinicio.php') ?>
				<!---------NOSOTROS---------->
				<section class="filosofia" id="nosotros">	
					<div class="galeria">
						<h1>Nosotros</h1>
						<div class="linea"></div>
					</div>
					<div class="filos-section">
						<div class="filos">	
							<i class="fa fa-users"></i>
						</div>
					</div>
					<div class="sofia">
						<h3>¿Quíenes somos?</h3>
						<p>
							Somos una empresa con los conocimientos, habilidades, actitudes, valores, tecnología e infraestructuras suficientes para atender con calidad todo tipo de proyectos, cubriendo sus necesidades en tiempo y forma.
						</p>
					</div>	
				</section>	
				<section class="filosofia">	
					<div class="filos-section">
						<div class="filos">	
							<i class="fa fa-bullseye"></i>
						</div>
					</div>
					<div class="sofia">
						<h3>Misión</h3>
						<p> 
							Ofrecer soluciones reales y oportunas a las necesidades de nuestros clientes en sistemas de refrigeración de la más alta calidad.
						</p>
					</div>
				</section>	
				<section class="filosofia">	
					<div class="filos-section">
						<div class="filos">	
							<i class="fa fa-eye"></i>
						</div>
					</div>
					<div class="sofia">
						<h3>Visión</h3>
						<p> 
							Ser líder en ventas y mantenimiento a nivel nacional brindando soluciones tecnológicas e innovadoras de acuerdo a las necesidades de nuestros clientes.
						</p>
					</div>
				</section>	
				<section class="filosofia">
					<div class="filos-section">
						<div class="filos">	
							<i class="fa fa-cubes"></i>
						</div>
					</div>	
					<div class="sofia">
						<h3>Valores</h3>
						<div class="valores">
							<label class="valor"> Integridad </label>
							<label class="valor"> Respeto </label>
							<label class="valor"> Lealtad </label>
							<label class="valor"> Compromiso </label>
							<label class="valor"> Responsabilidad </label>
							<label class="valor"> Calidad </label>
						<div>
					</div>
				</section>

				<div class="clearfix-padding">	
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
								<a href="mailto:ventas@escalasdelbajio.com"	target="_blank">
								<h4 class="footer-second"><i class="fa fa-envelope-o"> ventas@escalasdelbajio.com</i></h4>
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
		
		<script>	
			$(document).ready(function(){
				$('.slider1').bxSlider({
					mode: 'fade',
				});
				$('.slider1').bxSlider({
					mode: 'fade',
				});
				$('.slider1').bxSlider({
					mode: 'fade',
				});
			});
		</script>
		
		<script src="menu-icon.js"></script>
	</body>
</html>
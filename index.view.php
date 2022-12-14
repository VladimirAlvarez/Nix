<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

require 'admin/config.php';

if (isset($_SESSION['usuario'])) {
	header("Location: $ruta" . "dashboard/pages/dashboard.php");
}


?>

<!DOCTYPE HTML>

<html>

<head>
	<title>Proyecto ADSI</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="icon" type="image/png" href="dashboard/assets/img/favicon.png">
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Sidebar -->
	<section id="sidebar">
		<div class="inner">
			<nav>
				<h1> <img src="images/nix2.png" width="80" height="80">
					<P>
						Nix
					</P>
				</h1>
				<ul>
					<li><a href="#one">¿Quíenes somos?</a></li>
					<li><a href="#two">¿Qué hacemos?</a></li>
					<li><a href="#three">Contacto</a></li>
					<li><a href="#intro">Ingreso</a></li>


				</ul>
			</nav>
		</div>
	</section>

	<!-- Wrapper -->
	<div id="wrapper">
		<!-- One -->
		<section id="one" class="wrapper style2 spotlights">
			<section>
				<a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
				<div class="content">
					<div class="inner">
						<h2>FUMIGABIEN<p>

							</p>Quíenes somos?</h2>
						<p>FUMIGABIEN S.A.S. ha desarrollado el control integrado
							de plagas generadoras de enfermedades
							de salud pública buscando ante todo el equilibrio
							ecológico y la salud del hombre, para lograrlo ha
							implementado un programa orientado al contacto directo,
							permanente y personalizado con nuestro
							cliente obteniendo un conocimiento específico de la
							problemática del lugar, con lo cual planeara de
							manera personalizada las actividades para lograr un
							eficaz control.</p>
						<!-- <ul class="actions">
										<li><a href="generic.html" class="button">Ver más</a></li>
									</ul> -->
					</div>
				</div>
			</section>
			<section>
				<a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
				<div class="content">
					<div class="inner">
						<h2>Nuestro compromiso</h2>
						<p>Estamos direccionados al control técnico,
							moderno y profesional en el manejo y control
							integrado de plagas (MIP) comensales
							aplicando el sistema donde podamos garantizar
							la desinsectación, desratización y desinfección
							de los ambientes.</p>
						<!-- <ul class="actions">
										<li><a href="generic.html" class="button">Ver más</a></li>
									</ul> -->
					</div>
				</div>
			</section>

		</section>

		<!-- Two -->
		<section id="two" class="wrapper style3 fade-up">
			<div class="inner">
				<h2>Realizamos la fumigación de:</h2>
				<p>Estamos enfocados en la erradicacion de distintos invasores.</p>
				<div class="features">
					<section>
						<span class="icon solid major fa-code"></span>
						<h3>Insectos Rastreros</h3>
						<p>(pulgas, hormigas, Cucarachas, Gorgojo.)</p>
					</section>
					<section>
						<span class="icon solid major fa-lock"></span>
						<h3>Insectos voladores: </h3>
						<p>(zancudos, moscas, Mosquitos, polillas, Comején, etc.)</p>
					</section>
					<section>
						<span class="icon solid major fa-cog"></span>
						<h3>Roedores:</h3>
						<p>(rata de techo, alcantarilla y domestica)
							utilizamos cebos de segunda generación, preparados</p>
					</section>
					<section>
						<span class="icon solid major fa-desktop"></span>
						<h3>Otros metodos utilizados:</h3>
						<p>Rotación De Plaguicidas Químicos

							Uso Racional De Plaguicidas<br>

							Inspecciones<br>

							Trampeo Y Monitoreo<br>

							Sistemas Físico - Químicos<br>

							Controles De Barrera<br>

							Controles De Captura</p>
					</section>

				</div>
				<!-- <ul class="actions">
								<li><a href="generic.html" class="button">Ver más</a></li>
							</ul> -->
			</div>
		</section>

		<!-- Three -->
		<section id="three" class="wrapper style1 fade-up">
			<div class="inner">
				<h2>Contactanos</h2>
				<p>Contamos con servicio directo en el sector industrial, comercial y residencial</p>
				<div class="split style1">
					<section>
						<form method="post" action="#">
							<div class="fields">
								<div class="field half">
									<label for="name">Nombre</label>
									<input type="text" name="name" id="name" />
								</div>
								<div class="field half">
									<label for="email">Correo</label>
									<input type="text" name="email" id="email" />
								</div>
								<div class="field">
									<label for="message">Mensaje</label>
									<textarea name="message" id="message" rows="5"></textarea>
								</div>
							</div>
							<ul class="actions">
								<li><a href="" class="button submit">Enviar mensaje</a></li>
							</ul>
						</form>
					</section>

					<section>
						<ul class="contact">
							<li>
								<h3>Direccion</h3>
								<span>CRA 3 # 15 - 06</span>
							</li>
							<li>
								<h3>Correo</h3>
								<a href="#">fumigabiensasptogaitan@gmail.com</a>
							</li>
							<li>
								<h3>Telefono</h3>
								<span>+57 318 7808721</span>
							</li>

						</ul>
					</section>
				</div>
			</div>
		</section>

		<!-- Intro -->
		<section id="intro" class="wrapper style1 fullscreen fade-up">


			<!-- formulario de ingreso -->



			<aside>

				<div class="login-page">
					<div class="form">
						<div class="logo1">
							<img src="images/logo.png" width="100" height="70">
							<!---Se ingresa el icono donde debe de estar que es dentro de .form para que todo este correctamente estructurado-->
						</div>
						<div class="content">
							<!---Encerre con esta etiqueta los dos form de registro y login para poder ubicar los inputs abajo del contenedor-->
							<form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="login-form formulario">
								<input type="text" id="name" name="usuario" placeholder="Usuario" />
								<input type="password" id="password" name="password" placeholder="Contraseña" />
								<?php if (!empty($errores)) : ?>
									<div class="error">
										<ul>
											<?php echo $errores; ?>
										</ul>
									</div>
								<?php endif; ?>
								<input type="submit"></input>

							</form>
						</div>
					</div>
				</div>

			</aside>


		</section>

	</div>

	<!-- Footer -->
	<footer id="footer" class="wrapper style1-alt">
		<div class="inner">
			<ul class="menu">
				<li>&copy; Todos los derechos reservados.</li>
				<li>2348241:   <a href="https://www.linkedin.com/in/vladimir-alvarez-0a01b234/" target="_blank">LinkedIn</a></li>
			</ul>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

	<script>
		$('.message a').click(function() {
			$('form').animate({
				height: "toggle",
				opacity: "toggle"
			}, "slow");
		});
	</script>

</body>









</html>
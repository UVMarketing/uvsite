<?php
	require 'config/db.php';
	$clients = R::findAll('client');
 ?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta property="og:title" content="UV Marketing" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://uvmarketing.com.mx/" />
		<meta property="og:image" content="https://res.cloudinary.com/duhncjntk/image/upload/c_lpad,h_630,w_1200/v1495752080/uvsite/Logonuevomorado-01_nzhhdp.png" />
		<meta name="charset" content="UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<link rel="stylesheet" href="style/main.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<title>UV Marketing</title>
	</head>

	<body>
		<div class="navbar-fixed animatable fadeInDown">
			<!-- NAV -->
			<nav class="transparent z-depth-0" style="height:80px;line-height:80px;background: linear-gradient(to bottom, rgba(53, 31, 57, 1), rgba(114, 106, 149, 0.1));">
				<div class="nav-wrapper">
					<a href="#home" class="brand-logo"><img src="https://res.cloudinary.com/itesm-tam/image/upload/c_scale,h_80/v1494883514/logo_uv_pagina-01_f7gmn4.png "></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="#quienessomos" class="sliding-u-l-r">QUIENES SOMOS</a></li>
						<li><a href="#servicios" class="sliding-u-l-r">SERVICIOS</a></li>
						<li><a href="#!" class="sliding-u-l-r">POR QUÉ UV MARKETING</a></li>
						<li><a href="#contact" class="sliding-u-l-r">CONTACTO</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- /NAV -->
		<!-- HOME -->
		<section id="home" class="valign-wrapper home section scrollspy" style="margin-top:-4em;height:80vh">
			<div class="container">
				<div class="row animatable fadeIn">
					<div class="col s4 offset-s1">
						<img src="https://res.cloudinary.com/duhncjntk/image/upload/v1494893710/uvsite/lupa.png" alt="Lupa" class="responsive-img">
					</div>
					<div class="col s6 offset-s1 white-text">
						<h1 style="font-size:6em"><b>¿clientes?</b></h1>
						<h3 class="left-align">ellos te buscan, nosotros los encontramos.</h3>
						<img src="https://res.cloudinary.com/duhncjntk/image/upload/v1494893710/uvsite/raya-01.png">
					</div>
				</div>
			</div>
		</section>
		<!-- /HOME -->
		<!-- QUIENES SOMOS -->
		<section id="quienessomos" class="section scrollspy">
			<div class="container">
				<div class="row left-align">
					<div class="col s12">
						<h2 class="purple-text animatable fadeIn">QUIENES SOMOS</h2>
					</div>
				</div>
				<div class="row left-align valign-wrapper">
					<div class="col s4 animatable fadeInLeft">
						<p>Jóvenes profesionales dedicados a crear, desarrollar e implementar estrategias de marketing que vayan <b>más allá de lo visible.</b></p>
						<p style="padding-top:15px">Combinamos nuestras 3 áreas de trabajo para poder generar acciones que aumenten la probabilidad de concretar ventas de nuestros clientes.</p>
					</div>
					<div class="col s8 center-align" style="font-size:1.5em">
						<div class="circle">
							<img src="https://res.cloudinary.com/duhncjntk/image/upload/v1495574824/uvsite/circulo_morado-01.svg" class="responsive-img" />
							<div class="mask-top-container">
								<div class="mask-top"></div>
							</div>
							<div class="mask-bottom-container">
								<div class="mask-bottom"></div>
							</div>
							<b>Marketing</b>
						</div>
						<div class="circle">
							<img src="https://res.cloudinary.com/duhncjntk/image/upload/v1495574820/uvsite/circulo_lila-01.svg" class="" />
							<div class="mask-top-container">
								<div class="mask-top"></div>
							</div>
							<div class="mask-bottom-container">
								<div class="mask-bottom"></div>
							</div>
							<b>Tecnologías de la Información</b>
						</div>
						<div class="circle">
							<img src="https://res.cloudinary.com/duhncjntk/image/upload/v1495574827/uvsite/circulo_turquesa-01.svg" class="" />
							<div class="mask-top-container">
								<div class="mask-top"></div>
							</div>
							<div class="mask-bottom-container">
								<div class="mask-bottom"></div>
							</div>
							<b>Diseño Gráfico</b>
						</div>
						<!--<div class="row left-align">
							<div class="col s6 offset-s4">
							</div>
						</div>-->
						<!--<img src="https://res.cloudinary.com/duhncjntk/image/upload/v1495229595/uvsite/areasuv-01.png" alt="graphs" class="responsive-img">-->
					</div>
				</div>
			</div>
		</section>
		<!-- /QUIENES SOMOS -->
		<!-- SERVICIOS -->
		<section id="servicios" class="section scrollspy">
			<div class="container">
				<div class="row left-align">
					<div class="col s12">
						<h2 class="cyan-text animatable fadeIn">SERVICIOS</h2>
					</div>
				</div>
			</div>
			<div class="row valign-wrapper cyan" style="background-color: #709FB0 !important;margin-bottom:-1em; position: relative;">
				<span class="bgtext">UV</span>
				<div class="col m4 bgimg" style="background-image:url('https://res.cloudinary.com/duhncjntk/image/upload/q_30/v1495483008/uvsite/pexels-photo-191830.jpg');">
				</div>
				<div class="col m4 white-text animatable fadeInUp serv" style="margin: 5em 0em 5em 5em; font-weight:100;">
					<p><b>Web Search Engine</b><br>Llega a las personas que están buscando negocios como el tuyo.</p>
					<p><b>Desarrollo Web</b><br>Coloca tu negocio en la red y brinda la información y servicios que necesitan tus clientes.</p>
					<p><b>Campañas Publicitarias - UV Technologies</b><br>¿Deseas lanzar un nuevo producto o posicionar tu marca? Imagina usar las últimas tendencias en tecnología para hacerlo.</p>
					<p><b>Identidad Corporativa</b><br>Transmite lo que es en realidad tu negocio a través de tu imagen.</p>
				</div>
				<div class="col m4 center-align ">
					<a class="waves-effect waves white cyan-text btn animated infinite pulse">Conoce más</a>
				</div>
			</div>
		</section>
		<!-- /SERVICIOS -->
		<!-- CLIENTES -->
		<section id="clientes" style="z-index:1" class="section scrollspy">
			<div class="row valign-wrapper">
				<div class="col m9">
					<div class="carousel animatable fadeIn">
						<?php
				foreach ($clients as $key => $value) {
					echo "<a href='#!' class='carousel-item'>
						<div class='col m12'>
							<div class='card-panel hoverable purple' style='height:35vh;width:30vw'>
								<div class='card-image col m12'>
									<img src='$value->picture' class='right' style='img-responsive'>
								</div>
								<div class='card-content col m12'>
									<p class='white-text' style='font-size:1.5em'>
									$value->comment
									</p>
								</div>
							</div>
						</div>
					</a>";
				}
				?>
					</div>
				</div>
				<div class="col m3">
					<h2 class="purple-text animatable fadeIn">CLIENTES</h2>
				</div>
			</div>
		</section>
		<!-- CONTACT -->
		<section id="contact" class="white-text purple home section scrollspy">
			<div class="container">
				<div class="row" style="margin-bottom:-1em;margin-top:-1em">
					<div class="col l7 s12 home">
						<h3>CONTACTANOS</h3>
						<img src="https://res.cloudinary.com/duhncjntk/image/upload/v1494893710/uvsite/raya-01.png">
						<p>Este es el primer paso para iniciar una estrategia <i>ultravioleta</i>.Déjanos tus datos y nos comunicaremos a la brevedad posible.</p>
						<form class="col s12">
							<div class="row">
								<div class="input-field col s10">
									<input type="text" name="name" class="validate white-text" required>
									<label for="name">
							Nombre y Apellido*
						</label>
								</div>
								<div class="input-field col s10">
									<input type="email" name="email" class="validate" required>
									<label for="email">
							Correo electrónico*
						</label>
								</div>
								<div class="input-field col s10">
									<input type="text" name="phone" class="validate">
									<label for="phone">
							Teléfono
						</label>
								</div>
								<div class="input-field col s10">
									<input type="text" name="message" class="validate">
									<label for="message">
							Mensaje
						</label>
								</div>
								<div class="input-field col s10">
									<input type="submit" value="Enviar Mensaje" class="btn waves-effect deep-purple animated infinite pulse">
									<div id="status">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col l5 s12 purple">
						<h3 class="white-text">NUESTRA OFICINA</h3>
						<img src="https://res.cloudinary.com/duhncjntk/image/upload/v1494893710/uvsite/raya-01.png">
						<p>Avenida Universidad de Wisconsin #208 Int. J Colonia Universidad Sur, CP 89109 Tampico, Tamaulipas, México.
						</p>
						<p>Teléfono
							<b>(833)</b>217 06 22</p>
						<p>Correo electrónico
							<a href="mailto:contacto@uvmarketing.com.mx" class="deep-purple-text">contacto@uvmarketing.com.mx</a></p>
					</div>
				</div>
			</div>
		</section>
		<!-- /CONTACT -->
		<!-- FOOTER -->
		<footer class="page-footer grey darken-2 animatable fadeIn">
			<div class="container">
				<div class="row">
					<div class="col l12 s12 center">
						<h5 class="white-text small">UV Marketing <small class="grey-text text-lighten-4">Mercadotecnia Digital</small></h5>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					©
					<?php echo date('Y') ?> Copyright UV Marketing
					<a class="grey-text text-lighten-4 right" href="mailto:contacto@uvmarketing.com.mx">contacto@uvmarketing.com.mx</a>
				</div>
			</div>
		</footer>
		<!-- /FOOTER -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
		<script src="assets/app.js"></script>
	</body>

	</html>

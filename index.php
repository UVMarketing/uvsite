<!DOCTYPE html>
<html>

<head>
	<link rel="sytlesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<title>UV Marketing</title>
</head>
<style type="text/css">
	html {
		font-family: 'Roboto', sans-serif;
		/*background-image: url("https://res.cloudinary.com/duhncjntk/image/upload/v1494893710/uvsite/fondo1-01.png");*/
		background-color: white;
	}

	.navhome {
		background-image: url("https://res.cloudinary.com/duhncjntk/image/upload/v1494893710/uvsite/fondo1-01.png");
	}

	h2 {
		font-size: 2.5em;
		font-style: oblique;
		display: inline-block;
	}

	h2:after {
		display: block;
		content: "";
		width: 50%;
		height: 10px;
		border-bottom: solid 3px;
	}

	.purple-text {
		color: #351F39 !important;
	}

	.sliding-u-l-r {
		text-decoration: none;
		display: inline-block;
		border-bottom: 3px solid transparent;
		transition: 0.5s ease;
		white-space: nowrap;
		height: 25px;
		background-color: rgba(0, 0, 0, 0) !important;
	}

	.sliding-u-l-r:after {
		content: '';
		display: block;
		width: 0;
		height: 2px;
		background: #FFF;
		transition: width .3s;
		background-color: rgba(0, 0, 0, 0) !important;
	}

	.sliding-u-l-r:hover:after {
		border-bottom: 3px solid white;
		width: 50%;
		background-color: rgba(0, 0, 0, 0) !important;
	}

	.btn {
		text-transform: none;
	}

	.col.s4>.btn {
		width: 60%;
		border-radius: 15px;
	}
</style>

<body>
	<div class="navhome">
		<!-- NAV -->
		<nav class="nav-extended transparent z-depth-0" style="height: 80px;line-height: 80px;">
			<div class="nav-wrapper">
				<a href="https://uvmarketing.com.mx/" class="brand-logo"><img src="https://res.cloudinary.com/itesm-tam/image/upload/c_scale,h_80/v1494883514/logo_uv_pagina-01_f7gmn4.png"></a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#quienessomos" class="sliding-u-l-r">QUIENES SOMOS</a></li>
					<li><a href="#servicios" class="sliding-u-l-r">SERVICIOS</a></li>
					<li><a href="#!" class="sliding-u-l-r">POR QUÉ UV MARKETING</a></li>
					<li><a href="#!" class="sliding-u-l-r">CONTACTO</a></li>
				</ul>
			</div>
		</nav>
		<!-- /NAV -->
		<br><br><br><br><br>
		<!-- HOME -->
		<section id="home">
			<div class="container">
				<div class="row valign-wrapper">
					<div class="col s4 offset-s1 left-align">
						<img src="https://res.cloudinary.com/duhncjntk/image/upload/v1494893710/uvsite/lupa.png" alt="Lupa" class="responsive-img">
					</div>
					<div class="col s5 offset-s1 white-text">
						<h1 style="font-size:6em"><b>¿clientes?</b></h1>
						<h3 class="left-align">ellos te buscan, nosotros los encontramos.</h3>
						<img src="https://res.cloudinary.com/duhncjntk/image/upload/v1494893710/uvsite/raya-01.png">
					</div>
				</div>
			</div>
		</section>
		<!-- /HOME -->
		<br><br><br><br><br>
	</div>
	<!-- QUIENES SOMOS -->
	<section id="quienessomos">
		<div class="container">
			<div class="row left-align">
				<div class="col s12">
					<h2 class="purple-text">QUIENES SOMOS</h2>
				</div>
			</div>
			<div class="row left-align">
				<div class="col s5">
					<p>Jóvenes profesionales dedicados a crear, desarrollar e implementar estrategias de marketing que vayan <b>más allá de lo visible.</b></p>
					<br>
					<p>Combinamos nuestras 3 áreas de trabajo para poder generar acciones que aumenten la probabilidad de concretar ventas de nuestros clientes.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /QUIENES SOMOS -->
	<!-- SERVICIOS -->
	<section id="servicios">
		<div class="container">
			<div class="row left-align">
				<div class="col s12">
					<h2 class="cyan-text text-darken-1"><b>SERVICIOS</b></h2>
				</div>
			</div>
		</div>
		<div class="row valign-wrapper cyan darken-1">
			<div class="col s4">
				<img src="" alt="img-papers">
			</div>
			<div class="col s4 white-text">
				<p><b>Web Search Engine Strategy</b></p>
				<p>Llega a las personas que están buscando negocios como el tuyo.</p>
				<p><b>Desarrollo Web</b></p>
				<p>Coloca tu negocio en la red y brinda la información y servicios que necesitan tus clientes.</p>
				<p><b>Campañas Publicitarias - UV Technologies</b></p>
				<p>¿Deseas lanzar un nuevo producto o posicionar tu marca? Imagina usar las últimas tendencias en tecnología para hacerlo.</p>
				<p><b>Identidad Corporativa</b></p>
				<p>Transmite lo que es en realidad tu negocio a través de tu imagen.</p>
			</div>
			<div class="col s4 center-align">
				<a class="waves-effect waves white cyan-text text-darken-1 btn"><b>Conoce más</b></a>
			</div>
		</div>
	</section>
	<!-- /SERVICIOS -->
	<!-- CLIENTES -->
	<section id="clientes">
		<div class="row valign-wrapper">
			<h2 class="col s2 purple-text">CLIENTES</h2>
		</div>

		<div class="row">

			<div class="col s4 m5">
				<div class="card-panel purple">
					<span class="white-text">Glass&Glass
          </span>
				</div>
			</div>

			<div class="col s4 m5">
				<div class="card-panel purple">
					<span class="white-text">Escape rooms
          </span>
				</div>
			</div>

		</div>
	</section>
	<!-- /CLIENTES -->

	<script src=" https://code.jquery.com/jquery-2.1.1.min.js "></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js "></script>
</body>

</html>

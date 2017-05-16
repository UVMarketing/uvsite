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
		background-image: url("https://res.cloudinary.com/duhncjntk/image/upload/v1494893710/uvsite/fondo1-01.png");
		background-color: purple;
	}

	.purple {
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

	.sliding-u-l-r::after {
		content: '';
		display: block;
		width: 0;
		height: 2px;
		background: #FFF;
		transition: width .3s;
		background-color: rgba(0, 0, 0, 0) !important;
	}

	.sliding-u-l-r:hover::after {
		border-bottom: 3px solid white;
		width: 50%;
		background-color: rgba(0, 0, 0, 0) !important;
	}
</style>

<body>
	<!-- NAV -->
	<nav class="nav-extended transparent z-depth-0" style="height: 80px;line-height: 80px;">
		<div class="nav-wrapper">
			<a href="https://uvmarketing.com.mx/" class="brand-logo"><img src="https://res.cloudinary.com/itesm-tam/image/upload/c_scale,h_80/v1494883514/logo_uv_pagina-01_f7gmn4.png"></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="#!" class="sliding-u-l-r">QUIENES SOMOS</a></li>
				<li><a href="#!" class="sliding-u-l-r">SERVICIOS</a></li>
				<li><a href="#!" class="sliding-u-l-r">POR QUÉ UV MARKETING</a></li>
				<li><a href="#!" class="sliding-u-l-r">CONTACTO</a></li>
			</ul>
		</div>
	</nav>
	<!-- /NAV -->
	<br><br><br>
	<!-- HOME -->
	<section id="home">
		<div class="container">
			<div class="row valign-wrapper">
				<div class="col s4 left-align">
					<img src="https://res.cloudinary.com/duhncjntk/image/upload/v1494893710/uvsite/lupa.png" alt="Lupa" class="responsive-img">
				</div>
				<div class="col s6 offset-s2 white-text">
					<h1 style="font-size:6em"><b>¿clientes?</b></h1>
					<h3 class="left-align">ellos te buscan, nosotros los encontramos.</h3>
					<img src="https://res.cloudinary.com/duhncjntk/image/upload/v1494893710/uvsite/raya-01.png">
				</div>
			</div>
		</div>
	</section>
	<!-- /HOME -->

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>

</html>

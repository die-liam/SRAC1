<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html  lang="es">
	<head>
		<title>Inicio de sesión</title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<?php
								 include('header.php');
								include('sistema/class/acceso.php');
								require('sistema/class/conexion.php');
								$db = new Conexion();
								 ?>

							<!-- Content -->
								<section>
								<span ><img src="images/logo.PNG" alt="" width="127" height="120" /></span>
									<header class="main">
										<h2>Inicio de sesión</h2>
									</header>
											<?php 
											$mensaje= false;
											if (isset($_GET['error']) and $_GET['error']=='datos_incorrectos') {
												$mensaje= array('error' => 'Error: datos incorectos');
												$mensaje=true;
											}

											 ?>
								 <form method="post" action="sistema/index.php?modo=login">
														<div class="row uniform">
															<div class="6u 12u$(xsmall)">
															
																<input type="text" name="usuario" id="usuario" value="" placeholder="Usuario" required title="debe ingresar un usuario valido, solo letras y numeros de 5 a 12 caracteres" pattern="^([a-z]+[0-9]{0,2}){5,12}$"  />
															</div>
															<div class="6u$ 12u$(xsmall)">
																<input type="password" name="password" id="password" value="" placeholder="Contraseña" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un numero y una letra  mayuscula y una minuscula, y minimo 8 o mas caracteres." />
															</div>
																<input type="hidden" name="login" value="1"/>													
															<div class="12u$">
																<ul class="actions">
																	<li><input type="submit" value="Iniciar sesión" class="special" /></li>
																	<li><input type="reset" value="Limpiar" /></li>
																</ul>
															</div>
															<?php 
													if ($mensaje) {
														echo "  <h4>Usuario y/o Contraseña incorrectos</h4>";
													}
													 ?>
														</div>
													</form>
													

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index">Página principal</a></li>
										
									</ul>
								</nav>

							<!-- Section -->
									<section>
									<header class="major">
										<h2>Presidencia Municipal de Sultepec</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/s10.jpg" alt="" /></a>
											<p>Gracias al apoyo y confianza de los ciudadanos de Sultepec, llegamos al primer año de Trabajo y Resultados. Primer Informe de Gobierno.
                      Ayuntamiento Sultepec 2016 - 2018.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/s11.jpg" alt="" /></a>
											<p>Participando en la Ceremonia de Aniversario de la Revolución Mexicana, y Desfile deportivo en Sultepec.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/s6.jpg" alt="" /></a>
											<p>Acompañando a los jóvenes estudiantes de la Escuela Normal de Sultepec, en su concurso de ofrendas.</p>
										</article>
									</div>
									
								</section>



							<!-- Footer -->
								<?php include('footer.php'); ?>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script type="text/javascript" src="cordova.js"></script>

	</body>
</html>
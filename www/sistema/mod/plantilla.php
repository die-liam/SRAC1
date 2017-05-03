<!DOCTYPE HTML>
<!--
	Elaborado por Diego Williams & Erika Sanchez
	html5
-->
<html  lang="es">
	<head>
		<title>titulo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body onload="curp('AAMD910326HMCLNG00')">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<?php include('header.php'); ?>

							<!-- Content -->
								<section>
									<header class="main">
										<h2>encabezado</h2>
									</header>

									<span class="image main"><img src="images/pic11.jpg" alt="" /></span>
									<form method="post" action="sistema/index.php">
														<div class="row uniform">
															<div class="6u 12u$(xsmall)">
																<input type="text" name="usuario" id="usuario" value="" placeholder="Usuario" required title="debe ingresar un usuario valido, solo letras y numeros de 5 a 12 caracteres" pattern="^([a-z]+[0-9]{0,2}){5,12}$"  />
															</div>
															<div class="6u$ 12u$(xsmall)">
																<input type="password" name="password" id="password" value="" placeholder="Contraseña" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un numero y una letra  mayuscula y una minuscula, y minimo 8 o mas caracteres." />
															</div>
																													
															<div class="12u$">
																<ul class="actions">
																	<li><input type="submit" value="Iniciar sesión" class="special" /></li>
																	<li><input type="reset" value="Limpiar" /></li>
																</ul>
															</div>
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
								 <?php include('menu.php'); ?>
							<!-- Section -->
									<section>
									<header class="major">
										<h2>Presidencia Municipal de Sultepec</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/sultepec7.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/sultepec8.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/sultepec9.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									
								</section>


							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
										<li class="fa-phone">(000) 000-0000</li>
										<li class="fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="assets/js/curp.js"></script>

	</body>
</html>
<?php 
	session_start();
	if (isset($_SESSION['usuario'])) {
		echo "has iniciado sesión ".$_SESSION['usuario'];
		header('location: ');
		$_GET['acceso']=true;
	} else {
		$_GET['acceso']=false;
		session_start();
		session_destroy();
		header("location: ../index?error=acceso");
	}
 ?>
<!DOCTYPE HTML>
<!--
	Elaborado por Diego Williams & Erika Sanchez
	html5
-->
<html  lang="es">
	<head>
		<title>Entrega de Apoyo</title>
		<script type="text/javascript" src="assets/js/jquery.min.js"></script> <!-- ajax -->
		<meta charset="utf-8" />
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
								<?php include('header.php'); ?>

							<!-- Content -->
								<section>
									<header class="main">
										<h2>Entrega de Apoyo</h2>
									</header>

									<span ><img src="images/logo.PNG" alt="" width="127" height="120" /></span>
									<form method="GET" action="entregaApoyo" name="buscar" id="buscar" target="_self">
														<div class="row uniform">
															<div class="6u 12u$(xsmall)">
															
															<div class="6u 12u$(xsmall)">
																<input type="text" name="curp" id="curp" onKeyUp="this.value=this.value.toUpperCase();" onKeyUp="comprobar(this.value)" placeholder="Ingrese CURP" required title="debe ingresar una CURP valida" pattern="([A-Za-z]{4})+([0-9]{6})+([A-Za-z]{6})+([0-9]{2})" maxlength="18" /> 
																 </div>
														    </div>
																													
															<div class="12u$">
																<ul class="actions">
																	<li><input type="submit" value="Buscar" class="special" /></li>
																	<li><input type="reset" value="Limpiar" /></li>
																</ul>
															</div>
														</div>
													</form>
													<div id="ajax">&nbsp;</div>
													<script type="text/javascript">
														$(function (e) {
  														$('#buscar').submit(function (e) {
    														e.preventDefault()
    														$('#ajax').load('seleccionarCurp?' + $('#buscar').serialize())
  														})
														})
														</script>

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
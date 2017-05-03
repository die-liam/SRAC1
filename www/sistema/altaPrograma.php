<!DOCTYPE HTML>
<!--
	alaborado por Diego Williams & Erika Sanchez
	html5
-->
<html  lang="es">
	<head>
		<title>Alta de programa</title>
		<meta charset="utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
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
								<?php
										date_default_timezone_get('GMT-5');
										
									?>

									<span ><img src="images/logo.PNG" alt="" width="127" height="120" /></span>
									  <header class="main">
										<h2>Agregar programa</h2>
									</header>
									<form method="POST" action="altaPrograma?guardar=ok">
														<div class="row uniform">
														<div class="6u 12u$(xsmall)">
																<input type="text" name="nombre" id="nombre" placeholder="Ingrese nombre" required title="debe ingresar un nombre valido, solo letras" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚ ]){1,30}$"  />
														  </div>
														<div class="6u 12u$(xsmall)">
														<input type="text" name="fecha2" id="fecha2" value="<?php echo date("Y-m-d"); ?>" disabled />
														<input type="hidden" name="fecha" id="fecha" value="<?php echo date("Y-m-d"); ?>">
														</div>
														<div class="12u$">
																<textarea name="descripcion" id="descripcion" placeholder="Ingrese breve descripción" rows="3" cols="4" required title="debe ingresar una descripción caracteres"></textarea>
															</div>
																																								
															<div class="12u$">
																<ul class="actions">
																	<li><input type="submit" value="Guardar" class="special" /></li>
																	<li><input type="reset" value="Limpiar" /></li>
																</ul>
															</div>
														</div>

								  </form>
								  <?php  
									  #require('class/conexion.php');
									  include_once('class/programa.php');
									  include_once('class/operacionesMysql.php');
									  $db= new Conexion();
									  if (isset($_GET['guardar'])) {
									  	if (!empty($_POST['nombre']) and !empty($_POST['descripcion'])) {
													#echo "<br>no esta vacio";
													  $guardar = new Programa($_POST['nombre'], $_POST['descripcion'], $_POST['fecha']);
													  $programa = new operacionesMysql();
													  $programa->insertarPrograma($guardar);
												}
									  	
									  }
									          $b=0;
											if (isset($_GET['guardar']) and $_GET['guardar']=='registro_guardado') {
												$mensaje= array('guardar' => 'Datos Guardados');
												$b=1;
											} else if (isset($_GET['guardar']) and $_GET['guardar']=='registro_noguardado') {
												$mensaje= array('guardar' => 'Datos No Guardados');
												$b=2;
												
											}

													if ($b==1) {
														echo "  <h4>Datos guardados correctamente</h4>";
													} else if ($b==2) {
														echo "  <h4>Datos NO guardados</h4>";
													}
													 ?>
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
										<article>
											<a href="#" class="image"><img src="images/s8.jpg" alt="" /></a>
											<p>El día 28 de octubre se realizo la clausura de un curso CEA de Gelatina Artística en la comunidad de Santa Cruz del Oro, Municipio de Sultepec.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/s9.jpg" alt="" /></a>
											<p>Agradecemos el gran apoyo de nuestro amigo, el diputado Cruz Juvenal Roa Sánchez, quien el día de hoy realizo su visita numero 17 a nuestro municipio, entregando gran cantidad de apoyos materiales y económicos.</p>
										</article>
									</div>
									
								</section>


							<!-- Section -->
								<section>
									<header class="major">
										<h2>Contactanos</h2>
									</header>
									
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">millan6584@hotmail.com</a></li>
										<li class="fa-phone">7226165763</li>
										<li class="fa-home">Francisco I. Madero No. 1, Sultepec, Estado de México<br />
										</li>
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

	</body>
</html>
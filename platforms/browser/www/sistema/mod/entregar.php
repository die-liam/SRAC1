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
								<?php include('header.php'); 
								
								?>

							<!-- Content -->
								<section>
									<header class="main">
										<h2>Entrega de Apoyo</h2>
									</header>
								<?php 
									if (isset($_SESSION['numRegidor']) and isset($_REQUEST['idben']) and isset($_REQUEST['beneficiario'])) {
									$idregidor=$_SESSION['numRegidor'];
									$idbeneficiario= $_REQUEST['idben'];
									$beneficiario = $_REQUEST['beneficiario'];
									$regidor=$_SESSION['usuario'];
									#echo "id regidor ". $idregidor. " id beneficiario ".$idbeneficiario;
								}
								else {
									header("location: ../index?error=acceso");
								}
								 ?>
									<span ><img src="images/logo.PNG" alt="" width="127" height="120" /></span><br><br><br>
									<form method="POST" action="entregar" name="guardar" id="guardar" target="_self">
														<div class="row uniform">
															<div class="6u 12u$(xsmall)">
															<label  for="demo-priority-high">Regidor</label>
				
														<input type="text" disabled="disabled" name="regidor" id="regidor" <?php echo "value='$regidor' />";
														echo "<input type='hidden' value='$idregidor' id='idregidor' name='idregidor'>"; ?>  
																
														    </div>

														    <div class="6u 12u$(xsmall)">
															<label  for="demo-priority-high">Curp Beneficiario</label>
				
														<input type="text" disabled="disabled" name="beneficiario" id="beneficiario" <?php echo "value='$beneficiario' />";

														echo "<input type='hidden' value='$idbeneficiario' id='idbeneficiario' name='idbeneficiario'>"; 

														?>

														    </div>
														    <div class="6u 12u$(xsmall)">
														<input type="text" name="fecha2" id="fecha2" value="<?php echo date("Y-m-d"); ?>" disabled />
														<input type="hidden" name="fecha" id="fecha" value="<?php echo date("Y-m-d"); ?>">
														</div>
																 <div class="12u$">
																<div class="select-wrapper">
<?php
include('class/dbcon.php');
include('class/operacionesMysql.php');																
ob_start();
																	echo "<select name='programa' id='programa' required id='demo-category'>";					
																		$combo = new operacionesMysql();
																		$combo->comboPrograma();
		  															ob_end_flush();
?>
																</select>
																</div>
															</div>														
															<div class="12u$">
																<ul class="actions">
																	<li><input type="submit" value="Entregar" class="special" /></li>
																	
																</ul>
															</div>
														</div>
													</form>
													<div id="ajax">&nbsp;</div>
													<script type="text/javascript">
														$(function (e) {
  														$('#guardar').submit(function (e) {
    														e.preventDefault()
    														$('#ajax').load('entregado?' + $('#guardar').serialize())
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
								<?php include('footer.php') ?>

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
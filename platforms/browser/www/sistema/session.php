<?php 
	session_start();
	if (isset($_SESSION['usuario'])) {
		echo "  Has iniciado sesión ".$_SESSION['usuario'];# "id ". $_SESSION['numRegidor'];
		header('location: ../sistema');
		$_GET['acceso']=true;
	} else {
		$_GET['acceso']=false;
		session_start();
		session_destroy();
		header("location: index?error=acceso");
	}
 ?>
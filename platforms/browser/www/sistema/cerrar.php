<?php 
  session_start();
  unset($_SESSION["usuario"]); 
unset($_SESSION["numRegidor"]); 
  session_destroy();
  header("location: ../");
  exit;


	/*if (isset($_SESSION['usuario'])) {
		echo "has iniciado sesión ".$_SESSION['usuario'];
		header('location: ../sistema');
	} else {
		session_start();
		session_destroy();
		header("location: index?error=acceso");
	}*/
 ?>
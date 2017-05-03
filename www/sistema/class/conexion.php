<?php 
	class Conexion extends mysqli {
	//Atributos 
	
	
	//metodos 
	 public function __construct() {
	 	parent::__construct('192.168.0.13','root','nadanada','srac');
	 	$this->query("set names 'utf8';");
	 	$this->connect_errno? die ("Error en conexion"): $x= 'Conectado';
	 	//echo $x;
	 	unset($x);
	 }
	 public function recorer($y){
	 	return mysqli_fetch_array($y);
	 }
	}
 ?>
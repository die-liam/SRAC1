<?php 
class Programa {
	 # atributos 
 public $nombre; 
 public $descripcion;
 public $fecha;

 #metodos
 public function __construct ($nombre, $descripcion, $fecha) {
 	$this->nombre = $nombre;
 	$this->descripcion = $descripcion;
 	$this->fecha = $fecha;
   } 
 }
?>
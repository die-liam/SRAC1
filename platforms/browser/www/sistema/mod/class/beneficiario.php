<?php
 class Beneficiario {
 	#atributos
 	public $nombre;
 	public $apellidoP;
 	public $apellidoM;
 	public $telefono;
 	public $curp;
 	public $folio;
 	public $idComunidad;

 	#metodos 
 	public function __construct($nombre, $apellidoP, $apellidoP,
$telefono, $curp, $folio, $idComunidad){
 	$this->nombre =  $nombre;
 	$this->apellidoP = $apellidoP;
 	$this->apellidoM = $apellidoP;	
 	$this->telefono = $telefono;
 	$this->curp	 = $curp;
 	$this->folio = $folio;	
 	$this->idComunidad =  $idComunidad;
 	}
 }
 ?>
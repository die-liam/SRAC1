<?php
	class Regidor {
		#Atributos 
		public $nombre;
		public $apellidoP;
		public $apellidoM;
		public $cargo;
		public $usuario;
		public $contra;

		#Metodos
		public function __construct ($nombre, $apellidoP, $apellidoM, $cargo, $usuario, $contra)
		{
			$this->nombre=$nombre;
			$this->apellidoP =  $apellidoP;
			$this->apellidoM = $apellidoM;
			$this->cargo = $cargo;
			$this->usuario = $usuario;
			$this->contra = $contra;
		}
	}
 ?>
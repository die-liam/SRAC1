<?php 
	class Acceso {
		#atributos
		protected $user;
		protected $pass;
		public $iduser;
		#metodos
		public function __construct($usuario, $password)
		{
			$this->user=$usuario;
			$this->pass=$password;
		}
		public function login ()
		{
			$db = new Conexion();
			$sql= $db->query("call login('$this->user', '$this->pass')");
			#echo "Falló CALL: (" . $db->errno . ") " . $db->error;
			$dato = $db->recorer($sql);
			if ($dato['contraseña']=$this->pass and  $dato['usuario']==$this->user) {
				session_start();
				$_SESSION['usuario'] = $this->user;
				$_SESSION['numRegidor'] = $dato['numRegidor'];
				header("location: session");
				#echo "Datos correctos";
			} else {
				header('location: ../login?error=datos_incorrectos');
				echo "datos incorrectos";
			}

		}
		public function registro()
		{
			
		}
	}
 ?>
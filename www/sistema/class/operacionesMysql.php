<?php 

	class operacionesMysql {

		
		#Metodos
		public function insertarRegidor ($regidor){
			$db = new Conexion();
			$sql= $db->query("call registroRegidor ('$regidor->nombre',
			'$regidor->apellidoP', '$regidor->apellidoM', '$regidor->cargo',
			'$regidor->usuario', '$regidor->contra' )");
			#echo "Falló CALL: (" . $db->errno . ") " . $db->error;
			if ($sql) {
				header('location: altaRegidor?guardar=registro_guardado');
			} else 
			{
				header('location: altaRegidor?guardar=registro_noguardado');
			}
			unset($sql);
		}
		public function insertarPrograma ($programa) {
			#$db = new Conexion();
			$sql= $db->query("call registroPrograma ('$programa->nombre',
				'$programa->descripcion', '$programa->fecha')");
			#echo "Falló CALL: (" . $db->errno . ") " . $db->error;
			
			if ($sql) {
				header('location: altaPrograma?guardar=registro_guardado');
			} else 
			{
				header('location: altaPrograma?guardar=registro_noguardado');
			}
			unset($sql);
		}

		public function insertarBeneficiario($beneficiario) {
			$db = new Conexion();
			$sql = $db->query("call registroBeneficiario (strtoupper('$beneficiario->nombre'), strtoupper('$beneficiario->apellidoP'), strtoupper('$beneficiario->apellidoM'),	'$beneficiario->telefono', strtoupper('$beneficiario->curp'), '$beneficiario->folio', '$beneficiario->idComunidad')");

			echo "Falló CALL: (" . $db->errno . ") " . $db->error;
			
			if ($sql) {
				header('location: altaBeneficiario?guardar=registro_guardado');
			} else 
			{
				header('location: altaBeneficiario?guardar=registro_noguardado');
			}
			unset($sql);
		}


	}
     

 ?>
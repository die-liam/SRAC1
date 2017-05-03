<?php
ob_start();
include_once('conexion.php');
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
			$db = new Conexion();
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
			$sql = $db->query("call registroBeneficiario ('$beneficiario->nombre', '$beneficiario->apellidoP', '$beneficiario->apellidoM',
				'$beneficiario->telefono', '$beneficiario->curp', '$beneficiario->folio', '$beneficiario->idComunidad')");

			#echo "Falló CALL: (" . $db->errno . ") " . $db->error;
			
			if ($sql) {
				header('location: altaBeneficiario?guardar=registro_guardado');
			} else 
			{
				header('location: altaBeneficiario?guardar=registro_noguardado');
			}
			unset($sql);
		}
		public function busqueda($curp) {
			$db = new Conexion();
			$sql = $db->query("select * from beneficiario where curp like '%$curp%'");
			$arreglo  = array();
			while ($re=$sql->fetch_array(MYSQL_NUM)) {
				$arreglo = $re;
			}
			return $arreglo;
		}
		public function combo() {
			include('dbcon.php');
			$sql= "select * from comunidad";
			$valor = mysql_query($sql,$link) or die ("error en consulta");
			$filas = mysql_num_rows($valor);
			echo "<option value='0'>Elige una opcion</option>";
			for ($y=0;$y<$filas;$y++)
		   {	
		     $idtipo = mysql_result($valor,$y,'idcomunidades');
		     $tipo = mysql_result($valor,$y,'nombre');
		     echo "<option value='$idtipo'>$tipo</option>";
		  }
		}
		public function comboPrograma() {
			include('dbcon.php');
			$sql= "select * from programa where activo='si'";
			$valor = mysql_query($sql,$link) or die ("error en consulta");
			$filas = mysql_num_rows($valor);
			echo "<option value='0'>Elige una opcion</option>";
			for ($y=0;$y<$filas;$y++)
		   {	
		     $idtipo = mysql_result($valor,$y,'idprograma');
		     $tipo = mysql_result($valor,$y,'nombre');
		     echo "<option value='$idtipo'>$tipo</option>";
		  }
		}
	}
     
     /*$ist = new operacionesMysql(); 
     $r=$ist->busqueda('AAMD910326HMCLNG00');
     #print_r($r);
     echo json_encode($r); **/
ob_end_flush();
?>
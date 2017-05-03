<?php  
	$idreg=$_REQUEST['idregidor'];
	$idben=$_REQUEST['idbeneficiario'];
	$idpro=$_REQUEST['programa'];
	$fecha=$_REQUEST['fecha'];

	/*$idreg= 8;
	$idben= 6;
	$idpro= 1;
	$fecha= '2017-04-27';*/

	include_once('class/dbcon.php');
	$buscar = "select * FROM beneficiario_has_programa WHERE beneficiario_idbeneficiario = '$idben' and programa_idprograma = $idpro ";
	$res = mysql_query($buscar,$link) or die ("error en consulta");
	$filas = mysql_num_rows($res);
	if ($filas>0) {
		echo "<h3>Ya se entrego este apoyo anteriormente.</h3>";
		#echo $idben ."  ". $idpro;
		#echo $filas;
	} else {
		 $sql= "call entrega('$idben', '$idpro', '$idreg', '$fecha')";
		 $valor = mysql_query($sql,$link) or die ("error en consulta");
		 if ($valor) {
		 echo "<h3>Se entrego el apoyo.</h3> ";
		 echo $filas;
		} 
		else {
		 echo "<h3>No se entrego el apoyo.</h3>";
		}
	}

	
?>
<?php
include ('class/operacionesMysql');
$boton = $_POST['boton'];
if ($boton=='buscar') {
	$valor = $_POST['valor'];
	$ist = new operacionesMysql(); 
     $r=$ist->busqueda($valor);
     #print_r($r);
     echo json_encode($r);  
}
?>
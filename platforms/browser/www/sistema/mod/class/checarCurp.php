<?php
sleep(1);
include('class/dbcon.php');
if($_REQUEST) {
	$curp 	= $_REQUEST['curp'];
	$query = "select * from beneficiario where curp= '".strtoupper($curp)."'";
	$results = mysql_query( $query) or die('ok');
	
	if(mysql_num_rows(@$results) > 0)
		echo '<div id="Error">Usuario ya existente</div>';
	else
		echo '<div id="Success">Disponible</div>';
}
?>
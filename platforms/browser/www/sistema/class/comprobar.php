<?php
sleep(1);
include('dbcon.php');
if (isset($GET['usuario'])) {
	if($_GET['usuario']) {
	$username 	= $_GET['usuario']; 
	$query = sprintf("select * from regidor where usuario = '%s'",$username);
	$results = mysql_query($query, $link) or die('ok');
	
	if(mysql_num_rows(@$results) > 0)
		echo '<div id="Error">Usuario ya existente </div>';
	else
		echo '<div id="Success">Disponible</div>';
}
}
?>
<?php
$nombre= $_GET['curp'];
#$nombre= 'AAMD910326HMCLNG00';
include ('class/dbcon.php');
$sql="SELECT * FROM beneficiario WHERE curp LIKE '%$nombre%'";
$valor = mysql_query($sql) or die ("error de consulta");
$cuantos = mysql_num_rows($valor);

if ($cuantos==0)
{
	print (" <center color='black'>  <h4> No se encontraron registros para $nombre </h4>");
}
else 
{
	 echo "<h4>Resultados</h4>";
	echo "<div class='table-wrapper'> 
		<table class='alt'>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Curp</th>
					<th>Teléfono</th>
					<th>Entregar</th>
				</tr>
	        </thead> 
	         <tbody>";
for($y=0;$y<$cuantos;$y++)
{
$idben= mysql_result($valor,$y,'idbeneficiario');
$nombre= mysql_result($valor,$y,'nombre');
$apellido= mysql_result($valor,$y,'apellidoPat');
$apellidom= mysql_result($valor,$y,'apellidoMat');
$telefono= mysql_result($valor,$y,'telefono');
$curp= mysql_result($valor,$y,'curp');
echo "<tr><td>$nombre</a></td>
		  <td>$apellido</td>
		  <td>$apellidom</td>
		  <td>$curp</td>
		  <td>$telefono</td>
		  <td><a href='entregar?idben=$idben&beneficiario=$curp' class=button special small'>Entregar</a></td>
		 </tr>";
}
echo "</tbody></table></div>";
}
?>


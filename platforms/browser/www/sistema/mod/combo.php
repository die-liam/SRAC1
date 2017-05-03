<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <?php
	include('class/dbcon.php');
												?>					
 <form>
 	
 	<select name = 'idtipo' id="idtipo"> 
<?php
$sql= "select * from comunidad";
$valor = mysql_query($sql,$link) or die ("error en cosulta");
$filas = mysql_num_rows($valor);
for ($y=0;$y<$filas;$y++)
{
$idtipo = mysql_result($valor,$y,'idcomunidades');
$tipo = mysql_result($valor,$y,'nombre');
echo "<option value='$idtipo'>$tipo</option>";
}
?>
</select>
 </form>


</body>
</html>

<!-- 
<?php 
					/*require('class/conexion.php');
					 $db = new Conexion();
					 $sql = "select * FROM comunidad";
					 $resultado = $db->query($sql);

					 if ($resultado->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{
    $combobit="Nada aqui";
    while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) 
    {
        $combobit .=" <option value='".$row['idcomunidades']."'>".$row['nombre']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
}
else
{
    echo "No hubo resultados";
}

    				
 */?>
-->
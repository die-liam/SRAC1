<?php
			include('dbcon.php'); 
			$curp=$_REQUEST['curp'];
			$sql="SELECT curp FROM beneficiario  WHERE curp='$curp'";  
			$res=mysql_query($sql);  
			$total=mysql_num_rows($res);  
			if($total>0)  
			{   

				 echo '<div id="Error">Ciudadano ya existente</div>';
			}  
			else  
			{			  
  			echo '<div id="Success">Disponible</div>'; 
			}  
 ?>
<?php
	echo("<nav id='menu'>
			  <header class='major'>
										<h2>Menu</h2>
			  </header>
			  <ul>
				  <li><a href='index'>Página Principal</a></li>
										
				  <li>
					  <span class='opener'>Regidores</span>
					  <ul>
						  <li><a href='mod/altaRegidor'>Agregar</a></li>
						  <li><a href='#'>Modificar</a></li>
					  </ul>
				  </li>
				  <li>
					  <span class='opener'>Programas</span>
					  <ul>
						  <li><a href='mod/altaPrograma'>Agregar</a></li>
						  <li><a href='#'>Modificar</a></li>
					  </ul>
				  </li>
					 <li>
					  <span class='opener'>Beneficiarios</span>
					  <ul>
					  	  <li><a href='mod/altaBeneficiario'>Agregar beneficiario</a></li>	 
						  <li><a href='mod/entregaApoyo'>Entrega de apoyo</a></li>
						  <li><a href='#'>Consultar</a></li>
					  </ul>
				  </li>										

				  <li><a href='cerrar?salir=cerrar_sesion'>Salir</a></li>						
			  </ul>
		  </nav>");
?>
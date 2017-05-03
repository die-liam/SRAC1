function curp{
	$.ajax({
		url:'pruebacurp.php',
		type: 'POST',
		data: 'valor='+valor+'&boton=buscar'
	}). done(function(resp){
		alert(resp);
	});
}
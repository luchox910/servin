



<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script type="text/javascript"> 
				//Función que envía la petición ajax.
				function buscar_cedula(){
                  
					
				   $.ajax({
					  url: 'send1',
					  type: 'GET',
					  timeout: 10000,
					  dataType: "html",
					 // data: $("#busca").serialize(), 
					 //data: {"cedula" : "1044427110"}, 
					  data: {"nombre":$("#nombre").val()},
					  //data: {"cedula":$("#cedula").val(),"nombres":$("#nombres").val(),"apellidos":$("#apellidos").val(),"correo":$("#correo").val(),"telefono":$("#telefono").val()},
					 //data: {"cedula" : "1044427110"},
					  beforeSend: function(){
						// $("#respuesta").html('Buscando usuario...');
					  },
					  error: function(){
						 $("#respuesta").html();
							alert('Ha surgido un error.')
						 },
					  success: function(respuesta){
						 
						 
						 
	
						 $("#respuesta").html(respuesta);
	
	
						 //alert('respuesta exitosa')
					  }
				   })
				} 
	
	
				
				$(document).ready(function(){
					
					
								   
				   $("#enviar").click(function(){
					  buscar_cedula();
					
					  
				   }
				   
				   
				   );
				});
			</script>
</head>

<body>
<button id="enviar" name="enviar"> prueba</button>
<br>
<input type="text" id="nombre" name="nombre">

<div id="respuesta" name="respuesta"></div>

</body>




</html>
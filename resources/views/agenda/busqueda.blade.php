@extends('admin.layout')
@section('content')




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script type="text/javascript"> 
				//Función que envía la petición ajax.
				function buscarf(){
                  
					
				   $.ajax({
					  url: 'busquedax',
					  type: 'GET',
					  timeout: 10000,
					  dataType: "html",
					 // data: $("#busca").serialize(), 
					 //data: {"cedula" : "1044427110"}, 
					  data: {"nombre":$("#nombre").val(),"fecha":$("#fecha").val(),"fechaf":$("#fechaf").val(),"vx":"x"},
					  
					
					  success: function(data){
						 
						  $.each(data, function (i, item) {
							  
							  alert("dd");
 
  });
						 
						 
              
					  }
				   })
				} 
	
	
				
				$(document).ready(function(){
					
					
								   
				   $("#buscar").click(function(){
					  buscarf();
					
					  
				   }
				   
				   
				   );
				});
			</script>






<div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Buscador de Servicios</h3>
              
              
            </div>
            <!-- /.card-header -->
            
              @if($mensaje= Session::get('success'))
              <div class="alert alert-success" >
                <p>{{$mensaje}}</p>
              

              @endif

              </div>
            
            
            <div class="card-body">
         
            <div class="row" >





			<div class="col-sm-6">


			<div>

<div class="input-group input-group-sm">
 <input type="text" id="nombre" name="nombre"  palceholder="Referencia o Nombre empresa" class="form-control">
<span class="input-group-append">
 <button type="button" id="buscar" name="buscar" class="btn btn-info btn-flat">Buscar</button>
 </span>
</div>

</div>
</div>

<div class="col-sm-4">


<div >

<div class="input-group input-group-sm">
<input type="date" id="fecha" name="fecha" class="form-control" data-date-format="YY-MM-DD"><label>F. Ini</label>
<span class="input-group-append">

</span>
</div>




<div class="input-group input-group-sm">
<input type="date" id="fechaf" name="fechaf" class="form-control" data-date-format="YY-MM-DD"><label>F. Fin</label>
<span class="input-group-append">

</span>
</div>

</div>
</div>










      </div>
              












              <br>
            











<div id="respuesta" name="respuesta">
</div>








            </div>
            <!-- /.card-body -->




          </div>
          <!-- /.card -->

         
          <!-- /.card -->
        </div>
        <!-- /.col -->









        
      
@stop
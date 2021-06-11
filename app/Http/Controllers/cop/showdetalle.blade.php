@extends('admin.layout')
@section('content')




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script type="text/javascript"> 
				//Función que envía la petición ajax.
				function buscarf(){
                  
					
				   $.ajax({
					  url: "{{route('send1')}}",
					  type: "GET",
					  timeout: 10000,
					  dataType: "html",
					 // data: $("#busca").serialize(), 
					 data: {"id" : {{$cabecera->serca_id}} },
					 // data: {"nombre":$("#nombre").val(),"fecha":$("#fecha").val()},
					  //data: {"cedula":$("#cedula").val(),"nombres":$("#nombres").val(),"apellidos":$("#apellidos").val(),"correo":$("#correo").val(),"telefono":$("#telefono").val()},
					 //data: {"cedula" : "1044427110"},
					  beforeSend: function(){
						// $("#respuesta").html('Buscando usuario...');
					  },
					  error: function(){
						 $("#respuesta").html();
							alert('Ha surgido un error grave.')
						 },
					  success: function(respuesta){
						 
						 
						 
              
						 $("#respuesta").html(respuesta);
	
	
						 alert('Correo enviado Correctamente')
					  }
				   })
				} 
	
	
				
				$(document).ready(function(){
					
					
								   
				   $("#send").click(function(){
					  buscarf();
					
					  
				   }
				   
				   
				   );
				});
			</script>









        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Listado de Items por Servicio</h3>
              
              
            </div>
            <br>

            <div class="row">
            <div class="col-5">
            <label>&nbsp;&nbsp;&nbsp;&nbsp;Servicio No : {{$cabecera->serca_id}}  </label>
             <br>
             <label>&nbsp;&nbsp;&nbsp;&nbsp;Referencia: {{$cabecera->serca_referencia}}</label>
             <br>
             <label>&nbsp;&nbsp;&nbsp;&nbsp;Fecha Ingreso: {{$cabecera->serca_fecha}}</label>
</div>


            

<div class="col-4">
<label>Empresa : {{$cabecera->serca_empresa_nombre}} </label>
<br>
<label>NIT:  {{$cabecera->serca_empresa_nit}} </label>
<br>
<label>Orden:  {{$cabecera->serca_orden}} </label>          

            
</div>

<div class="col-3">
            <label>Estado : {{$cabecera->serca_estado}}  </label>
  
</div>

            </div>
         

           
            <!-- /.card-header -->
            
              @if($mensaje= Session::get('success'))
              <div class="alert alert-success" >
                <p>{{$mensaje}}</p>
              

              @endif

              </div>
            
              
            
            <div class="card-body">
         
            <div style="width:150px;">

            
             
              </div>
              <form role="form" action="{{route('grabaritemd')}}" method="post">
              {{csrf_field()}}

              <div class="row">
              
                    <div class="col-sm-5">
                      
                      <div class="form-group">
                        
                        <select class="form-control" id='item' name='item'>
                        @foreach($item as $items)
                          <option value='{{$items->tpr_codigo}}'>{{$items->tpr_items}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>


                    <div class="col-sm-2">
                      
                      <div class="form-group">
                      <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad">
                      
                       </div>
                      </div>

                      <div class="col-sm-2">
                      
                      <div class="form-group">
                      <button type="submit" class="btn btn-primary">Agregar</button>
                       </div>


                      </div>
                      <div class="col-sm-3">
                      
                      <div class="form-group">
                   <button class="btn btn-primary" type="button" name="send" id="send">Send Mail</button>
                       </div>


                      </div>
<div id="respuesta" name="respuesta"></div>

                      <div class="col-sm-4">
                      
                      <div class="form-group">
                      <input type="hidden" class="btn btn-primary" id='codigo' name='codigo' value="{{$cabecera->serca_id}}"> 
                       </div>


                      </div>
                    

                    </div>
              

                    </form>
              <br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Referencia</th>
                  <th>Cantidad</th>
                  <th>Accion</th>
                  
                  
                  
                </tr>
                </thead>
                <tbody>
                
                @foreach($detalle as $det)
               
                <tr>
                <td>{{$det->serde_codservicio}} </td>
                  <td>{{$det->serde_item}} </td>
                  <td>{{$det->serde_cantidad}}</td>
                  
                  
                  
                  <td style="width:100px;">
                <a href="{{route('borra_item', ['orden' => $det->serde_codservicio, 'item' => $det->serde_item])}}">  <i class="glyphicon glyphicon-pencil"><button class="btn btn-xs btn-warning" type="submit">Borrar</button></i></a>

                   </form>
                  
                  
                  </td>
                
               
                
                </tr>
                
                </tbody>
                @endforeach
               
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

         
          <!-- /.card -->
        </div>
        <!-- /.col -->
      
@stop
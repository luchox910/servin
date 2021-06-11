@extends('admin.layout')
@section('content')




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script type="text/javascript"> 
				//Función que envía la petición ajax.
				function buscarf(){
                  
					
				   $.ajax({
					  url: "{{route('send1')}}",
					  type: "get",
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
							alert('Ha surgido un error.')
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


<script>
 function confirmarb()
    {
	alert("validar mensaje");  
    }
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
             <label>&nbsp;&nbsp;&nbsp;&nbsp;Referencia : {{$cabecera->serca_referencia}}</label>
             <br>
             <label>&nbsp;&nbsp;&nbsp;&nbsp;Fecha Ingreso : {{$cabecera->serca_fecha}}</label>
             <br>
             <label>&nbsp;&nbsp;&nbsp;&nbsp;Fecha aprox Entrega : {{$cabecera->serca_fecha_entrega}}</label>
             <br>
             <label>&nbsp;&nbsp;&nbsp;&nbsp;Aspectos Generales : {{$cabecera->serca_general}}</label>
</div>


            

<div class="col-4">
<label >Empresa : {{$cabecera->serca_empresa_nombre}} </label>
<br>
<label>NIT:  {{$cabecera->serca_empresa_nit}} </label>
<br>
<label>Orden:  {{$cabecera->serca_orden}} </label>          

<br>
<label>Desc:  {{$cabecera->serca_descc}} </label>         
<br>
             <label>Condiciones de pago : {{$cabecera->serca_codicionp}}</label>

            
</div>

<div class="col-3">
            <label>Estado : {{$cabecera->serca_estado}}  </label>
            <br>
            <label>Contacto : {{$cabecera->serca_contacto}} -  {{$cabecera->serca_cargo}} </label>

            
            <br>
            <label>NAS : {{$cabecera->serca_nas}}  </label>
  
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
                          <option value='{{$items->tpr_codp}}'>{{$items->tpr_items}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>


                    <div class="col-sm-2">
                      
                      <div class="form-group">
                      <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad" required>
                      
                       </div>
                      </div>

                      <div class="col-sm-2">
                      
                      <div class="form-group">
                      <button type="submit" class="btn btn-primary">Agregar</button>
                       </div>


                      </div>
                      <div class="col-sm-3">
                      
                      <div class="form-group">
                   <button class="btn btn-primary" type="button" name="send" id="send" onclick="return confirm('Seguro Cambiar estado a enviado?')">Send Mail</button>
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
                  <th>Referencia</th>
                  <th>Referencia</th>
                  <th>Cantidad</th>
                  <th>Accion</th>
                  
                  
                  
                </tr>
                </thead>
                <tbody>
                
                @foreach($detalle as $det)
               
                <tr>
                <td>{{$det->serde_item}} </td>
                  <td>{{$det->tpr_items}} </td>
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
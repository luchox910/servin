@extends('admin.layout')
@section('content')


<script>
 function confirmarb()
    {
	alert("validar mensaje");  
    }
  </script>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Listado de Novedades</h3>
              
              
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
              
              <br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Servicio</th>
                  <th>Novedad</th>                  
                  <th>Comentarios</th>
                  <th>Fecha</th>
                  <th>Usuario</th>
                  
                </tr>
                </thead>
                <tbody>
                
                @foreach($nov as $ls)
                <tr>
                  <td>{{$ls->nov_id}}</td>
                  <td>{{$ls->nov_novedad}}</td>
                  
                  <td>{{$ls->nov_comentarios}}</td>
                  <td>{{$ls->nov_fecha}}</td>
                  <td>{{$ls->nov_usuario}}</td>
                  
                 
                
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

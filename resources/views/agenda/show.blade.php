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
              <h3 class="card-title">Listado de Servicios Pendietes</h3>
              
              
            </div>
            <!-- /.card-header -->
            
              @if($mensaje= Session::get('success'))
              <div class="alert alert-success" >
                <p>{{$mensaje}}</p>
              

              @endif

              </div>
            
            
            <div class="card-body">
         
            <div style="width:150px;">

            <a a href="{{route('crear_servicio')}}"> <button type="button" class="btn btn-block bg-gradient-success btn-sm" >Nuevo</button></a>
             
              </div>
              
              <br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Empresa</th>
                  <th>Referencia</th>                  
                  <th>Estado</th>
                  <th>Fecha de Creacion</th>
                  <th>Orden</th>
                  <th>Accion</th>
                  <th>Accion</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($lservicios as $ls)
                <tr>
                  <td>{{$ls->serca_empresa_nombre}}</td>
                  <td>{{$ls->serca_referencia}}</td>
                  
                  <td>{{$ls->serca_estado}}</td>
                  <td>{{$ls->serca_fecha}}</td>
                  <td>{{$ls->serca_orden}}</td>
                  
                  <td style="width:100px;">
                  <a href="{{route('editca', $ls->serca_id)}}" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil">Edit</i></a>


                  <a href="{{route('estado99',  $ls->serca_id )}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-pencil">borrar</i></a>

                  </td>
                
                  <td>
                  <a href="{{route('gdetalle', $ls->serca_id)}}" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil">Inicia</i></a>
                  <a href="{{route('vnovedad', $ls->serca_id)}}" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil">See</i></a>
                  
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

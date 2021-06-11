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
              <h3 class="card-title">Listado de Clientes</h3>
              
              
            </div>
            <!-- /.card-header -->
            
              @if($mensaje= Session::get('success'))
              <div class="alert alert-success" >
                <p>{{$mensaje}}</p>
              

              @endif

              </div>
            
            
            <div class="card-body">
         
            <div style="width:150px;">
             <a a href="{{route('crear')}}"> <button type="button" class="btn btn-block bg-gradient-success btn-sm" >Nuevo</button></a>
              </div>
              
              <br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id Cliente</th>
                  <th>Nombre / Razon</th>
                  <th>Correo</th>
                  <th>Tel</th>
                  <th>Accion</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($user as $users)
                <tr>
                  <td>{{$users->cli_cedula}}</td>
                  <td>{{$users->cli_nombres}}</td>
                  
                  <td>{{$users->cli_correo}}</td>
                  <td> {{$users->cli_telefono}}</td>
                  <td style="width:100px;">
                  <a href="{{action('clientesController@edit', $users->cli_cedula)}}" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil">Edit</i></a>


                  <a href="{{route('borra_cli',  $users->cli_cedula)}}" class="btn btn-danger btn-xs" onclick="return confirm('Los usuarios registrados para este cliente Ya no seran visibles')"><i class="glyphicon glyphicon-pencil">borrar</i></a>

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
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
              <h3 class="card-title">Listado de Usuarios</h3>
              
              
            </div>
            <!-- /.card-header -->
            
              @if($mensaje= Session::get('success'))
              <div class="alert alert-success" >
                <p>{{$mensaje}}</p>
              

              @endif

              </div>
            
            
            <div class="card-body">
         
            <div style="width:150px;">
             <a a href="{{route('register')}}"> <button type="button" class="btn btn-block bg-gradient-success btn-sm" >Nuevo</button></a>
              </div>
              
              <br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Empresa</th>
                  <th>Rol</th>
                  <th>Accion</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($user as $users)
                <tr>
                  <td>{{$users->name}}</td>
                  <td>{{$users->email}}</td>
                  <td> {{$users->cli_nombres}}</td>
                  <td>{{$users->rol}}</td>
                  
                  <td style="width:100px;">
                  <a href="{{route('editusers', $users->id)}}" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil">Edit</i></a>


                  <a href="{{route('borra',  $users->cli_cedula)}}" class="btn btn-danger btn-xs" onclick="return confirm('Se cambio estado a Enviado EC')"><i class="glyphicon glyphicon-pencil">borrar</i></a>

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
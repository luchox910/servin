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
              <h3 class="card-title">Listado de Prefijos</h3>
              
              
            </div>
            <!-- /.card-header -->
            
              @if($mensaje= Session::get('success'))
              <div class="alert alert-success" >
                <p>{{$mensaje}}</p>
              

              @endif

              </div>
            
            
            <div class="card-body">
         
            <div style="width:150px;">
             <a a href="{{route('create_prefijo')}}"> <button type="button" class="btn btn-block bg-gradient-success btn-sm" >Nuevo</button></a>
              </div>
              
              <br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Prefijo</th>
                  <th>Descripcion</th>
                  <th>Accion</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($lprefijo as $lprefijos)
                <tr>
                  <td>{{$lprefijos->pre_codigo}}</td>
                  <td>{{$lprefijos->pre_prefijo}}</td>
                  <td> {{$lprefijos->pre_desc}}</td>
                  
                  
                  <td style="width:100px;">
                  <a href="{{route('edit_pre', $lprefijos->pre_codigo)}}" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil">Edit</i></a>


                  <a href="{{route('borra_pre',  $lprefijos->pre_codigo)}}" class="btn btn-danger btn-xs" onclick="return confirm('Esta Seguro de Inactivar el prefijo?')"><i class="glyphicon glyphicon-pencil">borrar</i></a>

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
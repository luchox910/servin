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
              <h3 class="card-title">Listado de items</h3>
              
              
            </div>
            <!-- /.card-header -->
            
              @if($mensaje= Session::get('success'))
              <div class="alert alert-success" >
                <p>{{$mensaje}}</p>
              

              @endif

              </div>
            
            
            <div class="card-body">
         
            <div style="width:150px;">
             <a a href="{{route('crear_item')}}"> <button type="button" class="btn btn-block bg-gradient-success btn-sm" >Nuevo</button></a>
              </div>
              
              <br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Item Desc</th>
                  <th>CxU</th>
                  <th>Valor</th>
                  <th>Accion</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($item as $items)
                <tr>
                  <td>{{$items->tpr_codp}}</td>
                  <td>{{$items->tpr_items}}</td>
                  
                  <td>{{$items->tpr_cxu}}</td>
                  <td> {{$items->tpr_valor}}</td>
                  <td style="width:100px;">
                  
                  <a href="{{route('editcat', $items->tpr_codigo )}}" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil">Edit</i></a>

                  <a href="{{route('borrac',  $items->tpr_codigo)}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-pencil">borrar</i></a>

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
@extends('admin.layout')
@section('content')


<div class="col-center">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos Prefijo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('update_pre')}}" method="post">
              {{csrf_field()}}
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Prefijo</label>
                    <input type="text" class="form-control" id="prefijo" name="prefijo" required placeholder="nombre user" value="{{$pref->pre_prefijo}}">
                  </div>
                  

                  
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion Prefijo</label>
                    <input type="text" class="form-control" id="predesc" name="predesc" required placeholder=" Desc de prefijo" value="{{$pref->pre_desc}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">ID</label>
                    <input type="hidden" class="form-control" id="precodigo" name="precodigo"  value="{{$pref->pre_codigo}}">
                  </div>

                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>



      @stop
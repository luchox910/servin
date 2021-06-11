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
              <form role="form" action="{{route('grabar_pre')}}" method="post">
              {{csrf_field()}}
                <div class="card-body">

               
                  

                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Prefijo</label>
                    <input type="text" class="form-control" id="prefijo" name="prefijo" required placeholder="prefijo">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descriocion Prefijo</label>
                    <input type="text" class="form-control" id="predesc" name="predesc" required placeholder="Desc Prefijo">
                  </div>
                 
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>



      @stop
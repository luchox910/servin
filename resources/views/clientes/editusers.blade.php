@extends('admin.layout')
@section('content')


<div class="col-center">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos Cliente</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('updateusers')}}" method="post">
              {{csrf_field()}}
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nombbre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="nombre user" value="{{$user->name}}">
                  </div>
                  

                  <div class="form-group">
                    <label for="exampleInputPassword1">Rol</label>
                    
                    <select class="form-control" id='rol' name='rol'>
                        
                          <option value='2'>Cliente</option>
                          <option value='3'>Admin</option>
                          
                        </select>
                  </div>

                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" class="form-control" id="pass" name="pass" required placeholder=" nuevo password" value="">
                  </div>

                  <div class="form-group">
                    
                    <input type="hidden" class="form-control" id="id" name="id"  value="{{$user->id}}">
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>



      @stop
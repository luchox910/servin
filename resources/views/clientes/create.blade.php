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
              <form role="form" action="{{route('grabar')}}" method="post">
              {{csrf_field()}}
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputPassword1">Tipo</label>
                    
                    <select class="form-control" id='tipo' name='tipo'>
                        
                          <option value='1'>Persona Natural</option>
                          <option value='2'>Empresa</option>
                          
                        </select>
                  </div>
                  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Cedula / NIT</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" required placeholder="Cedula">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nombre / Razon</label>
                    <input type="text" class="form-control" id="nombres" name="nombres" required placeholder="nombres">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" required placeholder="telefono">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" required placeholder="correo">
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
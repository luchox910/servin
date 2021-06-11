@extends('admin.layout')
@section('content')


<div class="col-center">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Crear Servicio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('update_servicio_ca', $serca-> serca_id)}}" method="post">
              {{csrf_field()}}
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Placa o Referencia</label>
                    <input type="text" class="form-control" id="referencia" name="referencia" required placeholder="Placa o referencia"  value="{{$serca-> serca_referencia}}">
                  </div>
                


                  <select class="form-control" id='estado' name='estado' >
                        
                          <option value='P'>Pendiente</option>
                          <option value='EC'>Enviada a cliente</option>
                          <option value='T'>Terminada</option>
                          <option value='A'>Aprobado</option>
                          <option value='R'>Rechazado por Cliente</option>
                          <option value="{{$serca-> serca_estado}}" selected>{{$serca-> serca_estado}}</option>
                          
                        </select>


                        <div class="form-group">
                    <label for="exampleInputEmail1">Orden No</label>
                    <input type="text" class="form-control" id="orden" name="orden" required placeholder="Numero de Orden"  value="{{$serca-> serca_orden}}" maxlength="10">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">NAS</label>
                    <input type="text" class="form-control" id="nas" name="nas"  placeholder="NAS"  value="{{$serca-> serca_nas}}" maxlength="19">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Desc. Cotizacion</label>
                    <input type="text" class="form-control" id="descc" name="descc" required placeholder="descripcion Cotizacion"  value="{{$serca-> serca_descc}}" maxlength="70">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Contacto</label>
                    <input type="text" class="form-control" id="contacto" name="contacto"  placeholder="Nombre contacto"  value="{{$serca-> serca_contacto}}" maxlength="39"> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Cargo</label>
                    <input type="text" class="form-control" id="cargo" name="cargo"  placeholder="cargo contacto"  value="{{$serca-> serca_cargo}}" maxlength="39">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Condiciones de pago</label>
                    <input type="text" class="form-control" id="condiciones" name="condiciones"  placeholder="Condiciones de pago" value="{{$serca-> serca_codicionp}}" maxlength="39">
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
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
              <form role="form" action="{{route('grabarServicioC')}}" method="post">
              {{csrf_field()}}
                <div class="card-body">
                
                  

                  <div class="form-group">
                    <label for="exampleInputPassword1">Empresa</label>
                    <select class="form-control" id="nit" name="nit" >

                    @foreach($empresas as $empre)
                    <option value="{{$empre->cli_cedula}}"> {{$empre->cli_nombres}}</option>
                    @endforeach
                    </select>
                    </select>
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Numero de Orden*</label>
                    <input type="text" class="form-control" id="orden" name="orden" required placeholder=" Numero Orden" maxlength="10">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Placa o Referencia*</label>
                    <input type="text" class="form-control" id="referencia" name="referencia" required placeholder="Placa o referencia" maxlength="10">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Supervisor o Inverventor</label>
                    <input type="text" class="form-control" id="contacto" name="contacto"  placeholder="contacto" maxlength="39">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Cargo</label>
                    <input type="text" class="form-control" id="cargo" name="cargo"  placeholder="cargo" maxlength="39">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">NAS</label>
                    <input type="text" class="form-control" id="nas" name="nas"  placeholder="NAS" maxlength="19">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion de Cotizacion*</label>
                    <input type="text" class="form-control" id="descc" name="descc" required placeholder="Descripcion cotizacion" maxlength="70">
                  </div>


                  <div class="form-group">
                  
                  <label for="exampleInputEmail1">Fecha Aprox de Entrega*</label>             
<input type="date" id="fecha_entrega" name="fecha_entrega" class="form-control" data-date-format="YY-MM-DD" required >
<span class="input-group-append">

</span>
</div>

 
<div class="form-group">
                    <label for="exampleInputEmail1">Aspectos generales</label>
                    <input type="text" class="form-control" id="general" name="general"  placeholder="Aspectos generales" maxlength="49">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Condiciones de pago</label>
                    <input type="text" class="form-control" id="condiciones" name="condiciones"  placeholder="Condiciones de pago" maxlength="39">
                  </div>


                  </div>


                  





                
                
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
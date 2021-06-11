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
              <form role="form" action="{{route('grabaritem')}}" method="post">
              {{csrf_field()}}
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Prefijo</label>
                    <select class="form-control" id="prefijo" name="prefijo">
                    @foreach($prefijo as $pref)
                    <option value="{{$pref->pre_prefijo}}"> {{$pref->pre_prefijo}}</option>
                    @endforeach
                    </select>
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion Item</label>
                    <input type="text" class="form-control" id="item" name="item" placeholder="Descripcion Item" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">CxU</label>
                    <input type="text" class="form-control" id="cu" name="cu" placeholder="CxU" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Valor</label>
                    <input type="text" class="form-control" id="valor" name="valor" placeholder="valor" required>
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
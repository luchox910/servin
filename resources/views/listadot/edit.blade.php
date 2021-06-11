@extends('admin.layout')
@section('content')


<div class="col-center">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos Items</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('updatecat', $item-> tpr_codigo)}}" method="post">
              {{csrf_field()}}
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Item Desc</label>
                    <input type="text" class="form-control" id="desc" name="desc" placeholder="descripcion item" value="{{$item-> tpr_items}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">CxU</label>
                    <input type="text" class="form-control" id="cxu" name="cxu" placeholder="cXu" value="{{$item-> tpr_cxu}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Valor</label>
                    <input type="text" class="form-control" id="valor" name="valor" placeholder="valor" value="{{$item-> tpr_valor}}">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>



      @stop
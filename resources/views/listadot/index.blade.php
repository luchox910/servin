@extends('admin.layout')
@section('content')
<div class="row">
<div class="col-lg-3 col-6">
            <!-- small box clientes -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$user}}</h3>

                <p>Clientes Registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box ULTIMOS-->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Ultimo Mes</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
@stop
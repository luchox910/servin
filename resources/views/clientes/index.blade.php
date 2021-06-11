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
                <h3>{{$ser_total}}</h3>

                <p>Total Servicios registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box ULTIMOS-->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$ser_pen}}</h3>

                <p>Servicios Pendientes</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>


        <div class="row">
<div class="col-lg-3 col-6">
            <!-- small box clientes -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$ser_ec}}</h3>

                <p>Servicios Enviados al cliente(EC)</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box ULTIMOS-->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$ser_ac}}</h3>

                <p>Aprobados por el cliente (PG)</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box ULTIMOS-->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$ser_rc}}</h3>

                <p>Servicios Rechazados por el cliente</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
@stop
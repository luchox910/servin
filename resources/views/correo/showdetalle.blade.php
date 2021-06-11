






<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Servin MR | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/adminlte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
 




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script type="text/javascript"> 
				//Función que envía la petición ajax.
				function buscarf(){
                  
					
				   $.ajax({
					  url: "http://localhost/servin/public/send1",
					  type: "get",
					  timeout: 10000,
					  dataType: "html",
					 // data: $("#busca").serialize(), 
					 data: {"id" : {{$cabecera->serca_id}} },
					 // data: {"nombre":$("#nombre").val(),"fecha":$("#fecha").val()},
					  //data: {"cedula":$("#cedula").val(),"nombres":$("#nombres").val(),"apellidos":$("#apellidos").val(),"correo":$("#correo").val(),"telefono":$("#telefono").val()},
					 //data: {"cedula" : "1044427110"},
					  beforeSend: function(){
						// $("#respuesta").html('Buscando usuario...');
					  },
					  error: function(){
						 $("#respuesta").html();
							alert('Ha surgido un error.')
						 },
					  success: function(respuesta){
						 
						 
						 
              
						 $("#respuesta").html(respuesta);
	
	
						 alert('Correo enviado Correctamente')
					  }
				   })
				} 
	
	
				
				$(document).ready(function(){
					
					
								   
				   $("#send").click(function(){
					  buscarf();
					
					  
				   }
				   
				   
				   );
				});
			</script>




</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('/adminlte/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('/adminlte/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('/adminlte/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{$cabecera->serca_empresa_nombre}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
           

              
              
            
          </li>
          
          </li>
          
        </ul>
      </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
           
          </li>
		  
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>

    
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Servin MR</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      








    <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Listado de Items por Servicio</h3>
              
              
            </div>
            <br>

            <div class="row">
            <div class="col-4">
            <label>Servicio No : {{$cabecera->serca_id}}  </label>
             <br>
             <label>Referencia: {{$cabecera->serca_referencia}}</label>
             <br>
             <label>Fecha Ingreso: {{$cabecera->serca_fecha}}</label>
             <br>
             <label>Fecha aprox Entrega : {{$cabecera->serca_fecha_entrega}}</label>
             <br>
             <label>Aspectos Generales : {{$cabecera->serca_general}}</label>
</div>


            

<div class="col-4">
<label>Empresa : {{$cabecera->serca_empresa_nombre}} </label>
<br>
<label>NIT:  {{$cabecera->serca_empresa_nit}} </label>
<br>
<label>Orden:  {{$cabecera->serca_orden}} </label>  
<br>
<label>Desc:  {{$cabecera->serca_descc}} </label>
<br>
<label>Condiciones de pago : {{$cabecera->serca_codicionp}}</label>


            
</div>

<div class="col-4">
            <label>Estado : {{$cabecera->serca_estado}}  </label>
            <br>
            <label>Contacto : {{$cabecera->serca_contacto}} -  {{$cabecera->serca_cargo}} </label>

            
            <br>
            <label>NAS : {{$cabecera->serca_nas}}  </label>
  
</div>

            </div>
         

           
            <!-- /.card-header -->
            
              @if($mensaje= Session::get('success'))
              <div class="alert alert-success" >
                <p>{{$mensaje}}</p>
              

              @endif

              </div>
            
              
            
            <div class="card-body">
         
            <div style="width:150px;">

            
             
              </div>
              <form role="form" action="{{route('graba_novedad')}}" method="post">
              {{csrf_field()}}

              <div class="row">
              
                    <div class="col-sm-6">
                      
                      <div class="form-group">
                      
                        <textarea class="form-control" rows="3"  id="comentarios" placeholder="comentarios ..."></textarea>
                       
                      </div>
                    </div>


                   

                      <div class="col-sm-2">
                      
                      <div class="form-group">
                     <select class="form-control" id="nov" name="nov">
                     <option value="A">Aprobar</option>
                     <option value="R">Rechazar</option>
                     </select>
                       </div>
                       <input type="hidden" id="codigo" name="codigo" value=" {{$cabecera->serca_id}}"></input>


                      </div>
                      <div class="col-sm-3">
                      
                      <div class="form-group">
                   <button class="btn btn-primary" type="submit" >Enviar Novedad</button>
                       </div>


                      </div>
<div id="respuesta" name="respuesta"></div>

                      <div class="col-sm-4">
                      
                      <div class="form-group">
                      
                       </div>


                      </div>
                    

                    </div>
              

                    </form>
              <br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Cod Referencia</th>
                  <th>Item Desc</th>
                  <th>Cantidad</th>
                  
                  
                  
                  
                </tr>
                </thead>
                <tbody>
                
                @foreach($detalle as $det)
               
                <tr>
               
                  
                <td>{{$det->serde_item}} </td>
                

                <td>{{$det->tpr_items}} </td>
                <td>{{$det->serde_cantidad}}</td>
                  
                  
                  
                  

                   </form>
                  
                  
                  
                
               
                
                </tr>
                
                </tbody>
                @endforeach
               
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

         
          <!-- /.card -->
        </div>
        <!-- /.col -->









      </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Servin MR</h5>
      
	  <a   href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
             
              <p>
			  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                 Salir
                
				
				
              </p>
            </a>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/adminlte/dist/js/adminlte.min.js')}}"></script>

</body>
</html>





















      
<?php
	session_start();

    $varses1 = $_SESSION['usuario'];
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $date = date( "Y-m-d" );
    
    if($varses1== null|| $varses1=''){
	header("Location: login.php");
	echo "NO";
	die();
	
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Inmobiliaria UBP | Administracion</title>

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.css" integrity="sha512-gOfBez3ehpchNxj4TfBZfX1MDLKLRif67tFJNLQSpF13lXM1t9ffMNCbZfZNBfcN2/SaWvOf+7CvIHtQ0Nci2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
  <!-- Favicons -->
<link rel="icon" href="../imagenes/iconoadmin.png">

<!-- CSS de datatables-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.min.css" >
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-html5-1.6.2/b-print-1.6.2/datatables.min.css"/>
	

<meta name="msapplication-config" content="https://getbootstrap.com//docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>

<body id="page-top">
<style>
    .bg-gradient-dark {
    background-color: #343a40;
    background-image: linear-gradient(
    180deg
    , #343a40 10%, #343a40 100%);
    background-size: cover;
}
</style>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Inmobiliaria UBP<sup>Admin</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Ajustes
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Configuraciones</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pagina:</h6>
            <a class="collapse-item" href="http://cpanel.g2.develnet.net/" target="_blank">cPanel</a>
            <a class="collapse-item" href="http://cpanel.g2.develnet.net/cpsess8407639713/3rdparty/phpMyAdmin/index.php" target="_blank">phpMyAdmin</a>
            <a class="collapse-item" href="https://g2.develnet.net/" target="_blank">Ir al inicio</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Datos
      </div>

      <!-- Nav Item - Casas Alquiler -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Casas Alquileres</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Archivo:</h6>
            <a class="collapse-item" href="Alquileres/casasDisp.php">Casas Disponibles</a>
            <a class="collapse-item" href="Alquileres/casasOcup.php">Casas Ocupadas</a>
            <a class="collapse-item" href="Alquileres/tablaAlquileres.php">Todas las Casas</a>
          </div>
        </div>
      </li>
    
      
      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="tablaSolicitudes.php">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Solicitudes</span></a>
      </li>
    
    <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
    
      <!-- Nav Item - Charts -->
      <li class="nav-item ">
        <a class="nav-link" href="tablaInquilinos.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Inquilinos</span></a>
      </li>

    <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- Fin de Sidebar -->

    <!-- Seccion -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main  -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
        

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['usuario']; ?></span>
                <img class="img-profile rounded-circle" src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal2">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
            
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       <div class="container-fluid">
           
          <!-- Page Heading -->
          
            <h1 class="h3 mb-4 text-gray-800">Tabla de Solicitudes</h1>
            <hr>
            <p class="mb-4">Aqui se muestran todas las solicitudes para alquilar o copmprar una casa presentada en la pagina principal.</p>
          
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-black">Listado de Solicitudes</h6>
            </div>
            <div class="card-body">
                
                <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pendientes</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Confirmadas</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Rechazadas</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
       <!-- TABLA -->
                          <table class="table table-hover dataTable no-footer" id="tablaTodas" >
                              <div class="dropdown">
                            </div>
                              <br>
                            <thead>
                              <th><center>ID Solicitud</center></th>
                              <th><center>ID Persona</center></th>
                              <th><center>ID Casa</center></th>
                              <th><center>Estado</center></th>
                              <th><center>Fecha de Solicitud</center></th>
                              <th><center>Numero Solicitud</center></th>
                              <th><center>Meses Alquiler</center></th>
                              <th><center>Acciones</center></th>
                            </thead>                            
                            <tbody align="center">
                                
                            </tbody>
                          </table>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
       <!-- TABLA -->
                          <table class="table table-hover dataTable no-footer" style="widht: auto;" id="tablaConfirmadas" >
                              <div class="dropdown">
                            </div>
                              <br>
                            <thead>
                              <th><center>ID Solicitud</center></th>
                              <th><center>ID Persona</center></th>
                              <th><center>ID Casa</center></th>
                              <th><center>Estado</center></th>
                              <th><center>Fecha de Solicitud</center></th>
                              <th><center>Numero Solicitud</center></th>
                              <th><center>Meses Alquiler</center></th>
                              <th><center>Acciones</center></th>
                            </thead>                            
                            <tbody align="center">
                                
                            </tbody>
                          </table>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <br>
                        <button type="button" onclick="if(confirm('Borrar todas las solicitudes con estado rechazado?')){ clearSolicitudesRechazadas() }" class="btn btn-danger">Borrar Todas las Solicitudes</button>
                        <hr>
       
       <!-- TABLA -->
                          <table class="table table-hover dataTable no-footer" style="widht: auto;" id="tablaRechazadas" >
                              <div class="dropdown">
                            </div>
                              <br>
                            <thead>
                              <th><center>ID Solicitud</center></th>
                              <th><center>ID Persona</center></th>
                              <th><center>ID Casa</center></th>
                              <th><center>Estado</center></th>
                              <th><center>Fecha de Solicitud</center></th>
                              <th><center>Numero Solicitud</center></th>
                              <th><center>Meses Alquiler</center></th>
                              <th><center>Acciones</center></th>
                            </thead>                            
                            <tbody align="center">
                                
                            </tbody>
                          </table>
  </div>
</div>
                
               
              </div>
             
          </div>
        
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Arreguez-Mora 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- Fin de seccion -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">&iquestEsta seguro de qu&eacute desea salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Presione salir para cerrar sesi&oacuten, o presione cancelar para seguir en su sesi&oacuten</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login.php">Salir</a>
        </div>
      </div>
    </div>
  </div>
  
  
      <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Perfil</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Usuario: <?php echo $_SESSION['usuario'];?></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <style>
      .table{
          width: auto;
      }
  </style>

  <!-- Custom scripts for all pages-->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>        <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/js/sb-admin-2.js" integrity="sha512-M82XdXhPLLSki+Ld1MsafNzOgHQB3txZr8+SQlGXSwn6veeqtYhPLbQeAfk9Y/Q9/gXcfa1jWT4YYUeoei6Uow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
  
  <!-- JS datatables-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
 
   <!-- JS datatables-->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    
    $(document).ready(function(){
        var opcion;

    
    tablaSol = $('#tablaTodas').DataTable({
    	select: {
            style: 'multi',
            blurable: true
        },
   scrollY:400,
    scrollX:true,
    lengthMenu:[[10,25,50,-1],['de a 10','de a 25','de a 50','Todos']],
    scrollCollapse: true,
        "ajax":{            
            "url": "gestores/gestorSolicitudes.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:5}, //enviamos opcion 5 para que haga un SELECT
            "dataSrc":""
        },
        "success": function (res){
            //console.log(res);
            
        }
        ,
        "columns":[
            {"data": "solicitud_id"},
        	{"data": "solicitud_persona_id"},
        	{"data": "solicitud_casa_id"},
        	{"data": "valor_estado"},
        	{"data": "solicitud_fecha_inicio"},
            {"data": "solicitud_numero"},
            {"data": "solicitud_cant_meses"},
            {"defaultContent": "<div class='text-center'><button class='btn btn-danger btn-sm btnBorrar'><span class='fas fa-times' aria-hidden='true'></span> Rechazar</button><button class='btn btn-success btn-sm btnEditar'><span class='fas fa-check' aria-hidden='true'></span> Confirmar</button></div></div>"}
        ],
        "columnDefs": [
    {"targets": [ 0 ],
      "createdCell": function (td, cellData, rowData, row, col) {
      
        $(td).css('color', '#1b1e23')
        }    
        
    }
  ]
        
    });
    
    tablaConfirmadas = $('#tablaConfirmadas').DataTable({
    	select: {
            style: 'multi',
            blurable: true
        },
   scrollY:400,
       scrollX:true,
    lengthMenu:[[10,25,50,-1],['de a 10','de a 25','de a 50','Todos']],
    scrollCollapse: true,
        "ajax":{            
            "url": "gestores/gestorSolicitudes.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:1}, //enviamos opcion 1 para que haga un SELECT
            "dataSrc":""
        },
        "success": function (res){
            //console.log(res);
            $('.table').css({"width":"100%"});
        }
        ,
        "columns":[
            {"data": "solicitud_id"},
        	{"data": "solicitud_persona_id"},
        	{"data": "solicitud_casa_id"},
        	{"data": "valor_estado"},
        	{"data": "solicitud_fecha_inicio"},
            {"data": "solicitud_numero"},
            {"data": "solicitud_cant_meses"},
            {"defaultContent": "<div class='text-center'><button class='btn btn-danger btn-sm btnBorrar2'><span class='fas fa-times' aria-hidden='true'></span> Mover a Rechazado</button></div>"}
        ],
        "columnDefs": [
    {"targets": [ 0 ],
      "createdCell": function (td, cellData, rowData, row, col) {
      
        $(td).css('color', '#1b1e23')
        }    
        
    }
  ]
        
    });
    
    tablaRechazadas = $('#tablaRechazadas').DataTable({
    select: {
            style: 'multi',
            blurable: true
        },
    scrollY:400,
    scrollX:true,
    lengthMenu:[[10,25,50,-1],['de a 10','de a 25','de a 50','Todos']],
    scrollCollapse: true,
        "ajax":{            
            "url": "gestores/gestorSolicitudes.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:2}, //enviamos opcion 2 para que haga un SELECT
            "dataSrc":""
        },
        "success": function (res){
           // console.log(res);
           $('.table').css({"width":"100%"});
        }
        ,
        "columns":[
            {"data": "solicitud_id"},
        	{"data": "solicitud_persona_id"},
        	{"data": "solicitud_casa_id"},
        	{"data": "valor_estado"},
        	{"data": "solicitud_fecha_inicio"},
            {"data": "solicitud_numero"},
            {"data": "solicitud_cant_meses"},
            {"defaultContent": "<div class='text-center'><button class='btn btn-success btn-sm btnEditar'><span class='fas fa-check' aria-hidden='true'></span> Mover a Confirmado</button></div>"}
        ],
        "columnDefs": [
    {"targets": [ 0 ],
      "createdCell": function (td, cellData, rowData, row, col) {
      
        $(td).css('color', '#1b1e23')
        }    
        
    }
  ]
        
    });
    
        $("div.toolbar").html('<button type="button" class="btn btn-primary">Primary</button>');

    
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
              $($.fn.dataTable.tables(true)).DataTable()
              .columns.adjust();
    });
    
    // Boton Rechazar
    $(document).on("click", ".btnBorrar", function(){
        fila = $(this).closest("tr");
        
 		id_solicitud = fila.find('td:eq(0)').text();
        idCasa = fila.find('td:eq(2)').text();
        
    	opcion = 3; //Rechazar la solicitud 
    	
        var respuesta = confirm("Seguro que desea rechazar la solicitud ?");                
        if (respuesta) {            
            $.ajax({
              url: "gestores/gestorSolicitudes.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion,
                      id_solicitud:id_solicitud,
                      idCasa:idCasa
              },    
              success: function() {
                     tablaSol.ajax.reload(null, false);
                     tablaRechazadas.ajax.reload(null, false);
                     tablaConfirmadas.ajax.reload(null, false);
               			}
            
            		});	
        
        		}
        
    });
     
     // Boton Rechazar solicitud de una confirmada cuando ya hay una casa Ocupada
    $(document).on("click", ".btnBorrar2", function(){
        fila = $(this).closest("tr");
        
 		id_solicitud = fila.find('td:eq(0)').text();
        idCasa = fila.find('td:eq(2)').text();
        
    	opcion = 7; //Rechazar la solicitud y ponemos casa en disponible
    	
        var respuesta = confirm("Seguro que desea rechazar la solicitud ?");                
        if (respuesta) {            
            $.ajax({
              url: "gestores/gestorSolicitudes.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion,
                      id_solicitud:id_solicitud,
                      idCasa:idCasa
              },    
              success: function() {
                     tablaSol.ajax.reload(null, false);
                     tablaRechazadas.ajax.reload(null, false);
                     tablaConfirmadas.ajax.reload(null, false);
               			}
            
            		});	
        
        		}
        
    });
     
     
     
    // Boton Confirmar 
    $(document).on("click", ".btnEditar", function(){
        fila = $(this).closest("tr");
        
 		id_solicitud = fila.find('td:eq(0)').text();
 		idCasa = fila.find('td:eq(2)').text();


    	opcion = 4; //Confirmar la solicitud 
    	
        var respuesta = confirm("Seguro que desea Confirmar la solicitud ?");                
        if (respuesta) {            
            $.ajax({
              url: "gestores/gestorSolicitudes.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion,
                      id_solicitud:id_solicitud,
                      idCasa:idCasa
              },    
              success: function(res) {
                  console.log(res);
                   if(res == 1){
                       console.log('entro por 1');
                      tablaSol.ajax.reload(null, false);
                      tablaRechazadas.ajax.reload(null, false);
                      tablaConfirmadas.ajax.reload(null, false);
                    }else{
                       swal("Ups!", "Esta casa se encuentra ocupada!", "error");
                    }
                     
               	}
            
            		});	
        
        		}
        
    });       
});
    
    
    function clearSolicitudesRechazadas(){
         $.ajax({
              url: "gestores/gestorSolicitudes.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:6
              },    
              success: function(res) {
                  console.log(res);
                  tablaSol.ajax.reload(null, false);
                  tablaRechazadas.ajax.reload(null, false);
                  tablaConfirmadas.ajax.reload(null, false);
               	}
            
            		});	
    }
    
</script>
</body>

</html>
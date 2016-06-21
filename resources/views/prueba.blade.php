<?php
    date_default_timezone_set('America/Mexico_City');
    $hoy = date("Y-m-d"); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sistema para la administración de alumnos egresados de la UTM">
        <meta name="author" content="Mictlan Software">
        <link rel="shortcut icon" href="{{ asset("images/favicon.ico") }}" >
        <title>Sistema de administración</title>
        <link rel="stylesheet" href="{{ asset("plugins/morris/morris.css") }}">
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("css/core.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("css/components.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("css/icons.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("css/pages.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("css/menu.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("css/responsive.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css") }}" rel="stylesheet">
        <link href="{{ asset("plugins/bootstrap-daterangepicker/daterangepicker.css") }}" rel="stylesheet">
        <link href="{{ asset("plugins/select2/dist/css/select2.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("plugins/select2/dist/css/select2-bootstrap.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("plugins/bootstrap-sweetalert/sweet-alert.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
        <!-- DataTables -->
        <link href="{{ asset("plugins/datatables/jquery.dataTables.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("plugins/datatables/buttons.bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("plugins/datatables/fixedHeader.bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("plugins/datatables/responsive.bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("plugins/datatables/scroller.bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset("js/modernizr.min.js") }}"></script>
    </head>
    <body>
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">
                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo"><span>Sistema de administración de egresados<span></span></span></a>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras">
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                    <img src="images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="logout"><i class="fa fa-sign-out"></i> Salir</a></li>
                                </ul>
                            </li>
                        </ul>
                        
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="active">
                                <a href="{{url('/')}}" class="active"><i class="fa fa-university"></i> <span> Inicio</span></a>
                            </li>
                            <li >
                                <a href="{{url('/usuarios')}}"><i class="fa fa-user"></i> <span>Usuarios</span> </a>
                            </li>
                            <li>
                                <a href="{{url('/encuestas')}}"><i class="fa fa-book"></i> <span> Encuestas </span> </a>
                            </li>
                            <li>
                                <a href="{{url('/egresados')}}"><i class="fa fa-graduation-cap"></i> <span> Egresados </span> </a>
                            </li>
                            <li>
                                <a href="{{url('/empleadores')}}"><i class="fa fa-briefcase"></i> <span> Empleadores </span> </a>
                            </li>
                            <li >
                                <a href="{{url('/reportes')}}"><i class="fa fa-line-chart"></i> <span> Reportes </span> </a>
                            </li>
                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->
        <div class="wrapper">
            <div class="container">
                <!-- Page-Title -->
                
                <div class="row" style="padding: 30px 0px;">
                    <div class="col-md-12">
                        <div class="card-box">
                            
                            <h4 class="header-title m-t-0 m-b-30">Monitoreo</h4>
                            
                            <div id="basicwizard1" class=" pull-in">
                                <ul>
                                    <li><a href="#tab11" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Egresados</a></li>
                                    <li><a href="#tab12" data-toggle="tab"><i class="fa fa-briefcase"></i> Empleadores</a></li>
                                </ul>
                                <div class="tab-content b-0 m-b-0">
                                    <div class="tab-pane m-t-10 fade" id="tab11">
                                        <div class="table-responsive">
                                            <table id="datatable" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Matrícula</th>
                                                        <th>Nombre</th>
                                                        <th>Carrera</th>
                                                        <th>Año de Egreso</th>
                                                        <th>Encuesta</th>
                                                        <th>Última Aplicación</th>
                                                        <th>Próxima Aplicación</th>
                                                        <th>Estado</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    

                                                @foreach( $relaciones as $relacion )
                                                     
                                                        <td>{{ $relacion->matricula }}</td>
                                                        <td>{{ $relacion->nombre}}</td>                                                     
                                                        <td>

                                                            @if( $relacion->carrera == 1 )
                                                                Ing. en Computación
                                                            @elseif( $relacion->carrera == 2 )
                                                                Ing. en Electrónica
                                                            @elseif( $relacion->carrera == 3 )
                                                                Ing. en Mecatrónica
                                                            @elseif( $relacion->carrera == 4 )
                                                                Ing. en Diseño
                                                            @elseif( $relacion->carrera == 5 )
                                                                Ing. Industrial
                                                            @elseif( $relacion->carrera == 6 )
                                                                Lic. Ciencias Empresariales
                                                            @else
                                                                Ing. en Mecánica Automotriz
                                                            @endif


                                                        </td>
                                                        <td>{{ $relacion->generacion }}</td>
                                                        <td>{{ $relacion->encuesta }}</td>
                                                        <td>{{ $relacion->aplicacion }}</td>
                                                        <td>{{ $relacion->proxima }}</td>
                                                        <td>
                                                                @if( $relacion->estado == 1)
                                                                    <span class="label label-info">Enviado</span>
                                                                @elseif( $relacion->diferencia > 0)
                                                                    <span class="label label-success">Vigente</span>
                                                                @else
                                                                    <span class="label label-danger">Expirado</span>
                                                                @endif

                                                        </td>
                                                        <td>
                                                            
                                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5 col-sm-6" data-toggle="modal" data-target="#modal-editar-egresados" onclick="loadEgresado({{ $relacion->id_egresado }} , {{ $relacion->id_encuesta }} )" > <i class="fa fa-pencil"></i> </button>




                                                        </td>
                                                                                                                
                                                    </tr>

                                                    @endforeach





                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane m-t-10 fade" id="tab12">
                                        <div class="table-responsive">
                                            <table id="datatable2" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Nombre</th>
                                                        <th>Puesto</th>
                                                        <th>Encuesta</th>
                                                        <th>Última Aplicación</th>
                                                        <th>Próxima Aplicación</th>
                                                        <th>Estado</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @foreach( $empleadores as $empleador )
                                                     
                                                        <td>{{ $empleador->nombre }}</td>
                                                        <td>{{ $empleador->puesto }}</td>
                                                        <td>{{ $empleador->encuesta }}</td>
                                                        <td>{{ $empleador->aplicacion }}</td>
                                                        <td>{{ $empleador->proxima }}</td>
                                                        <td>
                                                                @if( $empleador->estado == 1)
                                                                    <span class="label label-info">Enviado</span>
                                                                @elseif( $empleador->diferencia > 0)
                                                                    <span class="label label-success">Vigente</span>
                                                                @else
                                                                    <span class="label label-danger">Expirado</span>
                                                                @endif

                                                        </td>
                                                        <td>
                                                            
                                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5 col-sm-6" data-toggle="modal" data-target="#modal-editar-empleadores" onclick="loadEmpleador({{ $empleador->id_empleador }} , {{ $empleador->id_encuesta }} )" > <i class="fa fa-pencil"></i> </button>


                                                        </td>                                                                                                                            
                                                    </tr>

                                                    @endforeach


                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </div><!-- end col -->
                        
                    </div>
                    <!-- end row -->
                    
                    <!-- Footer -->
                    <footer class="footer text-right">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 pull-right">
                                    Hecho con <i class="fa fa-heart" style="color:red"></i> por Mictlán Software © 2016.
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- End Footer -->
                </div>
                <!-- end container -->
            </div>



            <div id="modal-editar-egresados" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">

                                
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Cambiar Estado</h4>
                                            </div>
                                            <div class="modal-body">

                                            <form class="form-horizontal" role="form"  action="reportes/editegresadorelation" method="post">

                                                {{ csrf_field() }}

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="estado" class="control-label">Estado:</label>
                                                            <select class="form-control select2" name="estado" id="estado">
                                                                        
                                                                        <option value="1">Enviado</option>
                                                                        <option value="2">Vigente</option>                                                                              
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">                                                            
                                                            <div class="col-md-12">
                                                                <input type="hidden"  class="form-control" name="id_egresado" id="editegresadoid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">                                                            
                                                            <div class="col-md-12">
                                                                <input type="hidden"  class="form-control" name="id_encuesta" id="editencuestaid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group pull-right">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Editar
                                                        </button>            
                                                    </div>
                                                </div>

                                                </form>
                                            </div>                                
                                        </div>                                        
                                    
                                </div>
                            </div><!-- /.modal -->



                            <div id="modal-editar-empleadores" class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">

                                
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Cambiar Estado</h4>
                                            </div>
                                            <div class="modal-body">

                                            <form class="form-horizontal" role="form"  action="reportes/editempleadorrelation" method="post">

                                                {{ csrf_field() }}

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="estado" class="control-label">Estado:</label>
                                                            <select class="form-control select2" name="estado" id="estado">
                                                                        
                                                                        <option value="1">Enviado</option>
                                                                        <option value="2">Vigente</option>                                                                              
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">                                                            
                                                            <div class="col-md-12">
                                                                <input type="hidden"  class="form-control" name="id_empleador" id="editempleadorid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">                                                            
                                                            <div class="col-md-12">
                                                                <input type="hidden"  class="form-control" name="id_encuesta" id="editencuestaemid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group pull-right">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Editar
                                                        </button>            
                                                    </div>
                                                </div>

                                                </form>
                                            </div>                                
                                        </div>                                        
                                    
                                </div>
                            </div><!-- /.modal -->
            
            

                                

        <!-- jQuery  -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("js/detect.js") }}"></script>
        <script src="{{ asset("js/fastclick.js") }}"></script>
        <script src="{{ asset("js/jquery.slimscroll.js") }}"></script>
        <script src="{{ asset("js/jquery.blockUI.js") }}"></script>
        <script src="{{ asset("js/waves.js") }}"></script>
        <script src="{{ asset("js/wow.min.js") }}"></script>
        <script src="{{ asset("js/jquery.nicescroll.js") }}"></script>
        <script src="{{ asset("js/jquery.scrollTo.min.js") }}"></script>
        <script src="{{ asset("plugins/jquery-knob/jquery.knob.js") }}"></script>
        <script src="{{ asset("plugins/morris/morris.min.js") }}"></script>
        <script src="{{ asset("plugins/raphael/raphael-min.js") }}"></script>
        <script src="{{ asset("pages/jquery.dashboard.js") }}"></script>
        <script src="{{ asset("js/jquery.core.js") }}"></script>
        <script src="{{ asset("js/jquery.app.js") }}"></script>
        <script src="{{ asset("plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js") }}"></script>
        <script src="{{ asset("plugins/bootstrap-daterangepicker/daterangepicker.js") }}"></script>
        <script src="{{ asset("plugins/select2/dist/js/select2.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("plugins/bootstrap-sweetalert/sweet-alert.min.js") }}"></script>
        <script src="{{ asset("pages/jquery.sweet-alert.init.js") }}"></script>
        
        <!-- Datatables-->
        <script src="{{ asset("plugins/datatables/jquery.dataTables.min.js") }}"></script>
        <script src="{{ asset("plugins/datatables/dataTables.bootstrap.js") }}"></script>
        <script src="{{ asset("plugins/datatables/dataTables.buttons.min.js") }}"></script>
        <script src="{{ asset("plugins/datatables/buttons.bootstrap.min.js") }}"></script>
        <script src="{{ asset("plugins/datatables/jszip.min.js") }}"></script>
        <script src="{{ asset("plugins/datatables/pdfmake.min.js") }}"></script>
        <script src="{{ asset("plugins/datatables/vfs_fonts.js") }}"></script>
        <script src="{{ asset("plugins/datatables/buttons.html5.min.js") }}"></script>
        <script src="{{ asset("plugins/datatables/buttons.print.min.js") }}"></script>
        <script src="{{ asset("plugins/datatables/dataTables.fixedHeader.min.js") }}"></script>
        <script src="{{ asset("plugins/datatables/dataTables.keyTable.min.js") }}"></script>
        <script src="{{ asset("plugins/datatables/dataTables.responsive.min.js") }}"></script>
        <script src="{{ asset("plugins/datatables/responsive.bootstrap.min.js") }}"></script>
        <script src="{{ asset("plugins/datatables/dataTables.scroller.min.js") }}"></script>
        <!--Validacion de los formularios -->
        <script type="text/javascript" src="{{ asset("plugins/parsleyjs/dist/parsley.min.js") }}"></script>
        <!--  wizards  -->
        <script src="{{ asset("plugins/bootstrap-wizard/jquery.bootstrap.wizard.js") }}"></script>
        <!-- Datatable init js -->
        <script src="{{ asset("pages/datatables.init.js") }}"></script>
        
        <script>

        jQuery(document).ready(function() {

        $('#basicwizard').bootstrapWizard({'tabClass': 'nav nav-tabs navtab-wizard nav-justified bg-muted'});
        $('#basicwizard1').bootstrapWizard({'tabClass': 'nav nav-tabs navtab-wizard nav-justified bg-muted'});
        $('#basicwizard2').bootstrapWizard({'tabClass': 'nav nav-tabs navtab-wizard nav-justified bg-muted'});


        $(".select2").select2();
        $('#datatable').dataTable();
        $('#datatable2').dataTable();

        });


        function loadEgresado( id_egresado , id_encuesta ){
            document.getElementById('editegresadoid').value = id_egresado;
            document.getElementById('editencuestaid').value = id_encuesta;
        }

        function loadEmpleador( id_empleador , id_encuesta ){
            document.getElementById('editempleadorid').value = id_empleador;
            document.getElementById('editencuestaemid').value = id_encuesta;
        }
        
        
        </script>
    </body>
</html>
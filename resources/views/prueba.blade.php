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
                                            <table class="table table-striped table-bordered">
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
                                                    @foreach($egresados as $egresado )
                                                    
                                                    @foreach($egresado->encuestas as $encuesta)
                                                    <tr>
                                                        
                                                        <?php
                                                        $relaciones= App\Egresado_Encuesta::where('egresado_id' , '=', $egresado->id)->where('encuesta_id', '=', $encuesta->id)->get();
                                                        foreach ($relaciones as $relacion) {
                                                        echo "<td>".$egresado->matricula."</td>";
                                                        echo "<td>".$egresado->nombre. " ".$egresado->apellidos."</td>";
                                                        echo "<td>".$egresado->carrera."</td>";
                                                        echo "<td>".$egresado->fecha_graduacion."</td>";
                                                        echo "<td>".$encuesta->codigo."</td>";
                                                        echo "<td>".$relacion->fecha_aplicacion."</td>";
                                                        echo "<td>".$relacion->fecha_proxima_aplicacion."</td>";
                                                        }
                                                        
                                                        ?>
                                                        
                                                        <td>
                                                            @if( $relacion->estado == 1 )
                                                                <span class="label label-info">Enviado</span>                                                            
                                                            @elseif ($hoy > $relacion->fecha_proxima_aplicacion)
                                                                <span class="label label-danger">Vencido</span>

                                                            @else
                                                                <span class="label label-success">Vigente</span>
                                                            @endif

                                                        </td>
                                                        <td>
                                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5" data-toggle="modal" data-target="#modal-editar-egresados"> <i class="fa fa-pencil" onclick="loadEgresado( {{$egresado->id }} , {{ $encuesta->id }})"></i> 
                                                            </button>                                                            
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane m-t-10 fade" id="tab12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Nombre</th>
                                                        <th>Encuesta</th>
                                                        <th>Última Aplicación</th>
                                                        <th>Próxima Aplicación</th>
                                                        <th>Estado</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($empleadores as $empleador )
                                                    
                                                    @foreach($empleador->encuestas as $encuesta)
                                                    <tr>
                                                        
                                                        <?php
                                                        $relaciones= App\Empleador_Encuesta::where('id_empleador' , '=', $empleador->id)->where('id_encuesta', '=', $encuesta->id)->get();
                                                        foreach ($relaciones as $relacion) {
                                                        echo "<td>".$empleador->nombre. " ".$empleador->apellidos."</td>";
                                                        echo "<td>".$encuesta->codigo."</td>";
                                                        echo "<td>".$relacion->fecha_aplicacion."</td>";
                                                        echo "<td>".$relacion->fecha_proxima_aplicacion."</td>";
                                                        }
                                                        
                                                        ?>
                                                        
                                                      
                                                            <td>

                                                            @if( $relacion->estatus == 1 )
                                                                <span class="label label-info">Enviado</span>                                                            
                                                            @elseif ($hoy > $relacion->fecha_proxima_aplicacion)
                                                                <span class="label label-danger">Vencido</span>

                                                            @else
                                                                <span class="label label-success">Vigente</span>
                                                            @endif

                                                            </td>
                                                        
                                                        <td>

                                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5" data-toggle="modal" data-target="#modal-editar-empleadores" > <i class="fa fa-pencil" onclick="loadEmpleador( {{$empleador->id }} , {{ $encuesta->id}})"></i> 
                                                            </button>                                                            
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                    @endforeach
                                                    
                                                </tbody>
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

                                
<<<<<<< HEAD
                                <ul>
                                    <li><a href="#tab21" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Egresados</a></li>
                                    <li><a href="#tab22" data-toggle="tab"><i class="fa fa-briefcase"></i> Empleadores</a></li>
                                </ul>
                                <div class="tab-content b-0 m-b-0">
                                    <div class="tab-pane m-t-10 fade" id="tab21">
                                        <form action="bind/egresado" method="POST">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="field-1" class="control-label">Egresado:</label>
                                                    <select class="form-control select2" name="egresado_id" required>
                                                        <option value="">Seleccionar Egresado</option>
                                                        @foreach($egresados as $egresado)
                                                        <option value="{{$egresado->id}}">{{$egresado->nombre ." ". $egresado->apellidos ." :: ".$egresado->matricula}}  </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{ csrf_field() }}
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="field-1" class="control-label">Encuesta:</label>
                                                    <select class="form-control select2" name="encuesta_id" required>
                                                        <option value="">Selecciona la Encuesta</option>
                                                        @foreach($encuestas as $encuesta)
                                                        <option value="{{$encuesta->id}}">{{$encuesta->codigo}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4">Fecha de Aplicación</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="fecha_aplicacion" placeholder="yyyy/mm/dd" id="datepicker-autoclose" required>
                                                        <span class="input-group-addon bg-primary b-0 text-white"><i class="fa fa-calendar"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">Próxima Aplicación</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="yyyy/mm/dd" name="fecha_proxima_aplicacion" id="datepicker-autoclose2" required>
                                                            <span class="input-group-addon bg-primary b-0 text-white"><i class="fa fa-calendar"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                </div>
                                                
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-info waves-effect waves-light">Guardar</button>
                                                    </div>
                                                </form>
=======
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Cambiar Estado</h4>
>>>>>>> 3c1c3d2746e7e370f41c997f379bbee8e3b9ffc4
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
<<<<<<< HEAD
                                                
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                    </div>
                                </div>
            </div><!-- /.modal -->
                                
=======
>>>>>>> 3c1c3d2746e7e370f41c997f379bbee8e3b9ffc4


                                                <div class="form-group pull-right">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Generar
                                                        </button>
                                                        <button type="reset"
                                                                class="btn btn-default waves-effect waves-light m-l-5">
                                                            Limpiar
                                                        </button>
                                                    </div>
                                                </div>

                                                </form>
                                            </div>                                
                                        </div>                                        
                                    
                                </div>
                            </div><!-- /.modal -->



                            <div id="modal-editar-empleadores" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
                                                            Generar
                                                        </button>
                                                        <button type="reset"
                                                                class="btn btn-default waves-effect waves-light m-l-5">
                                                            Limpiar
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
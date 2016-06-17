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
                                    <img src="{{ asset("images/users/avatar-1.jpg") }}" alt="user-img" class="img-circle user-img">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('logout')}}"><i class="fa fa-sign-out"></i> Salir</a></li>
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
                            <li >
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

                            <li>
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
                        <div>
                        <img src="{{ asset("images/logo.png") }}" width="100px" class="col-md-1">
                            <h4  style="text-align: center;" class="col-md-11">
                                
                                @if( $respuesta == 1 )
                                    Relación de egresados que han respondido la encuesta
                                @else
                                    Relación de egresados que no han respondido la encuesta
                                @endif

                                @if( $tipo_reporte == 0 )
                                    <br> Todas las carreras
                                @elseif( $tipo_reporte == 1 )
                                    <br>Ing. en Computación
                                @elseif( $tipo_reporte == 2 )
                                    <br>Ing. en Electrónica
                                @elseif( $tipo_reporte == 3 )
                                    <br>Ing. en Mecatrónica
                                @elseif( $tipo_reporte == 4 )
                                    <br>Ing. en Diseño
                                @elseif( $tipo_reporte == 5 )
                                    <br>Ing. Industrial
                                @elseif( $tipo_reporte == 6 )
                                    <br>Lic. Ciencias Empresariales
                                @else
                                    <br>Ing. en Mecánica Automotriz
                                @endif

                                @if( $generacion == -1 )
                                    <br>Todas las generaciones
                                @else
                                    <br>Generación : {{ $generacion-5 }} - {{$generacion}}
                                @endif




                            </h4>                           
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->





             

                @if( $tipo_reporte != 0 )

                <div class="row" style="padding: 10px 0px;">                
                    <div class="col-md-12">
                        <div class="card-box">
                            <h2 class="header-title m-t-0 m-b-30"> 
                                            @if( $tipo_reporte == 1 )
                                                Ing. en Computación
                                            @elseif( $tipo_reporte == 2 )
                                                Ing. en Electrónica
                                            @elseif( $tipo_reporte == 3 )
                                                Ing. en Mecatrónica
                                            @elseif( $tipo_reporte == 4 )
                                                Ing. en Diseño
                                            @elseif( $tipo_reporte == 5 )
                                                Ing. Industrial
                                            @elseif( $tipo_reporte == 6 )
                                                Lic. Ciencias Empresariales
                                            @else
                                                Ing. en Mecánica Automotriz
                                            @endif

                            </h2>
                            <div >
                                <table id="datatable1" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Matrícula</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>

                                        @if( $respuesta == 1 )
                                            <th>Fecha de aplicación</th>
                                        @endif

                                                                                
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $index = 1 ?>
                                    @foreach( $egresados as $egresado )

                                        <tr>
                                            <td>{{ $index++ }}</td>                                            
                                            <td>{{ $egresado->matricula }}</td>
                                            <td>{{ $egresado->nombre }}</td>
                                            <td>{{ $egresado->correo }}</td>
                                             @if( $respuesta == 1 )
                                                <td>{{ $egresado->fecha }}</td>
                                            @endif                                                                                        
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                @else



                    <div class="row" style="padding: 30px 0px;">                
                        <div class="col-md-12">
                            <div class="card-box">
                                <h2 class="header-title m-t-0 m-b-30">  Ing. en Computación </h2>
                                <div >
                                    <table id="datatable2" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Matrícula</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>                                                                                
                                            @if( $respuesta == 1 )
                                                <th>Fecha de aplicación</th>
                                            @endif                                        
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $index = 1 ?>
                                        @foreach( $egresados as $egresado )

                                            @if( $egresado->carrera == 1 )
                                                <tr>
                                                    <td>{{ $index++ }}</td>                                            
                                                    <td>{{ $egresado->matricula }}</td>
                                                    <td>{{ $egresado->nombre }}</td>
                                                    <td>{{ $egresado->correo }}</td>
                                                    @if( $respuesta == 1 )
                                                        <td>{{ $egresado->fecha }}</td>
                                                    @endif                                            
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row" style="padding: 10px 0px;">                
                        <div class="col-md-12">
                            <div class="card-box">
                                <h2 class="header-title m-t-0 m-b-30">  Ing. en Electrónica </h2>
                                <div >
                                    <table id="datatable3" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Matrícula</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>                                                                                
                                            @if( $respuesta == 1 )
                                                <th>Fecha de aplicación</th>
                                            @endif                                        
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $index = 1 ?>
                                        @foreach( $egresados as $egresado )

                                            @if( $egresado->carrera == 2 )
                                                <tr>
                                                    <td>{{ $index++ }}</td>                                            
                                                    <td>{{ $egresado->matricula }}</td>
                                                    <td>{{ $egresado->nombre }}</td>
                                                    <td>{{ $egresado->correo }}</td>
                                                    @if( $respuesta == 1 )
                                                        <td>{{ $egresado->fecha }}</td>
                                                    @endif                                            
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row" style="padding: 10px 0px;">                
                        <div class="col-md-12">
                            <div class="card-box">
                                <h2 class="header-title m-t-0 m-b-30">  Ing. en Mecatrónica </h2>
                                <div >
                                    <table id="datatable4" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Matrícula</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>                                                                                
                                            @if( $respuesta == 1 )
                                                <th>Fecha de aplicación</th>
                                            @endif                                        
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $index = 1 ?>
                                        @foreach( $egresados as $egresado )

                                            @if( $egresado->carrera == 3 )
                                                <tr>
                                                    <td>{{ $index++ }}</td>                                            
                                                    <td>{{ $egresado->matricula }}</td>
                                                    <td>{{ $egresado->nombre }}</td>
                                                    <td>{{ $egresado->correo }}</td>
                                                    @if( $respuesta == 1 )
                                                        <td>{{ $egresado->fecha }}</td>
                                                    @endif                                            
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->



                    <div class="row" style="padding: 10px 0px;">                
                        <div class="col-md-12">
                            <div class="card-box">
                                <h2 class="header-title m-t-0 m-b-30">  Ing. en Diseño </h2>
                                <div >
                                    <table id="datatable5" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Matrícula</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>                                                                                
                                            @if( $respuesta == 1 )
                                                <th>Fecha de aplicación</th>
                                            @endif                                        
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $index = 1 ?>
                                        @foreach( $egresados as $egresado )

                                            @if( $egresado->carrera == 4 )
                                                <tr>
                                                    <td>{{ $index++ }}</td>                                            
                                                    <td>{{ $egresado->matricula }}</td>
                                                    <td>{{ $egresado->nombre }}</td>
                                                    <td>{{ $egresado->correo }}</td>
                                                    @if( $respuesta == 1 )
                                                        <td>{{ $egresado->fecha }}</td>
                                                    @endif                                            
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row" style="padding: 10px 0px;">                
                        <div class="col-md-12">
                            <div class="card-box">
                                <h2 class="header-title m-t-0 m-b-30">  Ing. en Industrial</h2>
                                <div >
                                    <table id="datatable6" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Matrícula</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>                                                                                
                                            @if( $respuesta == 1 )
                                                <th>Fecha de aplicación</th>
                                            @endif                                        
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $index = 1 ?>
                                        @foreach( $egresados as $egresado )

                                            @if( $egresado->carrera == 5 )
                                                <tr>
                                                    <td>{{ $index++ }}</td>                                            
                                                    <td>{{ $egresado->matricula }}</td>
                                                    <td>{{ $egresado->nombre }}</td>
                                                    <td>{{ $egresado->correo }}</td>
                                                    @if( $respuesta == 1 )
                                                        <td>{{ $egresado->fecha }}</td>
                                                    @endif                                            
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row" style="padding: 10px 0px;">                
                        <div class="col-md-12">
                            <div class="card-box">
                                <h2 class="header-title m-t-0 m-b-30">  Lic. en Ciancias Empresariales </h2>
                                <div >
                                    <table id="datatable7" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Matrícula</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>                                                                                
                                            @if( $respuesta == 1 )
                                                <th>Fecha de aplicación</th>
                                            @endif                                        
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $index = 1 ?>
                                        @foreach( $egresados as $egresado )

                                            @if( $egresado->carrera == 6 )
                                                <tr>
                                                    <td>{{ $index++ }}</td>                                            
                                                    <td>{{ $egresado->matricula }}</td>
                                                    <td>{{ $egresado->nombre }}</td>
                                                    <td>{{ $egresado->correo }}</td>
                                                    @if( $respuesta == 1 )
                                                        <td>{{ $egresado->fecha }}</td>
                                                    @endif                                            
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row" style="padding: 10px 0px;">                
                        <div class="col-md-12">
                            <div class="card-box">
                                <h2 class="header-title m-t-0 m-b-30">  Ing. en Mecánica Automotriz </h2>
                                <div >
                                    <table id="datatable8" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Matrícula</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>                                                                                
                                            @if( $respuesta == 1 )
                                                <th>Fecha de aplicación</th>
                                            @endif                                        
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $index = 1 ?>
                                        @foreach( $egresados as $egresado )

                                            @if( $egresado->carrera == 7 )
                                                <tr>
                                                    <td>{{ $index++ }}</td>                                            
                                                    <td>{{ $egresado->matricula }}</td>
                                                    <td>{{ $egresado->nombre }}</td>
                                                    <td>{{ $egresado->correo }}</td>
                                                    @if( $respuesta == 1 )
                                                        <td>{{ $egresado->fecha }}</td>
                                                    @endif                                            
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->




                @endif










                <!-- Footer -->
                <footer class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 pull-right">
                                Hecho con <i class="fa fa-heart" style="color:red"></i> por Mictlán Software © 2016.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div>
            <!-- end container -->


        </div>




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
                $(".select2").select2();
                
                $('#basicwizard').bootstrapWizard({'tabClass': 'nav nav-tabs navtab-wizard nav-justified bg-muted'});
            });

        </script>

    </body>
</html>
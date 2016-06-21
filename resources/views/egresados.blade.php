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
                            <li class="active">
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
                        <div class="card-box">
                            <div class="pull-right">
                                <button type="button" class="btn btn-primary btn-bordred waves-effect w-md waves-light m-b-5" data-toggle="modal" data-target="#modal-agregar" > <i class="fa fa-plus"></i> Agregar Egresado</button>
                                                                                            
                                
                            </div>

                            <h4 class="header-title m-t-0 m-b-30">Egresados</h4>

                            <div >
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Matrícula</th>
                                        <th>Nombre</th>
                                        <th hidden>Apellidos</th>
                                        <th>Carrera</th>
                                        <th>Correo electrónico</th>
                                        <th>Año de Egreso</th>
                                        <th>Municipio de Procedencia</th>
                                        <th>Recidencia Actual</th>
                                        <th>Empleo Actual</th>
                                        <th>Teléfono</th>
                                        <th>Acciones</th>
                                        <th hidden>Apellidos</th>
                                    </tr>
                                    </thead>
                                    <tbody>



                                    @foreach( $egresados as $egresado )

                                     <tr id="{{"registro".$egresado->id}}">
                                        <td>{{ $egresado->matricula }}</td>
                                        <td>{{ $egresado->nombre." ".$egresado->apellidos }}</td>
                                         <td hidden>{{ $egresado->apellidos }}</td>
                                        <td>

                                            @if( $egresado->carrera == 1 )
                                                Ing. en Computación
                                            @elseif( $egresado->carrera == 2 )
                                                Ing. en Electrónica
                                            @elseif( $egresado->carrera == 3 )
                                                Ing. en Mecatrónica
                                            @elseif( $egresado->carrera == 4 )
                                                Ing. en Diseño
                                            @elseif( $egresado->carrera == 5 )
                                                Ing. Industrial
                                            @elseif( $egresado->carrera == 6 )
                                                Lic. Ciencias Empresariales
                                            @else
                                                No Aplica
                                            @endif


                                        </td>
                                        <td>{{ $egresado->correo }}</td>
                                        <td>{{ $egresado->fecha_graduacion }}</td>
                                        <td>{{ $egresado->municipio_procedencia }}</td>
                                        <td>{{ $egresado->residencia_actual }}</td>
                                        <td>{{ $egresado->empleo_actual }}</td>
                                        <td>{{ $egresado->telefono }}</td>
                                        <td>
                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5 col-sm-6" data-toggle="modal" data-target="#modal-editar" onclick="loadEgresado( {{ $egresado->id }}) " > <i class="fa fa-pencil"></i> </button>
                                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5 col-sm-6" onclick="deleteEgresado({{ $egresado->id }})"> <i class="fa fa-trash"></i> </button>
                                        </td>
                                         <td hidden>{{ $egresado->nombre }}</td>
                                    </tr>

                                    @endforeach
                                        

                                        

                                    </tbody>
                                </table>
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

        
        
        
        
        <div id="modal-agregar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Agregar Egresado</h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                            
                            <form class="form-horizontal" role="form" data-parsley-validate novalidate action="egresados/new" method="post">


                                {{ csrf_field() }}


                                <div class="form-group">
                                    <label for="matricula" class="col-sm-4 control-label">Matrícula: </label>
                                    <div class="col-sm-7">
                                        <input  parsley-trigger="change" required type="text" name = "matricula" class="form-control" id="matricula" placeholder="Matrícula...">
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="nombre" class="col-sm-4 control-label">Nombre: </label>
                                    <div class="col-sm-7">
                                        <input parsley-trigger="change" required type="text"  class="form-control" name = "nombre"
                                               id="nombre" placeholder="Nombre...">
                                    </div>
                                </div>
                                                
                                <div class="form-group">
                                    <label for="apellidos" class="col-sm-4 control-label">Apellidos: </label>
                                    <div class="col-sm-7">
                                        <input parsley-trigger="change" required type="text"  class="form-control" name="apellidos"
                                               id="apellidos" placeholder="Apellidos...">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-4 control-label " for="carrera">Carrera: </label>
                                    <div class="col-md-7">
                                        <select class="form-control select2 " name="carrera">
                                            <option value="0"></option>
                                            <option value="0">Todas</option>
                                            <option value="1">Ing. en Computación</option>
                                            <option value="2">Ing. en Electrónica</option>
                                            <option value="7">Ing. en Mecánica Automotriz</option>
                                            <option value="3">Ing. en Mecatrónica</option>
                                            <option value="4">Ing. en Diseño</option>
                                            <option value="5">Ing. Indistrial</option>
                                            <option value="6">Lic. Ciencias Empresariales</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                                
                                <div class="form-group">
                                    <label for="correo" class="col-sm-4 control-label">Correo Electrónico: </label>
                                    <div class="col-sm-7">
                                        <input parsley-trigger="change" required parsley-type="email" type="email" class="form-control" name="correo"
                                               id="correo" placeholder="Correo Electrónico...">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="anio_egreso" class="col-sm-4 control-label">Año de Egreso: </label>
                                    <div class="col-sm-7">
                                        <input parsley-trigger="change" required type="number" data-parsley-type="integer" class="form-control" name="fecha_graduacion"
                                               id="anio_egreso" placeholder="Año de egreso...">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="municipio_procedencia" class="col-sm-4 control-label">Municipio de Procedencia: </label>
                                    <div class="col-sm-7">
                                        <input parsley-trigger="change" required type="text" class="form-control" name="municipio"
                                               id="municipio_procedencia" placeholder="¿De Dónde Viene?...">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="residencia_actual" class="col-sm-4 control-label">Residencia Actual: </label>
                                    <div class="col-sm-7">
                                        <input parsley-trigger="change" required type="text"  class="form-control" name="residencia_actual"
                                               id="residencia_actual" placeholder="¿Dónde vive actualmente?...">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="empleo_actual" class="col-sm-4 control-label">Empleo Actual: </label>
                                    <div class="col-sm-7">
                                        <input parsley-trigger="change" required type="text"  class="form-control" name="empleo_actual"
                                               id="empleo_actual" placeholder="¿Dónde trabaja actualmente?...">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="telefono" class="col-sm-4 control-label">Teléfono: </label>
                                    <div class="col-sm-7">
                                        <input parsley-trigger="change" required type="text"  class="form-control" name="telefono"
                                               id="telefono" placeholder="Número de teléfono...">
                                    </div>
                                </div>
                                
                                                
                                <div class="form-group pull-right">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Agregar
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





        <div id="modal-editar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Editar Egresado</h4>
                    </div>
                    <div class="modal-body">


                        <form class="form-horizontal" role="form" data-parsley-validate novalidate action="egresados/edit" method="post">


                            {{ csrf_field() }}


                            <div class="form-group">
                                <div class="col-sm-7">
                                    <input type="hidden" name = "id" class="form-control" hidden
                                           id="id">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="matriculae" class="col-sm-4 control-label">Matrícula: </label>
                                <div class="col-sm-7">
                                    <input parsley-trigger="change" required type="text" name = "matricula" class="form-control"
                                           id="matriculae" placeholder="Matrícula...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nombree" class="col-sm-4 control-label">Nombre: </label>
                                <div class="col-sm-7">
                                    <input parsley-trigger="change" required type="text"  class="form-control" name = "nombre"
                                           id="nombree" placeholder="Nombre...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="apellidose" class="col-sm-4 control-label">Apellidos: </label>
                                <div class="col-sm-7">
                                    <input parsley-trigger="change" required type="text"  class="form-control" name="apellidos"
                                           id="apellidose" placeholder="Apellidos...">
                                </div>
                            </div>


                            <div class="form-group clearfix">
                                <label class="col-md-4 control-label " for="carrera">Carrera: </label>
                                <div class="col-md-7">
                                    <select class="form-control select2 " id="carrerae" name="carrera">
                                        <option value="0"></option>
                                        <option value="0">Todas</option>
                                        <option value="1">Ing. en Computación</option>
                                        <option value="2">Ing. en Electrónica</option>
                                        <option value="3">Ing. en Mecatrónica</option>
                                        <option value="7">Ing. en Mecánica Automotriz</option>
                                        <option value="4">Ing. en Diseño</option>
                                        <option value="5">Ing. Indistrial</option>
                                        <option value="6">Lic. Ciencias Empresariales</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="correoe" class="col-sm-4 control-label">Correo Electrónico: </label>
                                <div class="col-sm-7">
                                    <input parsley-trigger="change" required parsley-type="email" type="email" class="form-control" name="correo"
                                           id="correoe" placeholder="Correo Electrónico...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="anio_egresoe" class="col-sm-4 control-label">Año de Egreso: </label>
                                <div class="col-sm-7">
                                    <input parsley-trigger="change" type="number" required data-parsley-type="integer" class="form-control" name="fecha_graduacion"
                                           id="anio_egresoe" placeholder="Año de egreso...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="municipio_procedenciae" class="col-sm-4 control-label">Municipio de Procedencia: </label>
                                <div class="col-sm-7">
                                    <input parsley-trigger="change" required type="text" class="form-control" name="municipio"
                                           id="municipio_procedenciae" placeholder="¿De Dónde Viene?...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="residencia_actuale" class="col-sm-4 control-label">Residencia Actual: </label>
                                <div class="col-sm-7">
                                    <input parsley-trigger="change" required type="text"  class="form-control" name="residencia_actual"
                                           id="residencia_actuale" placeholder="¿Dónde vive actualmente?...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="empleo_actuale" class="col-sm-4 control-label">Empleo Actual: </label>
                                <div class="col-sm-7">
                                    <input parsley-trigger="change" required type="text"  class="form-control" name="empleo_actual"
                                           id="empleo_actuale" placeholder="¿Dónde trabaja actualmente?...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telefonoe" class="col-sm-4 control-label">Teléfono: </label>
                                <div class="col-sm-7">
                                    <input parsley-trigger="change" required type="text"  class="form-control" name="telefono"
                                           id="telefonoe" placeholder="Número de teléfono...">
                                </div>
                            </div>


                            <div class="form-group pull-right">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Editar
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



        <div id="modal-reporte" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">


            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="fa fa-pie-chart" aria-hidden="true"></i> Generar Reporte</h4>
                    </div>
                    <div class="modal-body">




                        <div id="basicwizard" class=" pull-in">
                            <ul>
                                <li><a href="#tab1" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Egresados</a></li>
                                <li><a href="#tab2" data-toggle="tab"><i class="fa fa-briefcase"></i> Empleadores</a></li>
                            </ul>
                            <div class="tab-content b-0 m-b-0">
                                <div class="tab-pane m-t-10 fade" id="tab1">

                                    <form  method="post" action="reporte/egresados" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="carrera">Carrera: </label>
                                                <div class="col-md-9">
                                                    <select class="form-control select2 " id="carrera" name="carrera">
                                                        <option value="0"></option>
                                                        <option value="0">Todas</option>
                                                        <option value="1">Ing. en Computación</option>
                                                        <option value="2">Ing. en Electrónica</option>
                                                        <option value="3">Ing. en Mecatrónica</option>
                                                        <option value="4">Ing. en Diseño</option>
                                                        <option value="5">Ing. Indistrial</option>
                                                        <option value="6">Lic. Ciencias Empresariales</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="generoe">Género: </label>
                                                <div class="col-md-9">
                                                    <select class="form-control select2 " id="generoe" name="genero">
                                                        <option value="-1"></option>
                                                        <option value="-1">Ambos</option>
                                                        <option value="1">Hombre</option>
                                                        <option value="0">Mujer</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="anio_aplicacion"> Año de Aplicación:</label>
                                                <div class="col-md-9">
                                                    <input id="anio_aplicacion" parsley-trigger="change" type="number" data-parsley-type="integer" name="anio_aplicacion" class=" form-control">

                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="anio_egreso"> Año de Egreso:</label>
                                                <div class="col-md-9">
                                                    <input id="anio_egreso" name="anio_egreso" type="number" data-parsley-type="integer" class=" form-control">

                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="estado">Estado de la Encuesta:  </label>
                                                <div class="col-md-9">
                                                    <select class="form-control select2 " id="estado" name="estado">
                                                        <option value="0"></option>
                                                        <option value="0">Todos</option>
                                                        <option value="1">Actualizado</option>
                                                        <option value="2">Vencido</option>
                                                        <option value="3">Próximo a Vencer</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="form-group pull-right" >
                                            <div>
                                                <button  type="submit" class="btn btn-primary waves-effect waves-light">
                                                    Generar
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>


                                <div class="tab-pane m-t-10 fade" id="tab2">
                                    <form  method="post" action="reporte/empleadores" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="row">


                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="generoe">Género: </label>
                                                <div class="col-md-9">
                                                    <select class="form-control select2 " id="generoem" name="genero">
                                                        <option value="-1"></option>
                                                        <option value="-1">Ambos</option>
                                                        <option value="1">Hombre</option>
                                                        <option value="0">Mujer</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="esatdo"> Estado:</label>
                                                <div class="col-md-9">
                                                    <input id="esatdo" name="estado" type="text" class=" form-control">

                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="anio_aplicacion"> Año de Aplicación:</label>
                                                <div class="col-md-9">
                                                    <input id="anio_aplicacione" parsley-trigger="change" type="number" data-parsley-type="integer" name="anio_aplicacion" class=" form-control">

                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="estado">Estado de la Encuesta: </label>
                                                <div class="col-md-9">
                                                    <select class="form-control select2 " id="estadoe" name="status">
                                                        <option value="0"></option>
                                                        <option value="0">Todos</option>
                                                        <option value="1">Actualizado</option>
                                                        <option value="2">Vencido</option>
                                                        <option value="3">Próximo a Vencer</option>
                                                    </select>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="form-group pull-right" >
                                            <div>
                                                <button  type="submit" class="btn btn-primary waves-effect waves-light">
                                                    Generar
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


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
                $(".select2").select2();
                $('#datatable').dataTable();
                $('form').parsley();
                $('#basicwizard').bootstrapWizard({'tabClass': 'nav nav-tabs navtab-wizard nav-justified bg-muted'});

                
            });
             
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true,
                format: 'dd/mm/yyyy'
            });
             jQuery('#datepicker-autoclose2').datepicker({
                autoclose: true,
                todayHighlight: true,
                 format: 'dd/mm/yyyy'
            });



            function deleteEgresado( id ){

                swal({
                    title: "Deseas Continuar?",
                    text: "No podrás deshacer esto!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Sí, adelante!",
                    cancelButtonText: "No, cancela!",
                    closeOnConfirm: false,
                    closeOnCancel: true
                }, function (isConfirm) {
                    if (isConfirm) {

                        console.log( "presionado ");

                        $.get("egresados/delete/"+id, function(data, status){

                            console.log(  status );


                            if( status = "success"){

                                swal({  title:"Eliminado!" ,
                                    text:"Hecho!",
                                    type:"success"

                                } , function(){

                                    location.reload();

                                });

                            }

                            else{
                                swal({  title:"Ups!" ,
                                    text:"Hubo un problema!",
                                    type:"error"

                                } , function(){

                                    location.reload();

                                });
                            }



                        });





                    }
                });

            }


            function loadEgresado( id ){

                var record = document.getElementById("registro"+id);
                document.getElementById('id').value = id;
                document.getElementById('matriculae').value=record.childNodes[1].innerHTML;
                document.getElementById('nombree').value=record.childNodes[23].innerHTML;
                document.getElementById('apellidose').value=record.childNodes[5].innerHTML;
                document.getElementById('carrerae').value=record.childNodes[7].innerHTML;
                document.getElementById('correoe').value=record.childNodes[9].innerHTML;
                document.getElementById('anio_egresoe').value=record.childNodes[11].innerHTML;
                document.getElementById('municipio_procedenciae').value=record.childNodes[13].innerHTML;
                document.getElementById('residencia_actuale').value=record.childNodes[15].innerHTML;
                document.getElementById('empleo_actuale').value=record.childNodes[17].innerHTML;
                document.getElementById('telefonoe').value=record.childNodes[19].innerHTML;



            }

        </script>

    </body>
</html>
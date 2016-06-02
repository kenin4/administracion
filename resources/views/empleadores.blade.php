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
                            <li class="active">
                                <a href="{{url('/empleadores')}}"><i class="fa fa-briefcase"></i> <span> Empleadores </span> </a>
                            </li>

                            <li>
                                <a type="button"  data-toggle="modal" data-target="#modal-reporte"><i class="fa fa-line-chart"></i> <span> Generador de Reportes </span> </a>
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
                                <button type="button" class="btn btn-primary btn-bordred waves-effect w-md waves-light m-b-5" data-toggle="modal" data-target="#modal-agregar" > <i class="fa fa-plus"></i> Agregar Empleador</button>
                                                                                            
                                
                            </div>

                            <h4 class="header-title m-t-0 m-b-30">Empleadores</h4>

                            <div >
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Género</th>
                                        <th hidden>Nombre</th>
                                        <th hidden>Apellidos</th>
                                        <th>Correo electrónico</th>
                                        <th>Teléfono</th>
                                        <th hidden>calle</th>
                                        <th hidden>numero_int</th>
                                        <th hidden>numero_ext</th>
                                        <th hidden>colonia</th>
                                        <th hidden>delegacion</th>
                                        <th hidden>ciudad</th>
                                        <th hidden>estado</th>
                                        <th hidden>cp</th>
                                        <th style="width: 250px">Dirección</th>
                                        <th>Comentarios</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>



                                    @foreach( $empleadores as $empleador )


                                     <tr id="{{"registro".$empleador->id}}">

                                         <td>{{ $empleador->nombre." ".$empleador->apellidos }}</td>
                                         <td>{{ $empleador->genero == 1 ? "Hombre" : "Mujer" }}</td>
                                         <td hidden>{{ $empleador->nombre }}</td>
                                         <td hidden>{{ $empleador->apellidos }}</td>
                                         <td>{{ $empleador->correo }}</td>
                                         <td>{{ $empleador->telefono }}</td>
                                         <td hidden>{{ $empleador->calle }}</td>
                                         <td hidden>{{ $empleador->numero_int }}</td>
                                         <td hidden>{{ $empleador->numero_ext }}</td>
                                         <td hidden>{{ $empleador->colonia }}</td>
                                         <td hidden>{{ $empleador->delegacion }}</td>
                                         <td hidden>{{ $empleador->ciudad }}</td>
                                         <td hidden>{{ $empleador->estado }}</td>
                                         <td hidden>{{ $empleador->cp }}</td>
                                         <td>{{
                                                 (empty($empleador->calle )?"":$empleador->calle).
                                                 (empty( $empleador->numero_int )? "":" # ".$empleador->numero_int)." ".(empty( $empleador->numero_ext )? "":"Int. ".$empleador->numero_ext.",").
                                                 (empty( $empleador->colonia )? "":" Col. ".$empleador->colonia.",").
                                                 (empty( $empleador->delegacion )? "":" Del. ".$empleador->delegacion.",").
                                                 (empty( $empleador->ciudad )? "":" ".$empleador->ciudad.",").
                                                 (empty( $empleador->estado )? "":" ".$empleador->estado.",").
                                                 (empty( $empleador->cp )? "":" Cp: ".$empleador->cp)
                                             }}
                                         </td>
                                         <td>{{ $empleador->notas }}</td>
                                         <td>
                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5 col-sm-6" data-toggle="modal" data-target="#modal-editar" onclick="loadEmpleador( {{ $empleador->id }}) " > <i class="fa fa-pencil"></i> </button>
                                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5 col-sm-6" onclick="deleteEmpleador({{ $empleador->id }})"> <i class="fa fa-trash"></i> </button>
                                        </td>
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
                                <li><a href="#tab5" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Egresados</a></li>
                                <li><a href="#tab6" data-toggle="tab"><i class="fa fa-briefcase"></i> Empleadores</a></li>
                            </ul>
                            <div class="tab-content b-0 m-b-0">
                                <div class="tab-pane m-t-10 fade" id="tab5">

                                    <form  method="post" action="reporte/egresados" class="form-horizontal">

                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="carrera">Carrera: </label>
                                                <div class="col-md-9">
                                                    <select class="form-control select2 " id="carreraa" name="carrera">
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


                                <div class="tab-pane m-t-10 fade" id="tab6">
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
                                                    <select class="form-control select2 " id="estadoee" name="status">
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







        <div id="modal-agregar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">


            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Agregar Empleador</h4>
                    </div>
                    <div class="modal-body">


                        <form class="form-horizontal" role="form" data-parsley-validate novalidate action="empleadores/new" method="post">


                            {{ csrf_field() }}

                            <div id="progressbarwizard" class="pull-in">
                                <ul>
                                    <li><a href="#tab1" data-toggle="tab"><i class="fa fa-user"></i> Datos Personales</a></li>
                                    <li><a href="#tab2" data-toggle="tab"><i class="fa fa-home"></i> Dirección</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="bar" class="progress progress-striped progress-bar-primary-alt active">
                                        <div class="bar progress-bar progress-bar-primary"></div>
                                    </div>

                                    <div class="tab-pane p-t-10 fade" id="tab1">
                                        <div class="row">

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="nombre">Nombre *</label>
                                                <div class="col-md-9">
                                                    <input class="form-control required" id="nombre" name="nombre" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="apellidos">Apellidos *</label>
                                                <div class="col-md-9">
                                                    <input class="form-control required" id="apellidos" name="apellidos" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="genero">Género *</label>
                                                <div class="col-md-9">

                                                    <select class="form-control select2 required" id="genero" name="genero">
                                                        <option value="1">Hombre</option>
                                                        <option value="0">Mujer</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="email">Email*</label>
                                                <div class="col-md-9">
                                                    <input class="form-control required" id="email" name="email" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="telefono">Teléfono:</label>
                                                <div class="col-md-9">
                                                    <input class="form-control " id="telefono" name="telefono" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="notas">Comentarios:</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" maxlength="225" rows="2" placeholder="Agrega algún comentario..." name="notas"></textarea>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab2">
                                        <div class="row">

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="calle">Calle:</label>
                                                <div class="col-md-10">
                                                    <input class="form-control " id="calle" name="calle" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="numero_int">Num. Int:</label>
                                                <div class="col-md-4">
                                                    <input class="form-control " id="numero_int" name="numero_int" type="text">
                                                </div>
                                                <label class="col-md-2 control-label " for="numero_ext">Num. Ext:</label>
                                                <div class="col-md-4">
                                                    <input class="form-control " id="numero_ext" name="numero_ext" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="colonia">Colonia:</label>
                                                <div class="col-md-10">
                                                    <input class="form-control " id="colonia" name="colonia" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="delegacion">Delegación: </label>
                                                <div class="col-md-10">
                                                    <input class="form-control " id="delegacion" name="delegacion" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="ciudad">Ciudad:</label>
                                                <div class="col-md-10">
                                                    <input class="form-control " id="ciudad" name="ciudad" type="text">
                                                </div>
                                            </div>


                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="estado">Estado:</label>
                                                <div class="col-md-10">
                                                    <input class="form-control " id="estadoxx" name="estado" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="cp">CP:</label>
                                                <div class="col-md-10">
                                                    <input class="form-control " id="cp" name="cp" type="text">
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <ul class="pager wizard">

                                        <li class="previous" id="btnprev"><a  class="btn btn-primary waves-effect waves-light">Anterior</a></li>
                                        <li class="next" id="btnnext"><a  class="btn btn-primary waves-effect waves-light">Siguiente</a></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="form-group pull-right" >
                                <div>
                                    <button id="btnagregar" type="submit" class="btn btn-primary waves-effect waves-light">
                                        Agregar
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
                        <h4 class="modal-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Editar Empleador</h4>
                    </div>
                    <div class="modal-body">


                        <form class="form-horizontal" role="form" data-parsley-validate novalidate action="empleadores/edit" method="post">


                            {{ csrf_field() }}

                            <div id="progressbarwizard2" class="pull-in">
                                <ul>
                                    <li><a href="#tab3" data-toggle="tab"><i class="fa fa-user"></i> Datos Personales</a></li>
                                    <li><a href="#tab4" data-toggle="tab"><i class="fa fa-home"></i> Dirección</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="bar" class="progress progress-striped progress-bar-primary-alt active">
                                        <div class="bar progress-bar progress-bar-primary"></div>
                                    </div>

                                    <div class="tab-pane p-t-10 fade" id="tab3">
                                        <div class="row">

                                            <div class="form-group">
                                                <div class="col-sm-7">
                                                    <input type="hidden" name = "id" class="form-control" hidden
                                                           id="id">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="nombre">Nombre *</label>
                                                <div class="col-md-9">
                                                    <input class="form-control required" id="nombree" name="nombre" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="apellidos">Apellidos *</label>
                                                <div class="col-md-9">
                                                    <input class="form-control required" id="apellidose" name="apellidos" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="generoe">Género *</label>
                                                <div class="col-md-9">

                                                    <select class="form-control select3 required" id="generoe" name="genero">
                                                        <option value="1">Hombre</option>
                                                        <option value="0">Mujer</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="email">Email*</label>
                                                <div class="col-md-9">
                                                    <input class="form-control required" id="emaile" name="email" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="telefono">Teléfono:</label>
                                                <div class="col-md-9">
                                                    <input class="form-control " id="telefonoe" name="telefono" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label " for="notas">Comentarios:</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" maxlength="225" rows="2" placeholder="Agrega algún comentario..." name="notas" id="notase"></textarea>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab4">
                                        <div class="row">

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="calle">Calle:</label>
                                                <div class="col-md-10">
                                                    <input class="form-control " id="callee" name="calle" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="numero_int">Num. Int:</label>
                                                <div class="col-md-4">
                                                    <input class="form-control " id="numero_inte" name="numero_int" type="text">
                                                </div>
                                                <label class="col-md-2 control-label " for="numero_ext">Num. Ext:</label>
                                                <div class="col-md-4">
                                                    <input class="form-control " id="numero_exte" name="numero_ext" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="colonia">Colonia:</label>
                                                <div class="col-md-10">
                                                    <input class="form-control " id="coloniae" name="colonia" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="delegacion">Delegación: </label>
                                                <div class="col-md-10">
                                                    <input class="form-control " id="delegacione" name="delegacion" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="ciudad">Ciudad:</label>
                                                <div class="col-md-10">
                                                    <input class="form-control " id="ciudade" name="ciudad" type="text">
                                                </div>
                                            </div>


                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="estado">Estado:</label>
                                                <div class="col-md-10">
                                                    <input class="form-control " id="estadoe" name="estado" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label " for="cp">CP:</label>
                                                <div class="col-md-10">
                                                    <input class="form-control " id="cpe" name="cp" type="text">
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <ul class="pager wizard">

                                        <li class="previous" id="btnpreve"><a class="btn btn-primary waves-effect waves-light">Anterior</a></li>
                                        <li class="next" id="btnnexte"><a class="btn btn-primary waves-effect waves-light">Siguiente</a></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="form-group pull-right" >
                                <div>
                                    <button id="btnagregare" type="submit" class="btn btn-primary waves-effect waves-light">
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
                $(".select2").select2();
                $('#datatable').dataTable();
                $('form').parsley();
                $('#basicwizard').bootstrapWizard({'tabClass': 'nav nav-tabs navtab-wizard nav-justified bg-muted'});


                $('#progressbarwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index+1;
                    var $percent = ($current/$total) * 100;
                    $('#progressbarwizard').find('.bar').css({width:$percent+'%'});

                    if( $current == 1 ){

                        $('#btnnext').css({display:'block'});
                        $('#btnprev').css({display:'none'});
                        $('#btnagregar').css({display:'none'});
                    }


                    if( $current == 2 ){
                        $('#btnnext').css({display:'none'});
                        $('#btnprev').css({display:'block'});
                        $('#btnagregar').css({display:'block'});
                    }



                }, 'tabClass': 'nav nav-tabs navtab-wizard nav-justified bg-muted'});


                $('#progressbarwizard2').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index+1;
                    var $percent = ($current/$total) * 100;
                    $('#progressbarwizard2').find('.bar').css({width:$percent+'%'});

                    if( $current == 1 ){

                        $('#btnnexte').css({display:'block'});
                        $('#btnpreve').css({display:'none'});
                        $('#btnagregare').css({display:'none'});
                    }


                    if( $current == 2 ){
                        $('#btnnexte').css({display:'none'});
                        $('#btnpreve').css({display:'block'});
                        $('#btnagregare').css({display:'block'});
                    }



                }, 'tabClass': 'nav nav-tabs navtab-wizard nav-justified bg-muted'});




                
            });
             




            function deleteEmpleador( id ){

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

                        $.get("empleadores/delete/"+id, function(data, status){


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


            function loadEmpleador( id ){

                var record = document.getElementById("registro"+id);
                document.getElementById('id').value = id;
                document.getElementById('nombree').value=record.childNodes[5].innerHTML;
                document.getElementById('apellidose').value=record.childNodes[7].innerHTML;
                document.getElementById('generoe').value = record.childNodes[3].innerHTML == "Hombre" ? 1 : 0;
                document.getElementById('emaile').value=record.childNodes[9].innerHTML;
                document.getElementById('telefonoe').value=record.childNodes[11].innerHTML;
                document.getElementById('callee').value=record.childNodes[13].innerHTML;
                document.getElementById('numero_inte').value=record.childNodes[15].innerHTML;
                document.getElementById('numero_exte').value=record.childNodes[17].innerHTML;
                document.getElementById('coloniae').value=record.childNodes[19].innerHTML;
                document.getElementById('delegacione').value=record.childNodes[21].innerHTML;
                document.getElementById('ciudade').value=record.childNodes[23].innerHTML;
                document.getElementById('estadoe').value=record.childNodes[25].innerHTML;
                document.getElementById('cpe').value=record.childNodes[27].innerHTML;
                document.getElementById('notase').value=record.childNodes[31].innerHTML;


            }

        </script>

    </body>
</html>
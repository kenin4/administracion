
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

        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
        
        
        <link href="{{ asset("plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css") }}" rel="stylesheet">
        <link href="{{ asset("plugins/bootstrap-daterangepicker/daterangepicker.css") }}" rel="stylesheet">
        <link href="{{ asset("plugins/select2/dist/css/select2.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("plugins/select2/dist/css/select2-bootstrap.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("plugins/bootstrap-sweetalert/sweet-alert.css") }}" rel="stylesheet" type="text/css" />


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
                            <li >
                                <a href="{{url('/')}}" class="active"><i class="fa fa-university"></i> <span> Inicio</span></a>
                            </li>
                            <li class="active">
                                <a href="usuarios"><i class="fa fa-user"></i> <span>Usuarios</span> </a>
                            </li>
                            <li>
                                <a href="encuestas"><i class="fa fa-book"></i> <span> Encuestas </span> </a>
                            </li>
                            <li>
                                <a href="egresados"><i class="fa fa-graduation-cap"></i> <span> Egresados </span> </a>
                            </li>
                            <li>
                                <a href="empleadores"><i class="fa fa-briefcase"></i> <span> Empleadores </span> </a>
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
                                <button type="button" class="btn btn-primary btn-bordred waves-effect w-md waves-light m-b-5" data-toggle="modal" data-target="#modal-agregar"> <i class="fa fa-plus"></i> Agregar usuario</button>
                            </div>

                            <h4 class="header-title m-t-0 m-b-30">Usuarios</h4>

                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>                                        
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Correo electrónico</th>
                                        <th style="width: 150px">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach( $users as $user )

                                    <tr id="{{ "registro".$user->id }}">
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->nombre }}</td>
                                        <td>{{ $user->apellidos  }}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5" data-toggle="modal" data-target="#modal-editar" onclick="loadUser({{ $user->id }})" > <i class="fa fa-pencil"></i> </button>
                                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="deleteUser({{ $user->id }})" > <i class="fa fa-trash"></i> </button>
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
                                            <h4 class="modal-title">Agregar Usuario</h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                            
                            <form class="form-horizontal" role="form" data-parsley-validate novalidate action="{{url('/usuarios/new')}}" method="post" >

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="nombre" class="col-sm-4 control-label">Nombre: </label>
                                    <div class="col-sm-7">
                                        <input parsley-trigger="change" required type="text" name="nombre"  class="form-control" id="nombre" placeholder="Nombre...">
                                    </div>
                                </div>
                                                
                                <div class="form-group">
                                    <label for="apellido_p" class="col-sm-4 control-label">Apellidos: </label>
                                    <div class="col-sm-7">
                                        <input parsley-trigger="change" required type="text" name = "apellidos"  class="form-control"  id="apellidos" placeholder="Apellidos...">
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label for="usuario" class="col-sm-4 control-label">Correo Electrónico: </label>
                                    <div class="col-sm-7">
                                        <input type="email" name="email" parsley-trigger="change" required parsley-type="email" class="form-control" id="usuario" placeholder="Correo electrónico...">
                                    </div>
                                </div>
                                                
                                <div class="form-group">
                                    <label for="hori-pass1" class="col-sm-4 control-label">Contraseña</label>
                                    <div class="col-sm-7">
                                        <input id="password" type="password" name="password" placeholder="Ingresa una contraseña fuerte" parsley-trigger="change" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hori-pass2" class="col-sm-4 control-label">Confirma la contraseña</label>
                                    <div class="col-sm-7">
                                        <input data-parsley-equalto="#password" type="password" parsley-trigger="change" required
                                               placeholder="Confirma tu contraseña" class="form-control" id="hori-pass2">
                                    </div>
                                </div>

                                
                                                
                                <div class="form-group pull-right">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Agregar
                                        </button>
                                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
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
                        <h4 class="modal-title">Editar Usuario</h4>
                    </div>

                    <div class="modal-body">


                        <form class="form-horizontal" role="form" data-parsley-validate novalidate action="{{url('/usuarios/edit')}}" method="post" >

                            {{ csrf_field() }}


                            <div class="form-group">
                                    <input type="hidden" name="id" required class="form-control" id="ide" hidden >
                            </div>

                            <div class="form-group">
                                <label for="nombre" class="col-sm-4 control-label">Nombre: </label>
                                <div class="col-sm-7">
                                    <input type="text" name="nombre" parsley-trigger="change" required class="form-control" id="nombree" placeholder="Nombre...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="apellido_p" class="col-sm-4 control-label">Apellidos: </label>
                                <div class="col-sm-7">
                                    <input type="text" name = "apellidos" parsley-trigger="change" required class="form-control"  id="apellidose" placeholder="Apellidos...">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="usuario" class="col-sm-4 control-label">Correo Electrónico: </label>
                                <div class="col-sm-7">
                                    <input type="email" name="email" parsley-trigger="change" required parsley-type="email" class="form-control" id="emaile" placeholder="Correo electrónico...">
                                </div>
                            </div>


                            <div class="form-group pull-right">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Editar
                                    </button>
                                    <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
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
                                                    <select class="form-control select2 " id="estadoe" name="estado">
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


            function deleteUser( id ){

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


                            $.get("usuarios/delete/"+id, function(data, status){

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


            function loadUser( id ){

                var record = document.getElementById("registro"+id);
                document.getElementById('ide').value=record.childNodes[1].innerHTML;
                document.getElementById('nombree').value=record.childNodes[3].innerHTML;
                document.getElementById('apellidose').value=record.childNodes[5].innerHTML;
                document.getElementById('emaile').value=record.childNodes[7].innerHTML;


            }

        </script>

    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta  content="5"; url="{{url('/')}}" />
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
                                    <img src="{{url('images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle user-img">
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
                            <li>
                                <a href="usuarios"><i class="fa fa-user"></i> <span>Usuarios</span> </a>
                            </li>
                            <li>
                                <a href="encuestas"><i class="fa fa-book"></i> <span> Encuestas </span> </a>
                            </li>
                            <li>
                                <a href="egresados"><i class="fa fa-graduation-cap"></i> <span> Egresados </span> </a>
                            </li>
                            <li >
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

                        <div class="alert {{$type}} alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>{{$title}}</strong>{{" ".$mensaje}}
                        </div>
                        Serás redirigido en 5 segundos a la página principal
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

        
    
        
        
        <div id="modal-editar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Agregar Registro</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Egresado:</label>
                                                        <select class="form-control select2">
                                                            <option>Seleccionar Egresado</option>
                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                            </optgroup>
                                                            <optgroup label="Pacific Time Zone">
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Encuesta:</label>
                                                        <select class="form-control select2">
                                                            <option>Selecciona la Encuesta</option>
                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                            </optgroup>
                                                            <optgroup label="Pacific Time Zone">
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">Fecha de Aplicación</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="yyyy/mm/dd" id="datepicker-autoclose">
                                                                <span class="input-group-addon bg-primary b-0 text-white"><i class="fa fa-calendar"></i></span>
                                                            </div><!-- input-group -->

                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                <div class="col-md-6">                                                  
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">Próxima Aplicación</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="yyyy/mm/dd" id="datepicker-autoclose2">
                                                                <span class="input-group-addon bg-primary b-0 text-white"><i class="fa fa-calendar"></i></span>
                                                            </div><!-- input-group -->

                                                    </div>                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-info waves-effect waves-light" data-dismiss="modal">Guardar</button>
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
                setTimeout(function () {
                    window.location="{{url('/')}}";
                }, 5000);
            });
             
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true,
                format: 'yyyy/mm/dd'
            });
             jQuery('#datepicker-autoclose2').datepicker({
                autoclose: true,
                todayHighlight: true,
                 format: 'yyyy/mm/dd'
            });
        </script>

    </body>
</html>
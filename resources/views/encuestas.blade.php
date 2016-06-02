<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sistema para la administración de alumnos egresados de la UTM">
        <meta name="author" content="Mictlan Software">

        <link rel="shortcut icon" href="images/favicon.ico">

        <title>Sistema de administración</title>
        
		<link rel="stylesheet" href="plugins/morris/morris.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/core.css" rel="stylesheet" type="text/css" />
        <link href="css/components.css" rel="stylesheet" type="text/css" />
        <link href="css/icons.css" rel="stylesheet" type="text/css" />
        <link href="css/pages.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset("plugins/bootstrap-sweetalert/sweet-alert.css") }}" rel="stylesheet" type="text/css" />
        
        <link href="plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <link href="plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
        <link href="plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <!-- DataTables -->
        <link href="plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        
        
        <script src="js/modernizr.min.js"></script>

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
                                <a href="usuarios"><i class="fa fa-user"></i> <span>Usuarios</span> </a>
                            </li>
                            <li  class="active">
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
                                <button type="button" class="btn btn-primary btn-bordred waves-effect w-md waves-light m-b-5" data-toggle="modal" data-target="#modal-agregar" > <i class="fa fa-plus"></i> Agregar Encuesta</button>
                                                                                            
                                
                            </div>

                            <h4 class="header-title m-t-0 m-b-30">Encuestas</h4>

                            <div >
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre</th>                                        
                                        <th style="width: 350px;">Descripción</th>
                                        <th style="width: 200px;">Link</th>
                                        <th>Usuario</th>
                                        <th style="width: 10px;">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($encuestas as $encuesta)
                                        <tr id="registro{{$encuesta->id}}">
                                            <td>{{$encuesta->codigo}}</td>
                                            <td>{{$encuesta->nombre}}</td>
                                            <td>{{$encuesta->descripcion}}</td>
                                            <td>{{$encuesta->link}}</td>
                                            <td>{{$encuesta->usuario}}</td>
                                            <td>
                                                <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5 col-sm-6" data-toggle="modal" data-target="#modal-editar" onclick="editEncuesta('{{$encuesta->id}}')"> <i class="fa fa-pencil"></i> </button>
                                                <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5 col-sm-6" onclick="deleteEncuesta({{$encuesta->id}})"> <i class="fa fa-trash"></i> </button>
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
                            <div class="col-xs-6">
                                2016 © Mictlán Software.
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="#">Nosotros</a>
                                    </li>
                                    <li>
                                        <a href="#">Ayuda</a>
                                    </li>
                                    <li>
                                        <a href="#">Contacto</a>
                                    </li>
                                </ul>
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
                                            <h4 class="modal-title">Modificar información</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" role="form" data-parsley-validate novalidate method="POST" action="encuestas/edit" >                                                                
                                                {{csrf_field()}}
                                                <input type="text" id="id-edit" name="id" hidden>
                                                <div class="form-group">
                                                    <label for="matricula" class="col-sm-4 control-label">Código: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required name="codigo" class="form-control"
                                                               id="codigo-edit" placeholder="Código" >
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="apellido_m" class="col-sm-4 control-label">Link</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required name="link" class="form-control"
                                                               id="link-edit" placeholder="Link" >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="nombre" class="col-sm-4 control-label">Nombre: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required name="nombre" class="form-control"
                                                               id="nombre-edit" placeholder="Nombre" >
                                                    </div>
                                                </div>
                                                                
                                                <div class="form-group">
                                                    <label for="apellido_p" class="col-sm-4 control-label">Descripción </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required name="descripcion" class="form-control"
                                                               id="descripcion-edit" placeholder="Descripción" >
                                                    </div>
                                                </div>
                                                                
                                                
                                                                
                                                
                                                                
                                                <div class="form-group pull-right">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Agregar
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>                                     
                                        </div>
                                        
                                    </div>
                                </div>
                            </div><!-- /.modal -->
        
                            <div id="modal-agregar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Agregar Encuesta</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" role="form" data-parsley-validate novalidate method="POST" action="encuestas/new" >                                                                
                                                {{csrf_field()}}

                                                
                                                <div class="form-group">
                                                    <label for="matricula" class="col-sm-4 control-label">Código: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required name="codigo" class="form-control"
                                                               id="matricula" placeholder="Código" >
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="apellido_m" class="col-sm-4 control-label">Link</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required name="link" class="form-control"
                                                               id="apellido_m" placeholder="Link" >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="nombre" class="col-sm-4 control-label">Nombre: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required name="nombre" class="form-control"
                                                               id="nombre" placeholder="Nombre" >
                                                    </div>
                                                </div>
                                                                
                                                <div class="form-group">
                                                    <label for="apellido_p" class="col-sm-4 control-label">Descripción </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required name="descripcion" class="form-control"
                                                               id="apellido_p" placeholder="Descripción" >
                                                    </div>
                                                </div>
                                                                
                                                
                                                                
                                                
                                                                
                                                <div class="form-group pull-right">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Agregar
                                                        </button>
                                                        <button type="reset"
                                                                class="btn btn-default waves-effect waves-light m-l-5">
                                                            Cancelar
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
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/detect.js"></script>
        <script src="js/fastclick.js"></script>
        <script src="js/jquery.slimscroll.js"></script>
        <script src="js/jquery.blockUI.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="plugins/jquery-knob/jquery.knob.js"></script>
		<script src="plugins/morris/morris.min.js"></script>
		<script src="plugins/raphael/raphael-min.js"></script>
        <script src="pages/jquery.dashboard.js"></script>
        <script src="js/jquery.core.js"></script>
        <script src="js/jquery.app.js"></script>
        <script src="plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        
        <script src="plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
        
        <!-- Datatables-->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="plugins/datatables/jszip.min.js"></script>
        <script src="plugins/datatables/pdfmake.min.js"></script>
        <script src="plugins/datatables/vfs_fonts.js"></script>
        <script src="plugins/datatables/buttons.html5.min.js"></script>
        <script src="plugins/datatables/buttons.print.min.js"></script>
        <script src="plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="plugins/datatables/dataTables.scroller.min.js"></script>
        

        <script src="{{ asset("plugins/bootstrap-sweetalert/sweet-alert.min.js") }}"></script>
        <script src="{{ asset("pages/jquery.sweet-alert.init.js") }}"></script>

        <!-- Datatable init js -->
        <script src="pages/datatables.init.js"></script>


        <!--  wizards  -->
        <script src="{{ asset("plugins/bootstrap-wizard/jquery.bootstrap.wizard.js") }}"></script>
        
         <script>
            jQuery(document).ready(function() {
                $(".select2").select2();
                $('#datatable').dataTable();
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

        function deleteEncuesta(id)
        {
            swal({
                title: "Estás seguro?",
                text: "Esta acción no se puede deshacer",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sí, continuar!",
                cancelButtonText: "No, cancelar!",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function (isConfirm) {
                if (isConfirm) {
                   
                    $.ajax({
                      type: "GET",
                      url: "encuestas/delete/" + id,
                      data: id,
                      success: function(datos)
                      {
                         swal({ title: "El registro ha sido borrado", 
                                text: "Haz click para continuar",
                                type: "success"
                                }, function () {
                                     location.reload(); 
                                });
                      },
                      dataType: "text"
                    });
                } 
            });


        }

        function editEncuesta(id)
        {
            //alert(id);
            var record = document.getElementById('registro' + id);
            document.getElementById('id-edit').value=id;
            document.getElementById('codigo-edit').value=record.childNodes[1].innerHTML;
            document.getElementById('nombre-edit').value=record.childNodes[3].innerHTML;
            document.getElementById('descripcion-edit').value=record.childNodes[5].innerHTML;
            document.getElementById('link-edit').value=record.childNodes[7].innerHTML;
        }
        </script>

    </body>
</html>
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
                            <li>
                                <a href="encuestas"><i class="fa fa-book"></i> <span> Encuestas </span> </a>
                            </li>
                            <li class="active">
                                <a href="egresados"><i class="fa fa-graduation-cap"></i> <span> Egresados </span> </a>
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

                            <h4 class="header-title m-t-0 m-b-30">Usuarios</h4>

                            <div >
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Matrícula</th>
                                        <th>Nombre</th>                                        
                                        <th>Carrera</th>
                                        <th>Correo electrónico</th>
                                        <th>Año de Egreso</th>
                                        <th>Municipio de Procedencia</th>
                                        <th>Recidencia Actual</th>
                                        <th>Empleo Actual</th>
                                        <th>Teléfono</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2011020021</td>
                                        <td>Daniel Alejandro Hernández Gómez</td>                                  
                                        <td>Ing. en Computacón</td>
                                        <td>daniel@extjs.mx</td>
                                        <td>2016</td>
                                        <td>San Antonino Castillo Velasco</td>
                                        <td>Huajuapan de León, Oaxaca</td>
                                        <td>TEO Mictlán Software</td>
                                        <td>953 113 69 29</td>
                                        <td>
                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5 col-sm-6" data-toggle="modal" data-target="#modal-editar" > <i class="fa fa-pencil"></i> </button>
                                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5 col-sm-6" > <i class="fa fa-trash"></i> </button>
                                        </td>
                                    </tr>
                                          
                                        
                                    <tr>
                                        <td>2011020021</td>
                                        <td>Daniel Alejandro Hernández Gómez</td>                                  
                                        <td>Ing. en Computacón</td>
                                        <td>daniel@extjs.mx</td>
                                        <td>2016</td>
                                        <td>San Antonino Castillo Velasco</td>
                                        <td>Huajuapan de León, Oaxaca</td>
                                        <td>TEO Mictlán Software</td>
                                        <td>953 113 69 29</td>
                                        <td>
                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5 col-sm-6" data-toggle="modal" data-target="#modal-editar"> <i class="fa fa-pencil"></i> </button>
                                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5 col-sm-6" > <i class="fa fa-trash"></i> </button>
                                        </td>
                                    </tr>
                                        
                                        <tr>
                                        <td>2011020021</td>
                                        <td>Daniel Alejandro Hernández Gómez</td>                                  
                                        <td>Ing. en Computacón</td>
                                        <td>daniel@extjs.mx</td>
                                        <td>2016</td>
                                        <td>San Antonino Castillo Velasco</td>
                                        <td>Huajuapan de León, Oaxaca</td>
                                        <td>TEO Mictlán Software</td>
                                        <td>953 113 69 29</td>
                                        <td>
                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5 col-sm-6" data-toggle="modal" data-target="#modal-editar"> <i class="fa fa-pencil"></i> </button>
                                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5 col-sm-6" > <i class="fa fa-trash"></i> </button>
                                        </td>
                                    </tr>
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

        
        
        
        
        <div id="modal-agregar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Agregar Usuario</h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                            
                            <form class="form-horizontal" role="form" data-parsley-validate novalidate>                                                                
                                     
                                <div class="form-group">
                                    <label for="matricula" class="col-sm-4 control-label">Matrícula: </label>
                                    <div class="col-sm-7">
                                        <input type="text" required parsley-type="email" class="form-control"
                                               id="matricula" placeholder="Matrícula...">
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="nombre" class="col-sm-4 control-label">Nombre: </label>
                                    <div class="col-sm-7">
                                        <input type="text" required parsley-type="email" class="form-control"
                                               id="nombre" placeholder="Nombre...">
                                    </div>
                                </div>
                                                
                                <div class="form-group">
                                    <label for="apellido_p" class="col-sm-4 control-label">Apellido Paterno: </label>
                                    <div class="col-sm-7">
                                        <input type="text" required parsley-type="email" class="form-control"
                                               id="apellido_p" placeholder="Apellido Paterno...">
                                    </div>
                                </div>
                                                
                                <div class="form-group">
                                    <label for="apellido_m" class="col-sm-4 control-label">Apellido Materno: </label>
                                    <div class="col-sm-7">
                                        <input type="text" required parsley-type="email" class="form-control"
                                               id="apellido_m" placeholder="Apellido Materno...">
                                    </div>
                                </div>
                                                
                                <div class="form-group">
                                    <label for="correo" class="col-sm-4 control-label">Correo Electrónico: </label>
                                    <div class="col-sm-7">
                                        <input type="email" required parsley-type="email" class="form-control"
                                               id="correo" placeholder="Correo Electrónico...">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="anio_egreso" class="col-sm-4 control-label">Año de Egreso: </label>
                                    <div class="col-sm-7">
                                        <input type="text" required parsley-type="email" class="form-control"
                                               id="anio_egreso" placeholder="Año de Egreso...">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="municipio_procedencia" class="col-sm-4 control-label">Municipio de Procedencia: </label>
                                    <div class="col-sm-7">
                                        <input type="text" required parsley-type="email" class="form-control"
                                               id="municipio_procedencia" placeholder="¿De Dónde Viene?...">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="residencia_actual" class="col-sm-4 control-label">Residencia Actual: </label>
                                    <div class="col-sm-7">
                                        <input type="text" required parsley-type="email" class="form-control"
                                               id="residencia_actual" placeholder="¿Dónde vive actualmente?...">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="empleo_actual" class="col-sm-4 control-label">Empleo Actual: </label>
                                    <div class="col-sm-7">
                                        <input type="text" required parsley-type="email" class="form-control"
                                               id="empleo_actual" placeholder="¿Dónde trabaja actualmente?...">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="telefono" class="col-sm-4 control-label">Teléfono: </label>
                                    <div class="col-sm-7">
                                        <input type="text" required parsley-type="email" class="form-control"
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
                                            Cancelar
                                        </button>
                                    </div>
                                </div>
                            </form>                                     
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

        <!-- Datatable init js -->
        <script src="pages/datatables.init.js"></script>
        
         <script>
            jQuery(document).ready(function() {
                $(".select2").select2();
                $('#datatable').dataTable();
                
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
        </script>

    </body>
</html>
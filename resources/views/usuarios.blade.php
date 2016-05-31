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
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>                                        
                                        <th>Nombre</th>
                                        <th>Correo electrónico</th>
                                        <th>Fecha de nacimiento</th>
                                        
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>                                        
                                        <td>Daniel Alejandro Hernández Gómez</td>
                                        <td>daniel@extjs.mx</td>
                                        <td>29/04/2016</td>                                                     
                                        <td>
                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5" data-toggle="modal" data-target="#modal-editar"> <i class="fa fa-pencil"></i> </button>
                                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5" > <i class="fa fa-trash"></i> </button>
                                        </td>
                                    </tr>
                                        
                                        <tr>
                                        <td>1</td>                                        
                                        <td>Daniel Alejandro Hernández Gómez</td>
                                        <td>daniel@extjs.mx</td>
                                        <td>29/04/2016</td>                                                     
                                        <td>
                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5" data-toggle="modal" data-target="#modal-editar"> <i class="fa fa-pencil"></i> </button>
                                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5" > <i class="fa fa-trash"></i> </button>
                                        </td>
                                    </tr>
                                        
                                        <tr>
                                        <td>1</td>                                        
                                        <td>Daniel Alejandro Hernández Gómez</td>
                                        <td>daniel@extjs.mx</td>
                                        <td>29/04/2016</td>                                                     
                                        <td>
                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5" data-toggle="modal" data-target="#modal-editar"> <i class="fa fa-pencil"></i> </button>
                                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5" > <i class="fa fa-trash"></i> </button>
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
                                    <label for="nombre" class="col-sm-4 control-label">Nombre: </label>
                                    <div class="col-sm-7">
                                        <input type="email" required parsley-type="email" class="form-control"
                                               id="nombre" placeholder="Nombre...">
                                    </div>
                                </div>
                                                
                                <div class="form-group">
                                    <label for="apellido_p" class="col-sm-4 control-label">Apellido Paterno: </label>
                                    <div class="col-sm-7">
                                        <input type="email" required parsley-type="email" class="form-control"
                                               id="apellido_p" placeholder="Apellido Paterno...">
                                    </div>
                                </div>
                                                
                                <div class="form-group">
                                    <label for="apellido_m" class="col-sm-4 control-label">Apellido Materno: </label>
                                    <div class="col-sm-7">
                                        <input type="email" required parsley-type="email" class="form-control"
                                               id="apellido_m" placeholder="Apellido Materno...">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="usuario" class="col-sm-4 control-label">Correo Electrónico: </label>
                                    <div class="col-sm-7">
                                        <input type="email" required parsley-type="email" class="form-control"
                                               id="usuario" placeholder="Correo electrónico...">
                                    </div>
                                </div>
                                                
                                <div class="form-group">
                                    <label for="hori-pass1" class="col-sm-4 control-label">Contraseña</label>
                                    <div class="col-sm-7">
                                        <input id="hori-pass1" type="password" placeholder="Ingresa una contraseña fuerte" required
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hori-pass2" class="col-sm-4 control-label">Confirma la contraseña</label>
                                    <div class="col-sm-7">
                                        <input data-parsley-equalto="#hori-pass1" type="password" required
                                               placeholder="Confirma tu contraseña" class="form-control" id="hori-pass2">
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
         <script>
            jQuery(document).ready(function() {
                $(".select2").select2();
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
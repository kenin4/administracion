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
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
        
        
        
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
                            <li class="active">
                                <a href="index.html" class="active"><i class="fa fa-university"></i> <span> Inicio</span></a>
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
                                <button type="button" class="btn btn-primary btn-bordred waves-effect w-md waves-light m-b-5" data-toggle="modal" data-target="#modal-responsivo" > <i class="fa fa-plus"></i> Agregar Registro</button>
                            </div>

                            <h4 class="header-title m-t-0 m-b-30">Monitoreo</h4>

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
                                        <th>Usuario</th>
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
                                                        echo "<td>".$encuesta->usuario->nombre."</td>";
                                                   }
                                                   
                                                ?>
                                            
                                        <td><span class="label label-danger">Vencido</span></td>
                                        <td>
                                            <button class="btn btn-icon waves-effect waves-light btn-primary m-b-5" data-toggle="modal" data-target="#modal-editar"> <i class="fa fa-pencil"></i> </button>
                                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5" > <i class="fa fa-trash"></i> </button>
                                        </td>
                                        </tr>
                                        @endforeach
                                    

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

        
        <div id="modal-responsivo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="bind" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Agregar Registro</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Egresado:</label>
                                                        <select class="form-control select2" name="egresado_id">

                                                            <option>Seleccionar Egresado</option>
                                                            @foreach($egresados as $egresado)
                                                                <option value="{{$egresado->id}}">{{$egresado->nombre ." ". $egresado->apellidos ." :: ".$egresado->matricula}}  </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                {{ csrf_field() }}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Encuesta:</label>
                                                        <select class="form-control select2" name="encuesta_id">
                                                            <option>Selecciona la Encuesta</option>
                                                        @foreach($encuestas as $encuesta)
                                                            <option value="{{$encuesta->id}}">{{$encuesta->codigo}}</option>
                                                        @endforeach    
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">Fecha de Aplicación</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="fecha_aplicacion" placeholder="dd/mm/yyyy" id="datepicker-autoclose">
                                                                <span class="input-group-addon bg-primary b-0 text-white"><i class="fa fa-calendar"></i></span>
                                                            </div><!-- input-group -->

                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                <div class="col-md-6">                                                  
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">Próxima Aplicación</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="fecha_proxima_aplicacion" id="datepicker-autoclose2">
                                                                <span class="input-group-addon bg-primary b-0 text-white"><i class="fa fa-calendar"></i></span>
                                                            </div><!-- input-group -->

                                                    </div>                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Guardar</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div><!-- /.modal -->
        
        
        
        
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
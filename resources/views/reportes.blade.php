
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
                            <li class="active">
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
             
                <div class="row" style="padding: 30px 0px">
                    <div class="col-lg-6">
                        <div class="card-box project-box">                                                        
                            <h2 style="padding: 10px 0px 10px 20px"><a href="" class="text-inverse">Egresados</a></h2>                            
                            <p class="text-muted font-15 " style="text-align: justify">Este Reporte lista todos los esgresados clasificados por carrera que han o no respondido la
                                encuesta correspondiente, con la opción de utilizar los siguientes filtros: <br><br> * Estado de la encuesta ( si ha sido respondida o no ) <br> * Carrera <br> * Género <br> * Generación (Año de egreso)
                                <br> * Encuesta
                            </p>                            
                            <button type="button" class="btn btn-block btn--md btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modal-reporte-egresados">Generar Reporte</button>                                                      
                        </div>
                    </div><!-- end col-->
                    
                    

                    
                    <div class="col-lg-6">
                        <div class="card-box project-box">                                                        
                            <h2 style="padding: 10px 0px 10px 20px"><a href="" class="text-inverse">Empleadores</a></h2>                            
                            <p class="text-muted font-15 " style="text-align: justify">Este Reporte lista todos los empleadores clasificados por giro de la empresa que han o no respondido la
                                encuesta correspondiente, con la opción de utilizar los siguientes filtros: <br><br> * Estado de la encuesta ( si ha sido respondida o no ) <br> * Giro de la empresa <br> * Encuesta <br><br><br>
                            </p>                            
                            <button type="button" class="btn btn-block btn--md btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modal-reporte-empleadores">Generar Reporte</button>                                                      
                        </div>
                    </div><!-- end col-->
                    
                    
                </div>
                <!-- end row -->



                <div id="modal-reporte-egresados" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">

                                    



                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Egresados</h4>
                                            </div>
                                            <div class="modal-body">

                                            <form class="form-horizontal" role="form"  action="reportes/egresados" method="post">

                                                {{ csrf_field() }}

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Encuesta:</label>
                                                            <select class="form-control select2" name="id_encuesta">
                                                                    @foreach( $encuestasEgresados as $en )
                                                                        <option value="{{ $en->id }}">{{ $en->codigo }}</option>    
                                                                    @endforeach                                                                           
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Estado de la Encuesta:</label>
                                                            <select class="form-control select2" name="estado_encuesta">                                                                                                                                                    
                                                                    <option value="1">Respondida</option>
                                                                    <option value="0">No Respondida</option>                                                                                         
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Carrera:</label>
                                                            <select class="form-control select2" name="carrera">
                                                                                                                                                                     
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
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Género:</label>
                                                            <select class="form-control select2" name="genero">
                                                                                                                                                                    
                                                                    <option value="-1">Ambos</option>
                                                                    <option value="1">Hombre</option>
                                                                    <option value="2">Mujer</option>                                                                           
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="generacion" class="control-label">Generación ( Dejar en blanco si no importa ): </label>
                                                            <div class="col-md-12">
                                                                <input type="number"  class="form-control" name="generacion" id="generacion" placeholder="Año de egreso...">
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



                            <div id="modal-reporte-empleadores" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Empleadores</h4>
                                            </div>
                                            <div class="modal-body">

                                            <form class="form-horizontal" role="form"  action="reportes/empleadores" method="post">


                                                {{ csrf_field() }}

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Encuesta:</label>
                                                            <select class="form-control select2" name="encuesta_id">
                                                                    @foreach( $encuestasEmpleadores as $en )
                                                                        <option value="{{ $en->id }}">{{ $en->codigo }}</option>    
                                                                    @endforeach                                                                                                                                                                                                                                                  
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Estado de la Encuesta:</label>
                                                            <select class="form-control select2" name="estado_encuesta">                                                                                                     
                                                                    <option value="1">Respondida</option>
                                                                    <option value="0">No Respondida</option>                                                                                         
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Giro de la empresa:</label>
                                                            <select class="form-control select2" name="giro">                                                                                                     <option value="0">Todos</option>
                                                                    <option value="1">Tecnología y Comunicación</option>
                                                                    <option value="2">Manufactura</option>
                                                                    <option value="3">Servicios</option>
                                                                    <option value="4">Salud</option>
                                                                    <option value="5">Educación</option>
                                                                    <option value="6">Servicios Públicos</option>
                                                                    <option value="7">Instituciones Financieras</option>
                                                                    <option value="8">Turismo</option>
                                                                    <option value="9">Transporte</option>                                                                          
                                                            </select>
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
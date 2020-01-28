<?php require_once("Comercial-sesion.php");
    require_once("funciones.php");
    $xc = conectar();

    $xfec_ini=leerParam("fec_ini","");
    $xfec_fin=leerParam("fec_fin","");

    $sqlProgramacion = "SELECT * FROM programacion p
                        INNER JOIN bus b ON p.id_bus = b.id_bus
                        WHERE fec_prog >= '$xfec_ini' AND fec_prog <= '$xfec_fin'";
    $resProgramacion = mysqli_query($xc,$sqlProgramacion);

    
    $semana = 
    desconectar($xc);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Familia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/ico.png">

        <!--calendar css-->
        <link href="../plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        <style>
            
            .pulse-button {  
                animation-name: pulse_animation;
                animation-duration: 5000ms;
                transform-origin:70% 70%;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes pulse_animation {
                0% { transform: scale(1); }
                30% { transform: scale(1); }
                40% { transform: scale(1.08); }
                50% { transform: scale(1); }
                60% { transform: scale(1); }
                70% { transform: scale(1.05); }
                80% { transform: scale(1); }
                100% { transform: scale(1); }
            }
        </style>

    </head>

<?php require_once("Comercial-nav.php");?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Programas</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Comercial</a></li>
                            <li class="breadcrumb-item active">Programas</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <!-- AGREGAR PROGRAMACION-->
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card-box'>
                    <button onclick="window.location.href='Comercial-programaAdd.php'" type="button" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right pulse-button">Agregar Programación</button>
                    <h4 class="m-b-30 m-t-0 header-title"><b>Programación del día</b></h4>

                    </div>
                </div>
            </div> <!-- end row -->
    
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card-box'>
                        <div class='row justify-content-center'>
                            <label class='col-1 col-form-label'>Desde: </label>
                            <div class='col-3'>
                                <div class='input-group'>
                                    <input type='date'  name='fec_ini' id='fec_ini' class='form-control'>
                                </div>
                            </div>
                            <label class='col-1 col-form-label'>Hasta: </label>
                            <div class='col-4'>
                                <div class='input-group'>
                                    <input type='date' name='fec_fin' id='fec_fin' class='form-control'>
                                    <button class='btn waves-effect waves-light btn-primary' type='submit' id="btPrueba" name="btPrueba"> Buscar</button>
                                </div>
                            </div>
                        </div>
                        <br/>

                        <h4 class='m-t-0 header-title'><b>SEMANA DEL </b> _______ <b>AL</b> _______</b></h4>
                        <p class='text-muted font-14'></p>

                        <table class='tablesaw table m-b-0' data-tablesaw-mode='swipe' id='table-2555'>
                            <thead>
                            <tr>
                                <th class='title' scope='col' data-tablesaw-sortable-col data-tablesaw-priority='persist'>Día y Fecha</th>
                                <th scope='col' data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority='3'>Hora Salida</th>
                                <th scope='col' data-tablesaw-sortable-col data-tablesaw-priority='2'>Placa Bus</th>
                            </tr>
                            </thead>
                            <tbody id="resPRueba" name="resPRueba">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- PENDIENTE
            <div class='row'>
                <div class='col-sm-8'>
                    <div class='card-box'>
                        <table class='tablesaw table m-b-0' data-tablesaw-mode='swipe' id='table-2555   '>
                            <thead>
                            <tr>
                                <th class='title' scope='col' data-tablesaw-sortable-col data-tablesaw-priority='persist'># Cliente</th>
                                <th scope='col' data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority='3'>Nombre Cliente</th>
                                <th scope='col' data-tablesaw-sortable-col data-tablesaw-priority='2'>Tipo</th>
                                <th scope='col' data-tablesaw-sortable-col data-tablesaw-priority='2'>Funcion</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Avatar</td>
                                <td>2009</td>
                                <td>83%</td>
                                <td>1997</td>
                            </tr>
                            <tr>
                                <td>Titanic</td>
                                <td>1997</td>
                                <td>88%</td>
                                <td>2009</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class='col-sm-4'>
                    <div class='card-box'>
                        <h4 class='m-t-0 header-title'><b> Estado </b></h4>
                        <table class='tablesaw table m-b-0' data-tablesaw-mode='swipe' id='table-2555'>
                            <thead>
                            <tr>
                                <th class='title' scope='col' data-tablesaw-sortable-col data-tablesaw-priority='persist'>Visita</th>
                                <th scope='col' data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority='3'>Persona</th>
                                <th scope='col' data-tablesaw-sortable-col data-tablesaw-priority='2'>Contrato</th>
                                <th scope='col' data-tablesaw-sortable-col data-tablesaw-priority='2'>Estado</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>
                                    <div class='checkbox checkbox-primary checkbox-single'>
                                    <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                    <label></label>
                                    </div>
                                </td>
                                <td>
                                    <div class='checkbox checkbox-primary checkbox-single'>
                                    <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                    <label></label>
                                    </div>
                                </td>
                                <td>
                                    <div class='checkbox checkbox-primary checkbox-single'>
                                    <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                    <label></label>
                                    </div>
                                </td>
                                <td>
                                    <div class='checkbox checkbox-primary checkbox-single'>
                                    <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                    <label></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class='checkbox checkbox-primary checkbox-single'>
                                    <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                    <label></label>
                                    </div>
                                </td>
                                <td>
                                    <div class='checkbox checkbox-primary checkbox-single'>
                                    <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                    <label></label>
                                    </div>
                                </td>
                                <td>
                                    <div class='checkbox checkbox-primary checkbox-single'>
                                    <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                    <label></label>
                                    </div>
                                </td>
                                <td>
                                    <div class='checkbox checkbox-primary checkbox-single'>
                                    <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                    <label></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --><!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

<!-- CALENDARIO
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card-box">
                        <div class="row"> -->
                            <!--
                                <div class="col-md-3">
                                    <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-primary btn-block waves-effect m-t-20 waves-light">
                                        <i class="fa fa-plus"></i> Create New
                                    </a>
                                    <div id="external-events" class="m-t-20">
                                        <br>
                                        <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                        <div class="external-event bg-success" data-class="bg-success">
                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>New Theme Release
                                        </div>
                                        <div class="external-event bg-info" data-class="bg-info">
                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>My Event
                                        </div>
                                        <div class="external-event bg-warning" data-class="bg-warning">
                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Meet manager
                                        </div>
                                        <div class="external-event bg-purple" data-class="bg-purple">
                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Create New theme
                                        </div>
                                    </div>


                                    <div class="checkbox checkbox-primary m-t-30">
                                        <input type="checkbox" id="drop-remove">
                                        <label for="drop-remove">
                                            Remove after drop
                                        </label>
                                    </div>
                                </div> 
-->
                            <!--<div class="col-md-9">
                                <div id="calendar"></div>
                            </div>--> <!-- end col -->
                       <!-- </div> -->  <!-- end row -->
                    <!--</div>-->

                    <!-- BEGIN MODAL -->
                    <!--<div class="modal fade none-border" id="event-modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Add New Event</h4>
                                </div>
                                <div class="modal-body p-b-0"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>-->

                    <!-- Modal Add Category -->
                    <!--<div class="modal fade none-border" id="add-category" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Add a category</h4>
                                </div>
                                <div class="modal-body p-b-0">
                                    <form role="form">
                                        <div class="form-group">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                                <option value="inverse">Inverse</option>
                                            </select>
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- END MODAL -->
                <!--</div>-->
                <!-- end col-12 -->
            <!--</div>--> <!-- end row -->

        <!--</div>--> <!-- container -->

    <!--</div>--> <!-- content -->

    <footer class="footer text-right">
        2019 © INSIZIO
    </footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
</div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Jquery-Ui -->
        <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- SCRIPTS -->
        <script src="../plugins/moment/moment.js"></script>
        <script src='../plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="assets/pages/jquery.calendar.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#btPrueba").click( function() {
                    buscarFecha();
                });
            });
        </script>
        <script type="text/javascript">
            //Funciones de Hotel
            function buscarFecha(){
                var fec_ini = $('#fec_ini').val();
                var fec_fin = $('#fec_fin').val();
                $.ajax({
                    type:"POST",
                    url :"Controllers/BuscarFecha.php",
                    data:"fec_ini="+fec_ini + "&fec_fin="+fec_fin,
                    success:function(r){
                        $('#resPRueba').html(r);
                    }
                });
            };
        </script>
    </body>
</html>
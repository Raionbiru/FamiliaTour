<?php require_once("Agencia-sesion.php");
require_once("funciones.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Familia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/ico.png">

        <!-- Modal -->
        <link href="../plugins/custombox/css/custombox.min.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).on('change', '#servicio', function(event) {
            $('#servicioSelecionado').val($("#servicio option:selected").text());
            });
        </script>

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <?PHP 
            require_once("Agencia-header.php");
            $xid_tour=leerParam("tour","");
            
            $xc = conectar();
            $sql = "SELECT
                        p.id_prog,
                        p.fec_prog,
                        p.hora_prog,
                        b.placa_bus,
                        b.cap_bus,
                        t.nom_tour
                    FROM
                        programacion p
                    INNER JOIN bus b ON
                        p.id_bus = b.id_bus
                    INNER JOIN tour t ON
                        p.id_tour = t.id_tour
                    WHERE
                        p.id_tour = '$xid_tour'";
            $res = mysqli_query($xc,$sql);
            $xest = 1;
            $row_cnt = mysqli_num_rows($res);

            if ($row_cnt == 0) {
                $xest = 0;
            }
            desconectar($xc);
            
            ?>
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
                                    <h4 class="page-title float-left">Reserva</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                                        <li class="breadcrumb-item"><a href="#">Agencia</a></li>
                                        <li class="breadcrumb-item active">Reserva</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">

                        <?PHP 
                                if ($xest == 0) {
                                    echo "
                                    <div class='col' style='width:20px; display: flex; justify-content: center; align-items: center;'>
                                        <div class='text-center card-box'>
                                            <div class='clearfix'></div>
                                            <div class='member-card'>
                                                <div class=''>
                                                    <h4 class='m-b-5'>Reserva no encontrada</h4>
                                                    <br>
                                                    <p class='text-muted'>El tour que selecciono no cuenta con programación<span>  </span> <!--<span> <a href='Agencia-tours.php' data-animation='fadein' data-plugin='custommodal' data-overlaySpeed='200' data-overlayColor='#36404a' class='text-pink'>Seleccione otro Tour</a> </span></p>--></p>
                                                    <span> <a href='Agencia-tours.php' data-overlayColor='#36404a' class='text-pink'>Seleccione otro Tour</a> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- end col -->";
                                }
                            ?>

                            <?PHP while($fila=mysqli_fetch_array($res)){
                                        $xnom_tour = $fila["nom_tour"];
                                        $xcap_bus = $fila["cap_bus"];
                                        $xplaca_bus = $fila["placa_bus"];
                                        $xhora_prog = $fila["hora_prog"];
                                        $xfec_prog = $fila["fec_prog"];

                                            echo "
                                                <div class='col-md-4'>
                                                <div class='text-center card-box'>
                                                    <div class='clearfix'></div>
                                                    <div class='member-card'>
                                                        <div class='thumb-xl member-thumb m-b-10 mx-auto'>
                                                            <img src='https://cdn.londonandpartners.com/asset/hop-on-hop-off-bus-tour-24-or-48-hour-ticket-631fec6ecdee1c2f174a2165f27beb0a.jpg' class='rounded-circle img-thumbnail' alt='profile-image'>
                                                            <i class='mdi mdi-star-circle member-star text-success' title='verified user'></i>
                                                        </div>
                
                                                        <div class=''>
                                                            <h4 class='m-b-5'>$xnom_tour</h4>
                                                            <p class='text-muted'>Capacidad $xcap_bus asientos <span> | </span> <span> <a href='#asiento-modal' data-animation='fadein' data-plugin='custommodal' data-overlaySpeed='200' data-overlayColor='#36404a' class='text-pink'>seleccionar asientos</a> </span></p>
                                                        </div>
                
                                                        <p class='text-muted font-13'>
                                                            Asientos Disponibles: 15 Asientos
                                                            <br>
                                                            Hora de Salida: $xhora_prog
                                                            Fecha de Salida: $xfec_prog
                                                        </p>
                                                        
                                                        <button type='button' href='#custom-modal' class='btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light' data-animation='fadein' data-plugin='custommodal' data-overlaySpeed='200' data-overlayColor='#36404a'><i class='md md-add'></i>Reservar</button>
                                                    </div>
                                                </div>
                                                </div> <!-- end col -->
                                            ";
                                    }
                                ?>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2019 © Insizio
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
    
        </div>
        <!-- END wrapper -->

        <!-- Modal -->
        <div id="asiento-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Seleccionar asiento</h4>
            <div class="custom-modal-text text-left">
                <img src="https://serving.photos.photobox.com/21468170d2d726e854152ed6c17ad79555f0010632882aee36f0570a84a1f7deb1eff21e.jpg" height="700" width="700">

                <select required="required" class="form-control" name="servicio" id="servicio">
                <option value="" selected="selected"></option>
                <option value="1">HelpDesk</option>
                <option value="2">HelpDesk2</option>
                </select>
                <lanbel id="servicioSelecionado" name="nom_Servicio">Ejemplo</label>
                <input id="servicioSelecionado" name="nom_Servicio" />

            </div>
        </div>

        <!-- Modal -->
        <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Reservar Tour</h4>
            <div class="custom-modal-text text-left">
                <form role="form">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="position">DNI</label>
                        <input type="text" class="form-control" id="position" placeholder="DNI">
                    </div>
                    <div class="form-group">
                        <label for="company">Nacionalidad</label>
                        <input type="text" class="form-control" id="company" placeholder="Nacionalidad">
                    </div>

                    <button type="submit" class="btn btn-success btn-rounded w-md waves-effect waves-light">Reservar</button>
                    <button type="button" class="btn btn-primary btn-rounded w-md waves-effect waves-light">Pagar</button>
                </form>
            </div>
        </div>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Modal-Effect -->
        <script src="../plugins/custombox/js/custombox.min.js"></script>
        <script src="../plugins/custombox/js/legacy.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
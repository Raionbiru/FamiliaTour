<?php session_start();
    if (!isset($_SESSION["rol"])){
        header("Location:index.php");
    }else {
        if ($_SESSION["rol"] != 1) {
            header("Location:index.php");
        }
    }
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

        <!-- Plugins css-->
        <link href="../plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="../plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>

<?php require_once("Comercial-nav.php");

    require_once("funciones.php");
    $xc = conectar();

    $sqlBus = "SELECT placa_bus, id_bus FROM bus WHERE est_bus = 'Operativo'";
    $resBus = mysqli_query($xc,$sqlBus);

    $sqlTour = "SELECT nom_tour, id_tour FROM tour";
    $resTour = mysqli_query($xc,$sqlTour);

    desconectar($xc);
?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <!-- Parte Superior  -->
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

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Ingrese Programación para cualquier fecha</b></h4>
                        <p class="text-muted m-b-30 font-14">
                        </p>

                        <div class="row">
                            <div class="col-12">
                                <div class="p-20">

                                    <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="Comercial-programaGrabar.php">

                                        <input hidden="YES" name="accion" value="crear">

                                        <div class="form-group row">
                                        <label class="col-2 col-form-label">Fecha</label>
                                        <div class="col-10">
                                        <input type="date"  name="fec_prog" id="fec_prog" class="form-control" placeholder="Fecha de programación">
                                        </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-2 col-form-label">Hora</label>
                                        <div class="col-10">
                                        <input type="time"  name="hora_prog" id="hora_prog" class="form-control" placeholder="Hora de programación">
                                        </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-2 col-form-label">Tour</label>
                                        <div class="col-10">
                                        <select class="form-control select2" name="id_tour" id="id_tour">
                                            <option>Seleccioné Tour</option>
                                            <?php   
                                                while ($filaTour=mysqli_fetch_array($resTour)){
                                                    $xid_tour = $filaTour["id_tour"];
                                                    $xnom_tour = $filaTour["nom_tour"];
                                                    
                                                    echo "<option value='$xid_tour'>$xnom_tour</option>";
                                                } 
                                            ?>
                                        </select>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                        <label class="col-2 col-form-label">Bus</label>
                                        <div class="col-10">
                                        <select class="form-control select2" name="id_bus" id="id_bus">
                                            <option>Seleccioné Bus</option>
                                            <?php   
                                                while ($filaBus=mysqli_fetch_array($resBus)){
                                                    $xid_bus = $filaBus["id_bus"];
                                                    $xplaca_bus = $filaBus["placa_bus"];
                                                    
                                                    echo "<option value='$xid_bus'>$xplaca_bus</option>";
                                                } 
                                            ?>
                                        </select>
                                        </div>
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right">Guardar</button>
                                    </form>


                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
            <!-- end row -->


        </div> <!-- container -->
    </div> <!-- content -->

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

        <script src="../plugins/switchery/switchery.min.js"></script>
        <script src="../plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="../plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="../plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="../plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="../plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="assets/pages/jquery.autocomplete.init.js"></script>

        <!-- Init Js file -->
        <script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php require_once("Admi-sesion.php");        
    
    require_once("funciones.php");
    $xc = conectar();

    $sql = "SELECT * FROM hostal";
    $res = mysqli_query($xc,$sql);

    $sqlTransporte = "SELECT * FROM transporte";
    $resTransporte = mysqli_query($xc,$sqlTransporte);

    $sqlComidas = "SELECT * FROM comidas";
    $resComidas = mysqli_query($xc,$sqlComidas);

    $sqlServicioPlus = "SELECT * FROM servicioplus";
    $resServicioPlus = mysqli_query($xc,$sqlServicioPlus);
    
    $sqlTour = "SELECT * FROM tour";
    $resTour = mysqli_query($xc,$sqlTour);


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

        <!-- Plugin Css-->
        <link rel="stylesheet" href="../plugins/magnific-popup/css/magnific-popup.css" />
        <link rel="stylesheet" href="../plugins/jquery-datatables-editable/dataTables.bootstrap4.min.css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <?php require_once("Admi-nav.php");?>


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
                        <h4 class="page-title float-left"> Administrador</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                            <li class="breadcrumb-item active">Proveedores</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div><!-- End Row-->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="m-t-0 header-title"><b>Proveedores</b></h4>
                        <p class="text-muted font-14">
                        </p>
                        
                        <br>
                         <p> <b>Hoteles</b></p>
                        <table class="tablesaw table m-b-0" data-tablesaw-sortable data-tablesaw-sortable-switch>
                            <thead>
                            <tr>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Nombre</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Clase</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Tipo</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Lugar</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Precio</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?PHP while($fila=mysqli_fetch_array($res)){
                                        $xnom_hostal = $fila["nom_hostal"];
                                        $xclase_hostal = $fila["clase_hostal"];
                                        $xtipo_hostal = $fila["tipo_hostal"];
                                        $xlugar_hostal = $fila["lugar_hostal"];
                                        $xprec_hostal = $fila["prec_hostal"];
                                        $xprec_var_hostal = $fila["prec_var_hostal"];

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xnom_hostal </td>
                                                    <td>$xclase_hostal</td>
                                                    <td>$xtipo_hostal</td>
                                                    <td>$xlugar_hostal</td>
                                                    <td>$xprec_hostal</td>
                                                </tr>
                                            ";}?>
                            </tbody>
                        </table>

                        <br>
                        <br>

                        <p> <b>Tours</b> </p>
                        <table class="tablesaw table m-b-0" data-tablesaw-sortable data-tablesaw-sortable-switch>
                            <thead>
                            <tr>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Nombre</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Precio</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?PHP while($filaTour=mysqli_fetch_array($resTour)){
                                        $xnom_tour = $filaTour["nom_tour"];
                                        $xprecio_tour = $filaTour["prec_tour"];

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xnom_tour </td>
                                                    <td>$xprecio_tour</td>
                                                </tr>
                                            ";}?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- content -->
    <footer class="footer text-right">
        2019 © Insizio
    </footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
</div>
<!-- end Modal -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Examples -->
        <script src="../plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../plugins/tiny-editable/mindmup-editabletable.js"></script>
        <script src="../plugins/tiny-editable/numeric-input-example.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script src="assets/pages/jquery.datatables.editable.init.js"></script>

        <script>
            $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        </script>

    </body>
</html>
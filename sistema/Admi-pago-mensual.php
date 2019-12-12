<!DOCTYPE html>
<html>
<?php session_start();
    if (!isset($_SESSION["nom_per"] ) ){
        header("Location:login.php");
    }         
    
    require_once("funciones.php");
    $xc = conectar();
    $sql = "SELECT p.nom_per,p.ape_per, j.hor_tra_jor, a.nom_area, j.viat_jor,j.sueldo_jor, j.fec_jor
        FROM jornal j
        INNER JOIN persona p ON j.id_per = p.id_per 
        INNER JOIN area a ON j.id_area = a.id_area";
    $res = mysqli_query($xc,$sql);
    desconectar($xc);
?>
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
                        <h4 class="page-title float-left">Administrador</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Administración</a></li>
                            <li class="breadcrumb-item active">Pagos</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="m-t-0 header-title"><b>Pagos Mensuales</b></h4>
                        <p class="text-muted font-14">
                            Pagos mensuales a trabajadores
                        </p>

                        <table class="tablesaw table m-b-0" data-tablesaw-sortable data-tablesaw-sortable-switch>
                            <thead>
                            <tr>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Persona</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Horas</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Area </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Viaticos</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Pago</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Fecha</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?PHP while($fila=mysqli_fetch_array($res)){
                                    $xnom_per = $fila["nom_per"];
                                    $xape_per = $fila["ape_per"];
                                    $xhor_tra_jor = $fila["hor_tra_jor"];
                                    $xnom_area = $fila["nom_area"];
                                    $xviat_jor = $fila["viat_jor"];
                                    $xsueldo_jor = $fila["sueldo_jor"];
                                    $xfec_jor = $fila["fec_jor"];

                                        echo "
                                            <tr>
                                            <td>$xnom_per $xape_per</td>
                                            <td>$xhor_tra_jor</td>
                                            <td>$xnom_area</td>
                                            <td>$xviat_jor</td>
                                            <td>$xsueldo_jor</td>
                                            <td>$xfec_jor</td>
                                            </tr>
                                        ";
                                }
                            ?>
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
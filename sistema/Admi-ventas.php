<!DOCTYPE html>
<html>
<?php session_start();
    if (!isset($_SESSION["nom_per"] ) ){
        header("Location:login.php");
    }         
    
    require_once("funciones.php");
    $xc = conectar();
    //Código de contrato    (Contrato)
    //Fecha de venta        (Venta)
    //Nombre                (Nombre de venta)
    //Producto              (Nombre de producto/tour)
    //Monto                 (Precio de producto/tour)

    //SQL con producto
    /*$sql = "SELECT c.cod_contr,v.fec_vet,v.nom_vet, p.nom_produc, p.prec_produc 
            FROM venta v
            INNER JOIN producto p ON v.id_produc = p.id_produc
            INNER JOIN contrato c ON v.id_contr = c.id_contr";*/

    //SQL con tour
    /*$sql = "SELECT c.cod_contr,h.fec_hist_tour,v.nom_vet, t.nom_tour, t.prec_tour
            FROM venta v
            INNER JOIN historial_tour h ON v.id_hist_tour = h.id_hist_tour
            INNER JOIN tour t ON h.id_tour = t.id_tour
            INNER JOIN contrato c ON v.id_contr = c.id_contr";*/

    $sql = "SELECT h.fec_hist_tour, t.nom_tour,t.prec_tour
            FROM historial_tour h
            INNER JOIN tour t ON h.id_tour = t.id_tour ";
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
                        <h4 class="page-title float-left"> Administrador</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                            <li class="breadcrumb-item active">Resumen Ventas</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div><!-- End Row-->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="m-t-0 header-title"><b>Tabla - Resumen de ventas</b></h4>
                        <p class="text-muted font-14">
                            Resumen de todas las ventas de productos o tour.
                        </p>

                        <table class="tablesaw table m-b-0" data-tablesaw-sortable data-tablesaw-sortable-switch>
                            <thead>
                            <tr>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Cod Contrato</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Fecha Venta</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Nombre Venta</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Producto</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Monto</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?PHP while($fila=mysqli_fetch_array($res)){
                                    //$xcod_contr = $fila["cod_contr"];
                                    //$xfec_vet = $fila["fec_vet"];
                                    $xfec_hist_tour = $fila["fec_hist_tour"];
                                    //$xnom_vet = $fila["nom_vet"];
                                    $xnom_tour = $fila["nom_tour"];
                                    $xprec_tour = $fila["prec_tour"];
                                    //$xtotal += $fila["prec_tour"];
                                        echo "
                                            <tr>
                                            <td>000001</td>
                                            <td>$xfec_hist_tour</td>
                                            <td>Cliente</td>
                                            <td>$xnom_tour</td>
                                            <td>$xprec_tour</td>
                                            </tr>
                                        ";
                                }
                                //echo "<tr> <td></td><td></td><td></td><td></td><td>TOTAL: $xtotal</td></tr>";
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
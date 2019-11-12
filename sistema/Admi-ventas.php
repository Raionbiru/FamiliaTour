<?php require_once("Admi-header.php");
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
 <!-- Tablesaw css -->
 <link href="../plugins/tablesaw/css/tablesaw.css" rel="stylesheet" type="text/css" />
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

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
                                    $xtotal += $fila["prec_tour"];
                                        echo "
                                            <tr>
                                            <td>000001</td>
                                            <td>$xfec_hist_tour</td>
                                            <td>$xnom_tour</td>
                                            <td>$xnom_tour</td>
                                            <td>$xprec_tour</td>
                                            </tr>
                                        ";
                                }
                                echo "<tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>TOTAL: $xtotal</td>
                                    </tr>";
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- content -->
    <footer class="footer text-right">
        2017 © Adminox. - Coderthemes.com
    </footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<!-- Tablesaw js -->
<!-- Tablesaw js -->

<?php require_once("Admi-footer.php");?>}
<!-- Tablesaw js -->
<script src="../plugins/tablesaw/js/tablesaw.js"></script>
<script src="../plugins/tablesaw/js/tablesaw-init.js"></script>
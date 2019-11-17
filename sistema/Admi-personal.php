<?php require_once("Admi-header.php");
      require_once("funciones.php");

$xc = conectar();
$sql = "SELECT p.nom_per,p.ape_per, j.hor_tra_jor, a.nom_area, j.viat_jor,j.sueldo_jor 
        FROM jornal j
        INNER JOIN persona p ON j.id_per = p.id_per 
        INNER JOIN area a ON j.id_area = a.id_area";
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
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Personal</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                                <li class="breadcrumb-item"><a href="#">Administración</a></li>
                                <li class="breadcrumb-item active">Personal</li>
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <button onclick="window.location.href='Admi-personal-añadir.php'" type="button" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right">Agregar Personal</button>

                        <h4 class="m-t-0 header-title"><b>Personal</b></h4>
                        <p class="text-muted font-14">
                            Personal de la empresa
                        </p>

                        <table class="tablesaw table m-b-0" data-tablesaw-sortable data-tablesaw-sortable-switch>
                            <thead>
                            <tr>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Persona</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Horas</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Area </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Viaticos</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Pago</th>
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

                                        echo "
                                            <tr>
                                            <td>$xnom_per $xape_per</td>
                                            <td>$xhor_tra_jor</td>
                                            <td>$xnom_area</td>
                                            <td>$xviat_jor</td>
                                            <td>$xsueldo_jor</td>
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
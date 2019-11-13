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
                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="m-t-0 header-title"><b>Proveedores</b></h4>
                        <p class="text-muted font-14">
                            Proveedores de la Empresa
                        </p>

                        <table class="tablesaw table m-b-0" data-tablesaw-sortable data-tablesaw-sortable-switch>
                            <thead>
                            <tr>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Nombre</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Servicio</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Stand</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Sup</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Lujo</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hoteles</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
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
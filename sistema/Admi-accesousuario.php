<?php require_once("Admi-header.php");
require_once("funciones.php");

$xc = conectar();

$sql = "SELECT p.id_per, p.nom_per, p.ape_per, p.cargo_per, p.estado_per
        FROM persona p
        WHERE id_tipo_per = 2";
$res = mysqli_query($xc,$sql);
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
                        <h4 class="page-title float-left">Administrador</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                            <li class="breadcrumb-item active">Acceso a usuarios</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            
            <!-- Inicio - Tabla -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title">Acceso a usuarios</h4>
                        <p class="text-muted m-b-30 font-13">
                            Un usuario externo quiere ingresar al sistema.
                        </p>

                        <table id="demo-foo-addrow" class="table table-striped table-bordered m-b-0 toggle-circle" data-page-size="7">
                            <thead>
                            <tr>
                                <th data-sort-ignore="true" class="min-width"></th>
                                <th data-sort-initial="true" data-toggle="true">Nombre</th>
                                <th>Apellido</th>
                                <th data-hide="phone">Cargo</th>
                                <th data-hide="phone, tablet">Estado</th>
                            </tr>
                            </thead>
                            <!-- Añadir y Buscar  -->
                            <!--<div class="pad-btm form-inline">
                                <div class="row">
                                    <div class="col-sm-6 text-xs-center">
                                        <div class="form-group">
                                            <button id="demo-btn-addrow" class="btn btn-primary m-b-20"><i class="fa fa-plus m-r-5"></i> Add New Row</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-xs-center text-right">
                                        <div class="form-group">
                                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <tbody>
                            <?PHP while($fila=mysqli_fetch_array($res)){
                                    $xid_per = $fila["id_per"];
                                    $xnom_per = $fila["nom_per"];
                                    $xape_per = $fila["ape_per"];
                                    $xcargo_per = $fila["cargo_per"];
                                    $xestado_per = $fila["estado_per"];

                                        echo "
                                            <tr>
                                            <td class='text-center'>
                                                
                                                <div class='button-list'>

                                                <form method='POST' action='activar-usuario.php'>

                                                <input hidden='YES' name='accion' value='desactivar'>
                                                <input hidden='YES' name='id_per' value=$xid_per>

                                                <button class='demo-delete-row btn btn-danger btn-xs btn-icon'><i class='fa fa-times'></i></button>

                                                </form>

                                                <form method='POST' action='activar-usuario.php'>

                                                <input hidden='YES' name='accion' value='activar'>
                                                <input hidden='YES' name='id_per' value=$xid_per>

                                                <button class='demo-delete-row btn btn-danger btn-xs btn-icon'><i class='fa fa-check'></i></button>

                                                </form>

                                                </div>
                                            </td>
                                            <td>$xnom_per</td>
                                            <td>$xape_per</td>
                                            <td>$xcargo_per</td>
                                            
                                            <td>";
                                                if ($xestado_per == 0){
                                                    echo"<span class='label label-table label-danger'>Desactivado</span>";
                                                }
                                                elseif($xestado_per == 1){
                                                    echo"<span class='label label-table label-success'>Activado</span>";
                                                }
                                            echo "</td>
                                            </tr>
                                            
                                        ";
                                }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr class="active">
                                <td colspan="6">
                                    <div class="text-right">
                                        <ul class="pagination pagination-split footable-pagination m-t-10"></ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        2017 © Adminox. - Coderthemes.com
    </footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<?php require_once("Admi-footer.php");?>
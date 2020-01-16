<?php require_once("Admi-sesion.php");        
    require_once("funciones.php");
    $xc = conectar();
    $sql = "SELECT *
            FROM cliente";
    $res = mysqli_query($xc,$sql);
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

        <!--Footable-->
        <link href="../plugins/footable/css/footable.core.css" rel="stylesheet">

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
                        <h4 class="m-t-0 header-title"><b>Acceso a clientes</b></h4>
                        <p class="text-muted m-b-30 font-13">
                            Un usuario externo quiere ingresar al sistema.
                        </p>

                        <table id="demo-foo-addrow" class="table table-striped table-bordered m-b-0 toggle-circle" data-page-size="7">
                            <thead>
                            <tr>
                                <th data-sort-ignore="true" class="min-width"></th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Empresa</th>
                                <th>Web</th>
                                <th>Estado</th>
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
                                    $xid_cliente = $fila["id_cliente"];
                                    $xnom_cliente = $fila["nom_cliente"];
                                    $xape_cliente = $fila["ape_cliente"];
                                    $xemail_cliente = $fila["email_cliente"];
                                    $xempr_cliente = $fila["empr_cliente"];
                                    $xweb_empr_cliente = $fila["web_empr_cliente"];
                                    $xestado_cliente = $fila["estado_cliente"];

                                    if ($xestado_cliente == 0) {
                                    
                                        echo "
                                            <tr>
                                            <td class='text-center'>
                                                
                                                <div class='button-list'>

                                                <form method='POST' action='activar-usuario.php'>

                                                <input hidden='YES' name='accion' value='desactivar'>
                                                <input hidden='YES' name='tipo' value='cliente'>
                                                <input hidden='YES' name='id_cliente' value= '$xid_cliente'>

                                                <button class='demo-delete-row btn btn-danger btn-xs btn-icon'><i class='fa fa-times'></i></button>

                                                </form>

                                                <form method='POST' action='activar-usuario.php'>

                                                <input hidden='YES' name='accion' value='activar'>
                                                <input hidden='YES' name='tipo' value='cliente'>
                                                <input hidden='YES' name='id_cliente' value= '$xid_cliente'>

                                                <button class='demo-delete-row btn btn-danger btn-xs btn-icon'><i class='fa fa-check'></i></button>

                                                </form>
                                                </div>
                                            </td>
                                            <td>$xnom_cliente $xape_cliente</td>
                                            <td>$xemail_cliente</td>
                                            <td>$xempr_cliente</td>
                                            <td>$xweb_empr_cliente</td>
                                            
                                            <td>";
                                                if ($xestado_cliente == 0){
                                                    echo"<span class='label label-table label-warning'>Pendiente</span>";
                                                }
                                                elseif($xestado_cliente == 1){
                                                    echo"<span class='label label-table label-success'>Activado</span>";
                                                }
                                            echo "</td>
                                            </tr>
                                            
                                        ";
                                    }    
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
        2019 © Insizio
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

    <!--FooTable-->
    

    <!--FooTable Example-->
    <script src="assets/pages/jquery.footable.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>
</html>
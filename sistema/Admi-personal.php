<?php require_once("Admi-sesion.php");
        require_once("funciones.php");
        $xc = conectar();
        $sql = "SELECT j.id_jor, p.nom_per,p.ape_per, j.hor_tra_jor, a.nom_area, j.viat_jor,j.sueldo_jor,j.pago_variado_jor
            FROM jornal j
            INNER JOIN persona p ON j.id_per = p.id_per 
            INNER JOIN area a ON j.id_area = a.id_area";
            
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
                        <!--
                        <button onclick="window.location.href='Admi-personal-añadir.php'" type="button" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right">Agregar Personal</button>
                        -->
                        <h4 class="m-t-0 header-title"><b>Busqueda por fecha</b></h4>
                        <p class="text-muted font-14"></p>
                        <!-- Buscador -->
                        <form class="row justify-content-center" method="post" action="Admi-buscador.php">
                            <label class="col-1 col-form-label">Desde: </label>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="date"  name="fec_ini" id="fec_ini" class="form-control">
                                </div>
                            </div>
                            <label class="col-1 col-form-label">Hasta: </label>
                            <div class="col-4">
                                <div class="input-group">
                                    <input type="date" name="fec_fin" id="fec_fin" class="form-control">
                                    <button class="btn waves-effect waves-light btn-primary" type="submit"> Buscar</button>
                                </div>
                            </div>
                        </form>
                        <!-- end: Buscador -->

                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="m-b-30">
                                    <button onclick="window.location.href='Admi-personalAdd.php'" class="btn btn-success waves-effect waves-light">Añadir <i class="mdi mdi-plus-circle-outline"></i></button>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped add-edit-table" id="datatable-editable">
                            
                            <thead>
                                <tr>
                                    <th>Persona</th>
                                    <th>Area</th>
                                    <th>Horas</th>
                                    <th>Viaticos</th>
                                    <th>Pago</th>
                                    <th>Pago Variado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?PHP while($fila=mysqli_fetch_array($res)){
                                        $xid_jor = $fila["id_jor"];
                                        $xnom_per = $fila["nom_per"];
                                        $xape_per = $fila["ape_per"];
                                        $xhor_tra_jor = $fila["hor_tra_jor"];
                                        $xnom_area = $fila["nom_area"];
                                        $xviat_jor = $fila["viat_jor"];
                                        $xsueldo_jor = $fila["sueldo_jor"];
                                        $xpago_variado_jor = $fila["pago_variado_jor"];

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xnom_per $xape_per</td>
                                                    <td>$xnom_area</td>
                                                    <td>$xhor_tra_jor</td>
                                                    <td>$xviat_jor</td>
                                                    <td>$xsueldo_jor</td>
                                                    <td>$xpago_variado_jor</td>
                                                    <td class='actions'>
                                                        <a href='Admi-personalEdit.php?id=$xid_jor' class='on-default ' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit'><i class='fa fa-pencil'></i></a>
                                                        <a href='Admi-personalGrabar.php?id=$xid_jor&type=eliminar' class='on-default remove-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete'><i class='fa fa-trash-o'></i></a>
                                                    </td>
                                                </tr>
                                            ";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end: page -->
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
        <!-- END wrapper -->

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
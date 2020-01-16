<?php require_once("Admi-sesion.php");
        require_once("funciones.php");
        $xid = leerParam("id","");
        $xc = conectar();
        $sqlJornal = "SELECT * FROM jornal j INNER JOIN persona p ON j.id_per = p.id_per INNER JOIN area a ON j.id_area = a.id_area WHERE j.id_jor = '$xid'";
        $resJornal = mysqli_query($xc,$sqlJornal);
        $filaJornal = mysqli_fetch_array($resJornal);
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
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Editar</b></h4>
                        <p class="text-muted m-b-30 font-14"></p>

                        <div class="row">
                            <div class="col-12">
                                <div class="p-20">
                                    <form class="form-horizontal" role="form" method="POST" action="Admi-personalGrabar.php">
                                        
                                        <input hidden="YES" name="id" value="<?PHP echo $xid; ?>">
                                        <input hidden="YES" name="accion" value="editar">

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group row">
                                                <label class="col-2 col-form-label">Persona</label>
                                                <div class="col-10">
                                                <input type="text" class="form-control" disabled="" value="<?php echo$filaJornal['nom_per']?>">
                                                </div>
                                                </div>

                                                <div class="form-group row">
                                                <label class="col-2 col-form-label">Horas</label>
                                                <div class="col-10">
                                                <input type="text" class="form-control" id="hor_tra_jor" name="hor_tra_jor" value="<?php echo$filaJornal['hor_tra_jor']?>">
                                                </div>
                                                </div>

                                                <div class="form-group row">
                                                <label class="col-2 col-form-label">Pago</label>
                                                <div class="col-10">
                                                <input type="text" class="form-control" id="sueldo_jor" name="sueldo_jor" value="<?php echo$filaJornal['sueldo_jor']?>">
                                                </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Area</label>
                                                <div class="col-10">
                                                <input type="text" class="form-control" disabled="" value="<?php echo$filaJornal['nom_area']?>">
                                                </div>
                                                </div>

                                                <div class="form-group row">
                                                <label class="col-2 col-form-label">Viaticos</label>
                                                <div class="col-10">
                                                <input type="text" class="form-control" id="viat_jor" name="viat_jor" value="<?php echo$filaJornal['viat_jor']?>">
                                                </div>
                                                </div>

                                                <div class="form-group row">
                                                <label class="col-2 col-form-label">Pago variado</label>
                                                <div class="col-10">
                                                <input type="text" class="form-control" id="pago_variado_jor" name="pago_variado_jor" value="<?php echo$filaJornal['pago_variado_jor']?>">
                                                </div>
                                                </div>
                                            </div>

                                        </div><!-- end row -->
                                        
                                        <div class="form-group row text-center m-t-10">
                                        <div class="col-md-4 offset-md-4">
                                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Modificar</button>
                                        </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div><!-- end row -->

                    </div> <!-- end card-box -->
                </div><!-- end col -->
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
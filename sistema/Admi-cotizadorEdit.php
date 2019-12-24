<!DOCTYPE html>
<html>
    <?php session_start();
        if (!isset($_SESSION["nom_per"] ) ){
            header("Location:index.php");
        }
        
        require_once("funciones.php");
        $xid = leerParam("id","");
        $xtipo = leerParam("tipo","");

        $xc = conectar();

        $sqlHospedaje = "SELECT * FROM hostal WHERE id_hostal = '$xid'";
        $resHospedaje = mysqli_query($xc,$sqlHospedaje);
        $filaHospedaje=mysqli_fetch_array($resHospedaje);

        $sqlTransporte = "SELECT * FROM transporte WHERE id_transporte = '$xid'";
        $resTransporte = mysqli_query($xc,$sqlTransporte);
        $filaTransporte=mysqli_fetch_array($resTransporte);

        $sqlComidas = "SELECT * FROM comidas WHERE id_comidas = '$xid'";
        $resComidas = mysqli_query($xc,$sqlComidas);
        $filaComidas=mysqli_fetch_array($resComidas);

        $sqlServicio = "SELECT * FROM servicioplus WHERE id_serv_plus = '$xid'";
        $resServicio = mysqli_query($xc,$sqlServicio);
        $filaServicio=mysqli_fetch_array($resServicio);


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
                        <h4 class="page-title float-left">Cotizador</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Administración</a></li>
                            <li class="breadcrumb-item active">Cotizador</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <?PHP 
                if ($xtipo =="hospedaje"){
                    echo"
                    <div class='row'>
                        <div class='col-12'>
                            <div class='card-box'>

                                <div class='row'>
                                    <div class='col-6'>
                                        <h4 class='m-t-0 header-title'><b>Hospedaje </b></h4>
                                        <p class='text-muted m-b-30 font-14'></p>
                                    </div>
                                </div><!-- end row -->
                        
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='p-20'>
                                            <form class='form-horizontal' role='form' method='POST' action='Admi-cotizadorGrabar.php'>

                                                <input hidden='YES' name='id' value='$xid'>
                                                <input hidden='YES' name='tipo' value='hostal'>
                                                <input hidden='YES' name='accion' value='editar'>

                                                <div class='row'>
                                                    <div class='col-6'>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Hostal</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='$filaHospedaje[nom_hostal]'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label class='col-2 col-form-label'>Clase</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='$filaHospedaje[clase_hostal]'>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class='col-6'>

                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Tipo</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='$filaHospedaje[tipo_hostal]'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Precio</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' placeholder='Precio de Hospedaje' id='prec_hostal' name='prec_hostal' value='$filaHospedaje[prec_hostal]'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                        <label class='col-3 col-form-label'>Precio Variado</label>
                                                            <div class='col-9'>
                                                                <input type='text' class='form-control' placeholder='Precio variado de Hospedaje' id='prec_var_hostal' name='prec_var_hostal' value='$filaHospedaje[prec_var_hostal]'>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- end row -->
                                                
                                                <div class='form-group row text-center m-t-10'>
                                                    <div class='col-md-4 offset-md-4'>
                                                        <button class='btn btn-md btn-block btn-primary waves-effect waves-light' type='submit'>Modificar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- end row -->

                            </div> <!-- end card-box -->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->";
                }
            ?>

            <?PHP 
                if ($xtipo =="transporte"){

                    echo"
                    <div class='row'>
                        <div class='col-12'>
                            <div class='card-box'>

                                <div class='row'>
                                    <div class='col-6'>
                                        <h4 class='m-t-0 header-title'><b>Transporte</b></h4>
                                        <p class='text-muted m-b-30 font-14'></p>
                                    </div>
                                </div><!-- end row -->
                        
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='p-20'>
                                            <form class='form-horizontal' role='form' method='POST' action='Admi-cotizadorGrabar.php'>
                                                <input hidden='YES' name='id' value='$xid'>
                                                <input hidden='YES' name='tipo' value='transporte'>
                                                <input hidden='YES' name='accion' value='editar'>

                                                <div class='row'>
                                                    <div class='col-6'>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Tipo de Transporte</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='$filaTransporte[tipo_transporte]'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label class='col-2 col-form-label'>Empresa</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='$filaTransporte[nom_transporte]'>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class='col-6'>

                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Lugar</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='$filaTransporte[des_transporte]'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Precio</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' placeholder='Precio de Transporte' id='prec_transporte' name='prec_transporte' value='$filaTransporte[prec_transporte]'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                        <label class='col-3 col-form-label'>Precio Variado</label>
                                                            <div class='col-9'>
                                                                <input type='text' class='form-control' placeholder='Precio variado de Transporte' id='prec_var_transporte' name='prec_var_transporte' value='$filaTransporte[prec_var_transporte]'>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- end row -->
                                                
                                                <div class='form-group row text-center m-t-10'>
                                                    <div class='col-md-4 offset-md-4'>
                                                        <button class='btn btn-md btn-block btn-primary waves-effect waves-light' type='submit'>Modificar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- end row -->

                            </div> <!-- end card-box -->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->";
                }
            ?>

            <?PHP 
                if ($xtipo =="comidas"){

                    echo"
                    <div class='row'>
                        <div class='col-12'>
                            <div class='card-box'>

                                <div class='row'>
                                    <div class='col-6'>
                                        <h4 class='m-t-0 header-title'><b>Comidas</b></h4>
                                        <p class='text-muted m-b-30 font-14'></p>
                                    </div>
                                </div><!-- end row -->
                        
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='p-20'>
                                            <form class='form-horizontal' role='form' method='POST' action='Admi-cotizadorGrabar.php'>
                                                <input hidden='YES' name='id' value='$xid'>
                                                <input hidden='YES' name='tipo' value='comidas'>
                                                <input hidden='YES' name='accion' value='editar'>

                                                <div class='row'>
                                                    <div class='col-6'>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Comida</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='$filaComidas[tipo_comidas]'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label class='col-2 col-form-label'>Carta</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='$filaComidas[carta_comidas]'>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class='col-6'>
                                                        
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Precio</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' placeholder='Precio de Comida' id='precio_comidas' name='precio_comidas' value='$filaComidas[precio_comidas]'>
                                                            </div>
                                                        </div>

                                                        <div class='form-group row'>
                                                        <label class='col-3 col-form-label'>Precio Variado</label>
                                                            <div class='col-9'>
                                                                <input type='text' class='form-control' placeholder='Precio variado de Comida' id='precio_variado_comidas' name='precio_variado_comidas' value='$filaComidas[precio_variado_comidas]'>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- end row -->
                                                
                                                <div class='form-group row text-center m-t-10'>
                                                    <div class='col-md-4 offset-md-4'>
                                                        <button class='btn btn-md btn-block btn-primary waves-effect waves-light' type='submit'>Modificar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- end row -->

                            </div> <!-- end card-box -->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->";
                }
            ?>

            <?PHP 
                if ($xtipo =="servicio"){

                    echo"
                    <div class='row'>
                        <div class='col-12'>
                            <div class='card-box'>

                                <div class='row'>
                                    <div class='col-6'>
                                        <h4 class='m-t-0 header-title'><b>Servicio Adicional</b></h4>
                                        <p class='text-muted m-b-30 font-14'></p>
                                    </div>
                                </div><!-- end row -->
                        
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='p-20'>
                                            <form class='form-horizontal' role='form' method='POST' action='Admi-cotizadorGrabar.php'>
                                                <input hidden='YES' name='id' value='$xid'>
                                                <input hidden='YES' name='tipo' value='servicio'>
                                                <input hidden='YES' name='accion' value='editar'>

                                                <div class='row'>
                                                    <div class='col-6'>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Servicio</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='$filaServicio[nom_serv_plus]'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label class='col-2 col-form-label'>Categoria</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='$filaServicio[tipo_serv_plus]'>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class='col-6'>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Precio</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' placeholder='Precio de Servicio' id='prec_serv_plus' name='prec_serv_plus' value='$filaServicio[prec_serv_plus]'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                        <label class='col-3 col-form-label'>Precio Variado</label>
                                                            <div class='col-9'>
                                                                <input type='text' class='form-control' placeholder='Precio variado de Servicio' id='prec_var_serv_plus' name='prec_var_serv_plus' value='$filaServicio[prec_var_serv_plus]'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                                
                                                <div class='form-group row text-center m-t-10'>
                                                    <div class='col-md-4 offset-md-4'>
                                                        <button class='btn btn-md btn-block btn-primary waves-effect waves-light' type='submit'>Modificar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- end row -->

                            </div> <!-- end card-box -->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->";
                }
            ?>


        </div> <!-- container -->
    </div> <!-- content -->

    <footer class="footer text-right">2019 © INSIZIO</footer>
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
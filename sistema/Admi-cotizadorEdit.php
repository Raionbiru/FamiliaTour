<!DOCTYPE html>
<html>
    <?php session_start();
        if (!isset($_SESSION["nom_per"] ) ){
            header("Location:login.php");
        }         
        
        require_once("funciones.php");
        $xid = $_GET['id'];
        $xtipo = $_GET['tipo']; 


        $xc = conectar();
        $sql = "SELECT * FROM hostal";
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
                                        <h4 class='m-t-0 header-title'><b>Hospedaje</b></h4>
                                        <p class='text-muted m-b-30 font-14'></p>
                                    </div>
                                </div><!-- end row -->
                        
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='p-20'>
                                            <form class='form-horizontal' role='form'>

                                                <div class='row'>
                                                    <div class='col-6'>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Lugar</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' placeholder='Helping text'>
                                                                <span class='help-block'><small>Simple - Doble - Triple</small></span>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label class='col-2 col-form-label'>Clase</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='Simple'>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class='col-6'>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Tipo</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='Doble'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Hostal</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='Triple'>
                                                            </div>
                                                        </div>
                                                            <script>
                                                                function comprobar(obj){   
                                                                    if (obj.checked){
                                                                        document.getElementById('boton').type = 'number';
                                                                    } else{
                                                                    document.getElementById('boton').type = 'text';
                                                                }}
                                                            </script>
                                                        <input name='chec' type='checkbox' id='chec' onChange='comprobar(this);'/>
                                                        <label for='chec'>Activar</label>
                                                        <input name='text' id='boton' type='text' />
                                                    </div>
                                                </div><!-- end row -->

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
                                        <h4 class='m-t-0 header-title'><b>Hospedaje</b></h4>
                                        <p class='text-muted m-b-30 font-14'></p>
                                    </div>
                                </div><!-- end row -->
                        
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='p-20'>
                                            <form class='form-horizontal' role='form'>

                                                <div class='row'>
                                                    <div class='col-6'>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Lugar</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' placeholder='Helping text'>
                                                                <span class='help-block'><small>Simple - Doble - Triple</small></span>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label class='col-2 col-form-label'>Clase</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='Simple'>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class='col-6'>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Tipo</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='Doble'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                        <label class='col-2 col-form-label'>Hostal</label>
                                                            <div class='col-10'>
                                                                <input type='text' class='form-control' disabled='' value='Triple'>
                                                            </div>
                                                        </div>
                                                            <script>
                                                                function comprobar(obj){   
                                                                    if (obj.checked){
                                                                        document.getElementById('boton').type = 'number';
                                                                    } else{
                                                                    document.getElementById('boton').type = 'text';
                                                                }}
                                                            </script>
                                                        <input name='chec' type='checkbox' id='chec' onChange='comprobar(this);'/>
                                                        <label for='chec'>Activar</label>
                                                        <input name='text' id='boton' type='text' />
                                                    </div>
                                                </div><!-- end row -->

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


        <!-- MODAL -->
        <div id="dialog" class="modal-block mfp-hide">
            <section class="card p-20">
                <header class="panel-heading">
                    <h4 class="panel-title mt-0">¿Estás seguro?</h4>
                </header>
                <div class="panel-body">
                    <div class="modal-wrapper">
                        <div class="modal-text">
                            <p>¿Está seguro de que desea eliminar esta fila?</p>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-md-12 text-right">
                            <button id="dialogConfirm" class="btn btn-success waves-effect waves-light">Aceptar</button>
                            <button id="dialogCancel" class="btn btn-danger waves-effect">Cancelar</button>
                        </div>
                    </div>
                </div>

            </section>
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
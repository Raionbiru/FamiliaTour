<!DOCTYPE html>
<html>
<?php session_start();
    if (!isset($_SESSION["nom_per"] ) ){
        header("Location:login.php");
    }         
?>
    <head>
        <meta charset="utf-8" />
        <title> Familia </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/ico.png">

        <!-- X editable -->
        <link href="../plugins/bootstrap-xeditable/css/bootstrap-editable.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <?php 
    require_once('Comercial-nav.php');
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
                        <h4 class="page-title float-left">Contratos</h4>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Comercial</a></li>
                            <li class="breadcrumb-item active">Contratos</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <button onclick="window.location.href='Comercial-adjuntar.php'" type="button" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right">Agregar Contrato</button>
                        <h4 class="m-b-30 m-t-0 header-title"><b>Demo Contrato</b></h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <form method="POST" action="Comercial-generarcontrato.php">
                        <input hidden="YES" name="tipo" value="pdf">
                        <div class="card-box">
                            <center>
                            <h4 class="m-t-0 m-b-30"> <b> CONTRATO </b> </h4>
                            
                            <p style="text-align: justify, font: 14px/1.8 arial, helvetica, sans-serif;  " class="m-b-0 col-10">
                                    Conste por el presente documento el contrato de <strong>FAMILIA TOUR</strong>, que celebran de una parte AAA, identificada con R.U.C. N° <input type="number" name="ruc" id="ruc"> inscrita en la partida electrónica N° <input type="number" name="electronica" id="electronica"> del Registro de Personas Jurídicas de <input type="text" name="registro" id="registro">, con domicilio en <input type="text" name="domicilio" id="domicilio">, debidamente representada por su gerente general don <input type="text" name="gerente" id="gerente">, identificado con el D.N.I. N° <input type="number" name="dni" id="dni">, con poderes inscritos en el asiento <input type="number" name="asiento" id="asiento"> de la referida partida electrónica, a quien en lo sucesivo se denominará <strong>EL COMITENTE</strong>; y, de otra parte BBB, identificada con R.U.C. N° <input type="number" name="ruc2" id="ruc2">, inscrita en la partida electrónica N° <input type="number" name="partida" id="partida"> del Registrode Personas Jurídicas de <input type="text" name="registro2" id="registro2">, con domicilio en <input type="text" name="domicilio2" id="domicilio2">, identificado con D.N.I. N° <input type="number" name="dni2" id="dni2">              , con poderes inscritos en el asiento <input type="text" name="asiento2" id="asiento2"> de la referida partida electrónica, a quien en lo sucesivo se denominará <strong>LA LOCADORA</strong>; en los términos contenidos en las cláusulas siguientes:
                                    .</p>
                            </center>
                            <br>
                            <div class='form-group row text-center m-t-10'>
                                <div class='col-md-4 offset-md-4'>
                                    <button class='btn btn-md btn-block btn-primary waves-effect waves-light' type='submit'>Generar Contrato</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form action="Comercial-generarcontrato.php" method="post">
                        <input hidden="YES" name="tipo" value="descargar">
                        <div class='form-group row text-center m-t-10'>
                                <div class='col-md-4'>
                                    <button class='btn btn-md btn-block btn-primary waves-effect waves-light' type='submit'>Descargar</button>
                                </div>
                            </div>
                    </form>
                </div><!-- end col -->
            </div>
            <!-- end row -->


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

        <!-- Xeditable -->
        <script src="../plugins/moment/moment.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-xeditable/js/bootstrap-editable.min.js" type="text/javascript"></script>
        <script src="assets/pages/jquery.xeditable.init.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>


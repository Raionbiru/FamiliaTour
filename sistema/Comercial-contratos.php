<?php session_start();
    if (!isset($_SESSION["rol"])){
        header("Location:index.php");
    }else {
        if ($_SESSION["rol"] != 1) {
            header("Location:index.php");
        }
    }
?>
<!DOCTYPE html>
<html>
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

                            <h5 class="m-t-0 m-b-30" style="font: 20px/1.8 arial, helvetica, sans-serif;  "> 2019,  AÑO DE LA LUCHA CONTRA LA CORRUPCIÓN E IMPUNIDAD </h5>
                            </center>
                            
                            <div align="right" style="margin-right: 150px">
                            <strong><p class="m-b-30 col-12">Asunto: Contrato de Tour</p></strong>
                            </div>

                            <div align="left" style="margin-left: 150px">
                            <strong><h5  class="m-b-30 col-12">A QUIEN CORRESPONDA:</h5></strong>
                            </div>
                            <BR></BR>
                            <div>
                            <center>
                            <p style="text-align: justify, font: 14px/1.8 arial, helvetica, sans-serif;" class="m-b-0 col-10">
                            El que suscribe, Encargado(a) de la Agencia <input type="text" style="border:none;border-bottom:1px solid #000;line-height:0.5em;" name="campo1" id="campo1" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">. Hace constar que el Tour <input type="text" style="border:none;border-bottom:1px solid #000;line-height:0.5em;" name="campo2" id="campo2" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">, con Clave <input type="text" style="border:none;border-bottom:1px solid #000;line-height:0.5em;" name="campo3" id="campo3" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">; concluyó sus actividades en la empresa <input type="text" style="border:none;border-bottom:1px solid #000;line-height:0.5em;" name="campo4" id="campo4" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">, de la ciudad de  <input type="text" style="border:none;border-bottom:1px solid #000;line-height:0.5em;" name="campo5" id="campo5" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">; con un costo de <input type="text" style="border:none;border-bottom:1px solid #000;line-height:0.5em;" name="campo6" id="campo6" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">.</p>
                            <br>
                            <p>
                            A petición del interesado, se expide el presente documento en la ciudad de Arequipa, Arequipa. A los 24 dias del mes de Diciembre de 2019.
                            </p>
                            </center>
                            </div>
                            <br>
                            <br>
                            <br>
                            
                            <div class="row">
                            
                                <div class="col-6">
                                <center>
                                <h5>EMPRESA:</h5>
                                <BR></BR>
                                <P>______________________________________________</P>
                                <p class="m-b-0 col-10">Nombre del Encargado</p>
                                <p class="m-b-0 col-10">Encargado del Departamento</p>
                                </center>
                                </div>

                                <div class="col-6">
                                <center>
                                <h5>CLIENTE:</h5>
                                <BR></BR>
                                <P>______________________________________________</P>
                                <p class="m-b-0 col-10">Nombre de Agencia </p>
                                <p class="m-b-0 col-10">Encargado de Agencia </p>
                                </center>
                                </div>

                            </div>
                            <BR></BR>
                            <BR></BR>

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
                                    <button class='btn btn-md btn-block btn-primary waves-effect waves-light' type='submit'>Descargar Plantilla</button>
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


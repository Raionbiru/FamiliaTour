<!DOCTYPE html>
<html lang="en">

<?php 
            require_once("funciones.php");
            $xc = conectar();
            
            $sql = "SELECT *
                    FROM cliente
                    Where id_cliente = 1";
            
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

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <?PHP 
            require_once("Agencia-header.php");
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
                        <h4 class="page-title float-left">Cotizador</h4>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                                <li class="breadcrumb-item"><a href="#">Agencia</a></li>
                                <li class="breadcrumb-item active">Cotizador</li>
                            </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
                <!-- end row -->


            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <form class="form-horizontal" method="POST" action="#">
                            <div class="row m-t-20">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-2 col-form-label">Nombres</label>
                                        <input type="text" name="nom_tour" id="nom_tour" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="col-2 col-form-label">Email</label>
                                        <input type="email"  name="nom_tour" id="nom_tour" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="col-2 col-form-label">Celular</label>
                                        <input type="text"  name="nom_tour" id="nom_tour" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-2 col-form-label">País</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Perú</option>
                                            <option value="">Argentina</option>
                                            <option value="">Brazil</option>
                                            <option value="">Paraguay</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Fecha de Viaje</label>
                                        <input type="text"  name="daterange" id="" class="form-control input-daterange-datepicker">
                                    </div>

                                    <div class="form-group">
                                        <label class="col-2 col-form-label">N° Persona</label>
                                        <input type="text"  name="nom_tour" id="nom_tour" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Categotia Hotel</label>
                                        <select name="" id="" class="form-control">
                                                <option value="">Hotel Una Estrella</option>
                                                <option value="">Hotel Dos Estrella</option>
                                                <option value="">Hotel Tres Estrella</option>
                                                <option value="">Hotel Cuatro Estrella</option>
                                                <option value="">Hotel Cinco Estrella</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-2 col-form-label">Colsulta</label>
                                        <textarea class="form-control" name="descp_tour" id="descp_tour"  rows="6"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right">Enviar Consulta</button>
                        </form>
                    </div>
                </div>
            </div> <!-- end row -->
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

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Sparkline charts -->
        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/pages/jquery.profile.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
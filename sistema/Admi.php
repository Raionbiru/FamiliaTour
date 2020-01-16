<?php require_once("Admi-sesion.php");
    require_once("funciones.php");
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

        <!-- C3 charts css -->
        <link href="../plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

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
                            <li class="breadcrumb-item active">Administrador 1</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <div class="text-center">
                            <h3 class="m-b-30 m-t-20">Familia Viajera Tour</h3>
                            <p>
                            Como parte de nuestro esfuerzo cotidiano de transparencia y comunicación constante con nuestras comunidades, les damos la bienvenida a nuestro portal, el cual permite conocer aspectos importantes de nuestra empresa y su desempeño, pero principalmente, significa un canal abierto para recibir comentarios y sugerencias que enriquezcan nuestra diaria labor.
                            </p>
                        </div>

                        <div class="m-t-50 p-t-10">
                            <h4 class="text-uppercase font-18">¿qué desea hacer?</h4>
                            <div class="border m-b-30"></div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="about-features-box text-center">
                                        <a href="Admi-pago-mensual.php">
                                            <div class="feature-icon bg-primary">
                                                <i class="dripicons-checklist"></i>
                                            </div>
                                            <h4 class="font-18">Pagos Mensuales</h4>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="about-features-box text-center">
                                        <a href="Admi-accesousuario.php">
                                            <div class="feature-icon bg-info">
                                                <i class="dripicons-user-id"></i>
                                            </div>
                                            <h4 class="font-18">Acceso Agencia</h4>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="about-features-box text-center">
                                        <a href="Admi-registro.php">
                                            <div class="feature-icon bg-purple">
                                                <i class="dripicons-user-group"></i>
                                            </div>
                                            <h4 class="font-18">Acceso Personal</h4>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="about-features-box text-center">
                                        <a href="Admi-cotizador.php">
                                            <div class="feature-icon bg-purple">
                                                <i class="dripicons-view-apps"></i>
                                            </div>
                                            <h4 class="font-18">Cotizador</h4>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="about-features-box text-center">
                                        <a href="Admi-proveedores.php">
                                            <div class="feature-icon bg-custom">
                                                <i class="dripicons-graph-pie"></i>
                                            </div>
                                            <h4 class="font-18">Proveedores</h4>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="about-features-box text-center">
                                        <a href="Admi-ventas.php">
                                            <div class="feature-icon bg-muted">
                                                <i class="dripicons-jewel"></i>
                                            </div>
                                            <h4 class="font-18">Resumen de ventas</h4>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="about-features-box text-center">
                                        <a href="Admi-personal.php">
                                            <div class="feature-icon bg-success">
                                                <i class="dripicons-pamphlet"></i>
                                            </div>
                                            <h4 class="font-18">Personal</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end services -->

                    </div> <!-- end p-20 -->
                </div> <!-- end col -->
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

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="../plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="../plugins/c3/c3.min.js"></script>

        <!--Echart Chart-->
        <script src="../plugins/echart/echarts-all.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
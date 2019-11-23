<?php require_once("funciones.php");?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Familia Tour</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="¡Los mejores tours a los mejores precios!" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>

<body class="bg-accpunt-pages">

<!-- HOME -->
<section>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper-page">
                <div class="account-pages">
                    <div class="account-box">
                        <div class="account-logo-box">
                            <h2 class="text-uppercase text-center">
                                <a href="index.html" class="text-success">
                                    <span><img src="assets/images/transparent-logo2019.png" alt="" height="150"></span>
                                </a>
                            </h2>
                            <center><h3 class="text-uppercase font-bold m-b-5 m-t-50">Iniciar Sesion</h3>
                            <p class="m-b-0">¡Los mejores tours a los mejores precios!</p></center>
                        </div>
                        <div class="account-content">
                            <!--
                            <form class="form-horizontal" method="POST" action="validar.php">
                            -->
                            <form class="form-horizontal" method="POST" action="validar.php">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email</label>
                                        <input class="form-control" type="text" id="emailaddress" required="" name="log_per" placeholder="Usuario / Email">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="page-recoverpw.html" class="text-muted pull-right"><small>¿Olvidaste tu contraseña?</small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" name="pass_per" placeholder="Contraseña">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-success">
                                            <input id="remember" type="checkbox">
                                            <label for="remember">
                                                Recordar usuario
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Ingresar</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <button type="button" class="btn m-r-5 btn-facebook waves-effect waves-light">
                                            <i class="fa fa-facebook"></i>
                                        </button>
                                        <button type="button" class="btn m-r-5 btn-googleplus waves-effect waves-light">
                                            <i class="fa fa-google"></i>
                                        </button>
                                        <button type="button" class="btn m-r-5 btn-twitter waves-effect waves-light">
                                            <i class="fa fa-twitter"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">¿Eres nuevo? <a href="register.php" class="text-dark m-l-5"><b>Registrate</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end card-box-->

            </div>
            <!-- end wrapper -->

        </div>
    </div>
</div>
</section>
<!-- END HOME -->
<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
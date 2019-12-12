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

                        <?php

                        while($fila=mysqli_fetch_array($res)){
                            $xnom_cliente = $fila["nom_cliente"];
                            $xape_cliente = $fila["ape_cliente"];
                            $xemail_cliente = $fila["email_cliente"];
                            $xcel_cliente = $fila["cel_cliente"];
                            $xempr_cliente = $fila["empr_cliente"];
                            $xruc_empr_cliente = $fila["ruc_empr_cliente"];
                            $xweb_empr_cliente = $fila["web_empr_cliente"];
                            $xcod_cliente = $fila["cod_cliente"];

                        echo "
                            <div class='row'>
                                <div class='col-12'>
                                    <div class='page-title-box'>
                                        <h4 class='page-title float-left'>Perfil</h4>

                                        <ol class='breadcrumb float-right'>
                                            <li class='breadcrumb-item'><a href='#'>Familia Tour</a></li>
                                            <li class='breadcrumb-item'><a href='#'>Agencia</a></li>
                                            <li class='breadcrumb-item active'>Perfil</li>
                                        </ol>

                                        <div class='clearfix'></div>
                                    </div>
                                </div>
                            </div>


                            <div class='row'>
                                <div class='col-sm-12'>
                                    <div class='profile-bg-picture' style='background-image:url(assets/images/bg-profile.jpg)'>
                                        <span class='picture-bg-overlay'></span>
                                    </div>
                                    
                                    <div class='profile-user-box'>
                                        <div class='row'>
                                            <div class='col-sm-6'>
                                                <span class='pull-left m-r-15'><img src='assets/images/users/avatar-1.jpg' alt='' class='thumb-lg rounded-circle'></span>
                                                <div class='media-body'>
                                                    <h4 class='m-t-5 m-b-5 font-18 ellipsis'>$xnom_cliente</h4>
                                                    <p class='font-13'> $xcod_cliente </p>
                                                    <p class='text-muted m-b-0'><small>$xempr_cliente - $xruc_empr_cliente</small></p>
                                                </div>
                                            </div>
                                            <div class='col-sm-6'>
                                                <div class='text-right'>
                                                    <!--<button type='button' class='btn btn-success waves-effect waves-light'>
                                                        
                                                    </button>-->

                                                    <button type='button' class='btn btn-success waves-effect waves-light btn-sm' id='toastr-three'><i class='mdi mdi-account-settings-variant m-r-5'></i> Editar Perfil</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class='row'>
                                <div class='col-md-6'>
                                    <!-- Personal-Information -->
                                    <div class='card-box'>
                                        <h4 class='header-title mt-0 m-b-20'>INFORMACIÓN PERSONAL</h4>
                                        <div class='panel-body'>
                                            <p class='text-muted font-13'>
                                                Hola, Yo soy $xnom_cliente $xape_cliente que reside en este hermoso mundo. Creo sitios web y aplicaciones móviles con un excelente diseño de UX y UI. He trabajado con grandes empresas como Nokia, Google y Yahoo.
                                            </p>

                                            <hr/>

                                            <div class='text-left'>
                                                <p class='text-muted font-13'><strong>Nombre Completo :</strong> <span class='m-l-15'>$xnom_cliente $xape_cliente</span></p>

                                                <p class='text-muted font-13'><strong>Celular :</strong><span class='m-l-15'>(+51) $xcel_cliente</span></p>

                                                <p class='text-muted font-13'><strong>Email :</strong> <span class='m-l-15'>$xemail_cliente</span></p>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Personal-Information -->

                                </div>

                            </div>
                            <!-- end row -->
                            ";
                        }
                        ?>
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

        <!-- Toastr js -->
        <script src="../plugins/jquery-toastr/jquery.toast.min.js" type="text/javascript"></script>
        <script src="assets/pages/jquery.toastr.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
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
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                                                    <button type='button' class='btn btn-success waves-effect waves-light'>
                                                        <i class='mdi mdi-account-settings-variant m-r-5'></i> Editar Perfil
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class='row'>
                                <div class='col-md-4'>
                                    <!-- Personal-Information -->
                                    <div class='card-box'>
                                        <h4 class='header-title mt-0 m-b-20'>INFORMACIÓN PERSONAL</h4>
                                        <div class='panel-body'>
                                            <p class='text-muted font-13'>
                                                Hye, I’m Johnathan Doe residing in this beautiful world. I create websites and mobile apps with great UX and UI design. I have done work with big companies like Nokia, Google and Yahoo. Meet me or Contact me for any queries. One Extra line for filling space. Fill as many you want.
                                            </p>

                                            <hr/>

                                            <div class='text-left'>
                                                <p class='text-muted font-13'><strong>Nombre Completo :</strong> <span class='m-l-15'>$xnom_cliente $xape_cliente</span></p>

                                                <p class='text-muted font-13'><strong>Celular :</strong><span class='m-l-15'>(+51) $xcel_cliente</span></p>

                                                <p class='text-muted font-13'><strong>Email :</strong> <span class='m-l-15'>$xemail_cliente</span></p>

                                                <p class='text-muted font-13'><strong>Ubicación :</strong> <span class='m-l-15'>USA</span></p>

                                                <p class='text-muted font-13'><strong>Languages :</strong>
                                                    <span class='m-l-5'>
                                                        <span class='flag-icon flag-icon-us m-r-5 m-t-0' title='us'></span>
                                                        <span>English</span>
                                                    </span>
                                                    <span class='m-l-5'>
                                                        <span class='flag-icon flag-icon-de m-r-5' title='de'></span>
                                                        <span>German</span>
                                                    </span>
                                                    <span class='m-l-5'>
                                                        <span class='flag-icon flag-icon-es m-r-5' title='es'></span>
                                                        <span>Spanish</span>
                                                    </span>
                                                    <span class='m-l-5'>
                                                        <span class='flag-icon flag-icon-fr m-r-5' title='fr'></span>
                                                        <span>French</span>
                                                    </span>
                                                </p>

                                            </div>

                                            <ul class='social-links list-inline m-t-20 m-b-0'>
                                                <li class='list-inline-item'>
                                                    <a title='' data-placement='top' data-toggle='tooltip' class='tooltips' href='' data-original-title='Facebook'><i class='fa fa-facebook'></i></a>
                                                </li>
                                                <li class='list-inline-item'>
                                                    <a title='' data-placement='top' data-toggle='tooltip' class='tooltips' href='' data-original-title='Twitter'><i class='fa fa-twitter'></i></a>
                                                </li>
                                                <li class='list-inline-item'>
                                                    <a title='' data-placement='top' data-toggle='tooltip' class='tooltips' href='' data-original-title='Skype'><i class='fa fa-skype'></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Personal-Information -->

                                </div>


                                <div class='col-md-8'>

                                    <div class='row'>

                                        <div class='col-sm-4'>
                                            <div class='card-box widget-box-four'>
                                                <div id='dashboard-1' class='widget-box-four-chart'></div>
                                                <div class='wigdet-four-content pull-left'>
                                                    <h4 class='m-t-0 font-16 m-b-5 text-overflow' title='Total Revenue'>Total Reservas</h4>
                                                    <p class='font-secondary text-muted'>Jan - Apr 2017</p>
                                                    <h3 class='m-b-0 m-t-20'><span>$</span> <span data-plugin='counterup'>1,28,5960</span></h3>
                                                </div>
                                                <div class='clearfix'></div>
                                            </div>
                                        </div><!-- end col -->

                                        <div class='col-sm-4'>
                                            <div class='card-box widget-box-four'>
                                                <div id='dashboard-2' class='widget-box-four-chart'></div>
                                                <div class='wigdet-four-content pull-left'>
                                                    <h4 class='m-t-0 font-16 m-b-5 text-overflow' title='Total Unique Visitors'>Total Unique Visitors</h4>
                                                    <p class='font-secondary text-muted'>Jan - Apr 2017</p>
                                                    <h3 class='m-b-0 m-t-20'><span>$</span> <span data-plugin='counterup'>1,28,5960</span></h3>
                                                </div>
                                                <div class='clearfix'></div>
                                            </div>
                                        </div><!-- end col -->

                                        <div class='col-sm-4'>
                                            <div class='card-box widget-box-four'>
                                                <div id='dashboard-3' class='widget-box-four-chart'></div>
                                                <div class='wigdet-four-content pull-left'>
                                                    <h4 class='m-t-0 font-16 m-b-5 text-overflow' title='Number of Transactions'>Número de Transacciones</h4>
                                                    <p class='font-secondary text-muted'>Jan - Apr 2017</p>
                                                    <h3 class='m-b-0 m-t-20'><span>$</span> <span data-plugin='counterup'>1,28,5960</span></h3>
                                                </div>
                                                <div class='clearfix'></div>
                                            </div>
                                        </div><!-- end col -->

                                    </div>
                                    <!-- end row -->


                                    <div class='card-box'>
                                        <h4 class='header-title mt-0 m-b-20'>Experiencia</h4>
                                        <div class=''>
                                            <div class=''>
                                                <h5 class='text-custom m-b-5'>Lead designer / Developer</h5>
                                                <p class='m-b-0'>websitename.com</p>
                                                <p><b>2010-2015</b></p>

                                                <p class='text-muted font-13 m-b-0'>Lorem Ipsum is simply dummy text
                                                    of the printing and typesetting industry. Lorem Ipsum has
                                                    been the industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book.
                                                </p>
                                            </div>

                                            <hr>

                                            <div class=''>
                                                <h5 class='text-custom m-b-5'>Senior Graphic Designer</h5>
                                                <p class='m-b-0'>coderthemes.com</p>
                                                <p><b>2007-2009</b></p>

                                                <p class='text-muted font-13'>Lorem Ipsum is simply dummy text
                                                    of the printing and typesetting industry. Lorem Ipsum has
                                                    been the industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book.
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- end col -->

                            </div>
                            <!-- end row -->
                            ";
                        }
                        ?>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2019 © Insizio. - Familia.com
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
<?php require_once("Agencia-sesion.php");
require_once("funciones.php");
$xc = conectar();


$sql = "SELECT t.nom_tour, t.descp_tour, t.prec_tour, t.id_tour
        FROM tour t";

$sql2 = "SELECT count(*)
        FROM tour";

$sql3 = "SELECT *
        FROM cliente
        Where id_cliente = 1";

$res = mysqli_query($xc,$sql);        
$res2 = mysqli_query($xc,$sql2);
$res3 = mysqli_query($xc,$sql3);
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

        <!-- C3 charts css -->
        <link href="../plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

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

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="assets/images/Logo_blanco.png" alt="" height="60">
                        </span>
                        <i>
                            <img src="assets/images/sm-logo2019.png" alt="" height="28">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right"></span>Notificación</h5>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    Todo
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hola ! John</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="Agencia-datos.php" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="Mantenmiento.php" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Configuración</span>
                                </a>

                                <!-- item-->
                                <a href="index.php" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Salir</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <!--<form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>-->
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Navegación</li>
                            <li>
                                <a href="Agencia-datos.php"><i class="fi-target"></i> <span> Datos </span></a>
                            </li>

                            <li>
                                <a href="Agencia-tours.php"><i class="fi-briefcase"></i> <span> Tours Arequipa </span></a>
                            </li>

                            <li>
                                <a href="Mantenmiento.php"><i class="fi-bar-graph-2"></i><span> Historial </span></a>
                            </li>

                            <li>
                                <a href="Agencia-reserva.php"><i class="fi-mail"></i><span> Reserva </span></a>
                            </li>

                            <li>
                                <a href="Agencia-cotizador.php"><i class="fi-paper"></i><span> Cotizador </span></a>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

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

                    <?php
                        while($fila=mysqli_fetch_array($res3)){
                            $xempr_cliente = $fila["empr_cliente"];
                            $xcod_cliente = $fila["cod_cliente"];

                        echo "<h4 class='page-title float-left'>Bienvenido $xempr_cliente - $xcod_cliente</h4>";
                        }
                    ?>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Agencias</a></li>
                            <li class="breadcrumb-item active">Tours</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                    <!--    
                    <button onclick="window.location.href='Comercial-inserttour.php'" type="button" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right">Agregar Tours</button>-->
                        <h4 class="header-title m-b-30"><?PHP
                        // Obteniendo la fecha actual del sistema con PHP
                        $fechaActual = date('d-m-Y');
                        
                        echo $fechaActual;

                        while($fila=mysqli_fetch_array($res2)){
                            $xnom_tour = $fila[0];

                            echo " - Tours $xnom_tour";
                        }
                        ?></h4>

                        <div class="row">
                        <?PHP  while($fila=mysqli_fetch_array($res)){
                                    $xnom_tour = $fila["nom_tour"];
                                    $xdescp_tour = $fila["descp_tour"];
                                    $xprec_tour = $fila["prec_tour"];
                                    $xid_tour = $fila["id_tour"];

                                    echo "
                                        <div class='col-sm-4 col-lg-3 col-xs-12'>
                                            <div class='card m-b-20'>
                                                <img class='card-img-top img-fluid' src='assets/images/small/img-1.jpg' alt='Card image cap'>
                                                <div class='card-block'>
                                                    <h4 class='card-title'>$xnom_tour</h4>
                                                    <p class='card-text'>$xdescp_tour</p>
                                                    <a href='Agencia-reserva.php?tour=$xid_tour' class='btn btn-primary'>Reservar</a>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                                }
                        ?>
                        </div>

                    </div>
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
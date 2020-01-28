<?php require_once("Comercial-sesion.php");        
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
                    <a href="Comercial.php" class="logo">
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
                                <!--<span class="badge badge-pink noti-icon-badge">0</span>-->
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right"></span>Notification</h5>
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
                                <img src="assets/images/users/usuario.png" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hola ! <?PHP echo $_SESSION['nom_per']; ?></small> </h5>
                                </div>

                                <!-- item-->
                                <a href="Mantenmiento.php" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Perfil</span>
                                </a>

                                <!-- item-->
                                <a href="Mantenmiento.php" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Configuración</span>
                                </a>

                                <!-- item-->
                                <a href="cerrar_sesion.php" class="dropdown-item notify-item">
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
                        <!--li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li-->
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
                            <li class="menu-title">Comercial</li>
                            
                            <li>
                                <a href="Comercial-CRM.php"><i class="fi-briefcase"></i> <span> CRM </span></a>
                            </li>
                        
                            <li>
                                <a href="Comercial-cotizador.php"><i class="fi-bar-graph-2"></i><span> Cotizador </span></a>
                            </li>

                            <li>
                                <a href="Comercial-programa.php"><i class="icon-puzzle"></i><span> Programas </span></a>
                            </li>

                            <li>
                                <a href="Comercial-contratos.php"><i class="icon-paper-clip "></i><span> Contratos </span></a>
                            </li>
                            
                            <!--
                            <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span> Tours <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="Comercial-subirtours.php">Subir Tour</a></li>
                                    <li><a href="Comercial-bus.php">Buses</a></li>
                                </ul>
                            </li>-->

                            <li>
                                <a href="Comercial-tours.php"><i class=" icon-tag "></i><span> Tours </span></a>
                            </li>
                            
                            <li>
                                <a href="Comercial-bus.php"><i class="mdi mdi-bus "></i><span> Buses </span></a>
                            </li>

                            <li>
                                <a href="Comercial-bus.php"><i class="dripicons-search "></i><span> Buscar reservas </span></a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
<body>
<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="Admi.php" class="logo">
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
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" onclick="myFunction()" id="notification-icon">
                        <i class="dripicons-bell noti-icon"></i>
                        <span class="badge badge-pink noti-icon-badge" id="notification-count">
                            <?php
                                $xc = conectar();
                                $sqlNotificacion = "SELECT count(*) FROM cliente , persona WHERE notificacion_cliente = 0 AND notificacion_per = 0";
                                $resNotificacion = mysqli_query($xc,$sqlNotificacion);
                                $filaNotificacion = mysqli_fetch_array($resNotificacion);
                                $xresNotificacion = $filaNotificacion[0];
                                desconectar($xc);
                                echo "$xresNotificacion";?>
                        </span>
                        <div id="notification-latest"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                        <h5><span class="badge badge-danger float-right"><?php echo "$xresNotificacion";?></span>Notification</h5>
                        </div>

                            <?php
                                $xc = conectar();
                                $sqlRespuesta = "SELECT nom_cliente, empr_cliente FROM cliente WHERE notificacion_cliente = 0";
                                $sqlPersona = "SELECT nom_per, ape_per FROM persona WHERE notificacion_per = 0";
                                $resRespuesta = mysqli_query($xc,$sqlRespuesta);
                                desconectar($xc);

                                while($fila=mysqli_fetch_array($resRespuesta)){
                                    $xnom_cliente = $fila["nom_cliente"];
                                    $xempr_cliente = $fila["empr_cliente"];

                                        echo "
                                        <!-- item-->
                                        <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                            <div class='notify-icon bg-info'><i class='icon-user'></i></div>
                                            <p class='notify-details'>Nuevo usuario registrado.<small class='text-muted'>$xnom_cliente | $xempr_cliente</small></p>
                                        </a>";
                                }

                                if ($xresNotificacion > 0) {
                                    echo "<a href='javascript:void(0);' class='dropdown-item notify-item notify-all'>
                                        View All
                                    </a>";
                                }
                            ?>
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
                            <h5 class="text-overflow"><small>Hola | <?PHP echo $_SESSION['nom_per']; ?></small> </h5>
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
                            <i class="zmdi zmdi-power"></i> <span>Cerrar sesion</span>
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
                    <li class="menu-title"><span>Administrador</span></li>
                    <li>
                        <a href="Admi-pago-mensual.php"><i class="fi-target"></i> <span> Pagos Mensuales </span></a>
                    </li>

                    <li>
                        <a href="Admi-accesousuario.php"><i class="fi-briefcase"></i> <span> Acceso Agencia </span></a>
                    </li>

                    <li>
                        <a href="Admi-registro.php"><i class="fi-bar-graph-2"></i><span> Acceso Personal </span></a>
                    </li>

                    <li>
                        <a href="Admi-proveedores.php"><i class="fi-mail"></i><span> Proveedores </span></a>
                    </li>

                    <li>
                        <a href="Admi-ventas.php"><i class="fi-paper"></i><span> Resumen de Ventas </span></a>
                    </li>

                    <li>
                        <a href="Admi-personal.php"><i class="fi-disc"></i><span> Personal </span></a>
                    </li>

                    <li>
                        <a href="Admi-cotizador.php"><i class="fi-content-left "></i><span> Cotizador </span></a>
                    </li>

                </ul>

            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <script type="text/javascript">
      function myFunction() {
        $.ajax({
          url: "notificacion.php",
          type: "POST",
          processData:false,
          success: function(data){
            $("#notification-count").remove();                  
            $("#notification-latest").show();$("#notification-latest").html(data);
          },
          error: function(){}
        });
      }
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      }); 
    </script>
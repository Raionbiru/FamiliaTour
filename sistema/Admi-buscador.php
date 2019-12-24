<!DOCTYPE html>
<html>
    <?php session_start();
        if (!isset($_SESSION["nom_per"] ) ){
            header("Location:index.php");
        }         
        require_once("funciones.php");
        $xfec_ini=leerParam("fec_ini","");
        $xfec_fin=leerParam("fec_fin","");

        $xc = conectar();
        $sql="SELECT p.nom_per, p.ape_per, a.nom_area, j.fec_jor, j.sueldo_jor
            FROM jornal j
            INNER JOIN persona p ON j.id_per = p.id_per
            INNER JOIN area a ON j.id_area = a.id_area
            WHERE fec_jor >= '$xfec_ini' AND fec_jor <= '$xfec_fin'";
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

        <!-- Tablesaw css -->
        <link href="../plugins/tablesaw/css/tablesaw.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="page-title float-left">Personal</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                                <li class="breadcrumb-item"><a href="#">Administración</a></li>
                                <li class="breadcrumb-item active">Personal</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="m-t-0 header-title"><b>Busqueda</b></h4>
                            <p class="text-muted font-14">
                                <br>
                                <?php echo"Desde: $xfec_ini  Hasta: $xfec_fin";?>
                            </p>

                            <table class="tablesaw table m-b-0" data-tablesaw-mode="swipe">
                                <thead>
                                    <tr>
                                        <th class="title" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Personal</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Sueldo</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Fecha</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Area</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?PHP while($fila=mysqli_fetch_array($res)){
                                            $xnom_per = $fila["nom_per"];
                                            $xape_per = $fila["ape_per"];
                                            $xnom_area = $fila["nom_area"];
                                            $xsueldo_jor = $fila["sueldo_jor"];
                                            $xfec_jor = $fila["fec_jor"];

                                            echo"
                                            <tr>
                                                <td>$xnom_area $xape_per</td>
                                                <td>$xsueldo_jor</td>
                                                <td>$xfec_jor</td>
                                                <td>$xnom_area</td>
                                            </tr>
                                            ";
                                    };
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end: page -->     
        </div> <!-- end: content -->
        <footer class="footer text-right">
            2019 © Insizio
        </footer>
    </div> <!-- end: content-page -->
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

        <!-- Tablesaw js -->
        <script src="../plugins/tablesaw/js/tablesaw.js"></script>
        <script src="../plugins/tablesaw/js/tablesaw-init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
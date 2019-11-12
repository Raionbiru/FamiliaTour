<?php require_once("Comercial-header.php");
require_once("funciones.php");
$xc = conectar();


$sql = "SELECT t.nom_tour, t.descp_tour, t.prec_tour
        FROM tour t";
$res = mysqli_query($xc,$sql);
desconectar($xc);
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
                        <h4 class="page-title float-left">Subir Tours</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Comercial</a></li>
                            <li class="breadcrumb-item active">Subir Tours</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <button onclick="window.location.href='Comercial-inserttour.php'" type="button" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right">Agregar Tours</button>
                        <h4 class="header-title m-b-30">Mis Contratos</h4>

                        <div class="row">
                        <?PHP  while($fila=mysqli_fetch_array($res)){
                                    $xnom_tour = $fila["nom_tour"];
                                    $xdescp_tour = $fila["descp_tour"];
                                    $xprec_tour = $fila["prec_tour"];

                                    echo "
                                        <div class='col-sm-4 col-lg-3 col-xs-12'>
                                        <div class='card m-b-20'>
                                            <img class='card-img-top img-fluid' src='assets/images/small/img-1.jpg' alt='Card image cap'>
                                            <div class='card-block'>
                                                <h4 class='card-title'>$xnom_tour</h4>
                                                <p class='card-text'>$xdescp_tour</p>
                                                <a href='#' class='btn btn-primary'>Button</a>
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
        2019 © FimiaTour. - Coderthemes.com
    </footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<?php require_once("Comercial-footer.php");?>
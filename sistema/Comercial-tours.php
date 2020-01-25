<?php require_once("Comercial-header.php");
require_once("funciones.php");
$xc = conectar();


$sql = "SELECT t.nom_tour, t.descp_tour, t.prec_tour, t.id_tour
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
                        <button onclick="window.location.href='Comercial-tourAdd.php'" type="button" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right">Agregar Tours</button>
                        <h4 class="header-title m-b-30"> <b>Tours</b> </h4>

                        <div class="row">
                        <?PHP                  
                                while($fila=mysqli_fetch_array($res)){
                                    $xnom_tour = $fila["nom_tour"];
                                    $xdescp_tour = $fila["descp_tour"];
                                    $xprec_tour = $fila["prec_tour"];
                                    $xid_tour = $fila["id_tour"];

                                    //$path = "assets/images/".$xid_tour;
                                    //$directorio = opendir($path);
                                    //$archivo = readdir($directorio);
                                    //<!--<img class='card-img-top img-fluid' src='assets/images/$xid_tour/$archivo' alt='Card image cap'>-->

                                    echo "
                                        <div class='col-sm-4 col-lg-3 col-xs-12'>
                                        <div class='card m-b-20'>
                                            <img class='card-img-top img-fluid' src='assets/images/small/img-1.jpg' alt='Tour'>
                                            <div class='card-block'>
                                                <h4 class='card-title'>$xnom_tour</h4>
                                                <p class='card-text'>".$xdescp_tour."</p>
                                                <a href='Comercial-tourEdit.php?id=$xid_tour' class='btn btn-info btn-bordered'>Actualizar</a>
                                                <a href='Comercial-tourGrabar.php?id=$xid_tour&accion=eliminar' class='btn btn-danger btn-bordered'>Eliminar</a>
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
        2019 © Insizio. - Coderthemes.com
    </footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<?php require_once("Comercial-footer.php");?>
<?php session_start();
    if (!isset($_SESSION["nom_per"] ) ){
        header("Location:index.php");
    }         
    require_once("funciones.php");
    $xc = conectar();
    $sql = "SELECT p.id_per, p.nom_per, p.ape_per, p.cargo_per, p.estado_per, a.nom_area
        FROM persona p
        INNER JOIN area a ON p.id_area = a.id_area";
    $res = mysqli_query($xc,$sql);
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

        <!--Footable-->
        <link href="../plugins/footable/css/footable.core.css" rel="stylesheet">

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
                        <h4 class="page-title float-left"> Administrador</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                            <li class="breadcrumb-item active">Solicitud de registro</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div><!-- End Row-->
            
            <!-- Inicio - Tabla -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Solicitud de Registro</b></h4>
                        <p class="text-muted m-b-30 font-13">
                            El personal quiere ingresar al sistema.
                        </p>

                        <table id="demo-foo-addrow" class="table table-striped table-bordered m-b-0 toggle-circle" data-page-size="7">
                            <thead>
                            <tr>
                                <th data-sort-ignore="true" class="min-width"></th>
                                <th data-sort-initial="true" data-toggle="true">Nombre</th>
                                <th>Apellido</th>
                                <th>Cargo</th>
                                <th>Area</th>
                                <th>Curriculum Vitae</th>
                                <th>Estado</th>
                            </tr>
                            </thead>
                            <!-- Añadir y Buscar  -->
                            <!--<div class="pad-btm form-inline">
                                <div class="row">
                                    <div class="col-sm-6 text-xs-center">
                                        <div class="form-group">
                                            <button id="demo-btn-addrow" class="btn btn-primary m-b-20"><i class="fa fa-plus m-r-5"></i> Add New Row</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-xs-center text-right">
                                        <div class="form-group">
                                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <tbody>
                            <?PHP 
                                while($fila=mysqli_fetch_array($res)){
                                    $xid_per = $fila["id_per"];
                                    $xnom_per = $fila["nom_per"];
                                    $xape_per = $fila["ape_per"];
                                    $xcargo_per = $fila["cargo_per"];
                                    $xnom_area = $fila["nom_area"];
                                    $xestado_per = $fila["estado_per"];

                                    if ($xestado_per == 0) {
                                    
                                        echo "
                                            <tr>
                                            <td class='text-center'>
                                                
                                                <div class='button-list'>
                                                <form method='POST' action='activar-usuario.php'>

                                                    <input hidden='YES' name='accion' value='desactivar'>
                                                    <input hidden='YES' name='id_per' value=$xid_per>
                                                    
                                                    <button class='demo-delete-row btn btn-danger btn-xs btn-icon' type='submit'><i class='fa fa-times'></i></button>

                                                </form>

                                                <form method='POST' action='activar-usuario.php'>

                                                    <input hidden='YES' name='accion' value='activar'>
                                                    <input hidden='YES' name='id_per' value=$xid_per>

                                                    <button class='demo-delete-row btn btn-danger btn-xs btn-icon' type='submit'><i class='fa fa-check'></i></button>

                                                </form>
                                                </div>
                                            </td>
                                            <td>$xnom_per</td>
                                            <td>$xape_per</td>
                                            <td>$xcargo_per</td>
                                            <td>$xnom_area</td>";
                                            
                                            $path = "Doc/CV/".$xid_per;
                                            if(file_exists($path)){
                                                $directorio = opendir($path);
                                                while ($archivo = readdir($directorio)){
                                                    if(!is_dir($archivo)){
                                                        echo "
                                                        <td>
                                                            <a href='".$path."/".$archivo."' title='Ver Archivo Adjunto'>
                                                                <span class='label label-table label-success'>$archivo</span>
                                                            </a>
                                                        </td>
                                                        ";
                                                    }
                                                }
                                            }else{
                                                echo "
                                                <td>
                                                    <span class='label label-table label-danger'>No cuenta con CV</span>
                                                </td>
                                                ";
                                            }
                                            
                                            echo "<td>";
                                                if ($xestado_per == 0){
                                                    echo"<span class='label label-table label-warning'>Pendiente</span>";
                                                }
                                                elseif($xestado_per == 1){
                                                    echo"<span class='label label-table label-success'>Activado</span>";
                                                }
                                            echo "</td>";

                                            echo"
                                            </tr>
                                            
                                        ";
                                    }
                                }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr class="active">
                                <td colspan="6">
                                    <div class="text-right">
                                        <ul class="pagination pagination-split footable-pagination m-t-10"></ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

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

    <!--FooTable
    <script src="../plugins/footable/js/footable.all.min.js"></script>-->

    <!--FooTable Example-->
    <script src="assets/pages/jquery.footable.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>
</html>
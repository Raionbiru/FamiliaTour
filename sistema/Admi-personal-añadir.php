<?php require_once("Admi-header.php");
      require_once("funciones.php");

$xc = conectar();
/*$sql = "SELECT p.nom_per,p.ape_per, a.nom_area, p.id_area
        FROM persona p
        INNER JOIN area a ON p.id_area = a.id_area
        WHERE p.id_area >= 1";*/
$comercial = "SELECT p.nom_per,p.ape_per, a.nom_area, p.id_per
            FROM persona p
            INNER JOIN area a ON p.id_area = a.id_area
            WHERE p.id_area >= 1 && a.id_area = '1'";
$operaciones = "SELECT p.nom_per,p.ape_per, a.nom_area, p.id_per
            FROM persona p
            INNER JOIN area a ON p.id_area = a.id_area
            WHERE p.id_area >= 1 && a.id_area = '2'";
$administracion = "SELECT p.nom_per,p.ape_per, a.nom_area, p.id_per
            FROM persona p
            INNER JOIN area a ON p.id_area = a.id_area
            WHERE p.id_area >= 1 && a.id_area = '3'";
$res1 = mysqli_query($xc,$comercial);
$res2 = mysqli_query($xc,$operaciones);
$res3 = mysqli_query($xc,$administracion);
desconectar($xc);

?>
 <!-- Tablesaw css -->
 <link href="../plugins/tablesaw/css/tablesaw.css" rel="stylesheet" type="text/css" />
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

           <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        

                        <div class="row">
                            <div class="col-12">
                                <div class="p-20">
                                    <form class="form-horizontal" role="form">
                                        
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Personal</label>
                                            <div class="col-10">
                                                <select class="form-control select2">
                                                    <option>Select</option>
                                                    <optgroup label="Comercial">
                                                    <?php while ($fila=mysqli_fetch_array($res1)){
                                                            $xnom_per = $fila["nom_per"];
                                                            $xape_per = $fila["ape_per"];
                                                            $xid_per = $fila["id_per"];
                                                            echo "
                                                                <option value='$xid_per'>$xnom_per $xape_per</option>
                                                            ";
                                                        };
                                                    ?>
                                                    </optgroup>
                                                    <optgroup label="Operaciones">
                                                    <?php while ($fila=mysqli_fetch_array($res2)){
                                                            $xnom_per = $fila["nom_per"];
                                                            $xape_per = $fila["ape_per"];
                                                            $xid_per = $fila["id_per"];
                                                            echo "
                                                            <option value='$xid_per'>$xnom_per $xape_per</option>
                                                            ";
                                                        };
                                                    ?>
                                                    </optgroup>
                                                    <optgroup label="Administración">
                                                    <?php while ($fila=mysqli_fetch_array($res3)){
                                                            $xnom_per = $fila["nom_per"];
                                                            $xape_per = $fila["ape_per"];
                                                            $xid_per = $fila["id_per"];
                                                            echo "
                                                            <option value='$xid_per'>$xnom_per $xape_per</option>
                                                            ";
                                                        };
                                                    ?>
                                                    </optgroup>
                                                    
                                                </select>
                                            </div>
                                        </div>                                    
                                    
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Horas Trabajo</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="time" name="time">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Viáticos</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" name="number">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Sueldo</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" name="number">
                                            </div>
                                        </div>
                                            <button type="button" class="btn btn-primary btn-rounded w-md waves-effect waves-light">Agregar</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
            
        </div> <!-- content -->
    <footer class="footer text-right">
        2019 © Insizio. - Coderthemes.com
    </footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<?php require_once("Admi-footer.php");?>
<!DOCTYPE html>
<html>
    <?php session_start();
        if (!isset($_SESSION["nom_per"] ) ){
            header("Location:login.php");
        }
        require_once("funciones.php");
        $xc = conectar();

        $sqlPersona = "SELECT p.nom_per, p.ape_per, p.id_per, a.nom_area, a.id_area FROM persona p INNER JOIN area a ON p.id_area = a.id_area";
        $resPersona = mysqli_query($xc,$sqlPersona);
        
        //$filaPersona = mysqli_fetch_array($resPersona);
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

        <!-- Plugin Css-->
        <link rel="stylesheet" href="../plugins/magnific-popup/css/magnific-popup.css" />
        <link rel="stylesheet" href="../plugins/jquery-datatables-editable/dataTables.bootstrap4.min.css" />

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
                <div class="col-12">
                    <div class="card-box">

                        <div class="row">
                            <div class="col-6">
                                <h4 class="m-t-0 header-title"><b>Hospedaje </b></h4>
                                <p class="text-muted m-b-30 font-14"></p>
                            </div>
                        </div><!-- end row -->
                
                        <div class="row">
                            <div class="col-12">
                                <div class="p-20">

                                    <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="Admi-personalGrabar.php">

                                        <input hidden="YES" name="accion" value="crear">

                                        <div class="form-group row">
                                        <label class="col-2 col-form-label">Persona</label>
                                        <div class="col-10">
                                        <select class="form-control" name="id_area">
                                            <option value="" selected>------------------------</option> 
                                            <?php while ($filaPersona=mysqli_fetch_array($resPersona)){
                                                $xid_per = $filaPersona["id_per"];
                                                $xape_per = $filaPersona["ape_per"];
                                                $xnom_per = $filaPersona["nom_per"];
                                                
                                                echo "<option value='$xid_per'>$xape_per $xnom_per</option>";
                                            } ?>
                                        </select>
                                        </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-2 col-form-label">Area</label>
                                        <div class="col-10">
                                            <?php while ($filaPersona=mysqli_fetch_array($resPersona)){
                                                $xnom_area = $filaPersona["nom_area"];

                                                echo "<input type='text'  name='nom_hostal' id='nom_hostal' class='form-control' disabled='' value='$xnom_area'>";
                                            } ?>
                                        </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-2 col-form-label">Horas</label>
                                        <div class="col-10">
                                            <select name="tipo_hostal" id="tipo_hostal" class="form-control">
                                                <option value="">-----------</option>
                                                <option value="Simple">Simple</option>
                                                <option value="Doble">Doble</option>
                                                <option value="Triple">Triple</option>
                                            </select>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                        <label class="col-2 col-form-label">Viaticos</label>
                                        <div class="col-10">
                                            <input type="text"  name="lugar_hostal" id="lugar_hostal" class="form-control" placeholder="Lugar de hospedaje">
                                        </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-2 col-form-label">Pago</label>
                                        <div class="col-10">
                                            <input type="number"  name="prec_hostal" id="prec_hostal" class="form-control" placeholder="">
                                        </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-2 col-form-label">Pago Variado</label>
                                        <div class="col-10">
                                            <input type="number"  name="prec_hostal" id="prec_hostal" class="form-control" placeholder="">
                                        </div>
                                        </div>
                                        
                                        <div class="form-group row text-center m-t-10">
                                        <div class="col-md-4 offset-md-4">
                                            <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Agregar</button>
                                        </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div><!-- end row -->

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
            <!-- end row -->
            
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

        <!-- Examples -->
        <script src="../plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../plugins/tiny-editable/mindmup-editabletable.js"></script>
        <script src="../plugins/tiny-editable/numeric-input-example.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script src="assets/pages/jquery.datatables.editable.init.js"></script>

    </body>
</html>
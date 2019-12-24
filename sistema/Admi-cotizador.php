<!DOCTYPE html>
<html>
    <?php session_start();
        if (!isset($_SESSION["nom_per"] ) ){
            header("Location:index.php");
        }         
        
        require_once("funciones.php");
        $xc = conectar();

        $sql = "SELECT * FROM hostal";
        $res = mysqli_query($xc,$sql);

        $sqlTransporte = "SELECT * FROM transporte";
        $resTransporte = mysqli_query($xc,$sqlTransporte);

        $sqlComidas = "SELECT * FROM comidas";
        $resComidas = mysqli_query($xc,$sqlComidas);

        $sqlServicioPlus = "SELECT * FROM servicioplus";
        $resServicioPlus = mysqli_query($xc,$sqlServicioPlus);


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
                        <h4 class="page-title float-left">Administrador</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Administración</a></li>
                            <li class="breadcrumb-item active">Cotizador</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row"> <!-- Tabla Hospedaje -->
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="m-t-0 header-title"><b>Hospedaje</b></h4>
                                <p class="text-muted m-b-30 font-14"></p>
                            </div>

                            <div class="col-sm-6">
                                <div class="m-b-30">
                                    <button onclick="window.location.href='Admi-cotizadorAdd.php?tipo=hospedaje'" class="btn btn-success waves-effect waves-light">Añadir <i class="mdi mdi-plus-circle-outline"></i></button>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped add-edit-table" id="datatable-editable">
                            
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Clase</th>
                                    <th>Tipo</th>
                                    <th>Lugar</th>
                                    <th>Tarifa Interna</th>
                                    <th>Tarifa Externa</th>
                                    <th>Acciones</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?PHP while($fila=mysqli_fetch_array($res)){
                                        $xid_hostal = $fila["id_hostal"];
                                        $xnom_hostal = $fila["nom_hostal"];
                                        $xclase_hostal = $fila["clase_hostal"];
                                        $xtipo_hostal = $fila["tipo_hostal"];
                                        $xlugar_hostal = $fila["lugar_hostal"];
                                        $xprec_hostal = $fila["prec_hostal"];
                                        $xprec_var_hostal = $fila["prec_var_hostal"];

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xnom_hostal </td>
                                                    <td>$xclase_hostal</td>
                                                    <td>$xtipo_hostal</td>
                                                    <td>$xlugar_hostal</td>
                                                    <td>$xprec_hostal</td>
                                                    <td>$xprec_var_hostal</td>
                                                    <td class='actions'>
                                                        <a href='Admi-cotizadorEdit.php?id=$xid_hostal&tipo=hospedaje' class='on-default' data-toggle='tooltip' data-placement='top' data-original-title='Editar'><i class='fa fa-pencil'></i></a>
                                                        <a href='Admi-cotizadorGrabar.php?id=$xid_hostal&tipo=hostal&accion=eliminar' class='on-default remove-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Eliminar'><i class='fa fa-trash-o'></i></a>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            ";}?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end: page -->
            </div> 
            <!-- end row -->

            <div class="row"> <!-- Tabla Transporte -->
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="m-t-0 header-title"><b>Transporte</b></h4>
                                <p class="text-muted m-b-30 font-14"></p>
                            </div>

                            <div class="col-sm-6">
                                <div class="m-b-30">
                                    <button onclick="window.location.href='Admi-cotizadorAdd.php?tipo=transporte'" class="btn btn-success waves-effect waves-light">Añadir <i class="mdi mdi-plus-circle-outline"></i></button>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped add-edit-table" id="datatable-editable">
                            
                            <thead>
                                <tr>
                                    <th>Empresa</th>    
                                    <th>Transporte</th>
                                    <th>Salida</th>
                                    <th>Lugar</th>
                                    <th>Tarifa Interna</th>
                                    <th>Tarifa Externa</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?PHP while($fila=mysqli_fetch_array($resTransporte)){
                                        $xid_transporte = $fila["id_transporte"];
                                        $xnom_transporte = $fila["nom_transporte"];
                                        $xtipo_transporte = $fila["tipo_transporte"];
                                        $xsalida_transporte = $fila["salida_transporte"];
                                        $xdes_transporte = $fila["des_transporte"];
                                        $xprec_transporte = $fila["prec_transporte"];
                                        $xprec_var_transporte = $fila["prec_var_transporte"];

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xnom_transporte</td>    
                                                    <td>$xtipo_transporte </td>
                                                    <td>$xsalida_transporte</td>
                                                    <td>$xdes_transporte</td>
                                                    <td>$xprec_transporte</td>
                                                    <td>$xprec_var_transporte</td>
                                                    <td class='actions'>
                                                        <a href='Admi-cotizadorEdit.php?id=$xid_transporte&tipo=transporte' class='on-default edit-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit'><i class='fa fa-pencil'></i></a>
                                                        <a href='Admi-cotizadorGrabar.php?id=$xid_transporte&tipo=transporte&accion=eliminar' class='on-default remove-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete'><i class='fa fa-trash-o'></i></a>
                                                    </td>
                                                </tr>
                                            ";}?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- end: page -->
            </div> 
            <!-- end row -->

            <div class="row"> <!-- Tabla Comidas -->
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="m-t-0 header-title"><b>Comidas</b></h4>
                                <p class="text-muted m-b-30 font-14"></p>
                            </div>

                            <div class="col-sm-6">
                                <div class="m-b-30">
                                    <button onclick="window.location.href='Admi-cotizadorAdd.php?tipo=comidas'" class="btn btn-success waves-effect waves-light">Añadir <i class="mdi mdi-plus-circle-outline"></i></button>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped add-edit-table" id="datatable-editable">
                            
                            <thead>
                                <tr>
                                    <th>Comida</th>    
                                    <th>Carta</th>
                                    <th>Tarifa Interna</th>
                                    <th>Tarifa Externa</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?PHP while($fila=mysqli_fetch_array($resComidas)){
                                        $xid_comidas = $fila["id_comidas"];
                                        $xtipo_comidas = $fila["tipo_comidas"];
                                        $xcarta_comidas = $fila["carta_comidas"];
                                        $xprecio_comidas = $fila["precio_comidas"];
                                        $xprecio_variado_comidas = $fila["precio_variado_comidas"];

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xtipo_comidas</td>    
                                                    <td>$xcarta_comidas</td>
                                                    <td>$xprecio_comidas</td>
                                                    <td>$xprecio_variado_comidas</td>
                                                    <td class='actions'>
                                                        <a href='Admi-cotizadorEdit.php?id=$xid_comidas&tipo=comidas' class='on-default edit-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit'><i class='fa fa-pencil'></i></a>
                                                        <a href='Admi-cotizadorGrabar.php?id=$xid_comidas&tipo=comidas&accion=eliminar' class='on-default remove-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete'><i class='fa fa-trash-o'></i></a>
                                                    </td>
                                                </tr>
                                            ";}?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- end: page -->
            </div> 
            <!-- end row -->

            <div class="row"> <!-- Tabla Servicio Adicional -->
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="m-t-0 header-title"><b>Servicio Adicional</b></h4>
                                <p class="text-muted m-b-30 font-14"></p>
                            </div>

                            <div class="col-sm-6">
                                <div class="m-b-30">
                                    <button onclick="window.location.href='Admi-cotizadorAdd.php?tipo=servicio'" type="submit" class="btn btn-success waves-effect waves-light">Añadir <i class="mdi mdi-plus-circle-outline"></i></button>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped add-edit-table" id="datatable-editable">
                            
                            <thead>
                                <tr>
                                    <th>Servicio</th>    
                                    <th>Categoria</th>
                                    <th>Tarifa Interna</th>
                                    <th>Tarifa Externa</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?PHP while($fila=mysqli_fetch_array($resServicioPlus)){
                                        $xid_serv_plus = $fila["id_serv_plus"];
                                        $xnom_serv_plus = $fila["nom_serv_plus"];
                                        $xtipo_serv_plus = $fila["tipo_serv_plus"];
                                        $xprecio_serv_plus = $fila["prec_serv_plus"];
                                        $xprecio_var_serv_plus = $fila["prec_var_serv_plus"];

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xnom_serv_plus</td>    
                                                    <td>$xtipo_serv_plus</td>
                                                    <td>$xprecio_serv_plus</td>
                                                    <td>$xprecio_var_serv_plus</td>
                                                    <td class='actions'>
                                                        <a href='Admi-cotizadorEdit.php?id=$xid_serv_plus&tipo=servicio' class='on-default edit-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit'><i class='fa fa-pencil'></i></a>
                                                        <a href='Admi-cotizadorGrabar.php?id=$xid_serv_plus&tipo=servicio&accion=eliminar' class='on-default remove-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete'><i class='fa fa-trash-o'></i></a>
                                                    </td>
                                                </tr>
                                            ";}?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- end: page -->
            </div> 
            <!-- end row -->

        </div> <!-- container -->
    </div> <!-- content -->

    <footer class="footer text-right">2019 © INSIZIO</footer>
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

        <script>
            $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        </script>

    </body>
</html>
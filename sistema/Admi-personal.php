<!DOCTYPE html>
<html>
<?php session_start();
    if (!isset($_SESSION["nom_per"] ) ){
        header("Location:login.php");
    }         
    
    require_once("funciones.php");
    $xc = conectar();
    $sql = "SELECT p.nom_per,p.ape_per, j.hor_tra_jor, a.nom_area, j.viat_jor,j.sueldo_jor 
        FROM jornal j
        INNER JOIN persona p ON j.id_per = p.id_per 
        INNER JOIN area a ON j.id_area = a.id_area";
        
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
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                <div class="col-sm-12">
                    <div class="card-box">
                        <!--
                        <button onclick="window.location.href='Admi-personal-añadir.php'" type="button" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right">Agregar Personal</button>
                        -->
                        <h4 class="m-t-0 header-title"><b>Personal</b></h4>
                        <p class="text-muted font-14">
                            Personal de la empresa
                        </p>
                        <div class="form-group row">
                            <label class="col-2 col-form-label">Buscar</label>
                            <div class="col-10">
                                <div class="input-group">
                                    <input type="date" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn waves-effect waves-light btn-primary" type="button"> Buscar</button>
                                    </span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="m-b-30">
                                    <button id="addToTable" class="btn btn-success waves-effect waves-light">Añadir <i class="mdi mdi-plus-circle-outline"></i></button>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped add-edit-table" id="datatable-editable">
                            
                            <thead>
                                <tr>
                                    <th>Persona</th>
                                    <th>Area</th>
                                    <th>Horas</th>
                                    <th>Viaticos</th>
                                    <th>Pago</th>
                                    <th>Pago Variado</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?PHP while($fila=mysqli_fetch_array($res)){
                                        $xnom_per = $fila["nom_per"];
                                        $xape_per = $fila["ape_per"];
                                        $xhor_tra_jor = $fila["hor_tra_jor"];
                                        $xnom_area = $fila["nom_area"];
                                        $xviat_jor = $fila["viat_jor"];
                                        $xsueldo_jor = $fila["sueldo_jor"];

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xnom_per $xape_per</td>
                                                    <td>$xnom_area</td>
                                                    <td>$xhor_tra_jor</td>
                                                    <td>$xviat_jor</td>
                                                    <td>$xsueldo_jor</td>
                                                    <td>1000.00</td>
                                                    <td class='actions'>
                                                        <a href='#' class='on-default edit-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit'><i class='fa fa-pencil'></i></a>
                                                        <a href='#' class='on-default remove-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete'><i class='fa fa-trash-o'></i></a>
                                                        <a href='#' class='hidden on-editing save-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Save'><i class='fa fa-save'></i></a>
                                                        <a href='#' class='hidden on-editing cancel-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Cancel'><i class='fa fa-times'></i></a>
                                                    </td>
                                                </tr>
                                            ";
                                    }
                                ?>


                                <tr class="gradeX">
                                    <td>Persona 1</td>
                                    <td>Operaciones</td>
                                    <td>50</td>
                                    <td>50.00</td>
                                    <td>900.00</td>
                                    <td>950.00</td>
                                    <td class="actions">
                                        <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                        <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr class="gradeU">
                                    <td>Persona 2</td>
                                    <td>Comercial</td>
                                    <td>200</td>
                                    <td>70.00</td>
                                    <td>1000.00</td>
                                    <td>1070.00</td>
                                    <td class="actions">
                                        <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                        <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end: page -->
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
<!-- end Modal -->

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
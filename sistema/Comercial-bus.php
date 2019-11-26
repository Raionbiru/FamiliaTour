<?php require_once("Comercial-header.php");?>
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
                        <h4 class="page-title float-left">Buses</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Comercial</a></li>
                            <li class="breadcrumb-item active">Buses</li>
                        </ol>

                        <div class="clearfix"></div>
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
                                    <th>Conductor</th>
                                    <th>Placa</th>
                                    <th>Modelo</th>
                                    <th>Capacidad</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?PHP /* while($fila=mysqli_fetch_array($res)){
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
                                    }*/
                                ?>
                                <tr class='gradeX'>
                                    <td>Nombre Apellido</td>
                                    <td>XQ2 - 154</td>
                                    <td>Hyunda</td>
                                    <td>45</td>                                    
                                    <td>Operativo</td>
                                    <td class='actions'>
                                        <a href='#' class='on-default edit-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit'><i class='fa fa-pencil'></i></a>
                                        <a href='#' class='on-default remove-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete'><i class='fa fa-trash-o'></i></a>
                                        <a href='#' class='hidden on-editing save-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Save'><i class='fa fa-save'></i></a>
                                        <a href='#' class='hidden on-editing cancel-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Cancel'><i class='fa fa-times'></i></a>
                                    </td>
                                </tr>
                                <tr class='gradeX'>
                                    <td>Nombre Apellido</td>
                                    <td>YZ2 - 456</td>
                                    <td>Ford</td>
                                    <td>65</td>                                    
                                    <td>Mantenimiento</td>
                                    <td class='actions'>
                                        <a href='#' class='on-default edit-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit'><i class='fa fa-pencil'></i></a>
                                        <a href='#' class='on-default remove-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete'><i class='fa fa-trash-o'></i></a>
                                        <a href='#' class='hidden on-editing save-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Save'><i class='fa fa-save'></i></a>
                                        <a href='#' class='hidden on-editing cancel-row' data-toggle='tooltip' data-placement='top' title='' data-original-title='Cancel'><i class='fa fa-times'></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end: page -->
            </div> 
            <!-- end row -->




        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        2019 © INSIZIO
    </footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<?php require_once("Comercial-footer.php");?>
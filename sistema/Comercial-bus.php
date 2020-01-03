<?php require_once("Comercial-header.php");

    require_once("funciones.php");
    $xc = conectar();

    $sqlBus = "SELECT * FROM bus";
    $resBus = mysqli_query($xc,$sqlBus);

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
                                    <button onclick="window.location.href='Comercial-busAdd.php'" class="btn btn-success waves-effect waves-light">Añadir <i class="mdi mdi-plus-circle-outline"></i></button>
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

                                <?PHP while($filaBus=mysqli_fetch_array($resBus)){
                                        $xid_bus    =  $filaBus["id_bus"];
                                        $xcond_bus  =  $filaBus["cond_bus"];
                                        $xplaca_bus =  $filaBus["placa_bus"];
                                        $xmod_bus   =  $filaBus["mod_bus"];
                                        $xcap_bus   =  $filaBus["cap_bus"];
                                        $xest_bus   =  $filaBus["est_bus"];

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xcond_bus</td>
                                                    <td>$xplaca_bus</td>
                                                    <td>$xmod_bus</td>
                                                    <td>$xcap_bus</td>
                                                    <td>$xest_bus</td>
                                                    <td>";
                                                if ($xest_bus == "Mantenimiento"){
                                                    echo"<span class='label label-table label-warning'>Mantenimiento</span>";
                                                }
                                                elseif($xest_bus == "Operativo"){
                                                    echo"<span class='label label-table label-success'>Operativo</span>";
                                                }
                                            echo "</td>
                                                    <td class='actions'>
                                                        <a href='Comercial-busEdit.php?id=$xid_bus' class='on-default edit-row' data-toggle='tooltip' data-placement='top' data-original-title='Editar'><i class='fa fa-pencil'></i></a>
                                                        <a href='Comercial-busGrabar.php?id=$xid_bus&accion=eliminar' class='on-default remove-row' data-toggle='tooltip' data-placement='top' data-original-title='Eliminar'><i class='fa fa-trash-o'></i></a>
                                                    </td>
                                                </tr>
                                            ";
                                    }
                                ?>
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
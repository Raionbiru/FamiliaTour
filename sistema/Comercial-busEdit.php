<?php require_once("Comercial-header.php");

    require_once("funciones.php");
    $xid = leerParam("id","");
    $xtipo = leerParam("tipo","");

    $xc = conectar();

    $sqlBus = "SELECT * FROM bus WHERE id_bus = '$xid'";
    $resBus = mysqli_query($xc,$sqlBus);
    $filaBus=mysqli_fetch_array($resBus);

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

            <div class='row'>
                <div class='col-12'>
                    <div class='card-box'>

                        <div class='row'>
                            <div class='col-6'>
                                <h4 class='m-t-0 header-title'><b>Editar Bus</b></h4>
                                <p class='text-muted m-b-30 font-14'></p>
                            </div>
                        </div><!-- end row -->
                
                        <div class='row'>
                            <div class='col-12'>
                                <div class='p-20'>
                                    <form class='form-horizontal' role='form' method='POST' action='Comercial-busGrabar.php'>
                                        <input hidden='YES' name='id' value="<?PHP echo $xid;?>">
                                        <input hidden='YES' name='accion' value='editar'>

                                        <div class='row'>
                                            <div class='col-6'>

                                                <div class='form-group row'>
                                                <label class='col-2 col-form-label'>Conductor</label>
                                                    <div class='col-10'>
                                                        <input type='text' class='form-control' placeholder='Precio de Servicio' id='cond_bus' name='cond_bus' value="<?PHP echo $filaBus['cond_bus']; ?>">
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                <label class='col-2 col-form-label'>Modelo</label>
                                                    <div class='col-10'>
                                                        <input type='text' class='form-control' placeholder='Precio de Servicio' id='mod_bus' name='mod_bus' value="<?PHP echo $filaBus['mod_bus']; ?>">
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                <label class='col-2 col-form-label'>Capacidad</label>
                                                    <div class='col-10'>
                                                        <input type='text' class='form-control' placeholder='Precio de Servicio' id='cap_bus' name='cap_bus' value="<?PHP echo $filaBus['cap_bus']; ?>">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class='col-6'>
                                                
                                                <div class='form-group row'>
                                                <label class='col-2 col-form-label'>Placa</label>
                                                    <div class='col-10'>
                                                        <input type='text' class='form-control' placeholder='Precio de Servicio' id='placa_bus' name='placa_bus' value="<?PHP echo $filaBus['placa_bus']; ?>">
                                                    </div>
                                                </div>


                                                <div class='form-group row'>
                                                <label class='col-2 col-form-label'>Estado</label>
                                                    <div class='col-10'>
                                                        <select name='est_bus' id='est_bus' class='form-control'>
                                                            <?PHP
                                                            if($filaBus['est_bus'] == "Mantenimiento"){
                                                                echo "<option value='Mantenimiento'>Mantenimiento</option>
                                                                <option value='Operativo'>Operativo</option>";
                                                            }else{
                                                                echo "<option value='Operativo'>Operativo</option>
                                                                <option value='Mantenimiento'>Mantenimiento</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- end row -->
                                        
                                        <div class='form-group row text-center m-t-10'>
                                            <div class='col-md-4 offset-md-4'>
                                                <button class='btn btn-md btn-block btn-primary waves-effect waves-light' type='submit'>Modificar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end row -->

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div><!-- end row -->


        </div> <!-- container -->
    </div> <!-- content -->

    <footer class="footer text-right">2019 © INSIZIO</footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<?php require_once("Comercial-footer.php");?>
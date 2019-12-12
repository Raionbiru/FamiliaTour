<?php require_once("Comercial-header.php");

    require_once("funciones.php");
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
                                <h4 class='m-t-0 header-title'><b>Agregar Bus</b></h4>
                                <p class='text-muted m-b-30 font-14'></p>
                            </div>
                        </div><!-- end row -->
                
                        <div class='row'>
                            <div class='col-12'>
                                <div class='p-20'>
                                    <form enctype='multipart/form-data' class='form-horizontal' method='POST' action='Comercial-busGrabar.php'>

                                        <input hidden='YES' name='accion' value='crear'>

                                        <div class='form-group row'>
                                            <label class='col-2 col-form-label'>Nombre de Conductor</label>
                                            <div class='col-10'>
                                                <input type='text'  name='cond_bus' id='cond_bus' class='form-control' placeholder='Nombre completo' maxlength="50">
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <label class='col-2 col-form-label'>Placa del Bus</label>
                                            <div class='col-10'>
                                                <input type='text'  name='placa_bus' id='placa_bus' class='form-control' placeholder='Placa' maxlength="10">
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <label class='col-2 col-form-label'>Modelo del Bus</label>
                                            <div class='col-10'>
                                                <input type='text'  name='mod_bus' id='mod_bus' class='form-control' placeholder='Opcional' maxlength="30">
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <label class='col-2 col-form-label'>Capacidad de Bus</label>
                                            <div class='col-10'>
                                                <input type='number'  name='cap_bus' id='cap_bus' class='form-control' maxlength='3' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' placeholder=''>
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <label class='col-2 col-form-label'>Estado del Bus</label>
                                            <div class='col-10'>
                                                <select name='est_bus' id='est_bus' class='form-control'>
                                                    <option value='Operativo'>Operativo</option>
                                                    <option value='Mantenimiento'>Mantenimiento</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class='form-group row text-center m-t-10'>
                                            <div class='col-md-4 offset-md-4'>
                                                <button class='btn btn-md btn-block btn-primary waves-effect waves-light' type='submit'>Agregar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div><!-- end row -->


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
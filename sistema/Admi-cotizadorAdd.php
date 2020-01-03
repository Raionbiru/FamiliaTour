<?php session_start();
        if (!isset($_SESSION["nom_per"] ) ){
            header("Location:index.php");
        }
        
        require_once("funciones.php");
        $xid = leerParam("id","");
        $xtipo = leerParam("tipo","");

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
                        <h4 class="page-title float-left">Cotizador</h4>

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

            <?PHP 
                if ($xtipo =="hospedaje"){
                    echo"
                    <div class='row'>
                        <div class='col-12'>
                            <div class='card-box'>

                                <div class='row'>
                                    <div class='col-6'>
                                        <h4 class='m-t-0 header-title'><b>Hospedaje </b></h4>
                                        <p class='text-muted m-b-30 font-14'></p>
                                    </div>
                                </div><!-- end row -->
                        
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='p-20'>
                                            <form enctype='multipart/form-data' class='form-horizontal' method='POST' action='Admi-cotizadorGrabar.php'>

                                                <input hidden='YES' name='accion' value='crear'>
                                                <input hidden='YES' name='tipo' value='hostal'>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Hospedaje</label>
                                                    <div class='col-10'>
                                                        <input type='text' name='nom_hostal' id='nom_hostal' class='form-control' placeholder='Nombre de hospedaje'>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Clase de hospedaje</label>
                                                    <div class='col-10'>
                                                        <select name='tipo_hostal' id='tipo_hostal' class='form-control'>
                                                            <option value=''>-----------</option>
                                                            <option value='Economico'>Economico</option>
                                                            <option value='Intermedio'>Intermedio</option>
                                                            <option value='Superior'>Superior</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Tipo</label>
                                                    <div class='col-10'>
                                                        <select name='clase_hostal' id='clase_hostal' class='form-control'>
                                                            <option value=''>-----------</option>
                                                            <option value='Simple'>Simple</option>
                                                            <option value='Doble'>Doble</option>
                                                            <option value='Triple'>Triple</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Lugar</label>
                                                    <div class='col-10'>
                                                        <select name='lugar_hostal' id='lugar_hostal' class='form-control'>
                                                            <option value=''>-----------</option>
                                                            <option value='Amazonas'>Amazonas</option>
                                                            <option value='Áncash'>Áncash</option>
                                                            <option value='Apurímac'>Apurímac</option>
                                                            <option value='Arequipa'>Arequipa</option>
                                                            <option value='Ayacucho'>Ayacucho</option>
                                                            <option value='Cajamarca'>Cajamarca</option>
                                                            <option value='Cuzco'>Cuzco</option>
                                                            <option value='Huancavelica'>Huancavelica</option>
                                                            <option value='Huánuco'>Huánuco</option>
                                                            <option value='Ica'>Ica</option>
                                                            <option value='Junín'>Junín</option>
                                                            <option value='La Libertad'>La Libertad</option>
                                                            <option value='Lambayeque'>Lambayeque</option>
                                                            <option value='Lima'>Lima</option>
                                                            <option value='Loreto'>Loreto</option>
                                                            <option value='Madre de Dios'>Madre de Dios</option>
                                                            <option value='Moquegua'>Moquegua</option>
                                                            <option value='Pasco'>Pasco</option>
                                                            <option value='Piura'>Piura</option>
                                                            <option value='Puno'>Puno</option>
                                                            <option value='San Martín'>San Martín</option>
                                                            <option value='Tacna'>Tacna</option>
                                                            <option value='Tumbes'>Tumbes</option>
                                                            <option value='Ucayali'>Ucayali</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Tarifa Interna</label>
                                                    <div class='col-10'>
                                                        <input type='number'  name='prec_hostal' id='prec_hostal' class='form-control'  maxlength='4' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' />
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Tarifa Externa</label>
                                                    <div class='col-10'>
                                                        <input type='number'  name='prec_var_hostal' id='prec_var_hostal' class='form-control' maxlength='4' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
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
                                </div><!-- end row -->

                            </div> <!-- end card-box -->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->";
                }
            ?>

            <?PHP 
                if ($xtipo =="transporte"){

                    echo"
                    <div class='row'>
                        <div class='col-12'>
                            <div class='card-box'>

                                <div class='row'>
                                    <div class='col-6'>
                                        <h4 class='m-t-0 header-title'><b>Transporte</b></h4>
                                        <p class='text-muted m-b-30 font-14'></p>
                                    </div>
                                </div><!-- end row -->
                        
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='p-20'>
                                            <form enctype='multipart/form-data' class='form-horizontal' method='POST' action='Admi-cotizadorGrabar.php'>

                                                <input hidden='YES' name='accion' value='crear'>
                                                <input hidden='YES' name='tipo' value='transporte'>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Empresa</label>
                                                    <div class='col-10'>
                                                        <input type='text'  name='nom_transporte' id='nom_transporte' class='form-control' placeholder='Empresa de transporte'>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Tipo de transporte</label>
                                                    <div class='col-10'>
                                                        <select name='tipo_transporte' id='tipo_transporte' class='form-control'>
                                                            <option value=''>-----------</option>
                                                            <option value='Aereo'>Aereo</option>
                                                            <option value='Terrestre'>Terrestre</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Salida</label>
                                                    <div class='col-10'>
                                                        <select name='salida_transporte' id='salida_transporte' class='form-control'>
                                                            <option value=''>-----------</option>
                                                            <option value='Niniguno'>Niniguno</option>
                                                            <option value='Publico'>Público</option>
                                                            <option value='Privado'>Privado</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Destino</label>
                                                    <div class='col-10'>
                                                        <input type='text'  name='des_transporte' id='des_transporte' class='form-control' placeholder='Destino'>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Tarifa Interna</label>
                                                    <div class='col-10'>
                                                        <input type='number'  name='prec_transporte' id='prec_transporte' class='form-control' maxlength='4' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Tarifa Externa</label>
                                                    <div class='col-10'>
                                                        <input type='number'  name='prec_var_transporte' id='prec_var_transporte' class='form-control' maxlength='4' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
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

                            </div> <!-- end card-box -->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->";
                }
            ?>

            <?PHP 
                if ($xtipo =="comidas"){

                    echo"
                    <div class='row'>
                        <div class='col-12'>
                            <div class='card-box'>

                                <div class='row'>
                                    <div class='col-6'>
                                        <h4 class='m-t-0 header-title'><b>Comidas</b></h4>
                                        <p class='text-muted m-b-30 font-14'></p>
                                    </div>
                                </div><!-- end row -->
                        
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='p-20'>
                                            <form enctype='multipart/form-data' class='form-horizontal' method='POST' action='Admi-cotizadorGrabar.php'>

                                                <input hidden='YES' name='accion' value='crear'>
                                                <input hidden='YES' name='tipo' value='comidas'>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Nombre de Comida</label>
                                                    <div class='col-10'>
                                                        <input type='text'  name='carta_comidas' id='carta_comidas' class='form-control' placeholder='Comida'>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Categoria</label>
                                                    <div class='col-10'>
                                                        <select name='tipo_comidas' id='tipo_comidas' class='form-control'>
                                                            <option value=''>-----------</option>
                                                            <option value='Desayuno'>Desayuno</option>
                                                            <option value='Almuerzo'>Almuerzo</option>
                                                            <option value='Cena'>Cena</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Tarifa Interna</label>
                                                    <div class='col-10'>
                                                        <input type='number'  name='precio_comidas' id='precio_comidas' class='form-control' maxlength='3' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Tarifa Externa</label>
                                                    <div class='col-10'>
                                                        <input type='number'  name='precio_variado_comidas' id='precio_variado_comidas' class='form-control' maxlength='4' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
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

                            </div> <!-- end card-box -->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->";
                }
            ?>

            <?PHP 
                if ($xtipo =="servicio"){

                    echo"
                    <div class='row'>
                        <div class='col-12'>
                            <div class='card-box'>

                                <div class='row'>
                                    <div class='col-6'>
                                        <h4 class='m-t-0 header-title'><b>Servicio Adicional</b></h4>
                                        <p class='text-muted m-b-30 font-14'></p>
                                    </div>
                                </div><!-- end row -->
                        
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='p-20'>
                                            <form enctype='multipart/form-data' class='form-horizontal' method='POST' action='Admi-cotizadorGrabar.php'>

                                                <input hidden='YES' name='accion' value='crear'>
                                                <input hidden='YES' name='tipo' value='servicio'>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Nombre de Servicio</label>
                                                    <div class='col-10'>
                                                        <input type='text'  name='nom_serv_plus' id='nom_serv_plus' class='form-control' placeholder='Servicio'>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Categoria</label>
                                                    <div class='col-10'>
                                                        <select name='tipo_serv_plus' id='tipo_serv_plus' class='form-control'>
                                                            <option value=''>-----------</option>
                                                            <option value='Basico'>Basico</option>
                                                            <option value='Superior'>Superior</option>
                                                            <option value='Avanzado'>Avanzado</option>
                                                            <option value='Profesional'>Profesional</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Tarifa Interna</label>
                                                    <div class='col-10'>
                                                        <input type='number'  name='prec_serv_plus' id='prec_serv_plus' class='form-control' maxlength='3' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                    <label class='col-2 col-form-label'>Tarifa Externa</label>
                                                    <div class='col-10'>
                                                        <input type='number'  name='prec_var_serv_plus' id='prec_var_serv_plus' class='form-control' maxlength='4' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
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
                    </div><!-- end row -->";
                }
            ?>


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
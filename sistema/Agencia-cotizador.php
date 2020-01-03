<?php require_once("funciones.php");
    $xc = conectar();

    //Transporte Consultas
    $sqlTransporte = "SELECT tipo_transporte, id_transporte FROM transporte";
    $resTransporte = mysqli_query($xc,$sqlTransporte);

    $sqlTransporteDes = "SELECT des_transporte, id_transporte FROM transporte";
    $resTransporteDes = mysqli_query($xc,$sqlTransporteDes);
    
    //Hostal Consultas
    $sqlHospedaje = "SELECT lugar_hostal,id_hostal FROM hostal";
    $resHospedaje = mysqli_query($xc,$sqlHospedaje);

    //Tours Consultas
    $sqlTour = "SELECT nom_tour,id_tour FROM tour";
    $resTour = mysqli_query($xc,$sqlTour);

    //... Consultas

    //Servicios Adicionales Consultas
    $sqlServicioPlus = "SELECT nom_serv_plus, id_serv_plus FROM servicioplus";
    $resServicioPlus = mysqli_query($xc,$sqlServicioPlus);

    //Comidas Consultas

    desconectar($xc);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Familia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/ico.png">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <?PHP 
            require_once("Agencia-header.php");
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
                        <h4 class="page-title float-left">Cotizador</h4>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                                <li class="breadcrumb-item"><a href="#">Agencia</a></li>
                                <li class="breadcrumb-item active">Cotizador</li>
                            </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
                <!-- end row -->


                <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <!--<h4 class="header-title m-t-0 m-b-30">Cotizador de servicios</h4>-->

                        <ul class="nav nav-pills navtab-bg nav-justified">
                            <li class="nav-item">
                                <a href="#Transporte" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                <i class="mdi mdi-seat-recline-extra"></i> <span>Transporte</span> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Hospedaje" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-hotel"></i> <span>Hospedaje</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Tours" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="fa fa-bus"></i> <span>Tours</span>
                                </a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a href="#Alimentacion" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-food"></i> <span>Alimentacion</span>
                                </a>
                            </li>
                            -->
                            <li class="nav-item">
                                <a href="#ServicioAdicional" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-library-plus"></i> <span>Servicios Adicionales</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Comidas" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-food-fork-drink"></i> <span>Comidas</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            
                            <!-- ===== TAB TRANSPORTE =====-->
                            <div class="tab-pane fade show active" id="Transporte">
                                <form name="transporte" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Tipo de viaje</label>
                                            <select name="tipo_transporte" id="tipo_transporte" class="form-control">
                                                <option value="Aereo">Aereo</option>
                                                <option value="Terreste">Terreste</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Tipo de salida</label>
                                            <select name="salida_transporte" id="salida_transporte" class="form-control" disabled="">
                                                <option value="">----------</option>
                                                <option value="Publico">Publico</option>
                                                <option value="Privado">Privado</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                        
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Salida Aerea</label>
                                                <select name="salida_aerea" id="salida_aerea" class="form-control">
                                                    <option value="">----------</option>
                                                    <option value="Arequipa">Arequipa</option>
                                                    <option value="Lima">Lima</option>
                                                </select>
                                            </div>
                                            </div>
                                            

                                            <div class="col-md-6">
                                            <div class="form-group"><!--
                                                <label>Llegada</label>
                                                <select name="" id="" class="form-control" disabled="">
                                                    <option value="">----------</option>
                                                    <option value="">Publico</option>
                                                    <option value="">Privado</option>
                                                </select>-->
                                            </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                        <label>Empresa</label>
                                            <select name="nom_transporte" id="nom_transporte" class="form-control" disabled="">
                                                <!--<option value="">MY TOURS PERU</option>
                                                <option value="">BUS CONCETTUR</option>
                                                <option value="">TRANSPORTES MOQUEGUA</option>-->
                                                <option value="">----------</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label>Destino</label>
                                            <select name="des_transporte" id="des_transporte" class="form-control">
                                                <?PHP while($fila=mysqli_fetch_array($resTransporteDes)){
                                                        $xdes_transporte = $fila["des_transporte"];
                                                        $xid_transporte = $fila["id_transporte"];
                                                        echo "<option value='$xid_transporte'> $xdes_transporte </option>";
                                                    };
                                                ?>
                                            </select>
                                        </div>

                                        <div class="row">
                                        
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cantidad</label>
                                                <input class="form-control" type="number" name="cantidadTransporte" id="cantidadTransporte" value="0" onchange="cal()" onkeyup="cal()">
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                            <div class="form-group" id="transporteCosto" name="transporteCosto">
                                                <!--<label>Costo por unidad</label>
                                                <input class="form-control" type="text" name="prec_transporte" id="prec_transporte">-->
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Total costo</label>
                                                <input class="form-control" type="text" name="totalTransporte" id="totalTransporte" readonly="" value="0">
                                            </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                    <div class="hidden-print m-t-30 m-b-30">
                                        <div class="text-right">
                                            <a href="Comercial-reserva.php" class="btn btn-primary waves-effect waves-light"><i class="fa fa-shopping-cart m-r-5"></i> Transacción</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <!-- ===== TAB HOSPEDAJE ===== -->
                            <div class="tab-pane fade" id="Hospedaje">
                                <form name="hospedajeForm" method="POST" action="Comercial-reserva.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Número de Noches</label>
                                            <select  name="num3" onchange="cal()" onkeyup="cal()" class="form-control">
                                                <?php for ($x = 1; $x <= 31; $x++) {
                                                    echo "<option value='$x'>$x Noche</option>";
                                                    }?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label>Lugar</label>
                                            <select name="hotelesLugar" id="hotelesLugar" class="form-control">
                                                
                                                <?PHP while($fila=mysqli_fetch_array($resHospedaje)){
                                                        $xlugar_hostal = $fila["lugar_hostal"];
                                                        $xid_hostal = $fila["id_hostal"];
                                                    
                                                        echo "<option value='$xid_hostal'> $xlugar_hostal </option>";
                                                    };
                                                ?>

                                            </select>
                                        </div>

                                        <div class="form-group" id="hotelesNombre">
                                            <!--
                                            <label>Hotel</label>
                                                <select name="" id="" class="form-control">
                                                
                                                </select>-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Tipo</label>
                                        <select name="hotelesTipo" id="hotelesTipo" class="form-control">
                                                <option value="Economico">Economico</option>
                                                <option value="Intermedio">Intermedio</option>
                                                <option value="Superior">Superior</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Clase</label>
                                            <select name="hotelesClase" id="hotelesClase" class="form-control">
                                                <option value="Simple">Simple</option>
                                                <option value="Doble">Doble</option>
                                                <option value="Triple">Triple</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                        
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Personas</label>
                                            <input class="form-control" type="number" name="num2" id="persona_hostal" value="0" onchange="cal()" onkeyup="cal()">
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                        <div class="form-group" id="hotelesCosto" name="hotelesCosto">
                                            <!--<label>Costo por unidad</label>
                                            <input class="form-control" type="text">-->
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Total costo</label>
                                            <input class="form-control" type="" name="sum" id="sum" value="0" readonly="readonly">
                                        </div>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                                    <div class="hidden-print m-t-30 m-b-30">
                                        <div class="text-right">
                                            <!--<a href="Comercial-reserva.php" class="btn btn-primary waves-effect waves-light"><i class="fa fa-shopping-cart m-r-5"></i> Transacción</a>-->
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="fa fa-shopping-cart m-r-5"></i> Transacción</button> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <!-- ====  TAB TOURS ==== -->
                            <div class="tab-pane fade" id="Tours">
                                <form name="tourform">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Días de viaje</label>
                                            <select name="dias_tour" onchange="cal()" onkeyup="cal()" class="form-control">
                                                <?php for ($x = 1; $x <= 31; $x++) {
                                                    echo "<option value='$x'>$x Noche</option>";
                                                    }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Lugar</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Arequipa</option>    
                                                <option value="">Lima</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Tour 1</label>
                                            <select name="" id="tour1" class="form-control">
                                                <?PHP while($fila=mysqli_fetch_array($resTour)){
                                                        $xnom_tour = $fila[0];
                                                        $xid_tour = $fila[1];
                                                        echo "<option value='$xid_tour'> $xnom_tour </option>";
                                                    };
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Tour 2</label>
                                            <select name="" id="tour2" class="form-control">
                                                <option value=''> Ninguno </option>
                                                <?PHP if(mysqli_data_seek($resTour, 0)){
                                                    while($fila=mysqli_fetch_array($resTour)){
                                                        $xnom_tour = $fila["nom_tour"];
                                                        $xid_tour = $fila["id_tour"];
                                                        echo "<option value='$xid_tour'> $xnom_tour </option>";
                                                    };
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Tour 3</label>
                                            <select name="" id="tour3" class="form-control">
                                                <option value=''> Ninguno </option>
                                                <?PHP if(mysqli_data_seek($resTour, 0)){
                                                    while($fila=mysqli_fetch_array($resTour)){
                                                        $xnom_tour = $fila["nom_tour"];
                                                        $xid_tour = $fila["id_tour"];
                                                        echo "<option value='$xid_tour'> $xnom_tour </option>";
                                                    };
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="row">
                                        
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input class="form-control" type="number" name="cantidadTour" value="0" onchange="cal()" onkeyup="cal()">
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                        <div class="form-group" name="costoTourUnidad" id="costoTourUnidad">
                                            <label>Costo por unidad</label>
                                            <input class="form-control" type="text" value="0">
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Total costo</label>
                                            <input class="form-control" type="text" readonly="" value="">
                                        </div>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                                </form>
                            </div>
                            <!--Tab Alimentacion
                            <div class="tab-pane fade" id="Alimentacion">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Días de viaje</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">1 Día</option>
                                                <option value="">2 Día</option>
                                                <option value="">3 Día</option>
                                                <option value="">4 Día</option>
                                                <option value="">5 Día</option>
                                                <option value="">6 Día</option>
                                                <option value="">7 Día</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Comida</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Manzana</option>
                                                <option value="">Pera</option>
                                                <option value="">Mandarina</option>
                                                <option value="">Fresa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Costo por unidad</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Total costo</label>
                                                <input class="form-control" type="text" readonly="" value="">
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            -->

                            <!-- ====  TAB Servicio Adiconal ==== -->
                            <div class="tab-pane fade" id="ServicioAdicional"> <!--Tab Servicio Adicional-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Servicio</label>
                                            <select name="" id="" class="form-control">
                                                <?PHP while($fila=mysqli_fetch_array($resServicioPlus)){
                                                        $xnom_serv_plus = $fila[0];
                                                        $xid_serv_plus = $fila[1];
                                                        echo "<option value='$xid_serv_plus'> $xnom_serv_plus </option>";
                                                    };
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Costo por unidad</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Total costo</label>
                                                <input class="form-control" type="text" readonly="" value="">
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- ====  TAB Comidas ==== -->
                            <div class="tab-pane fade" id="Comidas"> <!--Tab Comidas-->
                                <form name="comidasForm" action="" >
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Tipo de comida</label>
                                        <select name="tipo_comidas" id="tipo_comidas" class="form-control">
                                            <option value="Desayuno">Desayuno</option>
                                            <option value="Almuerzo">Almuerzo</option>
                                            <option value="Cena">Cena</option>
                                        </select>
                                        </div>

                                        <div class="form-group">
                                        <label>Días de viaje</label>
                                        <select name="diasComidas" id="diasComidas" onchange="cal()" onkeyup="cal()" class="form-control">
                                            <?php for ($x = 1; $x <= 31; $x++) {
                                                echo "<option value='$x'>$x Día</option>";
                                            }?>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Platos</label>
                                        <select id='carta_comidas' name='carta_comidas' id='carta_comidas' class='form-control'>
                                        </select>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">    
                                            <div class="form-group">
                                            <label>Cantidad</label>
                                            <input class="form-control" type="number" name="cantidadComidas" id="cantidadComidas" value="0" onchange="cal()" onkeyup="cal()">
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                            <div class="form-group" id="precioComidas" name="precioComidas">
                                            </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                            <div class="form-group">
                                            <label>Total costo</label>
                                            <input class="form-control" type="text" readonly="" value="" id="total_comidas" name="total_comidas">
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

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

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Sparkline charts -->
        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/pages/jquery.profile.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
    var prueba = $("#tipo_transporte").val();
    $(document).ready(function(){
        recargarLista();
        recargarTransporteDestino();
        recargarTransporte();
        recargarComidas();
        recargarComidasPrecio();

        //Hoteles - Cotizador
        $('#hotelesLugar').change(function(){
            recargarLista();
        });

        $('#hotelesClase').change(function(){
            recargarLista();
        });

        $('#hotelesTipo').change(function(){
            recargarLista();
        });

        //Transporte - Cotizador        
        $('#tipo_transporte').change(function(){
            if($('#tipo_transporte').val() !== "Aereo"){
                $('#salida_transporte').removeAttr('disabled');
                $('#nom_transporte').removeAttr('disabled');
                $('#salida_aerea').prop('disabled', 'disabled');
                $('#salida_aerea').prop('value', '');
            }else{
                $('#salida_transporte').prop('disabled', 'disabled');
                $('#salida_transporte').prop('value', '');
                $('#nom_transporte').prop('disabled', 'disabled');
                $('#nom_transporte').prop('value', '');
                $('#salida_aerea').removeAttr('disabled');
            }
        });

        $('#salida_transporte').change(function(){
            recargarTransporte();
        });

        $('#des_transporte').change(function(){
            recargarTransporte();
        });

        $('#nom_transporte').change(function(){
            recargarTransporteDestino();
        });

        $('#tour1').change(function(){
            recargarTourPrecio();
        });
        $('#tour2').change(function(){
            recargarTourPrecio();
        });
        $('#tour3').change(function(){
            recargarTourPrecio();
        });
        $('#tipo_comidas').change(function(){
            recargarComidas();
        });
        $('#carta_comidas').change(function(){
            recargarComidasPrecio();
            //alert($('#carta_comidas').val());
        });
    });
</script>
<script type="text/javascript">
    //Funciones de Hotel
    function recargarLista(){
        var lugar = $('#hotelesLugar').val();
        var clase = $('#hotelesClase').val();
        var tipo = $('#hotelesTipo').val();
        $.ajax({
            type:"POST",
            url :"Controllers/CotizarHotel.php",
            data:"lugar=" + lugar+"&clase=" + clase+"&tipo=" + tipo,
            success:function(r){
                $('#hotelesNombre').html(r);
            }
        });
        $.ajax({
            type:"POST",
            url :"Controllers/CotizarHotelPrecio.php",
            data:"lugar=" + lugar+"&clase=" + clase+"&tipo=" + tipo,
            success:function(r){
                $('#hotelesCosto').html(r);
            }
        });
    };

    //Funciones de Transorte
    function recargarTransporte(){
        var salida = $('#salida_transporte').val();
        //var nombre = $('#nom_transporte').val();
        var destino = $('#des_transporte').val();
        
        $.ajax({
            type:"POST",
            url :"Controllers/CotizadorTransporte.php",
            data:"salida=" + salida,
            success:function(r){
                $('#nom_transporte').html(r);
            }
        });
        $.ajax({
            type:"POST",
            url :"Controllers/CotizadorTransportePrecio.php",
            data:"destino=" + destino,
            success:function(r){
                $('#transporteCosto').html(r);
            }
        });
        
    };
    function recargarTransporteDestino(){
        var nombre = $('#nom_transporte').val();
        $.ajax({
            type:"POST",
            url :"Controllers/CotizadorTransporteDestino.php",
            data:"nombre=" + nombre,
            success:function(r){
                $('#desTransporte').html(r);
            }
        });
    };

    //Funciones de Tour
    function recargarTourPrecio(){
        var tour1 = $('#tour1').val();
        var tour2 = $('#tour2').val();
        var tour3 = $('#tour3').val();
        $.ajax({
            type:"POST",
            url :"Controllers/CotizarTourPrecio.php",
            data:"tour1=" + tour1+"&tour2=" + tour2+"&tour3=" + tour3,
            success:function(r){
                $('#costoTourUnidad').html(r);
            }
        });
    };

    //Funciones de Comidas
    function recargarComidas(){
        var tipo_comidas = $('#tipo_comidas').val();
        $.ajax({
            type:"POST",
            url :"Controllers/CotizarComidas.php",
            data:"tipo_comidas=" + tipo_comidas,
            success:function(r){
                $('#carta_comidas').html(r);
            }
        });
    };
    function recargarComidasPrecio(){
        var cartaComidas = $('#carta_comidas').val();
        //alert(carta_comidas);
        $.ajax({
            type:"POST",
            url :"Controllers/CotizarComidasPrecio.php",
            data:"carta_comidas=" + cartaComidas,
            success:function(r){
                $('#precioComidas').html(r);
            }
        });
    };



    function cal() {
        try {
            var a = parseInt(document.hospedajeForm.num1.value),
                b = parseInt(document.hospedajeForm.num2.value),
                c = parseInt(document.hospedajeForm.num3.value);

            var cantidadTransporte = parseInt(document.transporte.cantidadTransporte.value),
                prec_transporte = parseInt(document.transporte.prec_transporte.value);
            
            var cantidadComidas = parseInt(document.comidasForm.cantidadComidas.value),
                precio_comidas = parseInt(document.comidasForm.precio_comidas.value),
                diasComidas = parseInt(document.comidasForm.diasComidas.value);

            //var dias_tour = parseInt(document.tourform.dias_tour.value),
                //valorTour = parseInt(document.tourform.valorTour.value);
            
            //Hoteles
            document.hospedajeForm.sum.value = b * (document.hospedajeForm.unidad.value = c * a),
            document.hospedajeForm.unidad.value = c * a;
            
            //Transporte
            document.transporte.totalTransporte.value = cantidadTransporte * prec_transporte;

            //Tour
            //document.tourform.diasCostoTour.value = dias_tour * valorTour;
            //document.tourform.unidad.value = c * a;

            //Comidas
            document.comidasForm.total_comidas.value = (cantidadComidas * precio_comidas) * diasComidas;
            
        } catch (e) {
            alert(e);
        }
    }
</script>
    </body>
</html>
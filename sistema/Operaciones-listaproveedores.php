<?php require_once("Operaciones-header.php");
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
                        <h4 class="page-title float-left">Lista Proveedores</h4>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Operaciones</a></li>
                                <li class="breadcrumb-item active">Administrar Carpeta</li>
                            </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        <!-- end row -->

        
        <div class="row"> <!--Hoteles y Transporte-->
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Hoteles</b></h4>
                    <p class="text-muted font-14 m-b-20">
                        Todos los Hoteles disponibles
                    </p>

                    <div class="table-responsive">
                        <table class="table m-0 table-colored table-custom table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Clase</th>
                                    <th>Tipo</th>
                                    <th>Lugar</th>
                                    <th>Precio</th>
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

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xnom_hostal </td>
                                                    <td>$xclase_hostal</td>
                                                    <td>$xtipo_hostal</td>
                                                    <td>$xlugar_hostal</td>
                                                    <td>$xprec_hostal</td>
                                                </tr>
                                            ";}?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="col-md-6">

                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Transporte</b></h4>
                    <p class="text-muted font-14 m-b-20">
                        Transportes disponibles
                    </p>

                    <div class="table-responsive">
                        <table class="table m-0 table-colored table-pink table-hover">
                        <thead>
                                <tr>
                                    <th>Empresa</th>    
                                    <th>Transporte</th>
                                    <th>Lugar</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?PHP while($fila=mysqli_fetch_array($resTransporte)){
                                        $xid_transporte = $fila["id_transporte"];
                                        $xnom_transporte = $fila["nom_transporte"];
                                        $xtipo_transporte = $fila["tipo_transporte"];
                                        $xdes_transporte = $fila["des_transporte"];
                                        $xprec_transporte = $fila["prec_transporte"];

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xnom_transporte</td>    
                                                    <td>$xtipo_transporte </td>
                                                    <td>$xdes_transporte</td>
                                                    <td>$xprec_transporte</td>
                                                </tr>
                                            ";}?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!--- end row -->

        <div class="row"> <!-- Comidas y Servicios Adicionales -->
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Comidas</b></h4>
                    <p class="text-muted font-14 m-b-20">
                        Todos los tipos de comidas disponibles
                    </p>

                    <div class="table-responsive">
                        <table class="table m-0 table-colored table-custom table-hover">
                        <thead>
                                <tr>
                                    <th>Comida</th>    
                                    <th>Carta</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?PHP while($fila=mysqli_fetch_array($resComidas)){
                                        $xid_comidas = $fila["id_comidas"];
                                        $xtipo_comidas = $fila["tipo_comidas"];
                                        $xcarta_comidas = $fila["carta_comidas"];
                                        $xprecio_comidas = $fila["precio_comidas"];

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xtipo_comidas</td>    
                                                    <td>$xcarta_comidas</td>
                                                    <td>$xprecio_comidas</td>
                                                </tr>
                                            ";}?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="col-md-6">

                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Servicios Adicionales</b></h4>
                    <p class="text-muted font-14 m-b-20">
                        Serviciones adicionales disponibles
                    </p>

                    <div class="table-responsive">
                        <table class="table m-0 table-colored table-pink table-hover">
                        <thead>
                                <tr>
                                    <th>Servicio</th>    
                                    <th>Categoria</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?PHP while($fila=mysqli_fetch_array($resServicioPlus)){
                                        $xid_serv_plus = $fila["id_serv_plus"];
                                        $xnom_serv_plus = $fila["nom_serv_plus"];
                                        $xtipo_serv_plus = $fila["tipo_serv_plus"];
                                        $xprecio_serv_plus = $fila["prec_serv_plus"];

                                            echo "
                                                <tr class='gradeX'>
                                                    <td>$xnom_serv_plus</td>    
                                                    <td>$xtipo_serv_plus</td>
                                                    <td>$xprecio_serv_plus</td>
                                                </tr>
                                            ";}?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!--- end row -->

    </div> <!-- content -->

    <footer class="footer text-right">2019 © Insizio</footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<?php require_once("Operaciones-footer.php");?>
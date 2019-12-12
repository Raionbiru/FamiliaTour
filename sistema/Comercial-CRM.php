<?php require_once("Comercial-header.php");

    require_once("funciones.php");
    $xc = conectar();

    $sqlPersona = "SELECT count(*)  FROM persona";
    $resPersona = mysqli_query($xc, $sqlPersona );    
    $filaPersona = mysqli_fetch_array($resPersona);
    $xcanPersona = $filaPersona[0];

    $sqlAgencia = "SELECT count(*)  FROM cliente";
    $resAgencia = mysqli_query($xc, $sqlAgencia);
    $filaAgencia = mysqli_fetch_array($resAgencia);
    $xcanAgencia = $filaAgencia[0];

    $sqlTour = "SELECT count(*)  FROM tour";
    $resTour = mysqli_query($xc, $sqlTour);
    $filaTour = mysqli_fetch_array($resTour);
    $xcanTour= $filaTour[0];

    $sqlBus = "SELECT count(*)  FROM bus";
    $resBus = mysqli_query($xc, $sqlBus);
    $filaBus = mysqli_fetch_array($resBus);
    $xcanBus = $filaBus[0];


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
                        <h4 class="page-title float-left">CRM</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Comercial</a></li>
                            <li class="breadcrumb-item active">CRM</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-box-three">
                        <div class="bg-icon pull-left">
                            <img class="" src="assets/images/icons/clock.svg" title="clock.svg">
                        </div>
                        <div class="text-right">
                            <p class="m-t-5 text-uppercase font-14 font-600">Agencias</p>
                            <h2 class="m-b-10"><span data-plugin="counterup"> <?PHP echo $xcanAgencia;?> </span></h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-box-three">
                        <div class="bg-icon pull-left">
                            <img src="assets/images/icons/advertising1.svg" title="advertising.svg">
                        </div>
                        <div class="text-right">
                            <p class="m-t-5 text-uppercase font-14 font-600">Personal</p>
                            <h2 class="m-b-10"><span data-plugin="counterup"> <?PHP echo $xcanPersona;?> </span></h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-box-three">
                        <div class="bg-icon pull-left">
                            <img src="assets/images/icons/paid.svg" title="paid.svg">
                        </div>
                        <div class="text-right">
                            <p class="m-t-5 text-uppercase font-14 font-600">Tours</p>
                            <h2 class="m-b-10"><span data-plugin="counterup"> <?PHP echo $xcanTour;?>  </span></h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-box-three">
                        <div class="bg-icon pull-left">
                            <img src="assets/images/icons/timeline.svg" title="timeline.svg">
                        </div>
                        <div class="text-right">
                            <p class="m-t-5 text-uppercase font-14 font-600">Buses</p>
                            <h2 class="m-b-10"><span data-plugin="counterup"> <?PHP echo $xcanBus;?> </span></h2>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Programa</b></h4>
                        <div class="row">
                            <div class="col-sm-6"><br>
                                <h5 class="m-t-0 header-title"><?php echo"Mes. ".date("F"). " del " . date("Y");?></h5>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="m-t-2 header-title">Objetivo Mensual</h5> <input type="example-input-small" class="form-control input-sm" type="text" name="form-control input-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-sm-6">
                    <div class="card-box">

                        <h4 class="m-t-0 header-title"><b>Semanas</b></h4>
                        <p class="text-muted font-14">
                        </p>

                        <table class="tablesaw table m-b-0" data-tablesaw-mode="swipe">
                            <thead>
                            <tr>
                                <th class="title" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Semanas</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Objetivos Semanales</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <form method="POST" action="Comercial-semana.php">
                                        <input type="hidden" value="Prueba" name="uno" id="uno">
                                        <button class="btn btn-purple btn-bordered waves-effect w-md waves-light" type="submit">SEMANA</button> <br/>
                                    </form>
                                    Del 01/10 Al 07/10
                                </td>
                                <td>
                                    <textarea name="" id="textarea" rows="3" class="form-control" placeholder=""></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-purple btn-bordered waves-effect w-md waves-light" type="button">SEMANA</button> <br/>
                                    Del 08/10 Al 15/10
                                </td>
                                <td><textarea name="" id="textarea" rows="3" class="form-control" placeholder=""></textarea></td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-purple btn-bordered waves-effect w-md waves-light" type="button">SEMANA</button> <br/>
                                    Del 16/10 Al 24/10
                                </td>
                                <td><textarea name="" id="textarea" rows="3" class="form-control" placeholder=""></textarea></td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-purple btn-bordered waves-effect w-md waves-light" type="button">SEMANA</button> <br/>
                                    Del 25/10 Al 31/10
                                </td>
                                <td><textarea name="" id="textarea" rows="3" class="form-control" placeholder=""></textarea></td>
                            </tr>                          
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card-box">

                        <h4 class="m-t-0 header-title"><b>Datos adicionales</b></h4>
                        <p class="text-muted font-14">
                        </p>

                        <table class="tablesaw table m-b-0" data-tablesaw-mode="swipe" id="table-2555   ">
                            <thead>
                            <tr>
                                <th class="title" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist"># Visitas</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Presentación</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Contratos</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Monto</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Avatar</td>
                                <td>1</td>
                                <td>2009</td>
                                <td>83%</td>
                                <td>$2.7B</td>
                            </tr>
                            <tr>
                                <td>Titanic</td>
                                <td>2</td>
                                <td>1997</td>
                                <td>88%</td>
                                <td>$2.1B</td>
                            </tr>                            
                            </tbody>
                        </table>
                    </div>
                </div>
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
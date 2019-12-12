<?php require_once("Comercial-header.php");

    require_once("funciones.php");
    $xid = leerParam("id","");
    $xtipo = leerParam("tipo","");

    $xc = conectar();

    $sqlTour = "SELECT * FROM tour WHERE id_tour = '$xid'";
    $resTour = mysqli_query($xc,$sqlTour);
    $filaTour=mysqli_fetch_array($resTour);

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
                                <h4 class='m-t-0 header-title'><b>Editar Tour</b></h4>
                                <p class='text-muted m-b-30 font-14'></p>
                            </div>
                        </div><!-- end row -->
                
                        <div class='row'>
                            <div class='col-12'>
                                <div class='p-20'>
                                    <form class='form-horizontal' role='form' method='POST' action='Comercial-tourGrabar.php'>
                                        <input hidden='YES' name='id' value="<?PHP echo $xid;?>">
                                        <input hidden='YES' name='accion' value='editar'>

                                        <div class='row'>
                                            <div class='col-6'>

                                                <div class='form-group row'>
                                                <label class='col-2 col-form-label'>Nombre</label>
                                                    <div class='col-10'>
                                                        <input type='text' class='form-control' placeholder='Precio de tour' id='nom_tour' name='nom_tour' value="<?PHP echo $filaTour['nom_tour']; ?>" maxlength="100">
                                                    </div>
                                                </div>

                                                <div class='form-group row'>
                                                <label class='col-2 col-form-label'>Precio</label>
                                                    <div class='col-10'>
                                                        <input type='text' class='form-control' placeholder='Precio de tour' id='prec_tour' name='prec_tour' value="<?PHP echo $filaTour['prec_tour']; ?>" maxlength='9' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class='col-6'>
                                                
                                                <div class='form-group row'>
                                                <label class='col-2 col-form-label'>Descripición</label>
                                                    <div class='col-10'>
                                                        <textarea class="form-control" name="descp_tour" id="descp_tour"  rows="5" placeholder="Descripción del Tour" value="<?PHP echo $filaTour['descp_tour']; ?>" maxlength="150"></textarea>
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

    <footer class="footer text-right">
        2019 © INSIZIO
    </footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<?php require_once("Comercial-footer.php");?>
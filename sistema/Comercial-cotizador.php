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
                        <h4 class="page-title float-left">Cotizador</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Comercial</a></li>
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
                    <h4 class="m-t-0 header-title"><b>Cotizador</b></h4>
                                    <p class="text-muted m-b-30 font-14">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, asperiores ratione. Incidunt est voluptatum non, numquam dolores natus optio commodi vitae provident ab inventore at dolore illum perspiciatis amet, laborum officia aliquid iste. Quod, eaque! Animi, iusto dicta. Laboriosam, nihil?
                                    </p>
                        <form class="form-horizontal" method="POST" action="#">

                            <input hidden="YES" name="accion" value="crear">

                            <div class="row m-t-20">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-2 col-form-label">Nombres</label>
                                        <input type="text" name="nom_tour" id="nom_tour" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="col-2 col-form-label">Email</label>
                                        <input type="email"  name="nom_tour" id="nom_tour" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="col-2 col-form-label">Celular</label>
                                        <input type="text"  name="nom_tour" id="nom_tour" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-2 col-form-label">País</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Perú</option>
                                            <option value="">Argentina</option>
                                            <option value="">Brazil</option>
                                            <option value="">Paraguay</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Fecha de Viaje</label>
                                        <input type="text"  name="daterange" id="" class="form-control input-daterange-datepicker">
                                    </div>

                                    <div class="form-group">
                                        <label class="col-2 col-form-label">N° Persona</label>
                                        <input type="text"  name="nom_tour" id="nom_tour" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Categotia Hotel</label>
                                        <select name="" id="" class="form-control">
                                                <option value="">Hotel Una Estrella</option>
                                                <option value="">Hotel Dos Estrella</option>
                                                <option value="">Hotel Tres Estrella</option>
                                                <option value="">Hotel Cuatro Estrella</option>
                                                <option value="">Hotel Cinco Estrella</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-2 col-form-label">Colsulta</label>
                                        <textarea class="form-control" name="descp_tour" id="descp_tour"  rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right">Enviar Consulta</button>
                        </form>
                    </div>
                </div> <!-- end col -->
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
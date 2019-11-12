
<?php require_once("Comercial-header.php");
require_once("funciones.php");
$xc = conectar();


$sql = "SELECT t.nom_tour, t.descp_tour, t.prec_tour
        FROM tour t";
$res = mysqli_query($xc,$sql);
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
                                    <h4 class="page-title float-left">Añadir Tour</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                                        <li class="breadcrumb-item"><a href="#">Comercial</a></li>
                                        <li class="breadcrumb-item"><a href="Comercial-subirtours.php">Tours</a></li>
                                        <li class="breadcrumb-item active">Nuevo Tour</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                <button onclick="window.location.href='Comercial-inserttour.php'" type="button" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right">Guardar</button>
                                    <h4 class="m-t-0 header-title"><b>Ingrese Tour</b></h4>
                                    <p class="text-muted m-b-30 font-14">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ut modi deleniti quibusdam commodi maxime, obcaecati officiis iste eos nemo corporis suscipit quae expedita earum repellat, eum natus nesciunt, tempore nam quas minima optio similique quia. Quas quae, aliquid eius voluptates repudiandae ad officia, ullam repellat tenetur neque, deserunt totam!
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Tour</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" placeholder="Nombre de Tour">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Descripción Tour</label>
                                                        <div class="col-10">
                                                            <textarea class="form-control" rows="5" placeholder="Descripción del Tour"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-3 col-form-label">Imagen</label>
                                                        <div class="col-9">
                                                            <div class="fileupload fileupload-new" data-provides="fileupload">

                                                                
                                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                                    <img src="assets/images/small/img-1.jpg" alt="image" width="200px" />
                                                                </div>
                                                                
                                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                                <div>
                                                                    <button type="button" class="btn btn-secondary btn-file">
                                                                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                                        <input type="file" class="btn-secondary" />
                                                                    </button>
                                                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                                </div>


                                                            </div>
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
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2017 © Adminox. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
<?php require_once("Comercial-footer.php");?>
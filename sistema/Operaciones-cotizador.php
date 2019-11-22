<?php require_once("Operaciones-header.php");
      require_once("funciones.php");

      $xc = conectar();
      $sql = "SELECT nom_tour,prec_tour, id_tour
              FROM tour";  
      
      $res = mysqli_query($xc,$sql);

      $sql2 = "SELECT nom_tour,prec_tour, id_tour
              FROM tour";  
      
      $res2 = mysqli_query($xc,$sql2);

      $sql3 = "SELECT nom_produc,prec_produc, id_produc
              FROM producto";  
      
      $res3 = mysqli_query($xc,$sql3);

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
                        <h4 class="page-title float-left">Cotizador</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Operaciones</a></li>
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

                        <ul class="nav nav-pills navtab-bg nav-justified">
                            <li class="nav-item">
                                <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    Hospedaje
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#profile1" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                    Transportes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    Tours
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#settings1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    Guias
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="home1">
                        
                            </div>

                            <div class="tab-pane fade show active" id="profile1">
                                <div class="form-group row">
                                    
                                    <div class="col-2 col-form-label">
                                        <label class="col-2 col-form-label">
                                            Producto
                                        </label>
                                    </div>

                                    <div class="col-10">
                                    <form method="post" action="#">

                                        <select class="form-control" name="select1" onchange="this.nextElementSibling.style.display='block'">
                                            <option value=""></option>
                                            <?php while ($fila=mysqli_fetch_array($res3)){
                                                            $xnom_produc = $fila["nom_produc"];
                                                            $xid_produc = $fila["id_produc"];
                                                            echo "<option value='select1$xid_produc'>$xnom_produc</option>";
                                                        } ?>
                                        </select>



                                        <select class="form-control" name="select2" onchange="this.nextElementSibling.style.display='block'" style="display: none">
                                            <option value=""></option>
                                            
                                            <?php while ($fila=mysqli_fetch_array($res3)){
                                                            $xprec_tour = $fila["prec_tour"];
                                                            $xid_tour = $fila["id_tour"];
                                                            echo "<option>$xprec_tour</option>";
                                                        } 
                                            ?>
                                            <option value="">3</option>
                                        </select>

                                        <select class="form-control" name="selectN" onchange="this.nextElementSibling.style.display='block'" style="display: none">
                                            <option value=""></option>
                                            <option value="selectNOption1">1</option>
                                            <option value="selectNOption2">2</option>
                                            <option value="selectNOption3">3</option>
                                        </select>
                                    </form>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="messages1">
                                
                                <div class="form-group row">
                                    <div class="col-2 col-form-label">
                                    <label class="col-2 col-form-label">
                                        Tour
                                    </label>
                                    </div>

                                    <div class="col-10">
                                    <form method="post" action="#">

                                        <select class="form-control" name="select1" onchange="this.nextElementSibling.style.display='block'">
                                            <option value=""></option>
                                            <?php while ($fila=mysqli_fetch_array($res)){
                                                            $xnom_tour = $fila["nom_tour"];
                                                            $xid_tour = $fila["id_tour"];
                                                            echo "<option value='select1$xid_tour'>$xnom_tour</option>";
                                                        } ?>
                                        </select>



                                        <select class="form-control" name="select2" onchange="this.nextElementSibling.style.display='block'" style="display: none">
                                            <option>Seleccione número de personas</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>

                                        <select class="form-control" name="selectN" onchange="this.nextElementSibling.style.display='block'" style="display: none">
                                            <option value=""></option>
                                            <option value="selectNOption1">1</option>
                                            <option value="selectNOption2">2</option>
                                            <option value="selectNOption3">3</option>
                                        </select>
                                    </form>
                                    </div>

                                </div>   

                            </div>
                            <div class="tab-pane fade" id="settings1">
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
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->
    </div> <!-- content -->
    <footer class="footer text-right">2019 © Insizio</footer>
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

        <!-- plugin js -->
        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="../plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Init js -->
        <script src="assets/pages/jquery.form-pickers.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
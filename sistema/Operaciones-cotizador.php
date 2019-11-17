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
                        
                            
                                <!-- Basic Form Wizard -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-box">
                                            <form id="default-wizard">
                                                <fieldset title="1">
                                                    <legend>Información Basica</legend>

                                                    <div class="row m-t-20">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="firstname">First Name</label>
                                                                <input type="text" class="form-control" id="firstname" placeholder="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="username">User Name</label>
                                                                <input type="text" class="form-control" id="username" placeholder="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="password" class="form-control" id="password" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="lastname">Last Name</label>
                                                                <input type="text" class="form-control" id="lastname" placeholder="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="emailaddress">Email Address</label>
                                                                <input type="email" class="form-control" id="emailaddress" placeholder="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="password1">Confirm Password</label>
                                                                <input type="password" class="form-control" id="password1" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </fieldset>

                                                <fieldset title="2">
                                                    <legend>About you</legend>

                                                    <div class="row m-t-20">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="phonenumber">Phone Number</label>
                                                                <input type="text" class="form-control" id="phonenumber" placeholder="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="address">Address</label>
                                                                <input type="text" class="form-control" id="address" placeholder="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="aboutme">About Me</label>
                                                                <textarea class="form-control" rows="5" id="aboutme"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="currentlocation">Current Location</label>
                                                                <input type="text" class="form-control" id="currentlocation" placeholder="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="username">Freelance</label>
                                                                <select class="form-control">
                                                                    <option>Available</option>
                                                                    <option>Unavailable</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <fieldset title="3">
                                                    <legend>Social Profiles</legend>

                                                    <div class="row m-t-20">
                                                        <div class="col-sm-6">

                                                            <div class="form-group">
                                                                <label>Facebook</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="mdi mdi-facebook"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Facebook url">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Linkdin</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="mdi mdi-linkedin"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Linkdin url">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Instagram</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="mdi mdi-instagram"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Instagram url">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Twitter</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="mdi mdi-twitter"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Twitter url">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Skype</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="mdi mdi-skype"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Skype url">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Pinterest</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="mdi mdi-pinterest"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Pinterest url">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <button type="submit" class="btn btn-primary stepy-finish">Submit</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <!-- End row -->


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
                                            <option value=""></option>
                                            
                                            <?php while ($fila=mysqli_fetch_array($res2)){
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
                            <div class="tab-pane fade" id="settings1">
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->
    </div> <!-- content -->
    <footer class="footer text-right">2019 © Insizio. - FamiliaTour.com</footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<?php require_once("Operaciones-footer.php");?>

        <!--Form Wizard-->
        <script src="../plugins/jquery.stepy/jquery.stepy.min.js" type="text/javascript"></script>
        <!--wizard initialization-->
        <script src="assets/pages/jquery.wizard-init.js" type="text/javascript"></script>
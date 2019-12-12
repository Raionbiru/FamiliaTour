<?php require_once("funciones.php");

$xc = conectar();
/*$sql = "SELECT * FROM sector";
$res = mysqli_query($xc,$sql);

$sql2 = "SELECT * FROM tipo_persona";
$res2 = mysqli_query($xc,$sql2);*/

$sql3 = "SELECT * FROM area";
$res3 = mysqli_query($xc,$sql3);
desconectar($xc);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Familia Tour</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="¡Los mejores tours a los mejores precios!" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">


                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="index.html" class="text-success">
                                                <span><img src="assets/images/transparent-logo2019.png" alt="" height="100"></span>
                                            </a>
                                        </h2>
                                        <center>
                                            <h4 class="text-uppercase font-bold m-b-5 m-t-50">Registrate</h4>
                                            <p class="m-b-0">Te damos la beinvenida a Familia Viajera Tours</p>
                                            <br>
                                        </center>
                                            <ul class="nav nav-pills navtab-bg nav-justified">
                                                <li class="nav-item">
                                                    <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                        Empresa
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                        Agencia
                                                    </a>
                                                </li>
                                            </ul>
                                        

                                    </div>
                                    
                                    <div class="account-content" id="uno">
                                        <div class="tab-content">

                                            <div class="tab-pane fade" id="home1">
                                                
                                                <!-- ===================== -->
                                                <!-- FORMULARIO DE EMPRESA -->
                                                <!-- ===================== -->

                                                <form class="form-horizontal" method="POST" action="registro-grabar.php">

                                                    <input hidden="YES" name="accion" value="crear">
                                                    <input hidden="YES" name="tipo" value="persona">
                                                    
                                                    <div class="form-group row m-b-20">
                                                        <div class="col-12">
                                                            <label for="emailaddress">Apellidos *</label>
                                                            <input class="form-control" type="text" name="ape_per" id="ape_per" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row m-b-20">
                                                        <div class="col-12">
                                                            <label for="emailaddress">Nombre *</label>
                                                            <input class="form-control" type="text" name="nom_per" id="nom_per" required="" placeholder="">
                                                        </div>
                                                    </div>

                                                    <input hidden="YES" name="estado_per" id="estado_per" value="0">

                                                    <div class="form-group row m-b-20">
                                                        <div class="col-12">
                                                            <label for="emailaddress">Celular *</label>
                                                            <input class="form-control" type="text" name="cel_per_per" id="cel_per_per" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row m-b-20">
                                                        <div class="col-12">
                                                            <label for="emailaddress">DNI *</label>
                                                            <input class="form-control" type="number" name="dni_per" id="dni_per" required="" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                        <div class="col-12">
                                                            <label for="emailaddress">Dirección *</label>
                                                            <input class="form-control" type="text" name="direc_per" id="direc_per" required="" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                        <div class="col-12">
                                                            <label>Área</label>
                                                                <select class="form-control" name="id_area">
                                                                    <option value="" selected>Seleccioné Área *</option> 
                                                                    <?php while ($fila=mysqli_fetch_array($res3)){
                                                                        $xid_area = $fila["id_area"];
                                                                        $xnom_area = $fila["nom_area"];
                                                                        if ($xnom_area !== "Administracion") {
                                                                            echo "<option value='$xid_area'>$xnom_area</option>";
                                                                        }
                                                                    } ?>
                                                                </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                        <div class="col-12">
                                                            <label for="emailaddress">Cargo *</label>
                                                            <input class="form-control" type="text" name="cargo_per" id="cargo_per" required="" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                        <div class="col-12">
                                                            <label for="emailaddress">Email *</label>
                                                            <input class="form-control" type="email" name="email_per_per" id="email_per_per" required="" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                        <div class="col-12">
                                                            <label for="emailaddress">Contraseña *</label>
                                                            <input class="form-control" type="password" name="pass_per" id="pass_per" required="pass_per" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                        <div class="col-12">
                                                        <label for="emailaddress">Adjuntar CV</label>
                                                        <input class="form-control" type="file" id="" name="archivo">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                    
                                                    <div class="col-7">
                                                    <div class="checkbox checkbox-success">
                                                        <input id="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            Acepto <a href="#">Terminos y Condiciones</a>
                                                        </label>
                                                    </div>
                                                    </div>

                                                    <div class="col-5">
                                                        <label for="remember">
                                                            ¿Ya tiene una cuenta? <br> <center><a href="login.php">Log In</a></center>
                                                        </label>
                                                    </div>
                                                    
                                                    </div>

                                                    <div class="form-group row text-center m-t-10">
                                                        <div class="col-12">
                                                            <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Registrate</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>


                                            <div class="tab-pane fade show active" id="profile">

                                                <!-- ===================== -->
                                                <!-- FORMULARIO DE AGENCIA -->
                                                <!-- ===================== -->

                                                <form class="form-horizontal" method="POST" action="registro-grabar.php">
                                                    
                                                    <input hidden="YES" name="accion" value="crear">
                                                    <input hidden="YES" name="tipo" value="agencia">

                                                    <div class="form-group row m-b-20">
                                                    <div class="col-12">
                                                    <label for="empr_cliente">Empresa *</label>
                                                    <input class="form-control" type="text" name="empr_cliente" id="empr_cliente" required="" maxlength="50" style="text-transform:uppercase;">
                                                    </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                    <div class="col-12">
                                                    <label for="ruc_empr_cliente">RUC</label>
                                                    <input class="form-control" type="text" name="ruc_empr_cliente" id="ruc_empr_cliente" maxlength="11" placeholder="Opcional">
                                                    </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                    <div class="col-12">
                                                    <label for="direc_cliente">Dirección</label>
                                                    <input class="form-control" type="text" name="direc_cliente" id="direc_cliente" maxlength="60" placeholder="Opcional">
                                                    </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                    <div class="col-12">
                                                    <label for="web_empr_cliente">Web</label>
                                                    <input class="form-control" type="url" name="web_empr_cliente" id="web_empr_cliente" placeholder="Opcional" maxlength="60">
                                                    </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                    <div class="col-12">
                                                    <label for="ape_cliente">Apellido *</label>
                                                    <input class="form-control" type="text" name="ape_cliente" id="ape_cliente" required="" maxlength="25">
                                                    </div>
                                                    </div>
                                                    
                                                    <div class="form-group row m-b-20">
                                                    <div class="col-12">
                                                    <label for="nom_cliente">Nombre *</label>
                                                    <input class="form-control" type="text" name="nom_cliente" id="nom_cliente" required="" maxlength="25">
                                                    </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                    <div class="col-12">
                                                    <label for="cel_cliente ">Celular *</label>
                                                    <input class="form-control" type="number" name="cel_cliente " id="cel_cliente " required="" maxlength="9">
                                                    </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                    <div class="col-12">
                                                    <label for="email_cliente">Email *</label>
                                                    <input class="form-control" type="email" name="email_cliente" id="email_cliente" required="" maxlength="50">
                                                    </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                    <div class="col-12">
                                                    <label for="pas_cliente">Contraseña *</label>
                                                    <input class="form-control" type="password" name="pas_cliente" id="pas_cliente" required="" maxlength="50">
                                                    </div>
                                                    </div>

                                                    <div class="form-group row m-b-20">
                                                    
                                                    <div class="col-7">
                                                    <div class="checkbox checkbox-success">
                                                        <input id="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            Acepto <a href="login.php">Terminos y Condiciones</a>
                                                        </label>
                                                    </div>
                                                    </div>

                                                    <div class="col-5">
                                                        <label for="remember">
                                                            ¿Ya tiene una cuenta? <br> <center><a href="login.php">Log In</a></center>
                                                        </label>
                                                    </div>

                                                    </div>

                                                    <div class="form-group row text-center m-t-10">
                                                    <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Registrarse</button>
                                                    </div>
                                                    </div>

                                                </form>
                                                
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- end card-box-->
                            </div>
                        </div>
                        <!-- end wrapper -->
                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <!-- Toastr js -->
        <script src="../plugins/jquery-toastr/jquery.toast.min.js" type="text/javascript"></script>
        <script src="assets/pages/jquery.toastr.js" type="text/javascript"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>

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
                                                <span><img src="assets/images/logo_dark.png" alt="" height="30"></span>
                                            </a>
                                        </h2>
                                        <h5 class="text-uppercase font-bold m-b-5 m-t-50">Registrate</h5>
                                        <p class="m-b-0">Selecciona tu sector</p>
                                            <!-- Form de usuarios-->
                                            <input type="radio" name="tipo_attach" onclick="toggle(this)" value="a"> Viajeros <br>
                                            <input type="radio" name="tipo_attach" onclick="toggle(this)" value="b" > Agencias <br>
                                            <input type="radio" name="tipo_attach" onclick="toggle(this)" value="c"> Otros
                                    </div>
                                    <!-- 
                                    <div class="account-content" id="uno" style="display:none">
                                        <form class="form-horizontal" action="#">

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="username">Full Name</label>
                                                    <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Email address</label>
                                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password">Password</label>
                                                    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">

                                                    <div class="checkbox checkbox-success">
                                                        <input id="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            I accept <a href="#">Terms and Conditions</a>
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Registrate</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>-->
                                    <div class="account-content" id="uno" style="display:none">

                                        <form class="form-horizontal" method="POST" action="registro-grabar.php">

                                        <input hidden="YES" name="accion" value="crear">
                                        <input hidden="YES" name="id_sector" id="id_sector" value="2">
                                        <input hidden="YES" name="id_tipo_per" id="id_tipo_per" value="2">

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="username">Empresa</label>
                                                    <input class="form-control" type="text" id="" required=""  name="" id="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">RUC</label>
                                                    <input class="form-control" type="text" name="" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Nombre</label>
                                                    <input class="form-control" type="text" name="nom_per" id="nom_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Apellidos</label>
                                                    <input class="form-control" type="text" name="ape_per" id="ape_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Dirección</label>
                                                    <input class="form-control" type="text" name="direc_per" id="direc_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Email</label>
                                                    <input class="form-control" type="email" name="email_per_per" id="email_per_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Usuario</label>
                                                    <input class="form-control" type="text" name="log_per" id="log_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Contraseña</label>
                                                    <input class="form-control" type="password" name="pass_per" id="pass_per" required="pass_per" placeholder="">
                                                </div>
                                            </div>

                                            <input hidden="YES" name="estado_per" id="estado_per" value="0">

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Celular</label>
                                                    <input class="form-control" type="text" name="cel_per_per" id="cel_per_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Página Web</label>
                                                    <input class="form-control" type="text" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">

                                                    <div class="checkbox checkbox-success">
                                                        <input id="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            I accept <a href="#">Terms and Conditions</a>
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Registrate</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>

<!-- Segundo Formulario -->
                                    <div class="account-content" id="dos" style="display:none">

                                        <form class="form-horizontal" method="POST" action="registro-grabar.php">

                                            <input hidden="YES" name="accion" value="crear">
                                            <input hidden="YES" name="id_sector" id="id_sector" value="1">
                                            <input hidden="YES" name="id_tipo_per" id="id_tipo_per" value="2">

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="username">Empresa</label>
                                                    <input class="form-control" type="text" name="" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">RUC</label>
                                                    <input class="form-control" type="text" name="" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password">Area</label>
                                                    <select name="id_area">
                                                        <option value="" selected>Select</option> 
                                                        <?php while ($fila=mysqli_fetch_array($res3)){
                                                            $xid_area = $fila["id_area"];
                                                            $xnom_area = $fila["nom_area"];
                                                            echo "<option value='$xid_area'>$xnom_area</option>";
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Cargo</label>
                                                    <input class="form-control" type="text" name="cargo_per" id="cargo_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Nacionalidad</label>
                                                    <input class="form-control" type="text" name="nac_per" id="nac_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">DNI</label>
                                                    <input class="form-control" type="number" name="dni_per" id="dni_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Nombre</label>
                                                    <input class="form-control" type="text" name="nom_per" id="nom_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Apellido</label>
                                                    <input class="form-control" type="text" name="ape_per" id="ape_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Usuario</label>
                                                    <input class="form-control" type="text" name="log_per" id="log_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Contraseña</label>
                                                    <input class="form-control" type="password" name="pass_per" id="pass_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Dirección</label>
                                                    <input class="form-control" type="text" name="direc_per" id="direc_per" required="" placeholder="">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Email Corporativo</label>
                                                    <input class="form-control" type="email" name="email_corp_per" id="email_corp_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Email Personal</label>
                                                    <input class="form-control" type="email" name="email_per_per" id="email_per_per" required="" placeholder="">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Celular Corporativo</label>
                                                    <input class="form-control" type="number" name="cel_corp_per" id="cel_corp_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Celular Personal</label>
                                                    <input class="form-control" type="number" name="cel_per_per" id="cel_per_per" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Adjuntar CV</label>
                                                    <input class="form-control" type="file" id="" required="" name="archivo">
                                                </div>
                                            </div>


                                            <div class="form-group row m-b-20">
                                                <div class="col-12">

                                                    <div class="checkbox checkbox-success">
                                                        <input id="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            I accept <a href="#">Terms and Conditions</a>
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Registrate</button>
                                                </div>
                                            </div>

                                        </form>
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

    <script type="text/javascript">
            function toggle(elemento) {
              if(elemento.value=="a") {
                  document.getElementById("uno").style.display = "none";
                  document.getElementById("dos").style.display = "none";
               }else{
                   if(elemento.value=="b"){
                       document.getElementById("uno").style.display = "block";
                       document.getElementById("dos").style.display = "none";
                   }else{
                       if(elemento.value=="c"){
                            document.getElementById("uno").style.display = "none";
                            document.getElementById("dos").style.display = "block";
                        }  
                    }
                }
            }
    </script>
<!-- END HOME -->
<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
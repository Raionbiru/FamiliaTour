<?php require_once("funciones.php");?>
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
                                        <form class="form-horizontal" action="#">

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="username">Empresa</label>
                                                    <input class="form-control" type="text" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">RUC</label>
                                                    <input class="form-control" type="text" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Nombres Completos</label>
                                                    <input class="form-control" type="text" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Dirección</label>
                                                    <input class="form-control" type="text" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Email</label>
                                                    <input class="form-control" type="email" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Contraseña</label>
                                                    <input class="form-control" type="password" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Celular</label>
                                                    <input class="form-control" type="text" id="" required="" placeholder="">
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


                                    <div class="account-content" id="dos" style="display:none">
                                        <form class="form-horizontal" action="#">

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="username">Empresa</label>
                                                    <input class="form-control" type="text" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">RUC</label>
                                                    <input class="form-control" type="text" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password">Area</label>
                                                    <select name="select">
                                                        <option value="value1" selected>Select</option> 
                                                        <option value="value2">Comercial</option>
                                                        <option value="value3">Operación</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Cargo</label>
                                                    <input class="form-control" type="text" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">NAC</label>
                                                    <input class="form-control" type="number" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">DNI</label>
                                                    <input class="form-control" type="number" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Nombres Completos</label>
                                                    <input class="form-control" type="text" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Dirección</label>
                                                    <input class="form-control" type="text" id="" required="" placeholder="">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Email Corporativo</label>
                                                    <input class="form-control" type="email" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Email Personal</label>
                                                    <input class="form-control" type="email" id="" required="" placeholder="">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Celular Corporativo</label>
                                                    <input class="form-control" type="number" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Celular Personal</label>
                                                    <input class="form-control" type="number" id="" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Celular Personal</label>
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
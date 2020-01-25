<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Familia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/ico.png">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        <script src="https://checkout.culqi.com/js/v3"></script>
    </head>

    <?php
    require_once("Comercial-nav.php");
    require_once("funciones.php");

    /* ==== Hostal ==== */
    $xhotelesNombre2 = leerParam("hotelesNombre2","");
    $xpersona_hostal = leerParam("persona_hostal","");
    $xcosto_unitario = leerParam("num1","");
    $xtotal_hostal = leerParam("sum","");
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
                                    <h4 class="page-title float-left">Reservar</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">FamiliaTour</a></li>
                                        <li class="breadcrumb-item"><a href="#">Comercial</a></li>
                                        <li class="breadcrumb-item active">Reservar</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <img src="assets/images/transparent-logo2019.png" alt="" height="80">
                                        </div>
                                        <div class="pull-right">
                                            <h3 class="m-0 hidden-print">Reserva</h3>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-6">
                                            <div class="pull-left m-t-30">
                                                <p><b>Hola</b></p>
                                                <p class="text-muted">Muchas gracias porque sigues comprando nuestros productos. Nuestra empresa promete ofrecerle productos de alta calidad, así como un excelente servicio al cliente para cada transacción.</p>
                                            </div>

                                        </div><!-- end col -->
                                        <div class="col-4 offset-2">
                                            <div class="m-t-30 pull-right">
                                                <p class="m-b-10"><small><strong>Fecha de orden: </strong></small> <?php echo $fechaActual = date('d-m-Y'); ?></p>
                                                <p class="m-b-10"><small><strong>Estado de orden: </strong></small> <span class="label label-warning">Pendiente</span></p>
                                                <p class="m-b-10"><small><strong>Número orden: </strong></small> #123456</p>
                                            </div>
                                        </div><!-- end col -->
                                    </div>
                                    <!-- end row -->
                                    <!--
                                    <div class="row m-t-30">
                                        <div class="col-6">
                                            <h5>Billing Address</h5>

                                            <address class="line-h-24">
                                                Stanley Jones<br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>

                                        </div>

                                        <div class="col-6">
                                            <h5>Shipping Address</h5>

                                            <address class="line-h-24">
                                                Stanley Jones<br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>

                                        </div>
                                    </div>-->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table m-t-30">
                                                    <thead>
                                                    <tr><th>#</th>
                                                        <th>Producto</th>
                                                        <th>Cantidad</th>
                                                        <th>Costo unitario</th>
                                                        <th class="text-right">Total</th>
                                                    </tr></thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <b>Hospedaje</b> <br/>
                                                            <?PHP echo $xhotelesNombre2; ?>
                                                        </td>
                                                        <td> <?PHP echo $xpersona_hostal;?> </td>
                                                        <td> <?PHP echo $xcosto_unitario;?> </td>
                                                        <td class="text-right"> <?PHP echo $xtotal_hostal;?> </td>
                                                    </tr>
                                                    <!--<tr>
                                                        <td>2</td>
                                                        <td>
                                                            <b>Warranty</b> <br/>
                                                            Two Year Extended Warranty -
                                                            Parts and Labor
                                                        </td>
                                                        <td>3</td>
                                                        <td>$499</td>
                                                        <td class="text-right">$1497</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <b>LED</b> <br/>
                                                            80cm (32) HD Ready LED TV
                                                        </td>
                                                        <td>2</td>
                                                        <td>$412</td>
                                                        <td class="text-right">$824</td>
                                                    </tr>-->

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="clearfix p-t-50">
                                                <h5 class="text-muted">Nota:</h5>

                                                <small>
                                                Todas las cuentas deben pagarse dentro de los 7 días posteriores a la recepción de la factura. A pagar con cheque o tarjeta de crédito o pago directo en línea. Si la cuenta no se paga dentro de los 7 días, los detalles de los créditos suministrados como confirmación del trabajo realizado se cobrarán a la tarifa acordada indicada anteriormente.

                                                </small>
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <div class="float-right">
                                                <p><b>Sub-total:</b> <?PHP echo "S/.".$xtotal_hostal.".00";?></p>
                                                <p><b>IVA (12.5):</b> S/.0.00</p>
                                                <h3><?PHP echo "S/.".$xtotal_hostal.".00";?></h3>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                   
                                    <div class="hidden-print m-t-30 m-b-30">
                                        <div class="text-right">
                                            <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print m-r-5"></i> Imprimir</a>
                                            <a href="Comercial-reservaEmail.php?email=johnn.condori@tecsup.edu.pe" class="btn btn-custom waves-effect waves-light">Reservar</a>

                                            <a href="#" class="btn btn-info waves-effect waves-light">Pagar</a>
                                            <input type="button" id="buyButton" value="COMPRAR" data-producto="Prueba Tour" data-precio="<?PHP echo $numeroConCeros;?>">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2019 © Familia
                </footer>

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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- Culqi -->
        
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

        <script>
            Culqi.publicKey = 'pk_test_gOsS7bN8Qomn75BT';

            var producto = "";
            var precio = "";
            $('#buyButton').on('click', function(e) {
                // Abre el formulario con la configuración en Culqi.settings
                producto = $(this).attr('data-producto');
                precio = $(this).attr('data-precio');
                
                Culqi.settings({
                    title: producto,
                    currency: 'PEN',
                    description: producto,
                    amount: precio
                });
                Culqi.open();
                e.preventDefault();
            });

            function culqi() {
                if (Culqi.token) { // ¡Objeto Token creado exitosamente!
                    var token = Culqi.token.id;
                    var email = Culqi.token.email;
                    var data = {producto:producto, precio:precio, token:token, email:email};
                    var url = "proceso.php";

                    $.post(url, data, function(res){
                        alert(res);
                    });
                } else { // ¡Hubo algún problema!
                    // Mostramos JSON de objeto error en consola
                    console.log(Culqi.error);
                    alert(Culqi.error.user_message);
                }
            };

        </script> 

       <!-- <script>
            Culqi.publicKey = 'pk_test_gOsS7bN8Qomn75BT';

            Culqi.settings({
                title: 'Culqi Store',
                currency: 'PEN',
                description: 'Polo/remera Culqi lover',
                amount: 3500
            });

            $('#buyButton').on('click', function(e) {
                // Abre el formulario con la configuración en Culqi.settings
                Culqi.open();
                e.preventDefault();
            });

            function culqi() {
                if (Culqi.token) { // ¡Objeto Token creado exitosamente!
                    var token = Culqi.token.id;
                    alert('Se ha creado un token:' + token);
                    //En esta linea de codigo debemos enviar el "Culqi.token.id"
                    //hacia tu servidor con Ajax
                } else { // ¡Hubo algún problema!
                    // Mostramos JSON de objeto error en consola
                    console.log(Culqi.error);
                    alert(Culqi.error.user_message);
                }
            };


        </script>-->


    </body>
</html>
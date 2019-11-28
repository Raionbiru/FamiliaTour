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

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Tabs Justified</h4>

                        <ul class="nav nav-pills navtab-bg nav-justified">
                            <li class="nav-item">
                                <a href="#Transporte" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                <i class="mdi mdi-bus"></i> <span>Transporte</span> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Hospedaje" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-hotel"></i> <span>Hospedaje</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Tours" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    Tours
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Alimentacion" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-food"></i> <span>Alimentacion</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#ServicioAdicional" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-library-plus"></i> <span>Servicios Adicionales</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Comidas" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-food-fork-drink"></i> <span>Comidas</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="Transporte">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Tipo de viaje</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Aereo</option>
                                                <option value="">Terreste</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Tipo de salida</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">----------</option>
                                                <option value="">Publico</option>
                                                <option value="">Privado</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                        
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Salida</label>
                                                <select name="" id="" class="form-control" disabled="">
                                                    <option value="">----------</option>
                                                    <option value="">Publico</option>
                                                    <option value="">Privado</option>
                                                </select>
                                            </div>
                                            </div>
                                            

                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Llegada</label>
                                                <select name="" id="" class="form-control" disabled="">
                                                    <option value="">----------</option>
                                                    <option value="">Publico</option>
                                                    <option value="">Privado</option>
                                                </select>
                                            </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Salida</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">MY TOURS PERU</option>
                                                <option value="">BUS CONCETTUR</option>
                                                <option value="">TRANSPORTES MOQUEGUA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Llegada</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">AREQUIPA - LIMA OW</option>
                                                <option value="">AREQUIPA PIURA RT</option>
                                                <option value="">AREQUIPA - LIMA - LA MERCED OW</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                        
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cantidad</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Costo por unidad</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Total costo</label>
                                                <input class="form-control" type="text" readonly="" value="15">
                                            </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="Hospedaje">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Número de Noches</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">1 Noche</option>
                                                <option value="">2 Noche</option>
                                                <option value="">3 Noche</option>
                                                <option value="">4 Noche</option>
                                                <option value="">5 Noche</option>
                                                <option value="">6 Noche</option>
                                                <option value="">7 Noche</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Lugar</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Lima</option>
                                                <option value="">Arequipa</option>
                                                <option value="">Cusco</option>
                                                <option value="">Puno</option>
                                                <option value="">Huancayo</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Hotel</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">El Ducado</option>
                                                <option value="">Hotel Melodia</option>
                                                <option value="">El Patio de Eliza</option>
                                                <option value="">La Campiña Hostal</option>
                                                <option value="">Hotal Villa Melgar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Tercero</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Economico</option>
                                                <option value="">Intermedio</option>
                                                <option value="">Superior</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Cuarto</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Simple</option>
                                                <option value="">Doble</option>
                                                <option value="">Triple</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                        
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Costo por unidad</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Total costo</label>
                                            <input class="form-control" type="text" readonly="" value="15">
                                        </div>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="Tours">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Días de viaje</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">1 Día</option>
                                                <option value="">2 Día</option>
                                                <option value="">3 Día</option>
                                                <option value="">4 Día</option>
                                                <option value="">5 Día</option>
                                                <option value="">6 Día</option>
                                                <option value="">7 Día</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Salida</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Arequipa</option>    
                                                <option value="">Lima</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Tour 1</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Colca full day</option>
                                                <option value="">Colca trekking 3D/2N</option>
                                                <option value="">City Tours peatonal (3hrs)  incluye santa catalina</option>
                                                <option value="">Conexión de Chivay a Puno con Paradas</option>
                                                <option value="">Climbing CHACHANI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Tour 2</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Colca full day</option>
                                                <option value="">Colca trekking 3D/2N</option>
                                                <option value="">City Tours peatonal (3hrs)  incluye santa catalina</option>
                                                <option value="">Conexión de Chivay a Puno con Paradas</option>
                                                <option value="">Climbing CHACHANI</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Tour 3</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Colca full day</option>
                                                <option value="">Colca trekking 3D/2N</option>
                                                <option value="">City Tours peatonal (3hrs)  incluye santa catalina</option>
                                                <option value="">Conexión de Chivay a Puno con Paradas</option>
                                                <option value="">Climbing CHACHANI</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                        
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Costo por unidad</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Total costo</label>
                                            <input class="form-control" type="text" readonly="" value="">
                                        </div>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="Alimentacion">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Días de viaje</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">1 Día</option>
                                                <option value="">2 Día</option>
                                                <option value="">3 Día</option>
                                                <option value="">4 Día</option>
                                                <option value="">5 Día</option>
                                                <option value="">6 Día</option>
                                                <option value="">7 Día</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Comida</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Manzana</option>
                                                <option value="">Pera</option>
                                                <option value="">Mandarina</option>
                                                <option value="">Fresa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Costo por unidad</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Total costo</label>
                                                <input class="form-control" type="text" readonly="" value="">
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="ServicioAdicional">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Días de viaje</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">1 Día</option>
                                                <option value="">2 Día</option>
                                                <option value="">3 Día</option>
                                                <option value="">4 Día</option>
                                                <option value="">5 Día</option>
                                                <option value="">6 Día</option>
                                                <option value="">7 Día</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Comida</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Manzana</option>
                                                <option value="">Pera</option>
                                                <option value="">Mandarina</option>
                                                <option value="">Fresa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Costo por unidad</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Total costo</label>
                                                <input class="form-control" type="text" readonly="" value="">
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Comidas">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Días de viaje</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">1 Día</option>
                                                <option value="">2 Día</option>
                                                <option value="">3 Día</option>
                                                <option value="">4 Día</option>
                                                <option value="">5 Día</option>
                                                <option value="">6 Día</option>
                                                <option value="">7 Día</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Comida</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Manzana</option>
                                                <option value="">Pera</option>
                                                <option value="">Mandarina</option>
                                                <option value="">Fresa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Costo por unidad</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Total costo</label>
                                                <input class="form-control" type="text" readonly="" value="">
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
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
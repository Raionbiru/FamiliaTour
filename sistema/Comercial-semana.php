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
                        <h4 class="page-title float-left">CRM</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Familia Tour</a></li>
                            <li class="breadcrumb-item"><a href="#">Comercial</a></li>
                            <li class="breadcrumb-item active">CRM</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            
            <?php
                require_once("funciones.php");
                $xuno = leerParam('uno','' );

                if ($xuno == "Prueba") {
                    echo"
                    <div class='row'>
                        <div class='col-sm-12'>
                            <div class='card-box'>
                                <h4 class='m-t-0 header-title'><b>SEMANA 1 DEL 01/10 AL 07/10</b></h4>
                                <p class='text-muted font-14'>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, vitae.
                                </p>

                                <table class='tablesaw table m-b-0' data-tablesaw-mode='swipe' id='table-2555   '>
                                    <thead>
                                    <tr>
                                        <th class='title' scope='col' data-tablesaw-sortable-col data-tablesaw-priority='persist'>Día y Fecha</th>
                                        <th scope='col' data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority='3'>Hora Ingreso</th>
                                        <th scope='col' data-tablesaw-sortable-col data-tablesaw-priority='2'>Hora Salida</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Avatar</td>
                                        <td>2009</td>
                                        <td>83%</td>
                                    </tr>
                                    <tr>
                                        <td>Titanic</td>
                                        <td>1997</td>
                                        <td>88%</td>
                                    </tr>                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-sm-8'>
                            <div class='card-box'>
                                <table class='tablesaw table m-b-0' data-tablesaw-mode='swipe' id='table-2555   '>
                                    <thead>
                                    <tr>
                                        <th class='title' scope='col' data-tablesaw-sortable-col data-tablesaw-priority='persist'># Cliente</th>
                                        <th scope='col' data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority='3'>Nombre Cliente</th>
                                        <th scope='col' data-tablesaw-sortable-col data-tablesaw-priority='2'>Tipo</th>
                                        <th scope='col' data-tablesaw-sortable-col data-tablesaw-priority='2'>Funcion</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Avatar</td>
                                        <td>2009</td>
                                        <td>83%</td>
                                        <td>1997</td>
                                    </tr>
                                    <tr>
                                        <td>Titanic</td>
                                        <td>1997</td>
                                        <td>88%</td>
                                        <td>2009</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class='col-sm-4'>
                            <div class='card-box'>
                                <h4 class='m-t-0 header-title'><b> Estado </b></h4>
                                <table class='tablesaw table m-b-0' data-tablesaw-mode='swipe' id='table-2555'>
                                    <thead>
                                    <tr>
                                        <th class='title' scope='col' data-tablesaw-sortable-col data-tablesaw-priority='persist'>Visita</th>
                                        <th scope='col' data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority='3'>Persona</th>
                                        <th scope='col' data-tablesaw-sortable-col data-tablesaw-priority='2'>Contrato</th>
                                        <th scope='col' data-tablesaw-sortable-col data-tablesaw-priority='2'>Estado</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary checkbox-single'>
                                            <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                            <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary checkbox-single'>
                                            <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                            <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary checkbox-single'>
                                            <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                            <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary checkbox-single'>
                                            <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                            <label></label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary checkbox-single'>
                                            <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                            <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary checkbox-single'>
                                            <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                            <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary checkbox-single'>
                                            <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                            <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary checkbox-single'>
                                            <input type='checkbox' id='singleCheckbox2' value='option2' checked>
                                            <label></label>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end row -->";
                        }
            ?>

        </div> <!-- container -->
    </div> <!-- content -->
    
    <footer class="footer text-right">2019 © INSIZIO</footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<?php require_once("Comercial-footer.php");?>

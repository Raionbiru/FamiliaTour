<?php
    require_once("../funciones.php");

    $xtour1 = leerParam("tour1","");
    $xtour2 = leerParam("tour2","");
    $xtour3 = leerParam("tour3","");
    
    $xc = conectar();
        $sql = "SELECT SUM(prec_tour) FROM tour WHERE (id_tour = '$xtour1') OR (id_tour = '$xtour2') OR (id_tour = '$xtour3')";

        $res = mysqli_query($xc,$sql);
        $fila = mysqli_fetch_array($res);
        $total = $fila[0];
        $html = "<label>Costo por unidad</label>
        <input class='form-control' type='hidden' value='$total' name='valorTour' onchange='cal()' onkeyup='cal()' readonly='readonly'/>
        <input class='form-control' type='text' value='0' name='diasCostoTour' readonly='readonly'/>";

        echo $html;
        desconectar($xc);

?>
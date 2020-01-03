<?php
    require_once("../funciones.php");

    $xlugar = leerParam("lugar","");
    $xclase = leerParam("clase","");
    $xtipo = leerParam("tipo","");
    
    $xc = conectar();
        $sql = "SELECT prec_hostal FROM hostal WHERE (id_hostal = '$xlugar') AND (clase_hostal = '$xclase') AND (tipo_hostal = '$xtipo')";
        $res = mysqli_query($xc,$sql);
        $fila = mysqli_fetch_array($res);
        $contenido = "<label>Costo por unidad</label>
        <input class='form-control' type='hidden' value = '$fila[prec_hostal]' name='num1' id='num1' onchange='cal()' onkeyup='cal()' readonly='readonly'/>
        <input class='form-control' type='text' value='0' name='unidad' readonly='readonly'/>
        ";

        echo $contenido;
        desconectar($xc);

?>
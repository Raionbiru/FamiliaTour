<?php
    require_once("../funciones.php");
    $xdestino = leerParam("destino","");
    //echo $xdestino;
    $xc = conectar();
    $sql = "SELECT prec_transporte FROM transporte WHERE id_transporte = '$xdestino'";
    $res = mysqli_query($xc,$sql);
    $fila = mysqli_fetch_array($res);

    $html2 = "<label>Costo por unidad</label><input class='form-control' type='text' value='$fila[prec_transporte]' name='prec_transporte' id='prec_transporte' onchange='cal()' onkeyup='cal()'/>";
    //$html = $fila['des_transporte'];

    echo $html2;
    desconectar($xc);

?>
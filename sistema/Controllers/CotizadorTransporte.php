<?php
    require_once("../funciones.php");
    
    $xsalida = leerParam("salida","");


    $xc = conectar();

    $sql = "SELECT nom_transporte,id_transporte FROM transporte WHERE salida_transporte = '$xsalida'";
    $res = mysqli_query($xc,$sql);

    $html = "";

    while($fila=mysqli_fetch_array($res)){
        $xnom_transporte = $fila["nom_transporte"];
        $xid_transporte = $fila["id_transporte"];
        //$html = $html.'<option value='.$xid_transporte.'>'.utf8_encode($xnom_transporte).'</option>';
        $html = $html.'<option value='.$xid_transporte.'>'.($xnom_transporte).'</option>';
    };

    echo $html;
    desconectar($xc);

?>
<?php
    require_once("../funciones.php");
    
    $xnombre = leerParam("nombre","");

    echo $xnombre;
    $xc = conectar();

    $sql = "SELECT des_transporte FROM transporte WHERE id_transporte = '$xnombre'";
    $res = mysqli_query($xc,$sql);
    $fila = mysqli_fetch_array($res);

    $html = "<label>Destino</label><input class='form-control' type='text' value='$fila[des_transporte]' />";

    echo $html;
    desconectar($xc);

?>
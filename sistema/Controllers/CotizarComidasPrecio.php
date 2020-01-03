<?php
    require_once("../funciones.php");

    $xcarta_comidas = leerParam("carta_comidas","");
    
    $xc = conectar();
        $sql = "SELECT precio_comidas FROM comidas WHERE id_comidas='$xcarta_comidas'";
        $res = mysqli_query($xc,$sql);
        $fila = mysqli_fetch_array($res);
        $html = "<label>Costo por unidad</label>
        <input class='form-control' type='text' value='$fila[0]' readonly='readonly' name='precio_comidas' id='precio_comidas' onchange='cal()' onkeyup='cal()' >";

        echo $html;
        desconectar($xc);

?>
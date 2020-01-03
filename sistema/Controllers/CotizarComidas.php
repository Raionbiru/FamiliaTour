<?php
    require_once("../funciones.php");
    
    $xtipo_comidas = leerParam("tipo_comidas","");

    //echo "<p>".$xtipo_comidas."</p>";
    $xc = conectar();

    $sql = "SELECT carta_comidas, id_comidas FROM comidas WHERE tipo_comidas='$xtipo_comidas'";
    $res = mysqli_query($xc,$sql);

    $cadena = "<option value=''>----------</option>";

    while($fila=mysqli_fetch_array($res)){
    $xcarta_comidas = $fila["carta_comidas"];
    $xid_comidas = $fila["id_comidas"];
    $cadena=$cadena.'<option value='.$xid_comidas.'>'.utf8_encode($xcarta_comidas).'</option>';
    };

    echo $cadena;
    desconectar($xc);
?>
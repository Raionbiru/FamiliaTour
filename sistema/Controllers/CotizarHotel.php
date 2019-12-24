<?php
    require_once("../funciones.php");
    
    $xlugar = leerParam("lugar","");
    $xclase = leerParam("clase","");
    $xtipo = leerParam("tipo","");


    $xc = conectar();

    $sql = "SELECT * FROM hostal WHERE (id_hostal = '$xlugar') AND (clase_hostal = '$xclase') AND (tipo_hostal = '$xtipo')";
    $res = mysqli_query($xc,$sql);

    $cadena = "<label>Hotel</label>
                <select name='hotelesNombre2' id='hotelesNombre2' class='form-control'>";

    while($fila=mysqli_fetch_array($res)){
        $xnom_hostal = $fila["nom_hostal"];
        $xid_hostal = $fila["id_hostal"];
        $cadena=$cadena.'<option value='.$xid_hostal.'>'.utf8_encode($xnom_hostal).'</option>';
    };

    echo $cadena."</select>";
    desconectar($xc);

?>